var url='/api/';

var phone_number = document.querySelector(".test-1-fpn").nodeValue;
var password = document.querySelector(".test-1-fps").nodeValue;

function funcSuccess(data){
    window.location.href = 'profile.html';
}

$(document).ready(function(){
    // проверка на правильность повторения ввода пароля
    $(".test-1-fbs").bind("click", function(event){
        $.ajax({
            url: url + 'login.php',
            type: "POST",
            data: ({phone: phone_number, pass: password}),
            dataType: "json",
            beforeSend: function(){ //перед выполнением ajax запроса

            },
            success: funcSuccess, //ajax запрос выполнен успешно
            statusCode: {
                200: function(){
                    console.log("Ok");
                }
            }
        });
        event.preventDefault();
    });
});