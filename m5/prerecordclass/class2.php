<?php
class Human {
    public $name;

    public function __construct( $humanName ) {
        echo "New Human object is created\n";
        $this->name = $humanName;
    }

    public function sayHi() {
        echo "Assalamu Alaikum";
        $this->sayName();
    }

    public function sayName() {
        echo "My name is {$this->name}\n";
    }
    get_file_data( $file:string, $default_headers:array, $context:string )
    
}
$h1 = new Human( "Rashed" );
$h1->sayHi();