<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Course ID</th>  \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $teacher_id </td>";
		echo "<td> $name </td>";
		echo "<td> $course_id </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

    echo "<p><a href=index.html>Return to Main Page</a>";

    echo "<p><a href=addCourse.php>Add a new Course to a Teacher</a>";
?>