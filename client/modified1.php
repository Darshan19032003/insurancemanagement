<?php    
    
include "../connection.php";        
$sql = "select * from customer";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
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
		<div class="w3-bar w3-grey w3-large">
          <a href="#contact" class="w3-bar-item w3-button w3-mobile">DDDJ</a>
          <a
      href="../index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
      >Back To Home</a
    >
	</div>
	<h1>
		<center>Clients Data</center>
	</h1>
		
	<table width="100%" border="1" cellspacing="1" cellpadding="1" style="border-collapse: collapse; background-color: rgba(249, 249, 249, 0.6);">   
            <tr>    
                <td>Customer Number</td>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Gender</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Contact Number</td>
                <td>Mother Name</td>    
                <td>Mother Status</td>    
                <td>Father Name</td>    
                <td>Father Status</td>    
                <td>Marital Status</td>    
                <td>Spouse</td>    
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Middle_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Last_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Gender;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Marital_status;?>  
				</td>
				<td>  
					<?php echo $row->Spouse;?>  
				</td>
				<td> <a href="delete.php?id=<?php echo $row->Customer_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>