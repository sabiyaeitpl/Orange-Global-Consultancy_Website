<?php

   include 'layout/head.php';
   $table = 'job';
   $section_title = 'Job';
   $title = 'Manage '.$section_title;
   $breadcumb_title = 'Add '.$section_title;
   $type2 = "Jobs_available";
   
    $title='';
    $menu_id='';
    $description='';
    $job_status='';
    $job_type='';
    $msg='';

    try {
    if(isset($_GET['id']) && $_GET['id']!=''){
         $breadcumb_title = 'Edit '.$section_title;
        $id=get_safe_value($con,$_GET['id']);
        $res=mysqli_query($con,"select * from $table where id='$id'");
        $check=mysqli_num_rows($res);
        if($check>0){
            $row=mysqli_fetch_assoc($res);
            $title=$row['title'];
            $menu_id=$row['menu_id'];
            $description=$row['description'];
            $job_status = $row['job_status'];
            $job_type = $row['type'];
            $image = $row['job_image'];
            $procedure_pdf = $row['procedure_dtl'];
            //die('$procedure_pdf');
            $agreement_pdf = $row['agreement'];
        }else{
            //header('location:banner.php');
            
                ?>
            
         <script>
        window.location.href='jobs.php';
        </script>
        <?php
            die();
        }
    }
    
// if(isset($_POST['submit'])) {
//     $title = get_safe_value($con, $_POST['title']);
//     $menu_id = get_safe_value($con, $_POST['menu_id']);
//     $description = get_safe_value($con, $_POST['description']);
//     $job_type = get_safe_value($con, $_POST['job_type']);
//     $job_status = get_safe_value($con, $_POST['job_status']);
    
//     $image_name = $_FILES['job_image']['name'];
//     $image_tmp = $_FILES['job_image']['tmp_name'];
//     $image_error = $_FILES['job_image']['error'];

//     if ($image_error === UPLOAD_ERR_OK) {
//         $file_parts = pathinfo($image_name);
//         $extension = $file_parts['extension'];
//         $job_image = uniqid() . '.' . $extension;
//         $destination = '../assets/img/' . $job_image;

//         if (move_uploaded_file($image_tmp, $destination)) {
//             if (isset($_GET['id']) && $_GET['id'] != '') {
//                 mysqli_query($con, "UPDATE $table SET title='$title', menu_id='$menu_id', description='$description', type='$job_type', job_status='$job_status', job_image='$job_image' WHERE id='$id'");
//             } else {
//                 mysqli_query($con, "INSERT INTO $table (title, menu_id, description, job_image, type, job_status, status) VALUES ('$title', '$menu_id', '$description', '$job_image', '$job_type', '$job_status', '1')");
//             }

//             ?>
//               <script>
//         window.location.href='jobs.php';
//         </script>
//             <?php
//             exit;
//         } else {
//             $msg = "Error uploading file";
//         }
//     } else {
//         $msg = "Error: " . $image_error;
//     }
// }


//------------------------------------------------------==========================
if (isset($_POST['submit'])) { 
        $title = get_safe_value($con, $_POST['title']);
        $menu_id = get_safe_value($con, $_POST['menu_id']);
        $description = get_safe_value($con, $_POST['description']);
        $job_type = get_safe_value($con, $_POST['job_type']);
        $job_status = get_safe_value($con, $_POST['job_status']);
        
        // Handle Image Upload
        $image_name = $_FILES['job_image']['name'];
        $image_tmp = $_FILES['job_image']['tmp_name'];
        $image_error = $_FILES['job_image']['error'];
        $image_destination = '../assets/img/';

        // Check if file was uploaded without errors
        if ($image_error === UPLOAD_ERR_OK) {
            // Move uploaded file to destination
            $image_file_parts = pathinfo($image_name);
            $image_extension = $image_file_parts['extension'];
            $image_job_image = uniqid() . '.' . $image_extension;
            $image_destination .= $image_job_image;

            if (!move_uploaded_file($image_tmp, $image_destination)) {
                $msg = "Error uploading image";
                throw new Exception($msg);
            }
        } else {
            $msg = "Error uploading image: " . $image_error;
            throw new Exception($msg);
        }
        
        // Handle Procedure Upload
        $procedure_name = $_FILES['procedure_dtl']['name'];
        $procedure_tmp = $_FILES['procedure_dtl']['tmp_name'];
        $procedure_error = $_FILES['procedure_dtl']['error'];
        $procedure_destination = '../assets/procedure/';

        if ($procedure_error === UPLOAD_ERR_OK) {
            $procedure_file_parts = pathinfo($procedure_name);
            $procedure_extension = $procedure_file_parts['extension'];
            $procedure_file = uniqid() . '.' . $procedure_extension;
            $procedure_destination .= $procedure_file;

            if (!move_uploaded_file($procedure_tmp, $procedure_destination)) {
                $msg = "Error uploading procedure details";
                throw new Exception($msg);
            }
        } else {
            $msg = "Error uploading procedure details: " . $procedure_error;
            throw new Exception($msg);
        }

        // Handle Agreement Upload
        $agreement_name = $_FILES['agreement']['name'];
        $agreement_tmp = $_FILES['agreement']['tmp_name'];
        $agreement_error = $_FILES['agreement']['error'];
        $agreement_destination = '../assets/agreement/';

        if ($agreement_error === UPLOAD_ERR_OK) {
            $agreement_file_parts = pathinfo($agreement_name);
            $agreement_extension = $agreement_file_parts['extension'];
            $agreement_file = uniqid() . '.' . $agreement_extension;
            $agreement_destination .= $agreement_file;

            if (!move_uploaded_file($agreement_tmp, $agreement_destination)) {
                $msg = "Error uploading agreement";
                throw new Exception($msg);
            }
        } else {
            $msg = "Error uploading agreement: " . $agreement_error;
            throw new Exception($msg);
        }

        // Insert or update into the database
        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "UPDATE $table SET title='$title', menu_id='$menu_id', description='$description', type='$job_type', job_status='$job_status', job_image='$image_job_image', procedure_dtl='$procedure_file', agreement='$agreement_file' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO $table (title, menu_id, description, job_image, type, job_status, procedure_dtl, agreement, status, type2) VALUES ('$title', '$menu_id', '$description', '$image_job_image', '$job_type', '$job_status', '$procedure_file', '$agreement_file', '1','$type2')");
        }

        // Redirect after successful insertion or update
        
        echo "<script>window.location.href = 'jobs.php';</script>";
        exit;
    }

//===================================================================
} catch (Exception $e) {
    // Error handling and reporting
    echo "An error occurred: " . $e->getMessage();
    // You can log the error or perform any necessary actions here
}

?>

<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1><?php  echo $title; ?></h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:history.back()"><?php echo $section_title; ?></a>
                            </li>
                            <li class="breadcrumb-item" class="active">
                                <a href="#"><?php echo $breadcumb_title; ?></a>
                            </li>
                            
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">
                <div class="col-12">
                <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4"><?php  echo $breadcumb_title; ?></h5>
                            <form action="" method="post" enctype="multipart/form-data" class="needs-validation tooltip-label-right" >
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="" name="title" value="<?php echo $title?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-8">
                                        <select name="menu_id" class="form-control" id="" required>
                                        <option>Select Country</option>
										<?php
										$res=mysqli_query($con,"select id,name from menu_items where status=1 order by name asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$menu_id){
												echo "<option selected value=".$row['id'].">".$row['name']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['name']."</option>";
											}
											
										}
										?>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Job Type</label>
                                    <div class="col-sm-8">
                                        <select name="job_type" id="" class="form-control">
                                            <option value="">Selct Type</option>
                                            <?php
										$res=mysqli_query($con,"select id,name from job_type where status=1 order by name asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['name']==$job_type){
												echo "<option selected>".$row['name']."</option>";
											}else{
												echo "<option>".$row['name']."</option>";
											}
											
										}
										?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="50" id="editor" name="description" required><?php echo $description ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="job_image" value="<?php echo $image; ?>">
                                    </div>
                                    <?php if(isset($_GET['id'])){  ?>
                                    <div class="col-sm-6" >
                                        <a target='_blank' href="../assets/img/<?php echo $image ?>"><img class="img-fluid" style="height:75px; width:70px;" src="../assets/img/<?php echo $image; ?>" /></a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Procedure Details (PDF)</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="procedure_dtl" <?php if(isset($_GET['id'])){ ?>required <?php } ?>>
                                    </div>
                                    <?php if(isset($_GET['id'])){  ?>
                                    <div class="col-sm-4">
                                        <a href="../assets/procedure/<?php echo $procedure_pdf; ?>" target="_blank">View Procedure Details (PDF)</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Agreement (PDF)</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="agreement" <?php if(isset($_GET['id'])){ ?>required <?php } ?>>
                                    </div>
                                    <?php if(isset($_GET['id'])){  ?>
                                    <div class="col-sm-6">
                                        <a href="../assets/agreement/<?php echo $agreement_pdf; ?>" target="_blank">View Agreement (PDF)</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Status</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="job_status"
                                                    id="gridRadios1" value="1" <?php echo ($job_status!="")?(($job_status==1)?'checked':''):'' ?> >
                                                <label class="form-check-label" for="gridRadios1">
                                                   Open
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="job_status"
                                                    id="gridRadios2" value="2" <?php echo ($job_status!="")?(($job_status==2)?'checked':''):'' ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Pending
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="job_status"
                                                    id="gridRadios3" value="0" <?php echo ($job_status!="")?(($job_status==0)?'checked':''):'' ?> >
                                                <label class="form-check-label" for="gridRadios3">
                                                    Closed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                    <div class="field_error"><?php echo $msg?></div>
                                </div>
                            </form>
                            <!--<a href="../assets/procedure/661509d0bcc65.pdf" target="_blank">Show fdgfddddddddddddddddddd</a>-->
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>
    

<?php

   include 'layout/footer.php';
?>