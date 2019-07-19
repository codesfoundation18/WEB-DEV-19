<?php

function assignGrade($score) 
{
	if($score >= 80) {
		return "A";

	} elseif($score >= 70) {
		return "B";

	} elseif($score >= 60) {
		return "C";

	} elseif($score >= 50) {
		return "D";

	} elseif($score >= 40) {
		return "E";
	} elseif($score < 40) {
		return "F";
	}
}
// collect form data
if(isset($_POST['grade_btn'])) {
	$courseName = $_POST['course_name'];
	$score = $_POST['score'];

	$grade = assignGrade($score);

	echo '<table>';

	echo '<tr> <th>Course Name</th> <th>Score</th> <th>Grade</th><tr>';
	echo "<tr> <td> {$courseName}</td> <td> {$score}</td> <td> {$grade}</td> <tr>";
	echo '</table>';

}

echo date('m-d-Y H:i:s');


