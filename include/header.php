<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="description" content="Server Side Scripting">
		<meta name="keywords" content="PHP">
		<meta name="author" content="Hanna Lee">
    <title><?php if(isset($title)){ echo $title; } ?></title>
    <link href="static/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div class="wrap"><!--wrap header and main except footer-->
		<!--main header layout-->
		<header class="main-header">
			<div class="container">
				<h1>PHP</h1>
				<h3 class="name"><a href="index.php">Home </a></h3>
				<ul class="main-nav">
					<li><a href="assignment1.php">Assignment1</a></li>
					<li><a href="assignment2.php">Assignment2</a></li>
          <li><a href="assignment3.php">Assignment3</a></li>
          <li><a href="assignment4.php">Assignment4</a></li>
				</ul>
			</div>
		</header>
<?php include_once("tracker.php"); ?>
