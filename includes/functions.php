<?php
    include_once("db_conn.php");

    function remove($conn, $table, $id, $callback){
        echo $sql = "delete from $table where id=$id";
        
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "failed";
            header('location: '.$callback.'.php');
        }else {
            echo "done";
            header('location: '.$callback.'.php');
        }
    }
?>