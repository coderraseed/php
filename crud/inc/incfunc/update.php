<?php 
    function updateEmployee( $id, $svc, $name, $age, $trade, $bname, $slen ) {
        $found = false;
        $serialziedData = file_get_contents( DB_NAME );
        $students       = unserialize( $serialziedData );
        foreach ( $students as $_student ) {
            if ( $_student['svc'] == $svc && $_student['id'] != $id ) {
                $found = true;
                break;
            }
        }
        if ( ! $found ) {
            $students[ $id - 1 ]['svc'] = $svc;
            $students[ $id - 1 ]['name'] = $name;
            $students[ $id - 1 ]['age']  = $age;
            $students[ $id - 1 ]['trade'] = $trade;
            $students[ $id - 1 ]['bname'] = $bname;
            $students[ $id - 1 ]['slen']  = $slen;
            $serializedData               = serialize( $students );
            file_put_contents( DB_NAME, $serializedData, LOCK_EX );    
            return true;
        }    
        return false;
    }
    
?>