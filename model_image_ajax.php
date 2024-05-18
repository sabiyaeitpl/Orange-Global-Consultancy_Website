<?php
 
   include('layout/config.php');
   if(isset($_GET['id'])){
      $id  =   $_GET['id'];
      $job_query = mysqli_query($con,"SELECT * FROM `job` WHERE `id`='$id'");
      if($job_query) {
        $job_data = mysqli_fetch_object($job_query); 

        echo json_encode($job_data);
        //echo $job_data;
        //return $job_data;
      }
       
   }
    

?>