<!DOCTYPE html>
<?php

?>


<head>
<title> Book Bus </title>
<link rel="icon" href="logo.png" type="image/icon type">
<style>
.frombox{
    
	--x: 50%;
	--y: 50%;
	
	position: relative;
	appearance: none;
	padding: 1em 2em;
	color:pink;
	cursor: pointer;
	outline: none;
	border-radius: 100px;
	
	// The magic
	border: 2px solid transparent;
	background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;    
}
.tobox{
    --x: 50%;
	--y: 50%;
	
	position: relative;
	appearance: none;
	padding: 1em 2em;
	color: white;
	cursor: pointer;
	outline: none;
	border-radius: 100px;
	
	// The magic
	border: 2px solid transparent;
	background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;
}
.date{
    --x: 50%;
	--y: 50%;
	
	position: relative;
	appearance: none;
	padding: 1em 2em;
	color: white;
	cursor: pointer;
	outline: none;
	border-radius: 100px;
	
	// The magic
	border: 2px solid transparent;
	background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;
}
.submit{
    --x: 50%;
	--y: 50%;
	
	position: relative;
	appearance: none;
	padding: 1em 2em;
	color: white;
	cursor: pointer;
	outline: none;
	border-radius: 100px;
	
	// The magic
	border: 2px solid transparent;
	background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;
}
h1{
	text-align:center;
}
    </style>
</head>

<body>
<h1>
    BOOK BUS
</h1>

<hr>
<br>

<center>
<input type="text" placeholder="FROM" class="frombox">
<input type="text" placeholder="TO" class="tobox">
<input type="date" class="date">
<button class="submit">Search</button>
</center>
</body>
</html>