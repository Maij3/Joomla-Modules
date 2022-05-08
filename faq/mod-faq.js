(function ($) {
    $(document).ready(function () {
        if (!$('.mod-faq').length) return;
        $('.mod-faq .accordion-group').on('click', function () {
            $(this).toggleClass('collapsed');
        });
        if ($('.mod-faq .accordion-group').length <= 5) {
            $('.mod-faq .show-more-btn').hide();
        }
        $('.mod-faq .show-more-btn').click(function () {
            if ($('.mod-faq .show-more-btn').html() === 'View All') {
                $('.mod-faq .show-more-btn').html('View Less')
            } else {
                $('.mod-faq .show-more-btn').html('View All')
            }
            $('.mod-faq .accordion-group').toggleClass('accordion-group-more');
        });
    });
})(jQuery);