<?php
session_start();
$admin = array("aziz","wali");
$pass = array('12345');
if($_SERVER['REQUEST_METHOD'] =='POST'){
	$user=$_POST['username'];
	$password=$_POST['password'];
if(in_array($user,$admin)&&in_array($password ,$pass)
){
	$user=$_POST['username'];
	echo "good" ."  "."<b>$user</b>";
	include "slide menu.html";
}else{
	echo "baad";
}}
