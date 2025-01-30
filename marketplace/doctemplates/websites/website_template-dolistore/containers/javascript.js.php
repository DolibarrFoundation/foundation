<?php // BEGIN PHP
$websitekey=basename(__DIR__);
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once __DIR__.'/master.inc.php'; } // Load env if not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
header('Cache-Control: max-age=3600, public, must-revalidate');
header('Content-type: application/javascript');
// END PHP ?>
/* JS content (all pages) */
var responsiveflag = false;

$(document).ready(function() {
    highdpiInit();
    responsiveResize();
    $(window).resize(responsiveResize);
    
    /*
    if (navigator.userAgent.match(/Android/i)) {
        var viewport = document.querySelector('meta[name="viewport"]');
        viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
        window.scrollTo(0, 1);
    }
    */
    
    blockHover();
    if (typeof quickView !== 'undefined' && quickView) {
        quick_view();
    }
    dropDown();
    
    if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product'])) {
        bindGrid();

        $(document).on('change', '.selectProductSort', function(e) {
            console.log("change .selectProductSort");
            
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
            console.log("change .selectn");
            
            var urlToPaginate = request;
            urlToPaginate = new URL(urlToPaginate);
            urlToPaginate.searchParams.set('n', $(this).val());
            document.location.href = urlToPaginate;
            //$(this.form).submit();
        });
        
        $(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function() {
            console.log("change .selectmansup");
            
            if (this.value != '')
                location.href = this.value;
        });
        
        $(document).on('change', 'select[name="currency_payement"]', function() {
            console.log("change .selectcurr");
            
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
            console.log("click ulpaginationlia");

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
            console.log("submit showall");
            
            var urlPagination = request;
            var newUrl = new URL(urlPagination);
            var n_value = $(".showall #nb_item").val();
            newUrl.searchParams.set('n', n_value);
            window.location.href = newUrl;
            return false;
        });
    }
    $(document).on('click', '.back', function(e) {
        console.log("click back");
        
        e.preventDefault();
        history.back();
    });
    
    jQuery.curCSS = jQuery.css;
    
    if (!!$.prototype.cluetip) {
        console.log("prototype cluetip");
        
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
    }
    
    if (!!$.prototype.fancybox) {
        console.log("prototype fancybox");
        
        $.extend($.fancybox.defaults.tpl, {
            closeBtn: '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
            next: '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
            prev: '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
        });
    }
});


function highdpiInit() {
    /*
    if ($('.replace-2x').css('font-size') == "1px") {
        var els = $("img.replace-2x").get();
        for (var i = 0; i < els.length; i++) {
            src = els[i].src;
            src = src.replace("&extname=_small", "");
            var img = new Image();
            img.src = src;
            img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
        }
    }
    */
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
        console.log("mouseenter product_list");
        
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
        console.log("click mouseleave");
        
        if ($('body').find('.container').width() == 1170)
            $(this).parent().removeClass('hovered').css({
                'height': 'auto',
                'margin-bottom': '0'
            });
    });
}

function quick_view() {
    $(document).on('click', '.quick-view:visible, .quick-view-mobile:visible', function(e) {
        console.log("click quick view");
        
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
        console.log("click grid");
        e.preventDefault();
        Display('grid');
    });
    $('.display').off('click', '#list').on('click', '#list', function(e) {
        console.log("click list");
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
        console.log("click dropDown");
        
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
        console.log("click elementSlide");
        e.stopPropagation();
    });
    
    $(document).on('click', function(e) {
        console.log("click document");
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

/*jQuery(document).ready(function($) {
	
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

});*/

/*jQuery(document).ready(function($) {
    $('#thumbs_list_frame li a').on('mouseenter', function() {
        var url = $(this).find('img').attr('src');
        
        $('#bigpic').attr('src', url);
        $('#view_large_button').attr('href', url);
        $('#view_large_button').attr('src', url);
    });
});*/

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
        console.log("switch tab after click event");
        
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





/*============================= tools ==================================*/
function formatedNumberToFloat(price, currencyFormat, currencySign) {
    price = price.replace(currencySign, '');
    if (currencyFormat === 1)
        return parseFloat(price.replace(',', '').replace(' ', ''));
    else if (currencyFormat === 2)
        return parseFloat(price.replace(' ', '').replace(',', '.'));
    else if (currencyFormat === 3)
        return parseFloat(price.replace('.', '').replace(' ', '').replace(',', '.'));
    else if (currencyFormat === 4)
        return parseFloat(price.replace(',', '').replace(' ', ''));
    return price;
}

function formatNumber(value, numberOfDecimal, thousenSeparator, virgule) {
    value = value.toFixed(numberOfDecimal);
    var val_string = value + '';
    var tmp = val_string.split('.');
    var abs_val_string = (tmp.length === 2) ? tmp[0] : val_string;
    var deci_string = ('0.' + (tmp.length === 2 ? tmp[1] : 0)).substr(2);
    var nb = abs_val_string.length;
    for (var i = 1; i < 4; i++)
        if (value >= Math.pow(10, (3 * i)))
            abs_val_string = abs_val_string.substring(0, nb - (3 * i)) + thousenSeparator + abs_val_string.substring(nb - (3 * i));
    if (parseInt(numberOfDecimal) === 0)
        return abs_val_string;
    return abs_val_string + virgule + (deci_string > 0 ? deci_string : '00');
}

function formatCurrency(price, currencyFormat, currencySign, currencyBlank) {
    var blank = '';
    price = parseFloat(price).toFixed(10);
    price = ps_round(price, priceDisplayPrecision);
    if (currencyBlank > 0)
        blank = ' ';
    if (currencyFormat == 1)
        return currencySign + blank + formatNumber(price, priceDisplayPrecision, ',', '.');
    if (currencyFormat == 2)
        return (formatNumber(price, priceDisplayPrecision, ' ', ',') + blank + currencySign);
    if (currencyFormat == 3)
        return (currencySign + blank + formatNumber(price, priceDisplayPrecision, '.', ','));
    if (currencyFormat == 4)
        return (formatNumber(price, priceDisplayPrecision, ',', '.') + blank + currencySign);
    if (currencyFormat == 5)
        return (currencySign + blank + formatNumber(price, priceDisplayPrecision, '\'', '.'));
    return price;
}

function ps_round_helper(value, mode) {
    if (value >= 0.0) {
        tmp_value = Math.floor(value + 0.5);
        if ((mode == 3 && value == (-0.5 + tmp_value)) || (mode == 4 && value == (0.5 + 2 * Math.floor(tmp_value / 2.0))) || (mode == 5 && value == (0.5 + 2 * Math.floor(tmp_value / 2.0) - 1.0)))
            tmp_value -= 1.0;
    } else {
        tmp_value = Math.ceil(value - 0.5);
        if ((mode == 3 && value == (0.5 + tmp_value)) || (mode == 4 && value == (-0.5 + 2 * Math.ceil(tmp_value / 2.0))) || (mode == 5 && value == (-0.5 + 2 * Math.ceil(tmp_value / 2.0) + 1.0)))
            tmp_value += 1.0;
    }
    return tmp_value;
}

function ps_log10(value) {
    return Math.log(value) / Math.LN10;
}

function ps_round_half_up(value, precision) {
    var mul = Math.pow(10, precision);
    var val = value * mul;
    var next_digit = Math.floor(val * 10) - 10 * Math.floor(val);
    if (next_digit >= 5)
        val = Math.ceil(val);
    else
        val = Math.floor(val);
    return val / mul;
}

function ps_round(value, places) {
    if (typeof(roundMode) === 'undefined')
        roundMode = 2;
    if (typeof(places) === 'undefined')
        places = 2;
    var method = roundMode;
    if (method === 0)
        return ceilf(value, places);
    else if (method === 1)
        return floorf(value, places);
    else if (method === 2)
        return ps_round_half_up(value, places);
    else if (method == 3 || method == 4 || method == 5) {
        var precision_places = 14 - Math.floor(ps_log10(Math.abs(value)));
        var f1 = Math.pow(10, Math.abs(places));
        if (precision_places > places && precision_places - places < 15) {
            var f2 = Math.pow(10, Math.abs(precision_places));
            if (precision_places >= 0)
                tmp_value = value * f2;
            else
                tmp_value = value / f2;
            tmp_value = ps_round_helper(tmp_value, roundMode);
            f2 = Math.pow(10, Math.abs(places - precision_places));
            tmp_value /= f2;
        } else {
            if (places >= 0)
                tmp_value = value * f1;
            else
                tmp_value = value / f1;
            if (Math.abs(tmp_value) >= 1e15)
                return value;
        }
        tmp_value = ps_round_helper(tmp_value, roundMode);
        if (places > 0)
            tmp_value = tmp_value / f1;
        else
            tmp_value = tmp_value * f1;
        return tmp_value;
    }
}

function autoUrl(name, dest) {
    var loc;
    var id_list;
    id_list = document.getElementById(name);
    loc = id_list.options[id_list.selectedIndex].value;
    if (loc != 0)
        location.href = dest + loc;
    return;
}

function autoUrlNoList(name, dest) {
    var loc;
    loc = document.getElementById(name).checked;
    location.href = dest + (loc == true ? 1 : 0);
    return;
}

function toggle(e, show) {
    e.style.display = show ? '' : 'none';
}

function toggleMultiple(tab) {
    var len = tab.length;
    for (var i = 0; i < len; i++)
        if (tab[i].style)
            toggle(tab[i], tab[i].style.display == 'none');
}

function showElemFromSelect(select_id, elem_id) {
    var select = document.getElementById(select_id);
    for (var i = 0; i < select.length; ++i) {
        var elem = document.getElementById(elem_id + select.options[i].value);
        if (elem != null)
            toggle(elem, i == select.selectedIndex);
    }
}

function openCloseAllDiv(name, option) {
    var tab = $('*[name=' + name + ']');
    for (var i = 0; i < tab.length; ++i)
        toggle(tab[i], option);
}

function toggleDiv(name, option) {
    $('*[name=' + name + ']').each(function() {
        if (option == 'open') {
            $('#buttonall').data('status', 'close');
            $(this).hide();
        } else {
            $('#buttonall').data('status', 'open');
            $(this).show();
        }
    })
}

function toggleButtonValue(id_button, text1, text2) {
    if ($('#' + id_button).find('i').first().hasClass('process-icon-compress')) {
        $('#' + id_button).find('i').first().removeClass('process-icon-compress').addClass('process-icon-expand');
        $('#' + id_button).find('span').first().html(text1);
    } else {
        $('#' + id_button).find('i').first().removeClass('process-icon-expand').addClass('process-icon-compress');
        $('#' + id_button).find('span').first().html(text2);
    }
}

function toggleElemValue(id_button, text1, text2) {
    var obj = document.getElementById(id_button);
    if (obj)
        obj.value = ((!obj.value || obj.value == text2) ? text1 : text2);
}

function addBookmark(url, title) {
    if (window.sidebar && window.sidebar.addPanel)
        return window.sidebar.addPanel(title, url, "");
    else if (window.external && ('AddFavorite' in window.external))
        return window.external.AddFavorite(url, title);
}

function writeBookmarkLink(url, title, text, img) {
    var insert = '';
    if (img)
        insert = writeBookmarkLinkObject(url, title, '<img src="' + img + '" alt="' + escape(text) + '" title="' + removeQuotes(text) + '" />') + '&nbsp';
    insert += writeBookmarkLinkObject(url, title, text);
    if (window.sidebar || window.opera && window.print || (window.external && ('AddFavorite' in window.external)))
        $('.add_bookmark, #header_link_bookmark').append(insert);
}

function writeBookmarkLinkObject(url, title, insert) {
    if (window.sidebar || window.external)
        return ('<a href="javascript:addBookmark(\'' + escape(url) + '\', \'' + removeQuotes(title) + '\')">' + insert + '</a>');
    else if (window.opera && window.print)
        return ('<a rel="sidebar" href="' + escape(url) + '" title="' + removeQuotes(title) + '">' + insert + '</a>');
    return ('');
}

function checkCustomizations() {
    var pattern = new RegExp(' ?filled ?');
    if (typeof customizationFields != 'undefined')
        for (var i = 0; i < customizationFields.length; i++) {
            if (parseInt(customizationFields[i][1]) == 1 && ($('#' + customizationFields[i][0]).html() == '' || $('#' + customizationFields[i][0]).text() != $('#' + customizationFields[i][0]).val()) && !pattern.test($('#' + customizationFields[i][0]).attr('class')))
                return false;
        }
    return true;
}

function emptyCustomizations() {
    customizationId = null;
    if (typeof(customizationFields) == 'undefined') return;
    $('.customization_block .success').fadeOut(function() {
        $(this).remove();
    });
    $('.customization_block .error').fadeOut(function() {
        $(this).remove();
    });
    for (var i = 0; i < customizationFields.length; i++) {
        $('#' + customizationFields[i][0]).html('');
        $('#' + customizationFields[i][0]).val('');
    }
}

function ceilf(value, precision) {
    if (typeof(precision) === 'undefined')
        precision = 0;
    var precisionFactor = precision === 0 ? 1 : Math.pow(10, precision);
    var tmp = value * precisionFactor;
    var tmp2 = tmp.toString();
    if (tmp2[tmp2.length - 1] === 0)
        return value;
    return Math.ceil(value * precisionFactor) / precisionFactor;
}

function floorf(value, precision) {
    if (typeof(precision) === 'undefined')
        precision = 0;
    var precisionFactor = precision === 0 ? 1 : Math.pow(10, precision);
    var tmp = value * precisionFactor;
    var tmp2 = tmp.toString();
    if (tmp2[tmp2.length - 1] === 0)
        return value;
    return Math.floor(value * precisionFactor) / precisionFactor;
}

function setCurrency(id_currency) {
    $.ajax({
        type: 'POST',
        headers: {
            "cache-control": "no-cache"
        },
        url: baseDir + 'index.php' + '?rand=' + new Date().getTime(),
        data: 'controller=change-currency&id_currency=' + parseInt(id_currency),
        success: function(msg) {
            location.reload(true);
        }
    });
}

function isArrowKey(k_ev) {
    var unicode = k_ev.keyCode ? k_ev.keyCode : k_ev.charCode;
    if (unicode >= 37 && unicode <= 40)
        return true;
    return false;
}

function removeQuotes(value) {
    value = value.replace(/\\"/g, '');
    value = value.replace(/"/g, '');
    value = value.replace(/\\'/g, '');
    value = value.replace(/'/g, '');
    return value;
}

function sprintf(format) {
    for (var i = 1; i < arguments.length; i++)
        format = format.replace(/%s/, arguments[i]);
    return format;
}

function fancyMsgBox(msg, title) {
    if (title) msg = "<h2>" + title + "</h2><p>" + msg + "</p>";
    msg += "<br/><p class=\"submit\" style=\"text-align:right; padding-bottom: 0\"><input class=\"button\" type=\"button\" value=\"OK\" onclick=\"$.fancybox.close();\" /></p>";
    if (!!$.prototype.fancybox) {
        $.fancybox(msg, {
            'autoDimensions': false,
            'autoSize': false,
            'width': 500,
            'height': 'auto',
            'openEffect': 'none',
            'closeEffect': 'none'
        });
    }
}

function fancyChooseBox(question, title, buttons, otherParams) {
    var msg, funcName, action;
    msg = '';
    if (title)
        msg = "<h2>" + title + "</h2><p>" + question + "</p>";
    msg += "<br/><p class=\"submit\" style=\"text-align:right; padding-bottom: 0\">";
    var i = 0;
    for (var caption in buttons) {
        if (!buttons.hasOwnProperty(caption)) continue;
        funcName = buttons[caption];
        if (typeof otherParams == 'undefined') otherParams = 0;
        otherParams = escape(JSON.stringify(otherParams));
        action = funcName ? "$.fancybox.close();window['" + funcName + "'](JSON.parse(unescape('" + otherParams + "')), " + i + ")" : "$.fancybox.close()";
        msg += '<button type="submit" class="button btn-default button-medium" style="margin-right: 5px;" value="true" onclick="' + action + '" >';
        msg += '<span>' + caption + '</span></button>'
        i++;
    }
    msg += "</p>";
    if (!!$.prototype.fancybox) {
        $.fancybox(msg, {
            'autoDimensions': false,
            'width': 500,
            'height': 'auto',
            'openEffect': 'none',
            'closeEffect': 'none'
        });
    }
}

function toggleLayer(whichLayer, flag) {
    if (!flag)
        $(whichLayer).hide();
    else
        $(whichLayer).show();
}

function openCloseLayer(whichLayer, action) {
    if (!action) {
        if ($(whichLayer).css('display') == 'none')
            $(whichLayer).show();
        else
            $(whichLayer).hide();
    } else if (action == 'open')
        $(whichLayer).show();
    else if (action == 'close')
        $(whichLayer).hide();
}

function updateTextWithEffect(jQueryElement, text, velocity, effect1, effect2, newClass) {
    if (jQueryElement.text() !== text) {
        if (effect1 === 'fade')
            jQueryElement.fadeOut(velocity, function() {
                $(this).addClass(newClass);
                if (effect2 === 'fade') $(this).text(text).fadeIn(velocity);
                else if (effect2 === 'slide') $(this).text(text).slideDown(velocity);
                else if (effect2 === 'show') $(this).text(text).show(velocity, function() {});
            });
        else if (effect1 === 'slide')
            jQueryElement.slideUp(velocity, function() {
                $(this).addClass(newClass);
                if (effect2 === 'fade') $(this).text(text).fadeIn(velocity);
                else if (effect2 === 'slide') $(this).text(text).slideDown(velocity);
                else if (effect2 === 'show') $(this).text(text).show(velocity);
            });
        else if (effect1 === 'hide')
            jQueryElement.hide(velocity, function() {
                $(this).addClass(newClass);
                if (effect2 === 'fade') $(this).text(text).fadeIn(velocity);
                else if (effect2 === 'slide') $(this).text(text).slideDown(velocity);
                else if (effect2 === 'show') $(this).text(text).show(velocity);
            });
    }
}

function dbg(value) {
    var active = false;
    var firefox = true;
    if (active)
        if (firefox)
            console.log(value);
        else
            alert(value);
}

function print_r(element, limit, depth) {
    depth = depth ? depth : 0;
    limit = limit ? limit : 1;
    returnString = '<ol>';
    for (property in element) {
        if (property != 'domConfig') {
            returnString += '<li><strong>' + property + '</strong> <small>(' + (typeof element[property]) + ')</small>';
            if (typeof element[property] == 'number' || typeof element[property] == 'boolean')
                returnString += ' : <em>' + element[property] + '</em>';
            if (typeof element[property] == 'string' && element[property])
                returnString += ': <div style="background:#C9C9C9;border:1px solid black; overflow:auto;"><code>' +
                element[property].replace(/</g, '&amp;lt;').replace(/>/g, '&amp;gt;') + '</code></div>';
            if ((typeof element[property] == 'object') && (depth < limit))
                returnString += print_r(element[property], limit, (depth + 1));
            returnString += '</li>';
        }
    }
    returnString += '</ol>';
    if (depth == 0) {
        winpop = window.open("", "", "width=800,height=600,scrollbars,resizable");
        winpop.document.write('<pre>' + returnString + '</pre>');
        winpop.document.close();
    }
    return returnString;
}

function in_array(value, array) {
    for (var i in array)
        if ((array[i] + '') === (value + ''))
            return true;
    return false;
}

function isCleanHtml(content) {
    var events = 'onmousedown|onmousemove|onmmouseup|onmouseover|onmouseout|onload|onunload|onfocus|onblur|onchange';
    events += '|onsubmit|ondblclick|onclick|onkeydown|onkeyup|onkeypress|onmouseenter|onmouseleave|onerror|onselect|onreset|onabort|ondragdrop|onresize|onactivate|onafterprint|onmoveend';
    events += '|onafterupdate|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeeditfocus|onbeforepaste|onbeforeprint|onbeforeunload|onbeforeupdate|onmove';
    events += '|onbounce|oncellchange|oncontextmenu|oncontrolselect|oncopy|oncut|ondataavailable|ondatasetchanged|ondatasetcomplete|ondeactivate|ondrag|ondragend|ondragenter|onmousewheel';
    events += '|ondragleave|ondragover|ondragstart|ondrop|onerrorupdate|onfilterchange|onfinish|onfocusin|onfocusout|onhashchange|onhelp|oninput|onlosecapture|onmessage|onmouseup|onmovestart';
    events += '|onoffline|ononline|onpaste|onpropertychange|onreadystatechange|onresizeend|onresizestart|onrowenter|onrowexit|onrowsdelete|onrowsinserted|onscroll|onsearch|onselectionchange';
    events += '|onselectstart|onstart|onstop';
    var script1 = /<[\s]*script/im;
    var script2 = new RegExp('(' + events + ')[\s]*=', 'im');
    var script3 = /.*script\:/im;
    var script4 = /<[\s]*(i?frame|embed|object)/im;
    if (script1.test(content) || script2.test(content) || script3.test(content) || script4.test(content))
        return false;
    return true;
}

function getStorageAvailable() {
    test = 'foo';
    storage = window.localStorage || window.sessionStorage;
    try {
        storage.setItem(test, test);
        storage.removeItem(test);
        return storage;
    } catch (error) {
        return null;
    }
}
$(document).ready(function() {
    $('form').submit(function() {
        console.log("submit form");
        
        $(this).find('.hideOnSubmit').hide();
    });
    
    $.fn.checkboxChange = function(fnChecked, fnUnchecked) {
        console.log("checkboxChange");
        
        if ($(this).prop('checked') && fnChecked)
            fnChecked.call(this);
        else if (fnUnchecked)
            fnUnchecked.call(this);
        if (!$(this).attr('eventCheckboxChange')) {
            $(this).on('change', function() {
                $(this).checkboxChange(fnChecked, fnUnchecked);
            });
            $(this).attr('eventCheckboxChange', true);
        }
    };
    $('a._blank, a.js-new-window').attr('target', '_blank');
});
/*============================= tools ==================================*/


/*============================= treeManagement ==================================*/
$(document).ready(function(){
    $('ul.tree.dhtml').hide();
    if(!$('ul.tree.dhtml').hasClass('dynamized'))
    {$('ul.tree.dhtml ul').prev().before("<span class='grower OPEN'> </span>");$('ul.tree.dhtml ul li:last-child, ul.tree.dhtml li:last-child').addClass('last');$('ul.tree.dhtml span.grower.OPEN').addClass('CLOSE').removeClass('OPEN').parent().find('ul:first').hide();$('ul.tree.dhtml').show();
    $('ul.tree.dhtml .selected').parents().each(function(){if($(this).is('ul'))
    toggleBranch($(this).prev().prev(),true);});toggleBranch($('ul.tree.dhtml .selected').prev(),true);
    $('ul.tree.dhtml span.grower').click(function(){
        console.log("toggleBranch");
        toggleBranch($(this));
    });
    $('ul.tree.dhtml').addClass('dynamized');$('ul.tree.dhtml').removeClass('dhtml');}});
    function openBranch(jQueryElement,noAnimation)
    {jQueryElement.addClass('OPEN').removeClass('CLOSE');if(noAnimation)
    jQueryElement.parent().find('ul:first').show();else
    jQueryElement.parent().find('ul:first').slideDown();}
    function closeBranch(jQueryElement,noAnimation)
    {jQueryElement.addClass('CLOSE').removeClass('OPEN');if(noAnimation)
    jQueryElement.parent().find('ul:first').hide();else
    jQueryElement.parent().find('ul:first').slideUp();}
    function toggleBranch(jQueryElement,noAnimation)
    {if(jQueryElement.hasClass('OPEN'))
    closeBranch(jQueryElement,noAnimation);else
    openBranch(jQueryElement,noAnimation);}
/*============================= treeManagement ==================================*/


/*============================= cart ==================================*/
// Shopping Cart jQuery & AJAX
$(document).ready(function(){

    var cart_block = new HoverWatcher('#header .cart_block');
    var shopping_cart = new HoverWatcher('#header .shopping_cart');
    if ('ontouchstart' in document.documentElement) {
        $('.shopping_cart > a:first').on('click', function(e) {
            console.log("click shopping_cart");
            
            e.preventDefault();
        });
    }
    
    $(document).on('touchstart', '#header .shopping_cart a:first', function() {
        console.log("touchstart header");
        
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
        console.log("click document layer_cart...");
        e.preventDefault();
        $('.layer_cart_overlay').hide();
        $('#layer_cart').fadeOut('fast');
    });
    

    $(document).on('click', '.product_quantity_up', function(e) {
        console.log("click product_quantity_up");
        
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
        console.log("click product_quantity_down");
        
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
        console.log("submit addtocart");
        
        var form_data = $(this).serialize();
        var button_content = $(this).find('button[type=submit]');

        if (!button_content.data('original-text')) {
            button_content.data('original-text', button_content.html());
        }
        
        button_content.html('<span>' + (button_content.data('loading-text') || 'Loading...') + '</span>');

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

            button_content.html(button_content.data('original-text'));
            
            if($('.shopping-cart-box').css('display') == 'block'){ //if cart box is still visible
                $('.cart-box').trigger( 'click' ); //trigger click to update the cart box.
            }
        })
        .fail(function() {
            alert( 'error' );
        });
        e.preventDefault();
    });


    // Remove items from cart
    $('body').on('click', '.ajax_cart_block_remove_link', function(e) {
        console.log("click ajax_cart_block_remove_link");
        
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

function calc_total() {
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
/*============================= cart ==================================*/


$(document).ready(function() {
    var thumbnails = $('.lightbox_trigger img').map(function() {
        return $(this).attr('src');
    }).get();
    
    var currentIndex = 0;

    // Open lightbox when clicking on a thumbnail
    $('.lightbox_trigger').click(function(e) {
        console.log("click lightbox trigger");
        
        console.log(thumbnails);
        e.preventDefault();
        //currentIndex = thumbnails.indexOf($(this).find('img').attr('src'));
        currentIndex = thumbnails.indexOf($(this).find('img').attr('src') || $(this).attr('src'));
        updateLightboxContent();
        $('#lightbox').show();
        updateNavigationVisibility();
        $('body').css('overflow', 'hidden'); // Disable scrolling on body
    });

    // Close lightbox when clicking outside content
    $('#lightbox').click(function(e) {
        console.log("click lightbox");
        
        if (!$(e.target).is('#lightbox-prev, #lightbox-next, #content img')) {
            console.log("we are outside content");
            
            $('#lightbox').hide();
            $('body').css('overflow', 'auto'); // Re-enable scrolling when lightbox is closed
        }
    });

    // Navigate through lightbox
    $('#lightbox-prev, #lightbox-next').click(function(e) {
        console.log("click lightbox prev next");
        
        e.stopPropagation();
        navigateLightbox($(this).attr('id') === 'lightbox-next' ? 1 : -1);
    });

    // Update lightbox content
    function updateLightboxContent() {
        //console.log($('#content').html());
        //console.log(thumbnails[currentIndex]);
        //$('#content').html('<img src="' + thumbnails[currentIndex] + '" />');
        //console.log($('#content').html());
        const img = $('<img>').attr('src', thumbnails[currentIndex]);
        $('#content').html(img);
    }

    // Handle lightbox navigation
    function navigateLightbox(direction) {
        currentIndex = (currentIndex + direction + thumbnails.length) % thumbnails.length;
        updateLightboxContent();
    }

    // Show/hide navigation buttons
    function updateNavigationVisibility() {
        if (thumbnails.length <= 1) {
            $('#lightbox-prev, #lightbox-next').hide();
        } else {
            $('#lightbox-prev, #lightbox-next').show();
        }
    }

    // Open the image in a new tab when clicked
    $('#content').on('click', 'img', function() {
        console.log("click img");
        
        var imageUrl = $(this).attr('src');
        
        /* window.open(imageUrl, '_blank'); */
        $('#lightbox').hide();
        $('body').css('overflow', 'auto'); // Re-enable scrolling when lightbox is closed
    });
    
    $('#thumbs_list_frame li a').on('mouseenter', function() {
        console.log("mouseenter thumbs");
        
        var url = $(this).find('img').attr('src');
        
        $('#bigpic').attr('src', url);
        $('#view_large_button').attr('href', url);
        $('#view_large_button').attr('src', url);
    });
    
});
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "js");
// END PHP
