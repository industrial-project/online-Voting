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
          <li><a href="./Home" class="">Home</a></li>
          <li><a href="#" class="">አማረኛ</a></li>
          <li><a href="#" class="">Announcement</a></li>
          <li><a  href="/grievance"  class="">Send Grievance</a></li>          
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
          <li><a href="/grievance" class="">Send Grievance</a></li>
          <li><a href="" class="">Home</a></li>        
          <li><a href="/logout" class="">Logout</a></li>    
        </ul>
    </div>
  </div>
  </header>
  {{-- caste vote section --}}
  <div class="container">
    <div class="row">
        @foreach ($candidates as $candidate)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $candidate->image }}" alt="{{ $candidate->full_ame }}">
                    <div class="card-body">
                        <h4>{{ $candidate->name }}</h4>
                        <p class="card-text">{{ $candidate->party }}</p>
                        <p class="card-text">{{ $candidate->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>