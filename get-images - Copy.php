<?php
$conn = new mysqli('localhost','root','','reactjs');

$get_customers = $conn->query("select * from uploaded_images");
$count_customers = $get_customers->num_rows;
if ($count_customers > 0) {

    $result = array();
    while ($fetch_all_customers = $get_customers->fetch_assoc()) {
          $result[] = $fetch_all_customers;
          $response = array('items' => $result);
    }

}else {
      $response = array('error' => true , 'message' => 'Images Not Founds');
}

/* Output Header */
header('Content-type:application/json');
echo json_encode($response);

 ?>
