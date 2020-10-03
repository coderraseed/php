<?php 
define( 'DB_NAME', 'C:/xampp/htdocs/php.local.com/crud/data/db.txt' );
function seed(){
    $data = array(
        array(
            'svc'           => 4564,
            'name'          => 'Rubel',
            'age'           => 25,
            'trade'    =>'',
            'S/Len'         =>'',
            'B/Name'        =>'',
            'Enroll'        =>'',
            'Returned'      =>'',
        ),
        array(
            'svc' => 4562,
            'name' => 'rased',
            'age'  => 24,
        ),
    );
    $serializedData = serialize( $data );
    file_put_contents( DB_NAME, $serializedData, LOCK_EX );
}
include_once "templates/list.php";

function addStudent( $svc, $name, $age) {
    $serialziedData = file_get_contents( DB_NAME );
    $students       = unserialize( $serialziedData );
    $student = array(
        'svc' => $svc,
        'name' => $name,
        'age'  => $age,
    );
    array_push( $students, $student );
    $serializedData = serialize( $students );
    file_put_contents( DB_NAME, $serializedData, LOCK_EX );

  
}

?>