<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 19.12.17
 * Time: 15:48
 */
namespace Home;


class ShopingCard{

}

$product = new ShopingCard();

if ($product instanceof ShopingCard) //чи $product есть экземпляром класа ShopingCard
    echo "Yes";

echo "<br>";
/*----------------------------------------------------------------------*/



class User  {
    //final class User{}

    public $name;
    public $password;
    public $email;
    public $city;

    public static $age;


    public function __construct($name, $password, $email, $city){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    public static function setAge($age){
        self::$age = $age;
    }

    public function getInfo(){
        $information = "{$this->name} "."{$this->password} "."{$this->email} "."{$this->city} ";
        return $information;
    }

    //public final function  getInfo() {}

//    public function getName(){
//        echo $this->name;
//        $this->test();
//    }
//
//    public function test(){
//        echo "Test";
//    }
}

$user = new User('Dima ', '12345 ', 'dimaoag@gmail.com ', 'Kyiv');

//var_dump($user);

echo $user->getInfo();
echo "<br>";
//$user->getName();
User::setAge(52);
echo User::$age;
echo "<br>";




/*----------------------------------------------------------------------*/

//class DestractableClass{
//    function __construct()
//    {
//        print "Constructor";
//        $this->name = "DestractableClass";
//    }
//
//    function __destruct()
//    {
//        print "Delete".$this->name;
//    }
//}
//
//$obj = new DestractableClass();
//
//// создание обекта с таким же именем вызывает диструктор
/*----------------------------------------------------------------------*/




// Наследование

class Moderator extends User{
    public $info;
    public $rights;

    function __construct($name, $password, $email, $city , $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);

        $this->info = $info;
        $this->rights = $rights;
    }

    public function getInfo(){
        $information = parent::getInfo();
        $information .= "{$this->info} "."{$this->rights}";

        return $information;
    }

}

$moder = new Moderator('Sasha', '54321', 'mail@mail.com', 'Lviv', 'Moderator', 'True');

echo $moder->getInfo();

/*----------------------------------------------------------------------*/


// Полимарфизм - слествие наследования, поведения одного и того же метода в разных класах
// Это кнопка;


//class A{
//    function Test(){
//        echo "Test A\n";
//    }
//    function Call(){
//        $this->Test();
//    }
//}
//
//class B extends A{
//    function Test()
//    {
//        echo "Test B\n";
//    }
//}
//
//$a = new A();
//$b = new B();
//
//echo "<br>";
//$a->Call();
//$b->Test();
//$b->Call();




// Инкапсуляция - private, protected, public, static;

// Абстрактный клас - невозможно создать екземпляр класа,



abstract class UserAbstract {
    public $name;
    public $status;

    abstract function getStatus();   //  должны быть реализовани в дочернем

}

class Admin extends UserAbstract {

    public function getStatus()
    {
        echo "Admin";
    }
}
echo '<br>';
$userAdmin = new Admin();
$userAdmin->getStatus();




// Интерфейсы - только обявленые поля и методы

interface FirstInterface{

    public function getName();
}

interface SecondInterface{

    public function getStatus();
}

interface ThirdInterface extends FirstInterface, SecondInterface{

}

class Test implements FirstInterface, SecondInterface {

    public $name = 'Dima';
    public $status = 'True';

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;
    }
}

echo '<br>';
$test = new Test();
$test->getName();
$test->getStatus();
echo '<br>';



// Трейты

trait Hello{
    public function sayHello(){
        echo " Hello ";
    }
}



trait World{
    public function sayWorld(){
        echo " World";
    }
}

class myHelloWorld {
    use Hello, World;

}

$myhello = new myHelloWorld();
$myhello->sayHello();
$myhello->sayWorld();
echo '<br>';


// __clone()

class One{

    private $name;
    private $city;
    private $id;

    function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;

    }

    function setId($id){
        $this->id = $id;
    }


    public function __clone()
    {
        $this->id = 0;
    }
}

$one = new One('Dima', 'Dnepr');
$one->setId(5);
var_dump($one);
echo '<br>';
$two = clone $one;
var_dump($two);
echo '<br>';



// __get()  __set()


class GetSet{
    private $number = 1;

    public function __get($name)
    {
        echo "You get {$name}";
    }

    public function __set($name, $value)
    {
        echo "You set in $name is $value";
    }

}

$getset = new GetSet();
$getset->num;
$getset->num = 54;








