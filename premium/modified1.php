<?php    
    
include "../connection.php";    
    
$sql = "select * from paid_premium";    
$result = mysqli_query($conn,$sql);    
$sql1 = "select * from unpaid_premium";
$result1 = mysqli_query($conn,$sql1);  
?>    
<html>    
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
	<div class="w3-bar w3-light-green w3-large">
          <a href="#contact" class="w3-bar-item w3-button w3-mobile">DDDJ</a>
          <a
      href="../index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
      >Back To Home</a
    >
	</div>   
	<h1> Premium details</h1>
	
	<h2> Paid Premiums </h2>
    <table width="100%" border="1" cellspacing="1" cellpadding="1" style="border-collapse: collapse; background-color: rgba(249, 249, 249, 0.6);">    
            <tr>    
                <td>Receipt Number</td>    
                <td>Receipt Date</td>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Receipt_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Receipt_Date;?>  
				</td>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
			</tr> 
		<?php }?>
        </table>
		<h2> Unpaid Premiums </h2>
		<table width="100%" border="1" cellspacing="1" cellpadding="1" style="border-collapse: collapse; background-color: rgba(249, 249, 249, 0.6);">     
            <tr>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
				<td>Fine</td>
				<td>Lateness</td>
            </tr>  
	<?php    
    
		while($row1 = mysqli_fetch_object($result1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row1->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
				<td>  
					<?php echo $row1->Fine;?>  
				</td>  
				<td>  
					<?php echo $row1->Lateness;?>  
				</td>  
				
			</tr> 
		<?php }?>
        </table>
    </body>    
</html>