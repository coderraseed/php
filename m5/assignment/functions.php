<?php



class Person {
    private $name;
    private $email;
    public function __construct( $name, $email ) {
        $this->name  = $name;
        $this->email = $email;
    }
    public function setName( $name ) {
        $this->name = $name;
    }
    public function setEmail( $email ) {
        $this->email = $email;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
}

class Admin extends Person{
    public static function isAdmin()
    {
        return true;
    }
}



    //print_r($_POST);
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $person = new Person( $name, $email );
   
    $person->setName( $name);
    $person->setEmail( $email );
    
    echo "<h2>User Information:</h2>";
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
  



/* class Person {
private $name;
private $email;
public function setName( $name ) {
$this->name = $name;
}

public function setEmail( $email ) {
$this->email = $email;
}

public function getName() {
return $this->name;
}

public function getEmail() {
return $this->email;
}
}
if ( isset( $_POST['submit'] ) ) {

$name = $_POST['name'];
$email = $_POST['email'];

$person = new Person($name, $email);

$person->setName( $name);
$person->setEmail( $email );

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";

}
 */
/*
if (isset($_POST['submit'])) {
$name = $_POST["name"];
$email = $_POST["email"];

$person = new Person();
$person->setName($name);
$person->setEmail($email);

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";
} */

?>



