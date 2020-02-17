<?php 

// Create connection
$conn = new mysqli('localhost','root','','reactjs');

header('Content-type:application/json');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	
	$get_image = $conn->query("select * from uploaded_images WHERE id='".$id."'");
	$count_image = $get_image->num_rows;
	$fetch_image_name = $get_image->fetch_assoc();
	if ($count_image > 0) {
		
		$removed_file = unlink('img/'.$fetch_image_name['name']);
		
		if($removed_file){
			$sql = "DELETE FROM uploaded_images WHERE id='".$fetch_image_name['id']."'";

			if ($conn->query($sql) === TRUE) {
				echo "Image Removed";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else {
			$response = array('error' => true , 'message' => 'Not Removed File');
		}
		
		
		
	}else {
	  $response = array('error' => true , 'message' => 'Images Not Selected');
	}
	
}
