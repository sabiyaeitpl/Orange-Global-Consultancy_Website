<?php
   include 'layout/head.php';
   $table = 'products';
   $section_title = 'Product';
   $title = 'Manage '.$section_title;
   $breadcumb_title = 'Add '.$section_title;
   
    
    $categories_id  = '';
    $name   = '';
    $price   = '';
    $sell_price   = '';
    $short_desc = '';
    $description = '';
    $image='';
    $status='';
    $msg='';
   
    try {
    if(isset($_GET['id']) && $_GET['id']!='')
    {
        $breadcumb_title = 'Edit '.$section_title;
        $id=get_safe_value($con,$_GET['id']);
        $res=mysqli_query($con,"select * from $table where id='$id'");
        $check=mysqli_num_rows($res);
        if($check>0){
            $row=mysqli_fetch_assoc($res);
            $categories_id=$row['categories_id'];
            $name=$row['name'];
            $price=$row['price'];
            $sell_price=$row['sell_price'];
            $short_desc=$row['short_desc'];
            $description=$row['description'];
            $image=$row['image'];
            $status=$row['status'];
        }else{
            //header('location:banner.php');
            
                ?>
            
         <script>
        window.location.href='magazine_list.php.php';
        </script>
        <?php
            die();
        }
    }
    if(isset($_POST['submit']))
    {
        
        $categories_id=get_safe_value($con,$_POST['category_id']);
        $name=get_safe_value($con,$_POST['name']);
        $price=get_safe_value($con,$_POST['price']);
        $sell_price=get_safe_value($con,$_POST['sell_price']);
        $short_desc=get_safe_value($con,$_POST['short_desc']);
        $description=get_safe_value($con,$_POST['description']);
        
        if(isset($_GET['id']) && $_GET['id']==0)
        {
            if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
                $msg="Please select only png,jpg and jpeg image formate";
            }
        }
        else
        {
            if($_FILES['image']['type']!=''){
                    if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
                    $msg="Please select only png,jpg and jpeg image formate";
                }
            }
        }
    
        
        if($msg=='')
        {
            if(isset($_GET['id']) && $_GET['id']!='')
            {
                if($_FILES['image']['name']!='')
                {
                    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                     if (!move_uploaded_file($_FILES['image']['tmp_name'], PRODUCT_IMAGE_SERVER_PATH . $image)) {
                        throw new Exception("Failed to move the uploaded file.");
                    }else{
                        move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
                    }
                    mysqli_query($con,"update $table set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',image='$image',sell_price='$sell_price' where id='$id'");
                }
                else
                {
                    mysqli_query($con,"update $table set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',sell_price='$sell_price' where id='$id'");
                }    
            }
            else
            {
                $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
                if (!move_uploaded_file($_FILES['image']['tmp_name'], PRODUCT_IMAGE_SERVER_PATH . $image)) {
                    throw new Exception("Failed to move the uploaded file.");
                }else{
                    move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
                }
                
                mysqli_query($con,"insert into $table(`categories_id`, `name`, `price`,`image`, `short_desc`, `description`,`sell_price`) values('$categories_id','$name','$price','$image','$short_desc','$description','$sell_price')");

            }
            //	header('location:banner.php');
        
            ?>
            
            <script>
            window.location.href='products.php';
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
                                    <label class="col-sm-2 col-form-label">product title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" name="name" value="<?php echo $name?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="category_id" required>
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,name from product_categories where status=1 order by name asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
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
                                    <label class="col-sm-2 col-form-label">product prisc</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" name="price" value="<?php echo $price?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sale prisc</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" name="sell_price" value="<?php echo $sell_price?>" required>
                                    </div>
                                </div>
                                                              
                                
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="10" id="editor" name="short_desc" required><?php echo $short_desc ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Long Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="20" id="editor1" name="description" required><?php echo $description ?></textarea>
                                    </div>
                                </div>
                               
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                    <?php

                                        if ($image!='') {
                                            echo "<a target='_blank' href='#'><img width='100px' height='100px' src='".PRODUCT_IMAGE_SITE_PATH.$image."'/></a>";
                                        }
									 ?>
                                        <input type="file" class="form-control" id="" name="image"  >
                                    </div>
                                </div>
                                <?php if ($role_id==1) { ?>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Status</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="gridRadios1" value="1" <?php echo ($status!="")?(($status==1)?'checked':''):'' ?> >
                                                <label class="form-check-label" for="gridRadios1">
                                                   Approved
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="gridRadios2" value="2" <?php echo ($status!="")?(($status==2)?'checked':''):'' ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Pending
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="gridRadios3" value="0" <?php echo ($status!="")?(($status==0)?'checked':''):'' ?> >
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <?php
                                    }
                                    else{
                                        ?>
                                        <input type="hidden" name="status" value=<?php echo isset($_GET['id'])?$status:'2' ?> readonly>
                                        <?php
                                    }
                                ?>
                                

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
