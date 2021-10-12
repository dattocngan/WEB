<?php
// session_start();
header('Access-Control-Allow-Origin: *');

require_once ('../db/dbhelper.php');
require_once ('../utils/utility.php');

$action = getPOST('action');

switch ($action) {
	case 'login':
		doLogin();
		break;
	case 'logout':
		doLogout();
		break;
	case 'register':
		doRegister();
		break;
	case 'list':
		doUserList();
		break;
}

function doLogout() {
	$token = getCOOKIE('token');
	if (empty($token)) {
		$res = [
			"status" => 1,
			"msg"    => "Logout success!!!"
		];
		echo json_encode($res);
		return;
	}

	// Xoa token khoi database
	// $sql = "delete from login_tokens where token = '$token'";
	// execute($sql);

	// Xoa token khoi cookie
	setcookie('token', '', time()-7*24*60*60, '/');

	$res = [
		"status" => 1,
		"msg"    => "Logout success!!!"
	];
	echo json_encode($res);

	session_destroy();
}

function doLogin() {
	$email    = getPOST('email');
	$fullname = getPOST('fullname');

	$sql  = "select * from users where email = '$email' and fullname = '$fullname'";
	$user = executeResult($sql, true);

	if ($user != null) {
		$email = $user['email'];
		$id    = $user['id'];

		$token = md5Security($email.time().$id);

		// setcookie('status', 'login', time()+7*24*60*60, '/');
		setcookie('token', $token, time()+60, '/');

		// save database
		// $sql = "insert into login_tokens (id_user, token) values ('$id', '$token')";
		// execute($sql);

		$res = [
			"status" => 1,
			"msg"    => "Login success!!!"
		];
	} else {
		$res = [
			"status" => -1,
			"msg"    => "Login failed!!!"
		];
	}
	echo json_encode($res);
}

function doRegister() {
	$email = getPOST('email');
	$fullname = getPOST('fullname');
	$birthday = getPOST('birthday');
	$address = getPOST('address');

	$sql    = "select * from users where email = '$email'";
	$result = executeResult($sql);
	// $res = [];
	if ($result == null || count($result) == 0) {
		$sql = "insert into users(fullname, email, birthday, address) values ('$fullname', '$email','$birthday', '$address')";
		execute($sql);

		$res = [
			"status" => 1,
			"msg"    => "Create new account success!!!"
		];
	} else {
		$res = [
			"status" => -1,
			"msg"    => "Email existed!!!"
		];
	}
	echo json_encode($res);
}

function doUserList() {
	// $user = authenToken();
	// var_dump($user);
	// die();
	if (!isset($_COOKIE['token'])) {
		$res = [
			"status"   => -1,
			"msg"      => "Not login!!!",
			"userList" => []
		];
		echo json_encode($res);
		return;
	}

	$sql    = "select * from note";
	$result = executeResult($sql);
	$sql = "select users.fullname from users,note where users.id = note.user_id";
	$result1 = executeResult($sql);
	$res    = [
		"status"   => 1,
		"msg"      => "success!!!",
		"userList" => $result,
		"nameList" => $result1
	];
	echo json_encode($res);
}