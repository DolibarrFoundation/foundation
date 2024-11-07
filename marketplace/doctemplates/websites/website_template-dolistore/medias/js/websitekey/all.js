var responsiveflag = false;
$(document).ready(function() {
    highdpiInit();
    responsiveResize();
    $(window).resize(responsiveResize);
    if (navigator.userAgent.match(/Android/i)) {
        var viewport = document.querySelector('meta[name="viewport"]');
        viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
        window.scrollTo(0, 1);
    }
    blockHover();
    if (typeof quickView !== 'undefined' && quickView)
        quick_view();
    dropDown();
    
    if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product'])) {
        bindGrid();
        $(document).on('change', '.selectProductSort', function(e) {
            if (typeof request != 'undefined' && request)
                var requestSortProducts = request;
            var splitData = $(this).val().split(':');
            if (typeof requestSortProducts != 'undefined' && requestSortProducts){
                var newUrl = new URL(requestSortProducts);
                newUrl.searchParams.set('orderby', splitData[0]);
                newUrl.searchParams.set('orderway', splitData[1]);
                document.location.href = newUrl;
                //document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
            }
        });
        $(document).on('change', 'select[name="n"]', function() {
            var urlToPaginate = request;
            urlToPaginate = new URL(urlToPaginate);
            urlToPaginate.searchParams.set('n', $(this).val());
            document.location.href = urlToPaginate;
            //$(this.form).submit();
        });
        $(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function() {
            if (this.value != '')
                location.href = this.value;
        });
        $(document).on('change', 'select[name="currency_payement"]', function() {
            setCurrency($(this).val());
        });
        /*$(document).on('click', 'ul.pagination li a', function() {
            console.log($(this).text());
            var urlPagination = request;
            var newUrl = new URL(urlPagination);
            console.log(newUrl);
            newUrl.searchParams.set('p', $(this).text());
            console.log(newUrl);
            window.location.href = newUrl;
            return false;
        });*/
        $(document).on('click', 'ul.pagination li a', function(e) {
            e.preventDefault();

            var $this = $(this);
            var pageNo = null;

            if ($this.parent().hasClass('disabled')) {
                return false;
            }

            if ($this.parent().hasClass('pagination_previous')) {
                var href = $this.attr('href');
                if (href) {
                    var urlParams = new URLSearchParams(href);
                    pageNo = urlParams.get('p');
                }
            } 

            else if ($this.parent().hasClass('pagination_next')) {
                var href = $this.attr('href');
                if (href) {
                    var urlParams = new URLSearchParams(href);
                    pageNo = urlParams.get('p');
                }
            } 

            else {
                pageNo = $this.text();
            }
        
            if (pageNo) {
                var urlPagination = request;
                var newUrl = new URL(urlPagination);
                newUrl.searchParams.set('p', pageNo);
                window.location.href = newUrl;
            }
        
            return false;
        });        
        $(document).on('submit', '.showall', function() {
            var urlPagination = request;
            var newUrl = new URL(urlPagination);
            var n_value = $(".showall #nb_item").val();
            newUrl.searchParams.set('n', n_value);
            window.location.href = newUrl;
            return false;
        });
    }
    $(document).on('click', '.back', function(e) {
        e.preventDefault();
        history.back();
    });
    jQuery.curCSS = jQuery.css;
    if (!!$.prototype.cluetip)
        $('a.cluetip').cluetip({
            local: true,
            cursor: 'pointer',
            dropShadow: false,
            dropShadowSteps: 0,
            showTitle: false,
            tracking: true,
            sticky: false,
            mouseOutClose: true,
            fx: {
                open: 'fadeIn',
                openSpeed: 'fast'
            }
        }).css('opacity', 0.8);
    if (!!$.prototype.fancybox)
        $.extend($.fancybox.defaults.tpl, {
            closeBtn: '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
            next: '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
            prev: '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
        });
});

function highdpiInit() {
    if ($('.replace-2x').css('font-size') == "1px") {
        var els = $("img.replace-2x").get();
        for (var i = 0; i < els.length; i++) {
            src = els[i].src;
            extension = src.substr((src.lastIndexOf('.') + 1));
            src = src.replace("." + extension, "2x." + extension);
            var img = new Image();
            img.src = src;
            img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
        }
    }
}

function scrollCompensate() {
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";
    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild(inner);
    document.body.appendChild(outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;
    document.body.removeChild(outer);
    return (w1 - w2);
}

function responsiveResize() {
    compensante = scrollCompensate();
    if (($(window).width() + scrollCompensate()) <= 767 && responsiveflag == false) {
        accordion('enable');
        accordionFooter('enable');
        responsiveflag = true;
    } else if (($(window).width() + scrollCompensate()) >= 768) {
        accordion('disable');
        accordionFooter('disable');
        responsiveflag = false;
    }
    if (typeof page_name != 'undefined' && in_array(page_name, ['category']))
        resizeCatimg();
}

function blockHover(status) {
    $(document).off('mouseenter').on('mouseenter', '.product_list.grid li.ajax_block_product .product-container', function(e) {
        if ($('body').find('.container').width() == 1170) {
            var pcHeight = $(this).parent().outerHeight();
            var pcPHeight = $(this).parent().find('.button-container').outerHeight()/* + $(this).parent().find('.comments_note').outerHeight() + $(this).parent().find('.functional-buttons').outerHeight()*/;
            //alert($(this).parent().find('.button-container').outerHeight());
            $(this).parent().addClass('hovered').css({
                'height': pcHeight + pcPHeight,
                'margin-bottom': pcPHeight * (-1)
            });
        }
    });
    $(document).off('mouseleave').on('mouseleave', '.product_list.grid li.ajax_block_product .product-container', function(e) {
        if ($('body').find('.container').width() == 1170)
            $(this).parent().removeClass('hovered').css({
                'height': 'auto',
                'margin-bottom': '0'
            });
    });
}

function quick_view() {
    $(document).on('click', '.quick-view:visible, .quick-view-mobile:visible', function(e) {
        e.preventDefault();
        var url = this.rel;
        if (url.indexOf('?') != -1)
            url += '&';
        else
            url += '?';
        if (!!$.prototype.fancybox)
            $.fancybox({
                'padding': 0,
                'width': 1087,
                'height': 610,
                'type': 'iframe',
                'href': url + 'content_only=1'
            });
    });
}

function bindGrid() {
    var view = display;
    if (!view && (typeof displayList != 'undefined') && displayList)
        view = 'list';
    if (view && view != 'grid')
        Display(view);
    else
        $('.display').find('li#grid').addClass('selected');
    
    // Unbind and re-bind events to avoid duplicate listeners
    $('.display').off('click', '#grid').on('click', '#grid', function(e) {
        e.preventDefault();
        Display('grid');
    });
    $('.display').off('click', '#list').on('click', '#list', function(e) {
        e.preventDefault();
        Display('list');
    });
}

function Display(view) {
    if (view == 'list') {
        $('ul.product_list').removeClass('grid').addClass('list row');
        $('.product_list > li').removeClass('col-xs-12 col-sm-6 col-sm-4 col-md-3').addClass('col-xs-12');
        $('.product_list > li').each(function(index, element) {
            html = '';
            html = '<div class="product-container"><div class="row">';
            html += '<div class="left-block col-xs-4 col-xs-5 col-md-4">' + $(element).find('.left-block').html() + '</div>';
            html += '<div class="center-block col-xs-4 col-xs-7 col-md-4">';
            html += '<div class="product-flags">' + $(element).find('.product-flags').html() + '</div>';
            html += '<h5 itemprop="name">' + $(element).find('h5').html() + '</h5>';
            var rating = $(element).find('.comments_note').html();
            if (rating != null) {
                html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">' + rating + '</div>';
            }
            html += '<p class="product-desc">' + $(element).find('.product-desc').html() + '</p>';
            var colorList = $(element).find('.color-list-container').html();
            if (colorList != null) {
                html += '<div class="color-list-container">' + colorList + '</div>';
            }
            var availability = $(element).find('.availability').html();
            if (availability != null) {
                html += '<span class="availability">' + availability + '</span>';
            }
            html += '</div>';
            html += '<div class="right-block col-xs-4 col-xs-12 col-md-4"><div class="right-block-content row">';
            var price = $(element).find('.content_price').html();
            if (price != null) {
                html += '<div class="content_price col-xs-5 col-md-12">' + price + '</div>';
            }
            html += '<div class="button-container col-xs-7 col-md-12">' + $(element).find('.button-container').html() + '</div>';
            html += '<div class="functional-buttons clearfix col-sm-12">' + $(element).find('.functional-buttons').html() + '</div>';
            html += '</div>';
            html += '</div></div>';
            $(element).html(html);
        });
        $('.display').find('li#list').addClass('selected');
        $('.display').find('li#grid').removeAttr('class');
        //$.totalStorage('display', 'list');
    } else {
        $('ul.product_list').removeClass('list').addClass('grid row');
        $('.product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-3');
        $('.product_list > li').each(function(index, element) {
            html = '';
            html += '<div class="product-container">';
            html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
            html += '<div class="right-block">';
            html += '<div class="product-flags">' + $(element).find('.product-flags').html() + '</div>';
            html += '<h5 class ="list-grid-product-title" itemprop="name">' + $(element).find('h5').html() + '</h5>';
            var rating = $(element).find('.comments_note').html();
            if (rating != null) {
                html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">' + rating + '</div>';
            }
            html += '<p itemprop="description" class="product-desc">' + $(element).find('.product-desc').html() + '</p>';
            var price = $(element).find('.content_price').html();
            if (price != null) {
                html += '<div class="content_price">' + price + '</div>';
            }
            html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">' + $(element).find('.button-container').html() + '</div>';
            var colorList = $(element).find('.color-list-container').html();
            if (colorList != null) {
                html += '<div class="color-list-container">' + colorList + '</div>';
            }
            var availability = $(element).find('.availability').html();
            if (availability != null) {
                html += '<span class="availability">' + availability + '</span>';
            }
            html += '</div>';
            html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
            html += '</div>';
            $(element).html(html);
        });
        $('.display').find('li#grid').addClass('selected');
        $('.display').find('li#list').removeAttr('class');
        //$.totalStorage('display', 'grid');
        var display = 'grid';
    }
}

function dropDown() {
    elementClick = '#header .current';
    elementSlide = 'ul.toogle_content';
    activeClass = 'active';
    $(elementClick).on('click', function(e) {
        e.stopPropagation();
        var subUl = $(this).next(elementSlide);
        if (subUl.is(':hidden')) {
            subUl.slideDown();
            $(this).addClass(activeClass);
        } else {
            subUl.slideUp();
            $(this).removeClass(activeClass);
        }
        $(elementClick).not(this).next(elementSlide).slideUp();
        $(elementClick).not(this).removeClass(activeClass);
        e.preventDefault();
    });
    $(elementSlide).on('click', function(e) {
        e.stopPropagation();
    });
    $(document).on('click', function(e) {
        e.stopPropagation();
        var elementHide = $(elementClick).next(elementSlide);
        $(elementHide).slideUp();
        $(elementClick).removeClass('active');
    });
}

function accordionFooter(status) {
    if (status == 'enable') {
        $('#footer .footer-block h4').on('click', function() {
            $(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
        })
        $('#footer').addClass('accordion').find('.toggle-footer').slideUp('fast');
    } else {
        $('.footer-block h4').removeClass('active').off().parent().find('.toggle-footer').removeAttr('style').slideDown('fast');
        $('#footer').removeClass('accordion');
    }
}

function accordion(status) {
    leftColumnBlocks = $('#left_column');
    if (status == 'enable') {
        $('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').on('click', function() {
            $(this).toggleClass('active').parent().find('.block_content').stop().slideToggle('medium');
        })
        $('#right_column, #left_column').addClass('accordion').find('.block .block_content').slideUp('fast');
    } else {
        $('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').removeClass('active').off().parent().find('.block_content').removeAttr('style').slideDown('fast');
        $('#left_column, #right_column').removeClass('accordion');
    }
}

function resizeCatimg() {
    var div = $('.cat_desc').parent('div');
    var image = new Image;
    $(image).load(function() {
        var width = image.width;
        var height = image.height;
        var ratio = parseFloat(height / width);
        var calc = Math.round(ratio * parseInt(div.outerWidth(false)));
        div.css('min-height', calc);
    });
    if (div.length)
        image.src = div.css('background-image').replace(/url\("?|"?\)$/ig, '');
}

jQuery(document).ready(function($) {
	
	$('.lightbox_trigger').click(function(e) {
		
		//prevent default action (hyperlink)
		e.preventDefault();
		
		//Get clicked link href
		var image_href = $(this).attr("src");

        console.log('cc');
		
		if ($('#lightbox').length > 0) { // #lightbox exists
			
			//place href as img src value
			$('#content').html('<img src="' + image_href + '" />');
		   	
			//show lightbox window - you could use .show('fast') for a transition
			$('#lightbox').show();
		}
		
		else { //#lightbox does not exist - create and insert (runs 1st time only)
			
			//create HTML markup for lightbox window
			var lightbox = 
			'<div id="lightbox">' +
				'<p>Click to close</p>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" />' +
				'</div>' +	
			'</div>';
				
			//insert lightbox HTML into page
			$('body').append(lightbox);
		}
		
	});
	
	//Click anywhere on the page to get rid of lightbox window
	$('body').on('click', '#lightbox', function() { //must use on, as the lightbox element is inserted into the DOM
		$('#lightbox').hide();
	});

});

jQuery(document).ready(function($) {
    $('#thumbs_list_frame li a').on('mouseenter', function() {
        var url = $(this).find('img').attr('src');
        
        $('#bigpic').attr('src', url);
        $('#view_large_button').attr('href', url);
        $('#view_large_button').attr('src', url);
    });
});

/*
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.nav-link');
    const panes = document.querySelectorAll('.tab-pane');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));

            tab.classList.add('active');
            document.getElementById(tab.getAttribute('data-target')).classList.add('active');
        });
    });
});
*/
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.nav-link');
    const panes = document.querySelectorAll('.tab-pane');

    function switchTab(tab) {
        // Supprime les classes 'active' et 'fade-in' de tous les onglets et panneaux
        tabs.forEach(t => t.classList.remove('active'));
        panes.forEach(p => p.classList.remove('active', 'fade-in'));

        // Ajoute la classe 'active' à l'onglet cliqué
        tab.classList.add('active');

        // Trouve le panneau correspondant et ajoute les classes 'active' et 'fade-in'
        const pane = document.getElementById(tab.getAttribute('data-target'));
        pane.classList.add('active', 'fade-in');
    }

    // Ajoutez un écouteur d'événement de clic à chaque onglet
    tabs.forEach(tab => {
        tab.addEventListener('click', () => switchTab(tab));
    });
});



