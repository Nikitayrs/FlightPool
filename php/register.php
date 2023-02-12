<?php
    // Cros
    header("Access-Control-Allow-Origin: *");

    header("Content-Type: application/json; charset=UTF-8");

    header("Access-Control-Allow-Methods: POST");

    header("Access-Control-Allow-Age: 3600");

    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Headers, Authorization, X-Requested-With");

    // Ошибка в введённых данных
    function errorDoc($error){
        $result['error']['code'] = 422;
        $result['error']['message'] = "Validation error";
        ttp_response_code(422);
        if($error == "doc") {
            $result['error']['errors']['document'] = "Номер документа меньше 10 символов";
        } else
        if($error == "document-number"){
            $result['error']['errors']['document'] = "Введите номер документа";
        } else
        if($error == "pass2"){
            $result['error']['errors']['password2'] = "Введённые пароли не совпадают";
        } else
        if($error == "first-name"){
            $result['error']['errors']['first-name'] = "Введите имя";
        } else
        if($error == "last-name"){
            $result['error']['errors']['last-name'] = "Введите фамилию";
        }
        if($error == "password-null"){
            $result['error']['errors']['password'] = "Введите пароль";
        }
        return $result;
    }

    $result = array();

    if(empty($_POST['first-name'])){
        $result = errorDoc("first-name");
    }
    if(empty($_POST['last-name'])){
        $result = errorDoc("last-name");
    }
    if(empty($_POST['document_number'])){
        $result = errorDoc("document-number");
    }else if(strlen($_POST['document_number']) < 10){
        $result = errorDoc("doc");
    }
    if(empty($_POST['password'])){
        $result = errorDoc("password-null");
    }
    if(!empty($_POST['password']) && !empty($_POST['password2']) && $_POST['password'] != $_POST['password2']){ 
        $result = errorDoc("pass2");
    }

    // Ошибок не обнаружено
    if(empty($result)){
        http_response_code(200);
    }

    // Отправка данных к клиенту
    echo json_encode($result);

?>