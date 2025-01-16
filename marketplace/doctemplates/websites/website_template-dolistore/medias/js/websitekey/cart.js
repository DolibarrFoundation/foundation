// Shopping Cart jQuery & AJAX

$(document).ready(function(){

    var cart_block = new HoverWatcher('#header .cart_block');
    var shopping_cart = new HoverWatcher('#header .shopping_cart');
    if ('ontouchstart' in document.documentElement) {
        $('.shopping_cart > a:first').on('click', function(e) {
            e.preventDefault();
        });
    }
    $(document).on('touchstart', '#header .shopping_cart a:first', function() {
        if ($(this).next('.cart_block:visible').length)
            $("#header .cart_block").stop(true, true).slideUp(100);
        else
            $("#header .cart_block").stop(true, true).slideDown(100);
        e.preventDefault();
        e.stopPropagation();
    });
    $("#header .shopping_cart a:first").hover(function() {
        $("#header .cart_block").stop(true, true).slideDown(100);
    }, function() {
        setTimeout(function() {
            if (!shopping_cart.isHoveringOver() && !cart_block.isHoveringOver())
                $("#header .cart_block").stop(true, true).slideUp(100);
        }, 200);
    });
    $("#header .cart_block").hover(function() {}, function() {
        setTimeout(function() {
            if (!shopping_cart.isHoveringOver())
                $("#header .cart_block").stop(true, true).slideUp(100);
        }, 200);
    });
    $(document).on('click', '#layer_cart .cross, #layer_cart .continue, .layer_cart_overlay', function(e) {
        e.preventDefault();
        $('.layer_cart_overlay').hide();
        $('#layer_cart').fadeOut('fast');
    });
    


    $(document).on('click', '.product_quantity_up', function(e) {
        e.preventDefault();
        fieldName = $(this).data('field-qty');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        
        if (!isNaN(currentVal)){
            $('input[name=' + fieldName + ']').val(currentVal + 1).trigger('keyup');
            var qtyProduct = currentVal + 1;
        }

        if($(this).data('ref')){
            var refProduct = $(this).data('ref');
            var thumbProduct = $("#product_img_"+refProduct).attr("src");
            var priceProduct = $("#product_price_"+refProduct).text();
            var formData = {
                product_quantity: qtyProduct,
                product_id: refProduct,
                product_thumb: thumbProduct,
                product_price: priceProduct
            };
            updateOrderTable(formData);
        }
    });

    $(document).on('click', '.product_quantity_down', function(e) {
        e.preventDefault();
        fieldName = $(this).data('field-qty');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        
        if (!isNaN(currentVal) && currentVal > 1){
            $('input[name=' + fieldName + ']').val(currentVal - 1).trigger('keyup');
            var qtyProduct = currentVal - 1;
        }else{
            $('input[name=' + fieldName + ']').val(1);
            var qtyProduct = 1;
        }
        if($(this).data('ref')){
            var refProduct = $(this).data('ref');
            var thumbProduct = $("#product_img_"+refProduct).attr("src");
            var priceProduct = $("#product_price_"+refProduct).text();
            var formData = {
                product_quantity: qtyProduct,
                product_id: refProduct,
                product_thumb: thumbProduct,
                product_price: priceProduct
            };
            updateOrderTable(formData);
        }
    });


    //$('.addtocart').submit(function(e){
    $(document).on('submit', '.addtocart', function(e) {
        var form_data = $(this).serialize();
        var button_content = $(this).find('button[type=submit]');
        button_content.html('<span>Adding...</span>'); //Loading button text
        $.ajax({ //make ajax request
            url: shopping_cart_url,
            type: "POST",
            dataType:"json", //expect json value from server
            data: form_data
        }).done(function(data){ //on Ajax success
            $('.ajax_cart_no_product').html(data.items); //total items in cart-info element
            $('.cart_block_list').load( shopping_cart_url, { load_cart : 1});

            $('.layer_cart_product').html(data.popup_product_html);
            $('.layer_cart_cart').load( shopping_cart_url, { load_popup_products_html : 1});

            $('.ajax_cart_quantity').html(data.items);
            if(data.items == 1){
                $('.ajax_cart_product_txt_s').addClass( "unvisible" );
            }else{
                $('.ajax_cart_product_txt').addClass( "unvisible" );
            }
            $('.ajax_block_products_total').html(data.items);
            var n = parseInt($(window).scrollTop()) + 'px';
            $('.layer_cart_overlay').css('width', '100%');
            $('.layer_cart_overlay').css('height', '100%');
            $('.layer_cart_overlay').show();
            $('#layer_cart').css({
                'top': n
            }).fadeIn('fast');
            $("#layer_cart").css("display", "block");

            button_content.html('<span>Add to Cart</span>'); //reset button text to original text
            if($('.shopping-cart-box').css('display') == 'block'){ //if cart box is still visible
                $('.cart-box').trigger( 'click' ); //trigger click to update the cart box.
            }
        })
        .fail(function() {
            alert( 'error' );
        });
        e.preventDefault();
    });


    //Remove items from cart
    $('body').on('click', '.ajax_cart_block_remove_link', function(e) {
        e.preventDefault();
        var pcode = $(this).attr('data-code'); //get product code
        $(this).parent().fadeOut(); //remove item element from box
        $.getJSON( shopping_cart_url, {remove_code : pcode} , function(data){ //get Item count from Server

            $('.ajax_cart_no_product').html(data.items);
            $('.ajax_cart_quantity').html(data.items);
            if(data.items == 1){
                $('.ajax_cart_product_txt_s').addClass( "unvisible" );
            }else{
                $('.ajax_cart_product_txt').addClass( "unvisible" );
            }
            $('.ajax_block_products_total').html(data.items);

            $('.cart_block_list').load( shopping_cart_url, { load_cart : 1});

            $('#product_'+ pcode).remove();
            calc_total();

        });
    });

});

function updateOrderTable(formData) {
    $(".cart_quantity").css("pointer-events","none");
    $.ajax({ //make ajax request
        url: shopping_cart_url,
        type: "POST",
        dataType:"json", //expect json value from server
        data: formData
    }).done(function(data){ //on Ajax success
        $('.ajax_cart_no_product').html(data.items); //total items in cart-info element
        $('.cart_block_list').load( shopping_cart_url, { load_cart : 1});

        $('.layer_cart_product').html(data.popup_product_html);
        $('.layer_cart_cart').load( shopping_cart_url, { load_popup_products_html : 1});

        $('.ajax_cart_quantity').html(data.items);
        if(data.items == 1){
            $('.ajax_cart_product_txt_s').addClass( "unvisible" );
        }else{
            $('.ajax_cart_product_txt').addClass( "unvisible" );
        }
        $('.ajax_block_products_total').html(data.items);

        var subtotal = parseFloat(formData.product_quantity) * parseFloat(formData.product_price.replace(',', '.'));

        $("#total_product_price_"+ formData.product_id).text(subtotal.toFixed(2));

        calc_total();

    })
    .fail(function() {
        alert( 'error' );
    });

    $(".cart_quantity").css("pointer-events","auto");
}

function calc_total(){
    var sum = 0;
    $(".total_line").each(function(){
      sum += parseFloat($(this).text());
    });
    $('#total_product').text(sum.toFixed(2));
    $('#total_price').text(sum.toFixed(2));
  }

function HoverWatcher(selector) {
    this.hovering = false;
    var self = this;
    this.isHoveringOver = function() {
        return self.hovering;
    }
    $(selector).hover(function() {
        self.hovering = true;
    }, function() {
        self.hovering = false;
    })
}

