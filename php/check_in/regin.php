<?php 
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['submit'])) {
    unset($_SESSION['errors']['register']);

    $login = Validator::preProcessing($_POST['login']);
    $password = Validator::preProcessing($_POST['password']);
    [$error, $avatarName] =
        loadAvatar($maxFileSize, $validFileType, $avatarPath, 'avatar');

    if (empty($error)) {
        $avatar = $avatarName;

        if (Validator::validLength('Имя', $login, 'login', 2) &
            Validator::validLength('Password', $password, 'password')
        ) {
            $id = $dataAuth->check_in($login, $password, $avatar,"guest");

            if ($id < 0) {
                header('Location: /php/check_in');
                $_SESSION['errors']['register'] = 'Пользователь с такими данными зарегестрирован в системе.';
            } else if ($id > 0) {
                $_SESSION['user'] = json_encode($dataAuth->find($id), JSON_UNESCAPED_UNICODE);
                $_SESSION['auth'] = true;
                header('Location: /');
                die();
            } else {
                header('Location: /php/check_in');
                $_SESSION['errors']['register'] = 'Сбой в системе. Не удалось зарегистрироваться.';
            }

        }
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['avatar'] = $avatar;

    }
}
