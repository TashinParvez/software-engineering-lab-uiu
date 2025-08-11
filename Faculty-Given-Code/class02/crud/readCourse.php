<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Course" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Course ID</th> <th>Name</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_id </td>";
		echo "<td> $title </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

    echo "<p><a href=index.html>Return to Main Page</a>";

    

?>