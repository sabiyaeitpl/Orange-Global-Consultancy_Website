<?php
include 'db_connection.php';
header('content_type:application/json');


$sql ="select * from `phonepay_apis` where status =1 limit 1";
$sqlrun=$con->query($sql);
$result=array();
   if($sqlrun->num_rows > 0){
       $row=array();
       while($menurow=$sqlrun->fetch_assoc()){
           $row['id']=$menurow["id"];
           $row['payment_gateway_type']=$menurow["payment_gateway_type"];
           $row['url']=$menurow["url"];
           $row['merchant_id']=$menurow["merchant_id"];
           $row['key_index']=$menurow["key_index"];
           $row['salt_key']=$menurow["salt_key"];
           array_push($result,$row);
           
       }
       $finalresult['flag']=1;
   $finalresult['msg']='payment gateway get successfully';
   $finalresult['data']=$result;
   }
   
   else{
       $finalresult['flag']=0;
   $finalresult['msg']='No payment gateway';
   $finalresult['data']=$result;
   
   }
   
   $con -> close();
   echo json_encode($finalresult);

?>