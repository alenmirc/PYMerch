<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PYMerch - Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #202020;">
        </p><a class="navbar-brand p-3" href="#"><img src="img/logo2.png" width="94" height="38"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link px-3" style="color: white" href="home.html">Home</a>
            </li>
         
         
            <li class="nav-item">
                <a class="nav-link px-3" style="color: white"  href="featured.html">Featured</a>
              </li>
              
          
            
            <li class="nav-item dropdown">
              <a class="nav-link px-3 dropdown-toggle"  style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="tshirt.php">T-shirt</a>
                <a class="dropdown-item" href="bag.php">Bag</a>
                <a class="dropdown-item" href="jacket.php">Jacket</a>
                <a class="dropdown-item" href="others.php">Others</a>
              </div>
            </li>

          
            <li class="nav-item">
              <a class="nav-link px-3" style="color: white"  href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" style="color: white"  href="submit.php">Submit  a Product</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            

            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <br><br>
      <h2>Log In</h2>

<div class="formContainer">

    <form method="post" action="#">
        <label for="email">Email</label><br>
        <input type="text" name="email" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" required><br><br>
        <a style="margin-left:20px" href="signup.php">Click here to register!</a>

        <?php
include("config.php");
  
if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM users where email= '$email' AND password = '$password' ";
$query = $db->query($sql);

if($query->num_rows == 0){
    echo  "<div class='error'>Invalid email or password!</div>"; 

}else {
    $data = $query->fetch_assoc();
    $_SESSION['users'] = $data;
    header("location:submit.php");
}
}
?>
<br>
        <input type="submit" name="submit" value="Login">
        <br><br><br>

</form></div>

  <footer class="page-footer font-small blue pt-4 text-white" style="background-color: #202020;">
            <div class="container-fluid text-center text-md-left ">
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                  <h5 class="text-uppercase "></h5>
                  <p>PYmerch is a site wherein you can view, share, promote, or showcase your own PUP products.
                    The products/images used are all from the same shop, Tanglaw Clothing.
                    <br>Site made by Alen Mirc Bañez | DICT 2-5 | OJT Website</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                  <h5 class="text-uppercase">PYMERCH</h5>
          
                  <ul class="list-unstyled">
                    <li>
                      <a href="home.html">Home</a>
                    </li>
                    <li>
                      <a href="featured.html">Featured</a>
                    </li>
                    <li>
                      <a href="about.html">About</a>
                    </li>
                    <li>
                      <a href="submit.php">Submit a  Product</a>
                    </li>
                  </ul>
          
                </div>

                <div class="col-md-3 mb-md-0 mb-3">
          

                  <h5 class="text-uppercase">Categories</h5>
          
                  <ul class="list-unstyled ">
                    <li>
                      <a href="tshirt.php">Tshirt</a>
                    </li>
                    <li>
                      <a href="jacket.php">Jacket</a>
                    </li>
                    <li>    
                      <a href="bag.php">Bag</a>
</li>
<li>
  <a href="others.php">Others</a>
</li>
                  </ul>
          
                </div>
              </div>
            </div>
            <div class="footer-copyright text-center py-1 bg-dark">@ 2022 PYmerch :)</div>
          
          </footer>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>