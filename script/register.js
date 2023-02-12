var url='/api/';

var fname = document.querySelector(".first_name").nodeValue;
var lname = document.querySelector(".last_name").nodeValue;
var doc_number = document.querySelector(".document_number").nodeValue;
var phone_number = document.querySelector(".phone").nodeValue;
var pass = document.querySelector(".test-1-fps").nodeValue;
var pass2 = document.querySelector(".test-2-pass").nodeValue;

function funcSuccess(data){
    window.location.href = 'profile.html';
}

$(document).ready(function(){
    // проверка на правильность повторения ввода пароля
    $(".test-1-fbs").bind("click", function(event){
        $.ajax({
            url: url + 'register.php',
            type: "POST",
            data: ({first_name: fname, last_name: lname, document_number: doc_number, phone: phone_number, password: pass}),
            dataType: "json",
            beforeSend: function(){

            },
            success: funcSuccess
        });
        event.preventDefault();
    });
});