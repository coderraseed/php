<?php 
    function getemployee( $id ) {
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        foreach ( $students as $student ) {
            if ( $student['id'] == $id ) {
                return $student;
            }
        }    
        return false;
    }

    function deleteEmployeeId($id){
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        //unset($students[$id-1]);
        foreach ( $students as $offset=>$student ) {
            if ( $student['id'] == $id ) {
                unset($students[$offset]);
            }

        }
        $serializedData = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
    }
    

    function printRaw(){
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        print_r($students);
    }

    // function deleteAllEmployee($students, $id){
    //     $serialziedData = file_get_contents( DB_NAME );
    //     $students       = unserialize( $serialziedData );
    //     $maxId = max(array_column($students,'id'));
    //     unset($maxId);
    // }
?>