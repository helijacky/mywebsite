<?php
include ('ppconnect.php');
try{
    global $connString;
    $conn = pg_connect($connString);
    if ($conn==false){
        echo "Unable to connect";
    }
    else{
        echo " Connect successfully";
    }
    
    pg_close($conn);
}
    catch(Exception $e){
        echo $e->getMessage();
    }

?>