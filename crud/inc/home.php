<?php 
        $info  = '';
        $task  = $_GET['task'] ?? 'report';
        $error  = $_GET['error'] ?? '0';
        if('delete'==$task){
            $id  = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
            if($id>0){
                deleteEmployeeId($id);
                header( 'location: /crud/index.php?task=report' );  
            }
        }
        if('deleteall'==$task){
                deleteAllEmployee($id);
                header( 'location: /crud/index.php?task=report' );  
            }
        
        if ( 'seed' == $task ) {
            seed();
            $info = "Seeding has completed";
        }
        $svc=''; 
        $name='';
        $age='';
        $trade='';
        $bname='';
        $slen='';
        if(isset($_POST['submit'] )){
            $svc = filter_input( INPUT_POST, 'svc', FILTER_SANITIZE_STRING );
            $name = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_STRING );
            $age  = filter_input( INPUT_POST, 'age', FILTER_SANITIZE_STRING );
            $trade  = filter_input( INPUT_POST, 'trade', FILTER_SANITIZE_STRING );
            $bname  = filter_input( INPUT_POST, 'bname', FILTER_SANITIZE_STRING );
            $slen  = filter_input( INPUT_POST, 'slen', FILTER_SANITIZE_STRING );
            $id  = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_STRING );
            if($id){
                //update the existing student
                $result=updateEmployee( $id, $svc, $name, $age, $trade, $bname, $slen );
                if($result){
                    header( 'location: /crud/index.php?task=report' ); 
                }else{
                    $error = 1;
                }
            }else{
                //add a new student
                if ( $svc != '' && $name != '' && $age != '' && $trade!='' && $bname!='' && $slen!='' ) {
                    //addEmployee( $svc, $name, $age, $trade, $bname, $slen );
                    $result=addEmployee( $svc, $name, $age, $trade, $bname, $slen );
                    if($result){
                        header( 'location: /crud/index.php?task=report' );                    
                    }else {
                        //header( 'location: /crud/index.php?task=report & error=1');                
                        $error = 1;  
                    } 
                }
            }



            /*if($id){
                //update the existing student
                if ( $fname != '' && $lname != '' && $roll != '' ) {
                    $result = updateStudent($id, $fname, $lname, $roll);
                    if ( $result ) {
                        header( 'location: /crud2/index.php?task=report' );
                    } else {
                        $error = 1;
                    }
                }
            }else{
                //add a new student
                if ( $fname != '' && $lname != '' && $roll != '' ) {
                    $result = addStudent( $fname, $lname, $roll );
                    if ( $result ) {
                        header( 'location: /crud2/index.php?task=report' );
                    } else {
                        $error = 1;
                    }
                }
            }*/
        }
?>