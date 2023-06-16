<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <script type="text/javascript" src="./Javascript/header.js"></script>
    <link rel="stylesheet" href="../css/Style/regForm.css">
    <link rel="stylesheet" href="../css/Style/common.css">
    <title>Document</title>
	
</head>


<body>
  <!--Header container-->
  <header class="head-area">  
    <div class="header-container">
      <div class="logo">
        <h1><span>Ethio</span>Vote</h1>
      </div>           
      <div class="menu">
        <ul class="menu1">
          <li><a href="/Home" class="">Home</a></li>            
		  <li><a href="#" class="active">Party Registeration</a></li> 
		  <li><a href="#" class="">Profile</a></li>  
		  <li><a href="/logout" class="">Logout</a></li>           
        </ul>
         </div>
    </div>
    
  </header>
	<h1 align="center">Party Registration Form</h1>
	<form class="grid-container" action="/party_Registeration" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="grid-item">
				
	  <label for="party_logo">Party Logo :</label>
	  <input type="file" name="party_logo" id="party_logo" accept="image/*">
	  	  		</div>
		<div class="grid-item">
		  <label for="registration-date"></label>
		 
		</div>
		<div class="grid-item">
		  <label for="party-name">Party Name:</label>
		  <input type="text" id="party-name" name="party-name" required>
		</div>
		<div class="grid-item">
			<label for="presidant">Presidant Name:</label>
			<input type="text" id="presidant" name="presidant" required>
		  </div>
		<div class="grid-item">
			<label for="level">Level:</label>
		  <select name="level">
			<option value="regional">Regional</option>
			<option value="national">National</option>
		  </select>
		</div>
		<div class="grid-item">
			<label for="region">Region:</label>
			<input type="text" id="region" name="region" required>
		  </div>		
		
		<div>
			<button type="submit">Submit</button>
		  </div>		
	  </form>	  
	  	
</body>
</html>