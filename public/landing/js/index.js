$('a.link[href^="#"]').click(function(e) {
    var target = $(this).attr('href');
    var strip = target.slice(1);
    var anchor = $(".m-section--link[id='" + strip + "']");
    e.preventDefault();
    y = (anchor.offset() || {
        "top" : NaN
    }).top;
    $('html, body').animate({
        scrollTop : (y - 65)
    }, 'slow');
});
$('#home .owl-carousel').owlCarousel({
    lazyLoad : true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive : {
        0 : {
            items : 1
        }
    },
    navigation : false,
    nav : false,
    loop : true,
    autoplay : true,
    mouseDrag: false,
    dots: true,
    autoplayTimeout : 3000
});
$('.m-about--carousel .owl-carousel').owlCarousel({
    lazyLoad : true,
    items: 1,
    navigation : false,
    mouseDrag: true,
    dots: false,
    loop: true,
    autoplay: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    navElement: 'span'
});
$('.form-control-range').each(function() {
    const $this = $(this),
    countTo = $this.attr('data-value');
    const aniamtionInputRange = () => {
        $({ countNum: $this.attr('value')}).animate({
            countNum: countTo
        },
        {
            duration: 1500,
            easing:'linear',
            step: function() {
                $this.attr('value',Math.floor(this.countNum));
            },
            complete: function() {
                $this.attr('value',this.countNum);
            }
        });
    }   
    $this.waypoint(aniamtionInputRange, { offset: '100%', triggerOnce: true });  
});