<?php

 include 'layout/head.php';
//    include 'database/connection.inc.php';
//    include 'database/function.inc.php';
 
   $table = 'all_services_countries';
   $section_title = 'All Countries we offer';
   $title = 'Manage '.$section_title;
   $breadcumb_title = 'Add '.$section_title;
   $type2 = "countries we offer";
   
    $heading='';
    $visa_type='';
    $image='';
    $procedure_pdf = "";
    $agreement_pdf = "";
    $msg='';
    $all_service_country_query = mysqli_query($con,"SELECT * FROM `services_countries`");
    
    try {
    if(isset($_GET['id']) && $_GET['id']!=''){
        $breadcumb_title = 'Edit '.$section_title;
        $id=get_safe_value($con,$_GET['id']);
        $res=mysqli_query($con,"select * from $table where id='$id'");
        $check=mysqli_num_rows($res);
        if($check>0){
            $row=mysqli_fetch_assoc($res);
            $service_country_id =   $row['service_country_id'];
            $heading            =   $row['heading'];
            $visa_type          =    $row['visa_type'];
            $image              =    $row['image'];
            $procedure_pdf      =   $row['procedure_pdf'];
            $agreement_pdf      =   $row['agreement_pdf'];
        }else{
            //header('location:banner.php');
            
                ?>
            
         <script>
        window.location.href='services_countries.php';
        </script>
        <?php
            die();
        }
    }
    if(isset($_POST['submit'])){
        // print_r($_FILES['procedure_pdf']);
        // die();
        $service_country_id = get_safe_value($con,$_POST['service_country_id']);
        $heading = get_safe_value($con,$_POST['heading']);
        $visa_type = get_safe_value($con,$_POST['visa_type']);
        // $image = get_safe_value($con,$_POST['image']);
        // $image = get_safe_value($con,$_POST['image']);
         //$image = get_safe_value($con,$_POST['image']);
        if(isset($_GET['id']) && $_GET['id']==0){
            if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg' && $_FILES['image']['type']!='image/gif'){
                $msg="Please select only png,jpg and jpeg image formate";
            }
        }else{
            
            if($_FILES['image']['type']!='' && $_FILES['procedure_pdf']['type']!='' && $_FILES['agreement_pdf']['type']!=''){
                if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg' && $_FILES['image']['type']!='image/gif'){
                    $msg="Please select only png,jpg and jpeg image formate";
                } elseif($_FILES['procedure_pdf']['type']!='application/pdf'){
                    $msg="Please select only pdf formate";
                } elseif($_FILES['agreement_pdf']['type']!='application/pdf'){
                    $msg="Please select only pdf formate";
                }
            }
        }
    
        
        if($msg==''){
            if(isset($_GET['id']) && $_GET['id']!=''){
        //          echo $service_country_id ."<br>";
        // echo $heading ."<br>";
        // echo $visa_type ."<br>";
        //         die($_GET['id']);
                if($_FILES['image']['name']!=''){
                    $image   = rand(111111111,999999999).'_'.$_FILES['image']['name'];
                     if (!move_uploaded_file($_FILES['image']['tmp_name'], MANAGE_WHY_IMAGE_SERVER_PATH . $image)) {
                        throw new Exception("Failed to move the uploaded file.");
                        //echo $_FILES['procedure_pdf']['error'];
                    }else{
                        move_uploaded_file($_FILES['image']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$image);
                    }
                    mysqli_query($con,"update $table set service_country_id='$service_country_id', heading='$heading',visa_type='$visa_type',image='$image' where id='$id'");
                }elseif($_FILES['procedure_pdf']['name']!=''){
                    $procedure_pdf   = rand(111111111,999999999).'_'.$_FILES['procedure_pdf']['name'];
                    if (!move_uploaded_file($_FILES['procedure_pdf']['tmp_name'], MANAGE_WHY_IMAGE_SERVER_PATH . $procedure_pdf)) {
                        throw new Exception("Failed to move the uploaded file.");
                        //echo $_FILES['procedure_pdf']['error'];
                    }else{
                        move_uploaded_file($_FILES['procedure_pdf']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$procedure_pdf);
                    }
                    mysqli_query($con,"update $table set service_country_id='$service_country_id', heading='$heading',visa_type='$visa_type',procedure_pdf='$procedure_pdf' where id='$id'");
                }elseif($_FILES['agreement_pdf']['name']!=''){
                    $agreement_pdf   = rand(111111111,999999999).'_'.$_FILES['agreement_pdf']['name'];
                    if (!move_uploaded_file($_FILES['agreement_pdf']['tmp_name'], MANAGE_WHY_IMAGE_SERVER_PATH . $agreement_pdf)) {
                        throw new Exception("Failed to move the uploaded file.");
                        //echo $_FILES['procedure_pdf']['error'];
                    }else{
                        //die('uuuuuuuuu');
                        move_uploaded_file($_FILES['agreement_pdf']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$agreement_pdf);
                    }
                    //die($agreement_pdf);
                    mysqli_query($con,"update $table set service_country_id='$service_country_id', heading='$heading',visa_type='$visa_type',agreement_pdf='$agreement_pdf' where id='$id'");
                }else{
                    mysqli_query($con,"update $table set service_country_id='$service_country_id', heading='$heading',visa_type='$visa_type' where id='$id'");
                }     
            }else{
                //die('raggu');
                $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                $procedure_pdf  = rand(111111111,999999999).'_'.$_FILES['procedure_pdf']['name'];
                $agreement_pdf  = rand(111111111,999999999).'_'.$_FILES['agreement_pdf']['name'];
                $destinationDirectory = MANAGE_WHY_IMAGE_SERVER_PATH;
                if (!move_uploaded_file($_FILES['image']['tmp_name'], MANAGE_WHY_IMAGE_SERVER_PATH . $image)) {
                    throw new Exception("Failed to move the uploaded file.");
                    // die();
                }else{
                    move_uploaded_file($_FILES['image']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$image);
                    move_uploaded_file($_FILES['procedure_pdf']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$procedure_pdf);
                    move_uploaded_file($_FILES['agreement_pdf']['tmp_name'],MANAGE_WHY_IMAGE_SERVER_PATH.$agreement_pdf);
                }
                mysqli_query($con,"insert into $table(service_country_id,heading,visa_type,image,procedure_pdf,agreement_pdf,status,created_at,type2) values('$service_country_id','$heading','$visa_type','$image','$procedure_pdf','$agreement_pdf','1',CURDATE(), '$type2')");
            }
        //	header('location:banner.php');
        
            ?>
            
            <script>
                //alert("successfull");
                window.location.href='all_services_countries.php';
            </script>
        <?php
            die();
        }

    }
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
                                    <label class="col-sm-2 col-form-label">Select Country</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" name="service_country_id" id="inputGroupSelect01">
                                            <option value="">select</option>
                                            <?php while($service_country = mysqli_fetch_assoc($all_service_country_query)) {?>
                                            <option value="<?php echo $service_country['id']; ?>"<?php if(!empty($_GET['id'])){if($service_country['id'] == $service_country_id) echo 'selected';} ?>><?php echo $service_country['heading']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Heading</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" name="heading" value="<?php echo $heading?>" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Contents</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="50" id="editor" name="content" required><?php echo $content ?></textarea>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Visa Type</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" name="visa_type" id="inputGroupSelect01">
                                            <option>select</option>
                                            <!-- <option value="visitor_visa">Visitor Visa</option>
                                            <option value="work_visa">Work Visa</option>
                                            <option value="h1b_visa">H1,H1B Visa</option> -->
                                            <option value="visitor_visa" <?php if($visa_type == 'visitor_visa') echo 'selected'; ?>>Visitor Visa</option>
                                            <option value="work_visa" <?php if($visa_type == 'work_visa') echo 'selected'; ?>>Work Visa</option>
                                            <option value="h1b_visa" <?php if($visa_type == 'h1b_visa') echo 'selected'; ?>>H1, H1B Visa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <?php
                                            if ($image!='') { ?>
                                                <a target='_blank' href="../media/allSearvices/.$image."><img width='100px' height='100px' src="../media/allSearvices/<?php echo $image; ?>"/></a>
                                        <?php    }
                                        ?>
                                        <input type="file" class="form-control" id="" name="image" accept="image/*" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Procedure PDF</label>
                                    <div class="col-sm-10">
                                        <?php
                                            if ($procedure_pdf!='') { ?>
                                                <a target='_blank' href="../media/allSearvices/<?php echo $procedure_pdf; ?>"><img  src=""/>Show PDF</a>
                                           <?php }
                                        ?>
                                        <input type="file" class="form-control" id="" name="procedure_pdf"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Agreement PDF</label>
                                    <div class="col-sm-10">
                                        <?php
                                            if ($agreement_pdf!='') { ?>
                                                <a target='_blank' href="../media/allSearvices/<?php echo $agreement_pdf; ?>"><img  src=""/>Show PDF</a>
                                           <?php }
                                        ?>
                                        <input type="file" class="form-control" id="" name="agreement_pdf" >
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                    <div class="field_error"><?php echo $msg?></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>


<?php
   include 'layout/footer.php';
?>
