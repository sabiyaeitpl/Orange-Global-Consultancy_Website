<?php
include 'db_connection.php';
header('content_type:application/json');

$sql="select * from `menu_items` WHERE status =1";
   $sqlrun=$con->query($sql);
   $result=array();
   if($sqlrun->num_rows > 0){
       $row=array();
       while($menurow=$sqlrun->fetch_assoc()){
           $row['id']=$menurow["id"];
           $row['name']=$menurow["name"];
           $row['parent_id']=$menurow["parent_id"];
           $row['url']=$menurow["url"];
           array_push($result,$row);
           
       }
   }
   
   else{
       
   }
   $finalresult['flag']=1;
   $finalresult['msg']='menu list get successfully';
   $finalresult['data']=$result;
   
   $con -> close();
   echo json_encode($finalresult);
  

?>