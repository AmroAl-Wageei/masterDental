var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 1,
    garbCursor: true,
    // spaceBetween: 30,

    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
