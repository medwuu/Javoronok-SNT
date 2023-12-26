$(document).ready(function() {
    $('.spoiler-title').click(function(event) {
        $('.spoiler-title').not($(this)).removeClass('active');
        $('.spoiler-text').not($(this).next()).slideUp(300);
        $(this).toggleClass('active').next().slideToggle(300);
    });
});