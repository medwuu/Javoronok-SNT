$(document).ready(function() {
    // событие на клик по #submit-btn
    $("#submit-btn").click(
        function() {
            sendAjaxForm("ajax-form", "src/additional/form.php");
            return false;
        }
    );
});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),  // упаковывем все инпуты из формы
        success: function(response) {
            $('#ajax-form')[0].reset();  // очистка формы при коде 200
            $("#form-result").html(response);
        },

        // FIXME: не выполняется. реализовать вывод ошибки здесь
        error: function(response) {
            $("#form-result").html("Произошла непредвиденная ошибка!");
        }
    });
}