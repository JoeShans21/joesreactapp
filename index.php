<?php
	$arr = [];
	$conn=mysqli_connect("sql9.freemysqlhosting.net", "sql9251151", "w73z9SwvYP", "sql9251151");
	$sql="SELECT * FROM mobile_messages";
    $result=mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);
    for ($x=$rowcount; $x>=1; $x--){
        $sql2="SELECT * FROM mobile_messages WHERE ID='$x'";
        $result=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
        $content=$result['Content'];
        $author=$result['Author'];
		array_push($arr, [$content, $author]);
    }
    echo json_encode(array(
        "message" => $arr,
    ));
?>
