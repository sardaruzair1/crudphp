<?php
// include('dbConfig.php');
// if(isset($_GET['user_id'])){
// $user_id = $_GET['user_id'];
// $delete = "DELETE FROM `users` WHERE `user_id`= $user_id";
// $result = $dbconn->query($delete);

// if($result == true){
// echo "Record Deleted Successfully";
// header("location: index.php");
// // }
// else{
// echo "Error deleting record " . $dbconn->error;
// }
// }

?>


<?php
// echo $_GET['id'];

if(isset($_GET['id'])){

    $id= $_GET['id'];

// echo $id;

    $delete = $conn->query("DELETE FROM `users` WHERE `user_id`='$id'");
    $id= $_GET['id'];
    if($delete){
      echo "success";
    }else{
        echo "fail";
    }




}


?>