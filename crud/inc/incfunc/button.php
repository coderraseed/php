<?php 
    function disPlayNone(){
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        $ras=count($students);
        $i=4;
        if($i<=$ras){ return 'display:none';}
    } 


    function deleteAllShow(){
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        $ras=count($students);
        $i=3;
        if($i>=$ras){ 
            return 'display: none';
        }
    }

//     //function deleteAll(){
//         $serialziedData = file_get_contents( DB_NAME );
//         $students       = unserialize( $serialziedData );
//         array_pop($students);
//         print_r($students);
    
//    // }


?>