$(document).ready(function() {
    $('.carousel').carousel({
        interval: 2000
    });
});

feather.replace({ 'stroke-width': 1 })

var pathObj = {
    "lock-animated": {
        "strokepath": [{
            "path": "M18.3,30.57V171.73H171V30.57A11.57,11.57,0,0,0,159.46,19H29.87A11.57,11.57,0,0,0,18.3,30.57ZM94.67,132.78a17.48,17.48,0,1,1,17.48-17.48A17.48,17.48,0,0,1,94.67,132.78Zm0-39.87a17.48,17.48,0,1,1,17.48-17.48A17.48,17.48,0,0,1,94.67,92.91Z",
            "duration": 2000
        }, {
            "path": "M141.2,190.88A44.87,44.87,0,0,1,96.48,233.3H92.84a44.87,44.87,0,0,1-44.73-42.43H18.35A74.54,74.54,0,0,0,92.84,263h3.63A74.54,74.54,0,0,0,171,190.88Z",
            "duration": 2000
        }],
        "dimensions": {
            "width": 190,
            "height": 281
        }
    }
};
var $logo = $('#lock-animated');
$logo.lazylinepainter({
    "svgData": pathObj,
    'strokeWidth': 6,
    'strokeColor': '#999',
    'drawSequential': false,
    'ease': 'easeInOutQuad'

});


$('.contact').waypoint(function() {
    setTimeout(function() {
        $logo.lazylinepainter('paint');
    }, 20);
    this.destroy();
});


$(window).on('scroll', function(event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 120) {
        $('.navbar').addClass('affix');
    } else {
        $('.navbar').removeClass('affix');
    }
});


smoothScroll.init({
    selector: '[data-scroll]',
    selectorHeader: '[data-scroll-header]',
    speed: 1200,
    easing: 'easeInOutCubic',
    offset: 0,
    updateURL: false,
    callback: function(anchor, toggle) {}
});

var containerEl = document.querySelector('.mixupdata');
var mixer = mixitup(containerEl, {
    animation: {
        effects: 'fade scale stagger(50ms)'
    },
    load: {
        filter: 'none'
    }
});
containerEl.classList.add('mixitup-ready');
mixer.show()
    .then(function() {


        mixer.configure({
            animation: {
                effects: 'fade scale'
            }
        });
    });

Grid.init();