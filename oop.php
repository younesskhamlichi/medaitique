<?php
class Hello{
function sayHello(){ 
echo 'Hello World';
echo '<br>';

}
}
$obj = new Hello;
$obj ->sayHello();







class User{
    //member variables
    public $id;
    public $name;
    public $email;
    public $phone;
   


    function getData(){
        return 
        "ID : ".$this->id.
        "<br>Name : ".$this->name.
        "<br>Email".$this->email.
        "<br>Phone : ".$this->phone."<br>";
        }
    }


$u1 = new User();
$u1->id = 1;
$u1->name = "Harry Potter";
$u1->email = "harry@gmail.com";
$u1->phone = "9632587415";

      
        echo $u1->getData();


        $u2 = new User();
        $u2->setData(2, "Hermione", "hermione@gmail.com","7896545546");
        echo $u2->getData();
    
?>