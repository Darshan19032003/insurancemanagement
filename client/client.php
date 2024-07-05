<html>    
    <head>    
        <title>Client Registration Form</title>    
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <style>
               body {
                background-image: url('insurance3.jpg');
                background-size: cover;
    opacity: 0.8;
          }
        </style>
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
        <div class="w3-bar w3-grey w3-large">
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
    <a
      href="http://localhost/insurancemanagement/index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
      >Back To Home</a
    >

  </div>
        
		<h2>Client Registration</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "First_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "Middle_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "Last_Name" value = "" required />    
                </div>  
				<div class = "form_group">    
                    <label>Gender:	</label><input type = "radio" name = "Gender" value = "M" required />Male<input type = "radio" name = "Gender" value = "F" required />Female
                </div>
				<div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "" required />
                </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = "" required />    
                </div>
				
				<div class = "form_group">    
                    <label>Pincode: </label>    
                    <input type = "text" name = "Pincode" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label> Contact_Number </label>    
                    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{10}" />    
                </div>
				<div class = "form_group">    
                    <label>Mother_Name:</label>    
                    <input type = "text" name = "Mother_Name" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Mother_Status: </label>    
                    <input type = "radio" name = "Mother_Status" value = "A" required />Alive	    <input type = "radio" name = "Mother_Status" value = "D" required />Dead    
                </div>
				<div class = "form_group">    
                    <label>Father Name: </label>    
                    <input type = "textbox" name = "Father_Name" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Father_Status: </label>    
                    <input type = "radio" name = "Father_Status" value = "A" required />Alive	    <input type = "radio" name = "Father_Status" value = "D" required/>Dead    
                </div>
				<div class = "form_group">    
                    <label>Marital_Status: </label>    
                    <input type = "radio" name = "Marital_Status" value = "S" required />Single	    <input type = "radio" name = "Marital_Status" value = "M" required/>Married    
                </div>
				<div class = "form_group">    
                    <label>Spouse_Name: </label>    
                    <input type = "textbox" name = "Spouse" value = ""  />    
                </div>
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				
            </div>    
        </form>   
        
        
        <div class="w3-container" id="contact" style="width: 80%; margin: 20px auto; padding: 20px; border: 2px solid #ccc; background-color: #f9f9f9; border-radius: 10px;">
  <h2 style="font-weight: bold; color: #333;">Contact</h2>
  <p style="color: #666;">If you have a problem registering, please feel free to contact us.</p>
  
  <form action="agent/modified.php" target="_blank">
    <div style="margin-bottom: 15px;">
      <input class="w3-input w3-border w3-round-large" type="text" placeholder="Name" required name="Name" style="width: 100%;">
    </div>
    <div style="margin-bottom: 15px;">
      <input class="w3-input w3-border w3-round-large" type="email" placeholder="Email" required name="Email" style="width: 100%;">
    </div>
    <div style="margin-bottom: 15px;">
      <textarea class="w3-input w3-border w3-round-large" placeholder="Message" required name="Message" style="width: 100%; height: 150px;"></textarea>
    </div>
    <div>
      <button class="w3-button w3-black w3-padding-large w3-round-large" type="submit">SEND MESSAGE</button>
    </div>
  </form>
</div>
    </body>    
</html>    