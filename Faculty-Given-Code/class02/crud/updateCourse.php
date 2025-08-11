<?php

	$id = $_GET["t_id"];

	$course = $_GET["c_id"];

    require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Teacher SET course_id='$course' WHERE teacher_id = $id";

	
	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "<p> Added the new course $course to the teacher with id $id";


    echo "<p><a href=index.html>Return to Main Page</a>";

?>



