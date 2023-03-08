<?php
//!Step One
/* class Human{
    public function sayHi(){
        echo "Assalamualaikim";
    }
}
class Cat{
    public function sayHi(){
        echo "Meow";
    }
}
class Dog{
    public function sayHi(){
        echo "Woof";
    }
}

$h1= new Human();
$c1 =new Cat();
$d1 =new Dog();

echo $h1->sayHi() . PHP_EOL; 
echo $c1->sayHi(). PHP_EOL;
echo $d1->sayHi(). PHP_EOL; */

//!Step two (Get & Set value)
/* 
class Human{

    public $name;
    public function sayHi(){
        echo "Assalamualaikim";
    }
    
}


$h1= new Human();
$h1->name= "Hasin";//Set

$h1->sayHi(); 
echo $h1->name. PHP_EOL;//get */
//!Step Three (Get & Set value)
/* 
class Human{

    public $name;
    public function sayHi(){
        echo "Assalamualaikim";
    }
    public function sayName(){
        echo "My name is {$this->name}";
    }
    
}


$h1= new Human();
$h1->name= "Hasin";//Set
$h2= new Human();
$h2->name= "Haider";//Set

$h1->sayHi(); 
$h2->sayName();  */



//!Step four (Get & Set value)
/* 
class Human{

    public $name;
    public function sayHi(){
        echo "Assalamualaikim \n";
        $this->sayName();
    }
    public function sayName(){
        echo "My name is {$this->name} \n";
    }
    
}


$h1= new Human();
$h1->name= "Hasin";//Set
$h2= new Human();
$h2->name= "Haider";//Set

$h1->sayHi(); 
$h2->sayName(); 

 */


//!Step five (private)

class Human{

    public $name;
    public function sayHi(){
        echo "Assalamualaikim \n";
        $this->sayName();
    }
    private function sayName(){
        echo "My name is {$this->name} \n";
    }
    
}


$h1= new Human();
$h1->name= "Hasin";//Set
$h2= new Human();
$h2->name= "Haider";//Set

$h1->sayHi(); 
//$h2->sayName(); 



