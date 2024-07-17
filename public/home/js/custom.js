jQuery(function($) {
    "use strict";
    (function() {
        $.scrollUp();
    })();
    (function() {
        var textAreas = document.getElementsByTagName("textarea");
        Array.prototype.forEach.call(textAreas, function(elem) {
            elem.placeholder = elem.placeholder.replace(/\\n/g, "\n");
        });
    })();
    (function() {
        $("document").ready(function() {
            $(".more-category.one").hide();
            $(".show-more.one").click(function() {
                $(".more-category.one").show();
                $(".show-more.one").hide();
            });
        });
        $("document").ready(function() {
            $(".more-category.two").hide();
            $(".show-more.two").click(function() {
                $(".more-category.two").show();
                $(".show-more.two").hide();
            });
        });
        $('document').ready(function() {
            $('#negotiableYes').change(function() {
                if ($(this).is(':checked')) {
                    $('#price').prop('disabled', true);
                } else {
                    $('#price').prop('disabled', false);
                }
            });
        });
    })();
    (function() {
        $("#price").slider();
    })();
    (function() {
        $(".language-dropdown").on("click", ".language-change a", function(ev) {
            if ("#" === $(this).attr("href")) {
                ev.preventDefault();
                var parent = $(this).parents(".language-dropdown");
                parent.find(".change-text").html($(this).html());
            }
        });
        $(".category-dropdown").on("click", ".category-change a", function(ev) {
            if ("#" === $(this).attr("href")) {
                ev.preventDefault();
                var parent = $(this).parents(".category-dropdown");
                parent.find(".change-text").html($(this).html());
            }
        });
    })();
    (function() {
        $('[data-toggle="tooltip"]').tooltip();
    })();
    (function() {
        $(".collapse").on("show.bs.collapse", function() {
            var id = $(this).attr("id");
            $('a[href="#' + id + '"]')
                .closest(".panel-heading")
                .addClass("active-faq");
            $('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-minus"></i>');
        });
        $(".collapse").on("hide.bs.collapse", function() {
            var id = $(this).attr("id");
            $('a[href="#' + id + '"]')
                .closest(".panel-heading")
                .removeClass("active-faq");
            $('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-plus"></i>');
        });
    })();
    (function() {
        $('input[type="checkbox"]').change(function() {
            if ($(this).is(":checked")) {
                $(this).parent("label").addClass("checked");
            } else {
                $(this).parent("label").removeClass("checked");
            }
        });
    })();
    $(".select-category.post-option ul li a").on("click", function() {
        $(".select-category.post-option ul li.link-active").removeClass("link-active");
        $(this).closest("li").addClass("link-active");
    });
    $(".subcategory.post-option ul li a").on("click", function() {
        $(".subcategory.post-option ul li.link-active").removeClass("link-active");
        $(this).closest("li").addClass("link-active");
    });
    (function() {
        $(".show-number").on("click", function() {
            $(".hide-text").fadeIn(500, function() {
                $(this).addClass("hide");
            });
            $(".hide-number").fadeIn(500, function() {
                $(this).addClass("show");
            });
        });
    })();
});
(function() {
    $("#featured-slider").owlCarousel({
        items: 4,
        nav: true,
        autoplay: true,
        dots: true,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: { 0: { items: 1, slideBy: 1 }, 576: { items: 1, slideBy: 1 }, 768: { items: 1, slideBy: 1 }, 1200: { items: 4, slideBy: 1 } },
    });
})();
(function() {
    $("#featured-slider-two").owlCarousel({
        items: 4,
        nav: true,
        autoplay: true,
        dots: true,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left '></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: { 0: { items: 1, slideBy: 1 }, 480: { items: 1, slideBy: 1 }, 991: { items: 2, slideBy: 1 }, 1000: { items: 4, slideBy: 1 } },
    });
})();
(function() {
    $(".testimonial-carousel").owlCarousel({ items: 1, autoplay: true, autoplayHoverPause: true });
})();
(function() {
    $(".car-slider").owlCarousel({ items: 1, autoplay: true, autoplayHoverPause: true });
})();