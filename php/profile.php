<?php
$name = 'Christopher';
$age  = 21;
$location = 'Sipcot,Chennai';
$bio = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit ante ut tempor congue. In consequat orci mauris, in pretium dolor mollis eget.';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>

<h1>My Profile</h1>

<div>
	<img src="profile_picture.jpg" alt="Profile Picture" height="150" width="150">
	<h2>Name: <?php echo $name; ?></h2>
	<h3>Age: <?php echo $age; ?></h3>
	<h3>Location: <?php echo $location; ?></h3>
	<p style="font-size: 16px;"><?php echo $bio; ?></p>