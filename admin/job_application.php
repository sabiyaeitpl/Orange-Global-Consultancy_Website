<?php
    $rowNumber = 1;
   include 'layout/head.php';
   $title = 'Job Application';
   $manage_page = 'manage_jobs.php';
   $table = 'job_applications';
   $join_table ='job';

   if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update $table set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);

        $sql="SELECT $table.*,$join_table.title,$join_table.menu_id FROM $table,$join_table WHERE $table.job_id=$join_table.id";
        $res=mysqli_query($con,$sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from $table where id='$id'";
		$res=mysqli_query($con,$delete_sql);
        $sql="SELECT $table.*,$join_table.title,$join_table.menu_id FROM $table,$join_table WHERE $table.job_id=$join_table.id";
        $res=mysqli_query($con,$sql);
	}
    if($type=='search'){
		$id=get_safe_value($con,$_GET['id']);
		$sql="SELECT $table.*,$join_table.title,$join_table.menu_id FROM $table,$join_table WHERE $table.job_id=$join_table.id";
        $res=mysqli_query($con,$sql);
	}
}else{
  
    $sql="SELECT $table.*,$join_table.title,$join_table.menu_id FROM $table,$join_table WHERE $table.job_id=$join_table.id";
    $res=mysqli_query($con,$sql);
   
    
}


?>

<main>
        <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h1><?php echo $title; ?></h1>
                        <div class="text-zero top-right-button-container">
                            <a href="<?php echo $manage_page; ?>"><button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button></a>
                        </div>

                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title; ?> List</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">name</th>
                                        <th scope="col">mobile</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Resume</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = mysqli_num_rows($res);
                                    if($count > 0){
                                        while($row = mysqli_fetch_assoc($res)){
                                            ?>
                                     <tr>
                                            <th scope="row"><?php echo $rowNumber; ?></th>                                            
                                            <td><?php echo $row['title'] ?></td> 
                                            <?php 
                                               $menu_id = $row['menu_id']; 
                                               $menu_name = mysqli_fetch_assoc(mysqli_query($con,"SELECT name as country FROM `menu_items` where id='$menu_id'"));
                                            ?>
                                            <td><?php echo $menu_name['country'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['mobile'] ?></td>
                                            <td><?php echo $row['location'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><a href="<?php echo APPLICATION_IMAGE_SITE_PATH.$row['image']?>" target="_blank"><?php echo $row['image'] ?></a></td>                                          
                                            <td>
                                            <?php
                                               if($row['status']==1){
                                                echo "<span class='badge badge-pill badge-success'><a href='?type=status&operation=deactive&id=".$row['id']."' class='badge-text-color'>Checked</a></span>&nbsp;";
                                            }else{
                                                echo "<span class='badge badge-pill badge-danger'><a href='?type=status&operation=active&id=".$row['id']."' class='badge-text-color'>Uncheked</a></span>&nbsp;";
                                            }
                                                
                                                ?>
                                            </td>
                                     </tr>
                                    <?php  
                                    $rowNumber++; 
                                        }
                                }else{
                                    echo '<tr>';
                                    echo '<td style="color:red">Data Not Found</td>';
                                    echo '</tr>';
                                } ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
   include 'layout/footer.php';
?>