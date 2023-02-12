var url='/api/';

var city_start = document.forms.city_start;
var city_end = document.forms.city_end;

$(document).ready(function(){
    // проверка на правильность повторения ввода пароля
    $(".test-1-fbs").bind("click", function(event){
        $.ajax({
            url: url + 'login.php',
            type: "GET",
            data: ({phone: phone_number, pass: password}),
            dataType: "json",
            beforeSend: function(){

            },
            success: funcSuccess
        });
        event.preventDefault();
    });
});

$(document).ready(function(){
    $(".test-0-fbs").bind("click", function(){
        $.get("booking.php", {query: city_start}, function(data){
        data = JSON.parse(data); 
        document.querySelector(".city-start").innerHTML = data.items.name;
      });
    });
  });