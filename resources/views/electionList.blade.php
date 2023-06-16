<!DOCTYPE html>
<html>
<head>
	<title>Voter registeration</title>
	<link rel="stylesheet" href="../css/Style/menu.css">
	<link rel="stylesheet" href="../css/Style/registerationForm.css">
	<link rel="stylesheet" href="../css/Style/header.css">
	<link rel="stylesheet" href="../css/Style/mainStyle.css">
	</head>
<body>
	<div class="header">
		<h1>EthioVote</h1>
		<nav>
			<a href="#" class="nav-link">Home</a>
			<a href="#" class="nav-link">Profile</a>
			<a href="#" class="nav-link">Logout</a>
		</nav>
	</div>
	<div class="menu">
		<h1>Menu</h1>
		<button class="button active">Voter registeration</button>
		<button class="button">Voter list</button>		
		<button class="button">profile</button>
		<button class="button">Logout</button>
	</div>
	<div class="content">
		<h1>Voter Registration Form</h1>
		<form>
			<?php

			// generate a random four-digit number
			$random_number = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

			// concatenate with prefix and current year postfix
			$value = 'EEV/' . $random_number . '/' . date('Y');

			?>

			<label for="first-name">Voter ID</label>
			<input type="text" id="voter-id" name="voter-id" readonly value={{$value}}>

			<label for="first-name">Identification number</label>
			<input type="text" id="id_no" name="id_no" required>

            <label for="first-name">First Name</label>
			<input type="text" id="first-name" name="first-name" required>

			<label for="last-name">Last Name</label>
			<input type="text" id="last-name" name="last-name" required>

			<label for="gender">Gender</label>
			<select id="gender" name="gender" required>
				<option value="">Select Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				
			</select>

            <label for="disability">Disability</label>
			<select id="disability" name="disability" required>
				
				<option value="male">None</option>
				<option value="female">Disabled</option>
				
			</select>

			<label for="dob">Date of Birth</label>
			<input type="date" id="dob" name="dob" required>

			<label for="city">Phone number</label>
			<input type="phone number" id="p_number" name="p_number" required>

			<label for="house-no">House No</label>
		    <input type="text" id="house-no" name="house-no" required>

			<label for="constituency">Constituency</label>
			<select id="constituency" name="constituency" required>
				<option value="">Select Constituency</option>
				<option value="male">AAYeka01</option>
				<option value="male">GABerta01</option>
				<option value="male">SOOgade03</option>
				<option value="male">OROSa04</option>
				
			</select>
			

			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>