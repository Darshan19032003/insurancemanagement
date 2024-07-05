<?php
include 'config.php';

?>
<html>

<head>
  <title>Insurance Policy</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Raleway", Arial, Helvetica, sans-serif;

    }

    body {
      background-image: linear-gradient(to bottom, rgb(247, 235, 235), #b2f4cf);
    }

    .card {
      margin-bottom: 20px;
      /* Add some space between the cards */
      text-align: center;
      /* Center the content inside the card */
      width: 200px;
      /* Set the width of the card */
    }

    .centered-container {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 30%;
      /* Adjust the width as needed */
    }

    .flex-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .card {
      margin: 10px;
      /* Adjust the margin as needed */
    }
  </style>
</head>

<body class="w3-light-grey">
  <!-- Navigation Bar -->
  <div class="w3-bar w3-white w3-large">
    <a href="#" class="w3-bar-item w3-button w3-blue w3-mobile"><i class="fa-solid fa-house-chimney-crack"></i>DDDJ</a>
    <a href="agent/agent.php" class="w3-bar-item w3-button w3-mobile">Agent Registration</a>
    <a href="client/client.php" class="w3-bar-item w3-button w3-mobile">Client Registration</a>
    <a href="insurances.php" class="w3-bar-item w3-button w3-mobile">Our Policies</a>
    <a href="#about" class="w3-bar-item w3-button w3-mobile">About Us</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
    <a href="#" id="loginBtn" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Login</a>
  </div>
  <div class="container" id="loginContainer">
    <!-- Your login card content goes here -->
    <div class="row justify-content-center">
      <div class="flex-container">
        <div class="card">
          <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/2342/2342004.png" alt="Card image cap"
            style="max-width: 300px; height: 200px">
          <div class="card-body text-center">
            <p>If you are Agent</p>

            <h5 class="card-title">Agent Login</h5>
            <button>
              <a href="Agent.html" class="btn btn-primary" ">LOGIN</a>
                      </button>
                  </div>
              </div>
      
              <div class=" card">
                <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/1246/1246483.png"
                  alt="Card image cap" style="max-width: 300px; height: 200px">
                <div class="card-body text-center">
                  <p>If you are Client</p>
                  <h5 class="card-title">Client Login</h5>
                  <button>
                    <a href="client.html" class="btn btn-primary">LOGIN</a>
                  </button>
                </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Header -->
    <header class="w3-display-container w3-content" style="max-width: 1500px">
      <img class="w3-image" src="poli.png" alt="The Insurance " style="min-width: 1000px" width="1500" height="800" />
      <div class="w3-display-left w3-padding w3-col l6 m8">
        <div class="w3-container w3-blue">
          <h2><i class="fa-regular fa-house-chimney-crack"></i> Insurance Company of DDDJ</h2>
        </div>
      </div>
    </header>

    <!-- Page content -->
    <div class="w3-container w3-padding-32 w3-black w3-opacity w3-card w3-hover-opacity-off" style="margin: 32px 0">
      <h2>If you want to Join our Group DDDJ</h2>
      <label>E-mail</label>
      <input class="w3-input w3-border" type="text" placeholder="Your Email address" />
      <button type="button" class="w3-button w3-red w3-margin-top">
        Join
      </button>
    </div>

    <div class="w3-row-padding" id="about" style=" padding-left: 30px;">
      <div class="w3-col l4 12">
        <h3>About</h3>
        <h6>
          DDDJ Insurance Company is a leading provider of insurance solutions, offering a comprehensive range of
          products and services to meet the diverse needs of individuals and businesses. Founded in 2024 and
          headquartered in Banaglore, we have established ourselves as a trusted partner for our customers, delivering
          peace of mind through reliable coverage and exceptional service. At DDJ Insurance Company, we prioritize
          financial stability, ethical business practices, and community engagement, striving to make a positive impact
          on the lives of our customers and the communities we serve.
        </h6>
      </div>
      <div class="w3-col l8 12">
        <!-- Image of location/map -->
        <img src="about.jpg" class="w3-image w3-greyscale" style="width: 60%; height:400px " />
      </div>
    </div>


    <div class="w3-container" id="contact">
      <h2>Contact</h2>
      <p>If you have any questions, Do not hesitate. just ask us.</p>
      <i class="fa fa-map-marker w3-text-red" style="width: 30px"></i>
      Bangalore, Bommanahalli<br />
      <i class="fa fa-phone w3-text-red" style="width: 30px"></i> Phone: +918055553435<br />
      <i class="fa fa-envelope w3-text-red" style="width: 30px"> </i> Email:
      mail@mail.com<br />
      <form action="agent/modified.php" target="_blank">
        <p>
          <input class="w3-input w3-padding-14 w3-border" type="text" placeholder="Name" required name="Name" />
        </p>
        <p>
          <input class="w3-input w3-padding-14 w3-border" type="text" placeholder="Email" required name="Email" />
        </p>
        <p>
          <input class="w3-input w3-padding-14 w3-border" type="text" placeholder="Message" required name="Message" />
        </p>
        <p>
          <button class="w3-button w3-black w3-padding-large" type="submit">
            SEND MESSAGE
          </button>
        </p>
      </form>
    </div>

    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-padding-32 w3-black w3-center w3-margin-top">
    <h5>Find Us On</h5>
    <div class="w3-xlarge w3-padding-16">
      <a href="https://www.facebook.com/jeffrin.joel.90?mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
      </a>


      <a href="https://www.linkedin.com/in/darshan-r-9boss2003/" target="_blank" rel="noopener noreferrer">
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </a>

      <a href="https://www.instagram.com/your_instagram_username/" target="_blank" rel="noopener noreferrer">
  <i class="fa fa-instagram w3-hover-opacity"></i>
</a>

    </div>
    <p>
      Powered by
      <a href="http://www.theoxfordengg.org/" target="_blank" class="w3-hover-text-green">DDDJ</a>
    </p>
  </footer>


  <script src="script.js"></script>

</body>

</html>