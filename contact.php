<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/stayle1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
  
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AgroTech...</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li
          <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>


        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Agrotech</h1>
    <p>Way to Modify...</p>
  </div>
</div>

<section class ="my-5">
  <div class="py-5">
    <h3 class="text-center">Contact</h3>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo1.php" method="post">
      <div class="form group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      
       <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>

  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@AgroTechProduction</p>
  </footer>

</body>

</html>