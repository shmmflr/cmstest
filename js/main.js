//پنل مدیریت
$(document).ready(function () {
    $('.admin-menu > ul > li.article').click(function () {
        $("ul.sub-article").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article2').click(function () {
        $("ul.sub-article2").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article3').click(function () {
        $("ul.sub-article3").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article4').click(function () {
        $("ul.sub-article4").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article5').click(function () {
        $("ul.sub-article5").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article6').click(function () {
        $("ul.sub-article6").slideToggle();
    });
});
$(document).ready(function () {
    $('.admin-menu > ul > li.article7').click(function () {
        $("ul.sub-article7").slideToggle();
    });
});


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true,
            loop: true
        }
    },
    navText: Array('<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
    dots: true,
    autoplay: true,
});



