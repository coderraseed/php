<?php 
abstract class OurClass{
    public function doSomeThing(){
        echo "Doing Something";
    }
}

Class MyClass extends OurClass{
    function doSomeThing(){
        echo "Doing Nothing\n";
    }
}

$mc = new MyClass();
$mc ->doSomeThing(); 

//! If we declared a method by "final" key this function can't override

abstract class OurName{
    final function yourName(){
        echo "Doing Something\n";
    }
}

Class MyName extends OurName{
    /* function yourName(){
        echo "Doing Nothing\n"; 
}*/
}
$md = new MyName();
$md ->yourName();