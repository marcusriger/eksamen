$(document).ready(function () {
    $('.logind').on('click', function () {
        var $this = $(this);
        $this.toggleClass('.logind');
        if ($this.hasClass('.logind')) {
            $this.text('Anuller');
        }
        else {
            $this.text('Log ind');
        }
        $('.slidedown').slideToggle('slow');
    });
    // Scroll
    $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 20) {
        $('nav').addClass('fixed');
    } else {
        $('nav').removeClass('fixed');
    }
});
});