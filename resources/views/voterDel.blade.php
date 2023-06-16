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
    <link rel="stylesheet" href="../css/Style/responsive.css">
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
		  <li><a href="#" class="active">Voter Registeration</a></li> 
		  <li><a href="#" class="">Profile</a></li>  
		  <li><a href="/logout" class="">Logout</a></li>           
        </ul>
         </div>
    </div>
    
  </header>
	<h1 align="center">Voter Registration Form</h1>
	<form class="grid-container" action="/deleteVoter" method="POST">
		@csrf
		<div class="grid-item">		
	  <label for="voter-id">Voter ID:</label>
	  <input type="text" id="voter-id" name="voter-id" readonly value={{ $voter->voterID }}>
		</div>
		<div class="grid-item">
		  <label for="registration-date"></label>
		 
		</div>
		
		<div class="grid-item">
		  <label for="full-name">Full Name:</label>
		  <input type="text" id="full-name" name="full-name" required value={{ $voter->full_name }}>
		</div>
		<div class="grid-item">
		  <label for="dob">Date of Birth:</label>
		  <input type="date" id="dob" name="dob" required value={{ $voter->dob}}>
		</div>
		<div class="grid-item">
		  <label for="age">Age:</label>
		  <input type="number" id="age" name="age" required value={{ $voter->age}}>
		</div>
		<div class="grid-item">
		  <label for="gender">Gender:</label>
		  <select id="gender" name="gender" value={{ $voter->gender}}>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		  </select>
		</div>
		<div class="grid-item">
		  <label for="disability">Disability:</label>
		  <select id="disability" name="disability" value={{ $voter->disability}}>
			<option value="None">Male</option>
			<option value="None">Female</option>
			<option value="r">Other</option>
		  </select>
		</div>
		<div class="grid-item">
		  <label for="residency-duration">Residency Duration in Constituency:</label>
		  <input type="text" id="residency-duration" name="residency-duration" value={{ $voter->residency_duration}}>
		</div>
		<div class="grid-item">
		  <label for="house-no">House No:</label>
		  <input type="text" id="house-no" name="house-no" required value={{ $voter->house_no}}>
		</div>
		<div class="grid-item">
			<label for="constituency">Constituency</label>
			<input type="text" id="constituency" name="constituency" required value={{ $voter->constituency}}>
		  </div>
		<div>
		  <label for="remark">Remark:</label>
		  <textarea id="remark" name="remark"> {{ $voter->remark}}</textarea>
		</div>
		<div>
			<label for="remark"></label>			
		  </div>
		<div>
			<button type="submit">Delete</button>
		</form>
			<button onclick="window.location.href='/voterList'">Cancel</button>
		  </div>		
	 
	  
	
	  
	 
	  <div class="special-attribute">
		Note: If you have any special conditions or requirements that need to be taken into account during the registration process, please inform the registration officer.
	  	<br>
		<br>
	  </div>	
</body>
</html>