<?php

class Person{
  private $name;
  private $email;
  private static $ageLimit = 40; 

  public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;

    echo __CLASS__ . " created<br>";

  }


  public function getName(){
    return $name;
  }

  public static function getAgeLimit(){
    return self::$ageLimit;
  }
}

class Company extends Person{
   private $balance;
   public function __construct($name, $email, $balance){
     parent::__construct($name, $email);
     $this->balance = $balance;
     echo __CLASS__ . ' created <br>';
   }

   public function getBalance(){
     return $balance;
   }
}
// $person1 = new Person('John Doe', 'jd@gmail.com');
$company1 = new Company('John Doe', 'jd@gmail.com', 300);
echo $company1->getAgeLimit();
