<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css">
  <title>Contact Me</title>
</head>

<body>
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <!-- <div class="portrait"></div> -->
      </div>
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="index.html" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.html" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item">
          <a href="work.html" class="nav-link">
            My Work
          </a>
        </li>
        <li class="nav-item current">
          <a href="contact.php" class="nav-link">
            How To Reach Me
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main id="contact">
  <div class="d-flex justify-content-center">

    <h2>
      Contact Me
    
      <!-- <span class="text-secondary">Me</span> -->
    </h2>
    
  </div>
  <div class="d-flex justify-content-center">

    <h5 class="sm-heading mt-4 text-primary" >
      This is how you can reach me...
    </h5>

  </div>



    <br>
    <div class="d-flex justify-content-center mt-4">

          <form method="post" action="contact.php" value="">

            <div class="form-group">
              <label for="exampleFormControlInput1"></label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1"> </label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre Mail">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea><br>
              <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>

            </div>
        </div>      

          </form>
         

    </div>
  </main>





  <?php
    // // the connection of data base
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', 'root');
    
    
    if(isset($_POST['submit']))
    {
      
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $textarea = htmlspecialchars($_POST['textarea']);
      
      
      
      //the function which excute the date and time
      $insert = $bdd->prepare("INSERT INTO port(name, email, 	textarea) VALUES(?,?,?)");
      $insert->execute(array($name, $email, $textarea));
      
    }
    $allmessages = $bdd->query('SELECT * FROM port');
    
    

    ?>


<footer id="main-footer">
  Copyright &copy; 2018
</footer>

<script src="js/main.js"></script>
</body>

</html>