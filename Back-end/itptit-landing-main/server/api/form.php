<?php
session_start();
header('Access-Control-Allow-Origin: *');

require_once ('../db/dbhelper.php');
require_once ('../utils/utility.php');

if (isset($_POST)) {
	$name = getPOST('name');
	$gender = getPOST('gender');
	$country = getPOST('country');
	$subject = getPOST('subject');
	$classroom = getPOST('classroom');
	$rollno = getPOST('rollno');
	$mail = getPOST('mail');
	$phone = getPOST('phone');
	$fb_link = getPOST('facebook_link');
	$ability = getPOST('ability');
	$achievement = getPOST('achievement');
	$emotion = getPOST('emotion');
	$formal_question1 = getPOST('formal_question1');
	$formal_question2 = getPOST('formal_question2');
	$formal_question3 = getPOST('formal_question3');
	$formal_question4 = getPOST('formal_question4');
	$main_question1 = getPOST('main_question1');
	$main_question2 = getPOST('main_question2');
	$main_question3 = getPOST('main_question3');
	$main_question4 = getPOST('main_question4');
	$main_question5 = getPOST('main_question5');
	if (!empty($mail) && !empty($phone)) {
		$created_at = date('Y-m-d H:i:s');
		$updated_at = date('Y-m-d H:i:s');
		$sql = "insert into cvlist(name,gender,country,subject,classroom,rollno,mail,phone,fb_link,ability,achievement,emotion,
		formal_question1, formal_question2, formal_question3, formal_question4, main_question1, main_question2, main_question3,
		main_question4, main_question5,created_at,updated_at) values ('$name','$gender','$country','$subject','$classroom','$rollno','$mail',
		'$phone','$fb_link','$ability','$achievement','$emotion','$formal_question1','$formal_question2','$formal_question3',
		'$formal_question4','$main_question1','$main_question2','$main_question3','$main_question4','$main_question5',
		'$created_at','$updated_at')";
		execute($sql);
		$res = [
			"status" => 1,
			"msg" => "insert thanh cong"
		];
		echo json_encode($res);
	}
}
