<?php
	/*
	ini_set('display_errors', 1);
  	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	*/
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$request = $_POST["text"];
		$data = array(
			array("$request"),
			array("test2")
		);
		$response = json_encode($data, JSON_PRETTY_PRINT);
		print_r($response);
		die();
	}
?>

<button style="width: 100px; height:50px; background-color:#222; color: white;" onclick="submit();">Do thing</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	function submit() {
		console.log('submitting');
		$.ajax({
			type: 'POST',
			url: '',
			data: {"text": "123"},
			dataType: 'json',
			success: function(response) {
				console.log(response);
			}
		});
	}
</script>
