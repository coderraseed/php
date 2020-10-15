<?php 
    function seed(){
        $data = array(
            array(
                'id'           => 1,
                'svc'           => 45645,
                'name'          => 'Rubel',
                'age'           => 25,
                'trade'         =>'R/F',
                'bname'        =>'214mrou',
                'slen'         =>'5',
                // 'Enroll'        =>'',
                // 'Returned'      =>'',
            ),
            array(
                'id'           => 2,
                'svc'           => 45687,
                'name'          => 'rased',
                'age'           => 26,
                'trade'         =>'R/F',
                'bname'        =>'214mrou',
                'slen'         =>'7',
                // 'Enroll'        =>'',
                // 'Returned'      =>'',
            ),
            array(
                'id'           => 3,
                'svc'           => 45874,
                'name'          => 'Rubel',
                'age'           => 29,
                'trade'         =>'R/F',
                'bname'        =>'214mrou',
                'slen'         =>'10',
                // 'Enroll'        =>'',
                // 'Returned'      =>'',
            ),
        );
        $serializedData = serialize( $data );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
    }


?>