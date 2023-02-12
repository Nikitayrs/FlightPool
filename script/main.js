var dateStart = new Date(2021, 0, 1, 0, 0, 0, 0);
var dateStop = new Date(2021, 1, 28, 23, 59, 59, 0);

var people_count = document.querySelector('.infographic__people');
var rand_count = document.querySelector('.infographic__rand');

function InfographInfo(){
    var info_elem1 = document.querySelector(".info_elem1");
    var info_elem2 = document.querySelector(".info_elem2");
    var people = document.querySelector(".infographic__people-count");
    var rand = document.querySelector(".infographic__rand-procent");
    var error = document.querySelector(".text-error");
    error.innerHTML = "";
    var passenger = 0;

    var count = Number(info_elem2.value);

    if(info_elem1 != null && info_elem2 != null && count != null){
        if(info_elem1.value >= '2021-02-07' && info_elem1.value <= '2021-02-21'){
            passenger = 20 + count;
        }
        else if(info_elem1.value > '2021-02-21' && info_elem1.value <= '2021-02-28'){
            passenger = 35 + count;
        }
        else if(info_elem1.value >= '2021-03-01' && info_elem1.value <= '2021-03-16'){
            passenger = 50 + count;
        }
        else if(info_elem1.value > '2021-03-16' && info_elem1.value <= '2021-03-31'){
            passenger = 70 + count;
        }
        if(passenger > 80){
            error.innerHTML = "Превышен лимит";
        } else {
            people_count.style.height = passenger * 50 / 80 + '%';
            rand_count.style.height = 100 * passenger / 80 + '%';
            people.innerHTML = passenger;
            rand.innerHTML = Math.round(100 * passenger / 80);
        }
    }
}