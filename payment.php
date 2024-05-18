<?php 
include('layout/app2.php'); 

// Replace these with your actual PhonePe API credentials
 if(isset($_POST['submit'])){
    if(isset($_POST['job_id']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['location']) && isset($_POST['mobile']) && isset($_POST['amount'])){
    $merchantId = 'PGTESTPAYUAT'; // sandbox or test merchantId
    $apiKey="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399"; // sandbox or test APIKEY
    $redirectUrl = 'payment-success.php';
     
    // Set transaction details
    echo $order_id = uniqid(); echo "<br>";
    echo $name=$_POST['name']; echo "<br>";
    echo $email=$_POST['email']; echo "<br>";
    echo $mobile=$_POST['mobile']; echo "<br>";
    echo $amount = $_POST['amount']; echo "<br>"; // amount in INR
    echo $description = 'Payment for Service';
     
    die(); 
    $paymentData = array(
        'merchantId' => $merchantId,
        'merchantTransactionId' => "MT7850590068188104", // test transactionID
        "merchantUserId"=>"MUID123",
        'amount' => $amount*100,
        'redirectUrl'=>$redirectUrl,
        'redirectMode'=>"POST",
        'callbackUrl'=>$redirectUrl,
        "merchantOrderId"=>$order_id,
       "mobileNumber"=>$mobile,
       "message"=>$description,
       "email"=>$email,
       "shortName"=>$name,
       "paymentInstrument"=> array(    
        "type"=> "PAY_PAGE",
      )
    );
     
     
     $jsonencode = json_encode($paymentData);
     $payloadMain = base64_encode($jsonencode);
     $salt_index = 1; //key index 1
     $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
     $sha256 = hash("sha256", $payload);
     $final_x_header = $sha256 . '###' . $salt_index;
     $request = json_encode(array('request'=>$payloadMain));
                    
    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
       CURLOPT_POSTFIELDS => $request,
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
         "X-VERIFY: " . $final_x_header,
         "accept: application/json"
      ],
    ]);
     
    $response = curl_exec($curl);
    $err = curl_error($curl);
     
    curl_close($curl);
     
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
       $res = json_decode($response);
     
        if(isset($res->success) && $res->success=='1'){
        $paymentCode=$res->code;
        $paymentMsg=$res->message;
        $payUrl=$res->data->instrumentResponse->redirectInfo->url;
         
        header('Location:'.$payUrl) ;
        }
    }
    }else{
        echo "Data Not found";
    }

}





?>
<section id="about" class="shadow-sm">
   <div class="container" data-aos="fade-up">
   <div class="row position-relative">
   <div class="col-md-12">
       <!--<div class="col-lg-12">-->
   <div class="our-story">
      <h3 class="text-center">Payment Details</h3>
      <?php //echo $row_job['description'] ?>
      <div class="bg-light rounded-3 shadow p-3">
         <div id="Form-box">
            <div class="card">
                <div class="col-12">
                <form id="careerintrest" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <div class="row">
                        <input type="hidden" name="job_id" value="<?php echo $_GET['id'] ?>">
                        <div class="col-md-12 mb-3"><input type="email" class="form-control" id="career_email" name="email" placeholder="Email"   /></div>
                        <div class="col-md-12 mb-3"><input type="text" class="form-control" id="career_name" name="name" placeholder="Full Name*"  required /></div>
                        <!--<div class="col-md-4 mb-3"><input type="email" class="form-control" id="career_email" name="email" placeholder="Email"   /></div>-->
                        <div class="col-md-12 mb-3"><input type="text" class="form-control" id="career_location" name="location" placeholder="Location*" required/></div>
                     </div>
                  </div>
                    <div class="form-group">
                     <div class="row">
                        <div class="col-md-6 mb-3"><input type="number" minlength="11" maxlength="13" class="form-control" name="mobile" id="career_mob" placeholder="Mobile No.*"/></div>
                        <div class="col-md-6 mb-3"><input type="number" minlength="11" maxlength="13" class="form-control" name="amount" id="career_amount" placeholder="Amount.₹"/></div>
                     </div>
                  </div>
                  <!--<div class="form-group">-->
                  <!--   <div class="row">-->
                  <!--      <div class="col-sm-12 mb-3"><textarea class="form-control" name="cover_letter" id="career-cover_letter" placeholder="Write a short cover letter" rows="5"></textarea></div>-->
                  <!--   </div>-->
                  <!--</div>-->
                    <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12 mb-1  text-center">
                           <button class="button" name="submit" type="submit">Submit</button>
                        </div>
                     </div>
                    </div>
                </form>
            </div>
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('#career_email').on('keyup', function(){
            var email = $(this).val();
            console.log(email);
            $.ajax({
                url: 'fetch_user_data.php', 
                method: 'GET',
                data: {email: email},
                success: function(response){
                    var userData = JSON.parse(response);
                    $('#career_name').val(userData.name);
                    $('#career_location').val(userData.location);
                }
            });
        });
    });
</script>



<?php
   include('layout/footer.php');
?>