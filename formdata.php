<?php
$createdb="create database db_loginform";
mysqli_query($con,$createdb) or die("connection error");
echo "db created";
$createtbl="create table formdata(ID int AUTO INCREMENT,fname varchar(30), lname varchar(30),address varchar(30)
phone varchar(30),email varchar(50))";
mysqli_query($con,$createtbl)or die("error");
echo "table created";
?>