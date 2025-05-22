(function(_, $) {
    $(document).ready(function() {
        var $btn = $('#goTopBtn');

        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $btn.addClass('show');
            } else {
                $btn.removeClass('show');
            }
        });

        $btn.click(function() {
            $('html, body').animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
})(Tygh, Tygh.$);
