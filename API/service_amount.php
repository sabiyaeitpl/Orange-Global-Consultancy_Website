<?php
include 'db_connection.php';
header('content_type:application/json');

$service_name = $_POST["service_name"];

$sql ="select * from service_amount where status=1";
$sqlrun=$con->query($sql);
$result=array();
   if($sqlrun->num_rows > 0){
       $row=array();
       while($menurow=$sqlrun->fetch_assoc()){
           $row['id']=$menurow["id"];
           $row['service_id']=$menurow["service_id"];
           $row['service_name']=$menurow["service_name"];
           $row['amount']=$menurow["amount"];
           $row['status']=$menurow["status"];
           array_push($result,$row);
           
       }
       $finalresult['flag']=1;
   $finalresult['msg']='service amount get successfully';
   $finalresult['data']=$result;
   }
   
   else{
       $finalresult['flag']=0;
   $finalresult['msg']='No service amount';
   $finalresult['data']=$result;
   
   }
   
   $con -> close();
   echo json_encode($finalresult);

?>