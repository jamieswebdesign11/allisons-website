//Check if IE Function
function isIE() {
    ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
    return is_ie;
}
//Sanatize String Function
function sanitize(str) {
    var sani = str.replace(/[^A-Z0-9]/ig, " "); // Removes Special Charaters with Spaces 
    sani = sani.replace(/^(\s*)([\W\w]*)(\b\s*$)/g, '$2');
    return sani.replace(/\b[a-z]/gi, function (char) { // Caps First leter From Words 
        return char.toUpperCase();
    });
}
//Add Alt/Title tags to links that don't have them
$('a').each(function () {
    if ($(this).attr('title') === undefined && $(this).attr('alt') === undefined) {
        var linkTxt = $(this).text();
        if (linkTxt.length >= 2) {
            $(this).attr({
                title: linkTxt,
                alt: linkTxt
            });
        } else {
            var linkLocation = $(this).attr('href');
            if (linkLocation == undefined) {} else {
                var sanitized = sanitize(linkLocation);
                $(this).attr({
                    title: sanitized,
                    alt: sanitized
                });
            }
        }
    } else {
        var title = $(this).attr('title');
        var alt = $(this).attr('alt');
        switch (title) {
            case undefined:
                $(this).attr({
                    title: alt
                });
                break;
        }
        switch (alt) {
            case undefined:
                $(this).attr({
                    alt: title
                });
                break;
        }
    }
});

//Banner Heights
$(document).ready(function () {
    if ($(window).outerWidth() > 991) {
        function setHeight() {
            windowHeight = $(window).innerHeight();
            $('#banner').css('height', windowHeight / 2);
        };
        setHeight();
        $(window).resize(function () {
            setHeight();
        });
    }
});
//Parallax code
$(document).ready(function () {
    if ($(window).outerWidth() > 991) {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('.parallax-file-item').css('transform', 'translate3d(0, ' + -(scrolled * 0.5) + 'px, 0)');
        });
    }
    if ($(window).outerWidth() > 1200) {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('.parallax-embed-item').css('transform', 'translate3d(0, ' + -(scrolled * 0.1) + 'px, 0)');
        });
    }
    if ($(window).outerWidth() < 1200) {
        $('.youtube-banner-video').addClass('embed-responsive embed-responsive-16by9');
        $('.vimeo-banner-video').addClass('embed-responsive embed-responsive-16by9');
        $('.parallax-embed-item').addClass('embeded-responsive-item');
    }
});
//Convert banner slider into parallax background images
if ($(window).outerWidth() > 991) {
    $('#banner .slider-img').each(function () {
        var imgSrc = $(this).attr('src');
        var fitType = 'cover';
        if ($(this).data('fit-type')) {
            fitType = $(this).data('fit-type');
        }
        $(this).parent().css({
            'background': 'transparent url("' + imgSrc + '") fixed no-repeat center center/' + fitType,
        });
        $(this).parent().addClass('parallax-file-item');
        $('.slider-img').css('display', 'none');
    });
}

//Mobile Menu Toggle
$('.mobile-menu-toggle').click(function(){
    $('.left-col').slideToggle();
    $(this).children('span').toggleClass('fa-bars fa-times');
    $('body').toggleClass('no-scroll');
});

//Gallery Tabs
$('#gallery a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var target = $(this).attr('href');

    $(target).css('right', '-' + $(window).width() + 'px');
    var right = $(target).offset().right;
    $(target).css({
        right: right
    }).animate({
        "right": "0px"
    }, "10");
});

//Set Variable For Anchor In URL
$hash = window.location.hash; 

//Set Variable For Anchor With Out The #
$mainID = $hash.substr(1);

$(document).ready(function(){
	if(window.location.hash) {
        $('.tab-content .tab-pane:first-child').removeClass('active in');
		$('.tab-content .tab-pane').each(function(){
            console.log($mainID);
			if( $(this).attr('id') == $mainID ){
				$(this).addClass('active in'); 
			}
		});
	}
	else {
		$('.tab-content .tab-pane:first-child').addClass('active in');
	}
});

$('.gallery').photobox('a');
