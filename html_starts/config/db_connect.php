<?php 
 $connection = mysqli_connect('localhost', 'ama', 'root', 'sneakers');
 
if(!$connection){
    echo'coonection error : ' . mysqli_connect_error();
}
?>