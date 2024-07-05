<html>

<head>
  <title>Agent Registration Form</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="registration.css" type="text/css" rel="stylesheet" />
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
      background-image: url("insurance2.jpg");
      background-size: cover;
      /* This will make the image cover the entire container */
      background-position: center;
      /* This will center the image */
      background-repeat: no-repeat;
      /* This will prevent the image from repeating */
      opacity: 0.8;
    }
  </style>
</head>


<!-- <link href="./agent.css" type="text/css" rel="stylesheet" />
    <link href="../style.css" type="text/css" rel="stylesheet" />
    <ul>
        <li style="float:right;"><a href="../index.php">Back to homepage</a></li>
    </ul> -->

<body class="w3-light-grey">
  <!-- Navigation Bar -->
  <div class="w3-bar w3-brown w3-large">
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
    <a href="../index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Back To Home</a>

  </div>

  <h2>Agent Registration</h2>

  <form name="form1" action='modified.php' method='POST' enctype="multipart/form-data">
    <div class="container">
      <div class="form_group">
        <label>Agent Code:</label>
        <input type="text" name="Agent_code" required pattern="[0-9]{3}[A-Z a-z]{3}[0-9]{3}" />
      </div>
      <div class="form_group">
        <label>Name:</label>
        <input type="text" name="Agent_Name" value="" required />
      </div>
      <div class="form_group">
        <label>Date of Birth: </label><input type="date" name="DOB" value="" required />
      </div>
      <div class="form_group">
        <label>Address:</label>
        <input type="text" name="Address" value="" required />
      </div>
      <div class="form_group">
        <label>Pincode: </label>
        <input type="text" name="Pincode" value="" required />
      </div>
      <div class="form_group">
        <label>Branch: </label>
        <input type="text" name="Branch" value="" required" />
      </div>

      <div class="form_group">
        <label>Contact_Number: </label>
        <input type="text" name="Contact_Number" value="" required pattern="[0-9]{10}" />
      </div>
      <div class="submit">
        <input type="submit" value="submit" />
      </div>
      <br>
      <div class="submit">
        <input type="reset" value="reset" />
      </div>



    </div>
  </form>


  <div class="w3-container" id="contact"
    style="width: 80%; margin: 20px auto; padding: 20px; border: 2px solid #ccc; background-color: #f9f9f9; border-radius: 10px;">
    <h2 style="font-weight: bold; color: #333;">Contact</h2>
    <p style="color: #666;">If you have a problem registering, please feel free to contact us.</p>

    <form action="agent/modified.php" target="_blank">
      <div style="margin-bottom: 15px;">
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="Name" required name="Name"
          style="width: 100%;">
      </div>
      <div style="margin-bottom: 15px;">
        <input class="w3-input w3-border w3-round-large" type="email" placeholder="Email" required name="Email"
          style="width: 100%;">
      </div>
      <div style="margin-bottom: 15px;">
        <textarea class="w3-input w3-border w3-round-large" placeholder="Message" required name="Message"
          style="width: 100%; height: 150px;"></textarea>
      </div>
      <div>
        <button class="w3-button w3-black w3-padding-large w3-round-large" type="submit">SEND MESSAGE</button>
      </div>
    </form>
  </div>

</body>

</html>