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
	<h1 align="center">Grievance sending page</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        {{ session()->forget('success') }}
    </div>
   @endif
	<form class="grid-container" action="/sendGrievance" method="POST">
		@csrf
		<div class="grid-item">		
	  <label for="voter-id">Voter ID:</label>
	  <input type="text" id="voter-id" name="voter-id" readonly value={{ $voter->voterID }}>
		</div>

        <?php

			// generate a random four-digit number
			$random_number = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

			// concatenate with prefix and current year postfix
			$value = 'EVG/' . $random_number . '/' . date('Y');

			?>
        <div class="grid-item">		
            <label for="voter-id">Grievance ID</label>
            <input type="text" id="grievance-ID" name="grievance-ID" readonly value={{ $value }}>
              </div>
		
		
		<div class="grid-item">
		  <label for="full-name">Full Name:</label>
		  <input type="text" id="full-name" name="full-name"  readonly value={{ $voter->full_name }}>
		</div>
		
		<div class="grid-item">
            <label for="registration-date"></label>
           
          </div>
		
		<div class="grievance">
		  <label for="grievance">Grievance</label>
		  <textarea id="grievance" name="grievance"></textarea>
		</div>
		
		<div>
			<button type="submit">Send</button>
		  </div>		
	  </form>
	  
	
	  
	 
	  <div class="special-attribute">
		Note: If you have any special conditions or requirements that need to be taken into account during the registration process, please inform the registration officer.
	  	<br>
		<br>
	  </div>	
</body>
</html>