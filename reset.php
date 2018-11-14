<?php session_start(); 
if (isset($_SESSION['nama'])) {
	session_unset();
	session_destroy();
	header("location:/nfc");
} else {
	header("location:/nfc");
}
?>