jQuery(document).ready(function ($) {
    $('.answer').click(function () {
        var isCorrect = $(this).data('correct') === true;

        $(this).siblings('.answer').removeClass('true false');

        $(this).closest('.quiz-container').find('.explanation').addClass('active');

        var items = $(this).parent().find('.answer');

        items.each(function () {
            var isCorrectItem = $(this).data('correct') === true;
            $(this).addClass(isCorrectItem ? 'true' : 'false');
        });

    });
});
