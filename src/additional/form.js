$(document).ready(function() {
    // событие на клик по #submit-btn
    $("#submit-btn").click(
        function() {
            $("#form-result").html("Отправка письма...");
            // упаковывем все инпуты из формы
            var formData = new FormData($('#ajax-form')[0]);
            sendAjaxForm(formData, "src/additional/form.php");
            return false;
        }
    );
});

function sendAjaxForm(formData, url) {
    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        success: function(response) {
            // очистка формы при коде 200
            $('#ajax-form')[0].reset();
            $("#form-result").html(response);
        },

        // выполняется только при ошибке подключения по SMTP
        error: function(response) {
            $("#form-result").html("Произошла непредвиденная ошибка!");
        },
        cache: false,
        contentType: false,
        processData: false,
        mimeType: "multipart/form-data"
    });
}