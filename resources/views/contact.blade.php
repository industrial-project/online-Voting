<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/Style/login.css"/>
    <link rel="stylesheet" href="../css/Style/homeStyle.css"/>
    <script type="text/javascript" src="./Javascript/header.js"></script>
    <link rel="stylesheet" href="../css/Style/responsive.css">
    <link rel="stylesheet" href="../css/Style/common.css">

        <title>Contact Us</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
    
            h1 {
                margin: 0;
                font-size: 36px;
            }
    
            .container {
                display: flex;
                /* flex-wrap: wrap; */
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 20px;
                padding-top: 0px;
            }
    
            form {
                background-color: #f2f2f2;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                padding: 40px;
                
                width: 100%;
                max-width: 600px;
            }
    
            label {
                display: block;
                margin-bottom: 10px;
                font-size: 18px;
            }
    
            input[type="text"], input[type="email"], textarea {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
            background-color: #fff;
                margin-bottom: 20px;
                font-size: 16px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
    
            textarea {
                height: 150px;
            }
    
            input[type="submit"] {
                background-color: #333;
                color: #a19b9b;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
    
            input[type="submit"]:hover {
                background-color: #555;
            }
    
            @media screen and (max-width: 768px) {
                form {
                    max-width: 100%;
                }
            }
        </style>

</head>


<body>
  <!--Header container-->
  <header class="head-area">
    <div class="header-container">
      <div class="logo">
        <h1><span>Ethio</span>Vote</h1>
      </div>
      <div class="mobile-nav">
        
        <button onclick="toggleMobileMenu()">menu</button>
      </div>
     
      <div class="menu">
        <ul class="menu1">
          <li><a href="./Home" class="">Home</a></li>
          <li><a href="#" class="">አማረኛ</a></li>
          <li><a href="#" class="">Announcement</a></li>
          <li><a href="#" class="">Send Grievance</a></li>          
          <li><a href="#" class="active">Login</a></li>
          
        </ul>
         </div>
    </div>
    <div class="header-container">
    <div class="col-sm-12">
      <ul class="menu2 d-sm-none"  id="menu2" style="display: none;">
          <li><a href="./Home.html" class="">Home</a></li>
          <li><a href="#" class="">አማረኛ</a></li>
          <li><a href="#" class="">Announcement</a></li>
          <li><a href="#" class="">Send Grievance</a></li>
          <li><a href="" class="">Home</a></li>
          <li><a href="#" class="active">Logout</a></li>
        </ul>
    </div>
  </div>
  </header>


	
		<h1 align="center">Contact Us</h1>
	
	<div class="container">
		<form>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
			<label for="message">Message</label>
			<textarea id="message" name="message" required></textarea>
			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>