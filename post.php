<?php
	$conn=mysqli_connect("sql9.freemysqlhosting.net", "sql9251151", "w73z9SwvYP", "sql9251151");
	$Content = $_GET['Content'];
	$Author = $_GET['Author'];
	$sql = "INSERT INTO mobile_messages (Content, Author) VALUES ('$Content', '$Author');";
    mysqli_query($conn, $sql);
	echo json_encode(array(
        "sendback" => "Send Back",
    ));
?>