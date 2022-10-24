const formatter = new Intl.NumberFormat('en');
document.querySelector('.img-btn').addEventListener('click', function() {
    document.querySelector('.cont').classList.toggle('s-signup')
});
$('main  .product-related .owl-carousel').owlCarousel({
    loop: false,
    margin: 15,
    nav: true,
    dots: false,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 4
        }
    }

});

$(function() {
    // Display or hidden button back to top
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $(".back-to-top").fadeIn();
        } else {
            $(".back-to-top").fadeOut();
        }
    });
    // Khi click vào button back to top, sẽ cuộn lên đầu trang web trong vòng 0.8s
    $(".back-to-top").click(function() {
        $("html").animate({ scrollTop: 0 }, 800);
    });
    // Hiển thị cart dialog
    $('.btn-cart-detail').click(function() {
        $('#modal-cart-detail').modal('show');
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() >= $("#slide-show").offset().top) {
            $(" .menu").addClass('trikhang-fixed-menu');
        } else {
            $(" .home .menu").removeClass('trikhang-fixed-menu');
        }
    });

    // iso tope category
    jQuery(document).ready(function($) {
        $('.all-product').isotope({
            itemSelector: '.portfolio-thumbnail ',
            layoutMode: 'fitRows'
        });
        $('.tieude li').click(function(event) {
            // var type = $(this).attr('data-type');
            var type = $(this).data('type');
            $('.all-product').isotope({
                filter: type
            });
        });
    });

    //iso tope brand
    jQuery(document).ready(function($) {
        $('.all-product').isotope({
            itemSelector: '.portfolio-thumbnail ',
            layoutMode: 'fitRows'
        });
        $('.box-content').click(function(event) {
            var type = $(this).data('type');
            console.log(type);
            $('.all-product').isotope({
                filter: type
            });
        });
    });
});

AOS.init({
    duration: 1200,
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
//update quantity cart
$(document).ready(function() {
    var fadeTime = 300;

    $('.quantity-cart input').change(function() {
        updateQuantity(this);
    });

    function recalculateCart() {
        var subtotal = 0;

        /* Sum up row totals */
        $('.item-cart').each(function() {
            subtotal += parseFloat($(this).children('.total-price').text());
        });

        /* Calculate totals */
        var total = subtotal;

        /* Update totals display */
        $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal);
            $('#cart-total').html(total);
            $('.totals-value').fadeIn(fadeTime);
        });
    }

    function updateQuantity(quantityInput) {
        /* Calculate line price */

        var productRow = $(quantityInput).parent().parent().parent();
        var price = parseFloat(productRow.children('.product-price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;
        /* Update line price display and recalc cart totals */
        productRow.children('.total-price').each(function() {
            $(this).fadeOut(fadeTime, function() {
                $(this).html(formatter.format(linePrice));
                recalculateCart();
                $(this).fadeIn(fadeTime);
            });
        });
    }


});