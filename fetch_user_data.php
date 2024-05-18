<?php
include 'layout/config.php';
if(isset($_GET['email'])) {
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $sql = "SELECT * FROM job_applications WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $data = [
            'name' => $row['name'],
            'location' => $row['location'],
            'career_mob' => $row['career_mob']
        ];
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'No data found for the provided email.'));
    }
} else {
    echo json_encode(array('error' => 'Email not provided.'));
}
?>

