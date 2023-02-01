 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Registracijos ir prisijungimo sistema</title>
<meta name="viewport" content="width=device-width,initial-scale=1"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/yeti/bootstrap.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- SweetAlert2 
 https://sweetalert2.github.io/recipe-gallery/sweetalert2-react-router.html
 -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <style>
   body {
   font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
   }
   button {
	border: 1px solid #c1c1c1;
	border-radius: 20px;
	font-size: 14px;
	color: #5E5E63;
	background-color: transparent;
	padding: 4px 10px;
	}        
	button:hover {
	border: 1px solid #d1d1d1;
	color: blue;
	background-color: transparent;
	}
	input[type=text], input[type=password]{
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	border: 1px solid #c1c1c1;
	color: #a0d18c;
	padding-left: 10px;
	height: 30px;
	width: 250px;
	}
	input[type=text]:focus,input[type=password]:focus {
        outline: none;
        border: 1px solid #d1d1d1;
        color: #2d9fd9;
    }
 </style>
</head>
<body>
<div class="container">
