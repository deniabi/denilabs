<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>materialize/css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
      		ul li a{
      			text-align: center;
      		}
      		li a:hover{
				
				color: red;      			
      		}
      </style>
</head>
<body>
<br />
<div class="container" style="border:1px solid #dfdfdf;">

<nav>
    <div class="nav-wrapper black darken-1">
      <a href="#" class="brand-logo" style="padding-left:10px;"><span class="red-text">I -</span> News</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Kategori</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        
      </ul>

     </div>
  </nav>