<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function __construct( $make, $model, $year ) {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make( $make ) {
        $this->make = $make;
    }

    public function set_model( $model ) {
        $this->model = $model;
    }

    public function set_year( $year ) {
        $this->year = $year;
    }

    public function display_info() {
        echo "=======================\n";
        echo "Car Make: " . $this->make . "\n";
        echo "Car Model: " . $this->model . "\n";
        echo "Car Year: " . $this->year . "\n";
    }
}
// Create a new Car object with make = 'Toyota', model = 'Corolla', year = 2015
$car = new Car( 'Toyota', 'Corolla', 2015 );

// Display the car's make, model, and year
$car->display_info();

// Update the car's make to 'Honda'
$car->set_make( 'Honda' );

// Update the car's model to 'Civic'
$car->set_model( 'Civic' );

// Display the updated car's make, model, and year
$car->display_info();