<?php
    // Cros
    header("Access-Control-Allow-Origin: *");

    header("Content-Type: application/json; charset=UTF-8");

    header("Access-Control-Allow-Methods: POST");

    header("Access-Control-Allow-Age: 3600");

    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Headers, Authorization, X-Requested-With");

    $pass = "1234";
    $phone = "89203315050";

    // Возвращает MD5-хеш строки
    $token = md5($pass);

    // Ошибка в введённых данных
    function errorDoc($error){
        $result['error']['code'] = 422;
        $result['error']['message'] = "Validation error";
        
        if($error == "phone"){
            $result['error']['errors']['phone'] = "Введите телефон";
        } else if($error == "pass"){
            $result['error']['errors']['pass'] = "Введите пароль";
        } else if($error == "phoneOrPassword"){
            $result['errors']['error']['token'] = "phone or password incorrect";
        }
        return $result;
    }

    // Массив ошибок
    $result = array();
    if(empty($_POST['test-1-fpn'])){
        $result = errorDoc("phone");
    }
    if(empty($_POST['pass'])){
        $result = errorDoc("pass");
    }
    if($_POST['phone'] != $phone || $_POST['pass'] != $pass){
        $result = errorDoc("phoneOrPassword");
    } else if($_POST['phone'] == $phone && $_POST['pass'] == $pass){
        $result['data']['token'] = $token;
    }

    // Ошибок не обнаружено
    if(empty($result)){
        http_response_code(200);
    }

    // Отправка json
    echo json_encode($result);
?>