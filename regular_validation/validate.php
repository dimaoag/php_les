<?php

    require_once "../vendor/autoload.php";

    use Respect\Validation\Validator as V;

    if(!isset($_REQUEST['submit'])){
        echo "Yes";
    }

//    $data = [
//        'login' => $_REQUEST['login'],
//        'email' => $_REQUEST['email'],
//        'password' => $_REQUEST['password']
//    ];
//
//
//    $validatorLogin = V::stringType()->alnum()->length(3, 20);
//        //alnum() = a-z0-9;
//    $validatorEmail = V::email();
//    $validatorPassword = V::numeric()->positive()->intVal();
//
//
//    $isValidLogin = $validatorLogin->validate($data['login']);
//    $isValidEmail = $validatorEmail->validate($data['email']);
//    $isValidPassword = $validatorPassword->validate($data['password']);
//
//    if (!$isValidLogin || !$isValidEmail || !$isValidPassword) {
//        exit('Not Valid');
//
//    }
//    else {
//        echo $data['login'] . "<br>";
//        echo $data['email'] . "<br>";
//        echo $data['password'] . "<br>";
//    }

    //$validatorEmail->assert($data['login');

    class User{
        public $login;
        public $email;
        public $password;

        function __construct($login, $email, $password)
        {
            $this->login = $login;
            $this->email = $email;
            $this->password = $password;
        }
    }

    $user = new User($_REQUEST['login'], $_REQUEST['email'], $_REQUEST['password']);

    $validator = V::attribute("login", V::alnum()->noWhitespace()->length(3, 20))->
                    attribute("email", V::email())->
                    attribute("password", V::numeric()->positive()->intVal());

    try{
        $validator->assert($user);
    }
    catch (\Respect\Validation\Exceptions\NestedValidationException $ex){
        //echo $ex->getFullMessage();
        $arr = array(
            'alnum' => "HEllo",
            'notWhitespace' => "HEllo",
            'length' => "HEllo",
            'numeric' => "HEllo"
        );

        echo "<pre>";
        print_r($ex->findMessages($arr));
        echo "</pre>";
        exit();
    }

?>