<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";  
    $username = "root";
    $password = "";

   // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

     // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $participate = $_POST['participate'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `fest`.`fest` (`name`, `age`, `email`, `phone`, `gender`, `participate`, `other`, `dt`)VALUES  ('$name', '$age', '$email', '$phone', '$gender', '$participate', '$desc', current_timestamp());";
    //    echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💃College Fest🎙️</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#">🎸College Fest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="mainDiv">
     <img class="bg" src="fest.png" alt="">
     <h1 class="mainTxt">Welcome to the <br> Biggest Fest Of The Year</h1>
    </div>

     
     
  <div class="container">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="singing.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Singing</h5>
            <p class="card-text">Participate in the Singing Competetion. Price - Winner: 10k, Runner Up: 5k </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Solo Performance</li>
            <li class="list-group-item">Duet Performance</li>
            <li class="list-group-item">Group Singing</li>
          </ul>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="dance.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Participate in the dance Competetion. Price - Winner: 10k, Runner Up: 5k</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Solo Dance</li>
            <li class="list-group-item">Duet Dance</li>
            <li class="list-group-item">Group Dance</li>
          </ul>
    
        </div>
      </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="comedy.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Stand Up Comedy</h5>
            <p class="card-text">Participate in the Comedy Competetion. Price - Winner: 10k, Runner Up: 5k.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Solo Performance</li>
            <li class="list-group-item">Roasting</li>
            <li class="list-group-item">Group Funny Skit</li>
          </ul>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">About The Even</h5>
          <p class="card-text">This year's fest promises to be bigger and better than ever before, with a wide array of events planned to cater to diverse interests. Whether you're an aspiring musician, a dance aficionado, a sports enthusiast, or a master debater, this is your chance to shine on the grand stage and make your mark in the city's cultural landscape.
            But it's not just about the competitions and performances – it's about creating memories that last a lifetime. The College Fest is an opportunity to forge new friendships, connect with like-minded individuals, and experience the true spirit of unity and fun.
            <br>
            We invite all students, faculty, and members of the community to join us in making this event truly spectacular. Come and be a part of the magic as we transform the campus into a buzzing carnival of excitement and joy.
            Mark your calendars for 9th November and get ready to be swept off your feet by an unforgettable College Fest. Let's make this great event even greater together! See you there!</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-4">
        <img class="card-img-top" src="fest.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Event Time</h5>
          <p class="card-text">The Event is Scheduled on 9th November This Year 2023. It Will Start from 12:00PM</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>





    <div class="container2">
        <h3 style="text-align: center; color: purple;">Enter Your Details and Submit This Form to Participate in This Grand Event </h3>
        <?php
        if($insert == true){
        echo "<p class='submitMsg' >Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

             <div class="opt" style="display: flex; width: 80%;">
            <p style="width: 20%;">Gender</p>
            <select name="gender" id="gender" style="width: 70%;">
              <option value="">Choose Gender</option>
              <option value="Singing">Male</option>
              <option value="Dance">Female</option>
              <option value="Comedy">Others</option>
            </select>
           </div>

           <div class="opt" style="display: flex; width: 80%;">
            <p style="width: 20%;">Catagory of Participation</p>
            <select name="participate" id="participate" style="width: 70%;">
              <option value="">Choose Catagory</option>
              <option value="Singing">Singing</option>
              <option value="Dance">Dance</option>
              <option value="Comedy">Comedy</option>
            </select>
           </div>


            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>    
</body>
</html>