<?php
include "../connection.php";


$sql = "select * from agent";
$result = mysqli_query($conn, $sql);
?>
<html>

<body>
	<link href="modified.css" type="text/css" rel="stylesheet" />
	<link href="../style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Raleway"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
	<!-- <ul>
		<li style="float:right; color:black; font-weight: 800;"><a href="../index.php"> Back to homepage</a></li>
	</ul> -->
	
	<div class="w3-bar w3-brown w3-large">
          <a href="#contact" class="w3-bar-item w3-button w3-mobile">DDDJ</a>
          <a
      href="../index.php"
      class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" 
      >Back To Home</a
    >
	</div>
	<h1>
		<center>Agents Data</center>
	</h1>

	<table width="100%" border="1" cellspacing="1" cellpadding="1" style="border-collapse: collapse; background-color: rgba(249, 249, 249, 0.6);">  
		<tr>
			<td>Agent Code</td>
			<td>Agent Name</td>
			<td>DOB</td>
			<td>Address</td>
			<td>Pincode</td>
			<td>Branch</td>
			<td>Contact Number</td>
			<td colspan="2">Action</td>
		</tr>
		<?php

		while ($row = mysqli_fetch_object($result)) {


			?>
			<tr>
				<td>
					<?php echo $row->Agent_code; ?>
				</td>
				<td>
					<?php echo $row->Agent_name; ?>
				</td>
				<td>
					<?php echo $row->DOB; ?>
				</td>
				<td>
					<?php echo $row->Address; ?>
				</td>
				<td>
					<?php echo $row->Pincode; ?>
				</td>
				<td>
					<?php echo $row->Branch; ?>
				</td>
				<td>
					<?php echo $row->Contact_Num; ?>
				</td>
				<td> <a href="delete.php?id=<?php echo $row->Agent_code; ?>" onclick="return confirm('Are You Sure')">Delete
					</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>