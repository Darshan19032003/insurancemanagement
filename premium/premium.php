<html>    
    <head>    
        <title>Payment Form</title>    
    </head>    
    <body>    
        <link href = "prem.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <div class="w3-bar w3-light-grey w3-large">
          <a href="#contact" class="w3-bar-item w3-button w3-mobile">DDDJ</a>
          <a
      href="../index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
      >Back To Home</a
    >
	</div>
        <h2>Premium</h2>    
        <form name = "form1" action='view.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container">
				<div class = "form_group">    
                    <label style="font: weight 800px;">Policy Number:</label>    
                    <input type = "text" name = "pol" value = "" required pattern="[0-9]{9}" />
					<h6><label>Enter 9 digit number</label></h6>
                </div>
				</div>
                <div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				 
            </div>    
        </form>    
    </body>    
</html>    