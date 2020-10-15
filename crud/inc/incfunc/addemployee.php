<?php 
//This is an I creator function
function getNewId($students){
    $maxId = max(array_column($students,'id'));
    return $maxId+1;
}

/* Add employee Function*/
function addEmployee( $svc, $name, $age, $trade, $bname, $slen) {
    $found = false;
    $serialziedData = file_get_contents( DB_NAME );
    $students       = unserialize( $serialziedData );
    foreach ($students as $_student) {
        if($_student['svc']==$svc){
            $found = true;
        break;
        }
    }
    if(!$found){
        //$id= count($students)+1; 
        $id= getNewId($students); 
        $student = array(
            'id'           => $id,
            'svc'           => $svc,
            'name'          => $name,
            'age'           => $age,
            'trade'         =>$trade,
            'bname'        =>$bname,
            'slen'         =>$slen,
        );
        array_push( $students, $student );
        $serializedData = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
        return true;
    }
    return false;


}

?>