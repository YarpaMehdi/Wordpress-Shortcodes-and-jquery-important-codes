//related product carousel jquery

$(".related.products ul.products").addClass("owl-carousel owl-theme");
$('.related.products ul.products').owlCarousel({
    loop: true,
    nav: true,
    animateOut: 'slideOutLeft',
    animateIn: 'slideInLeft',
    slideSpeed: 300,
    autoplay: true,
    margin: 40,
    dots: true,
    autoplayTimeout: 5000,
    items: 4,
    smartSpeed: 450
});