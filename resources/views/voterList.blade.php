

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-2Z2n8cXH2Zn1xQcF7XgXJmU5GxP5V9kTl+V3wIuT8DqE1VZbPdSvLmW9qg0/cv3KQjqDzrORzCJG9XUJi5kDg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    {{-- javascript code to close the window after 4 minite page inactivity  --}}
    <script>
      var timeout = setTimeout(function(){
          window.close();
      }, 4 * 60 * 1000); // 4 minutes in milliseconds
  
      // Reset the timeout if the user interacts with the page
      window.addEventListener('mousemove', function(){
          clearTimeout(timeout);
          timeout = setTimeout(function(){
              window.close();
          }, 4 * 60 * 1000); // 4 minutes in milliseconds
      });
  </script>
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
		  <li><a href="/profile" class="">Profile</a></li> 
      <li><a href="/logout" class="">Logout</a></li>            
        </ul>
         </div>
    </div>
    
  </header>
  {{-- caste vote section --}}
  <button class="btn-add" onclick="window.location.href='/Voter_Registration'">Create new +</button>
  <table style="background-color: aliceblue" class='table table-hover'>
    <thead>
        <tr>
            <th>No</th>
            <th>Voter ID</th>
            <th>Full name</th>
            <th>Constituency</th>
            <th>Edit</th>
            
        </tr>
    </thead>
    <tbody>
      
      {{-- @if($voter)
        <tr>
            <td>{{ $voter->name }}</td>
            <td>{{ $voter->address }}</td>
            <td>{{ $voter->voter_id }}</td>
        </tr>
        @endif --}}
        <?php
        $n=1;
        ?>
        @foreach ($voters as $voter)
        
            <tr>
                <td>{{ $n }}</td>
                <td>{{ $voter->voterID }}</td>
                <td>{{ $voter->full_name }}</td>                
                <td>{{ $voter->constituency }}</td>
                <form action="/editVoter" method="POST">
                  @csrf
                <input type="text" hidden name="ID" value={{$voter->voterID}}>
                {{-- <span class="fas fa-edit"></span> --}}

<!-- Material Icons -->
<a href="#">
                <td><button class="btn-edit" type="submit"><i class="material-icons">edit</i></a></button></td>
              </form>
             
            </tr>
            <?php
        $n=$n+1;
        ?>
        @endforeach
    </tbody>
</table>
</body>
</html>