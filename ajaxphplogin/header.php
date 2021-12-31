


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">about</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">contact</a>
                    </li>

                    <?php
                          if(isset($_SESSION['id'])){
                            echo'<li class="nav-item">
                            <a class="nav-link" href="profile.php"> profile  </a>
                             </li>';
                        
                               echo '<li class="nav-item">
                               <a class="nav-link" href="logout.php">log out</a>
                               </li>';                       
                            
                                                      }

                           else{
                           
                            echo'<li class="nav-item">
                            <a class="nav-link" href="index.php">Signup</a>
                             </li>';
                   
                            echo'<li class="nav-item">
                           <a class="nav-link" href="login.php">Login</a>
                           </li>';   

                           }

                       ?>

                    
                </ul>

            </div>
        </div>
    </nav>


    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    


















    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>

</html>