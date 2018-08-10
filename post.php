<?php
	$conn=mysqli_connect("sql9.freemysqlhosting.net", "sql9251151", "w73z9SwvYP", "sql9251151");
	$Content = $_POST['Content'];
	$Author = $_POST['Author'];
	$sql = "INSERT INTO mobile_messages (Content, Author) VALUES ('$Content', '$Author', 'n');";
    mysqli_query($conn, $sql);
	echo json_encode(array(
        "sendback" => 'Your message has been posted',
    ));
?>