<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
	<link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
	<link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<form action="addPhoto.php" method="post" enctype="multipart/form-data">
	    <input type="file" name="photo"/>
	    <input type="submit"/>
	</form>
	<div class="gallery"></div>
    </body>
</html>
