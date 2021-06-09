<html>
	<head>
	<title>PRODUCTS FORM</title>
	<link href = "style (1).css" rel = "stylesheet" type = "text/css" />
	</head>
	<body>
	<form action = "products.php" method = "post">
	<div class = "frame_design">
	<div class = "header_font">WELCOME TO THE PRODUCT CAPTURE FORM</div>
		<table>
			<tr>
				<td>
					<div class = "control_font">Enter the amount of products:</div>
				</td>
				<td>
					<div class = "control_font"><input 
						name = "txtRows" type = "text" class = "control_font_txt"/></div> 
				</td>
			</tr>
			<tr>
				<td>
					<input type = "submit" name = "btnCreate" 
			 			value = "  CREATE" class = "button_style" >
				</td>
			</tr>
		</table>
		
<?php 
		session_start();
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$rows = 0;
		}
			if (isset($_POST['btnCreate']))
			{
				$_SESSION["rows"] = $_POST['txtRows'];
				
				print "</br>";
				print "</br>";
					
				print "<table border = 1>";
					for ($y = 1; $y <= $_SESSION["rows"]; $y++)
					{
						print "<tr>";
							print "<td>";
							print "<div class = 'control_font'/>PRODUCT $y: </div>";
							print "</td>";
							print "<td>";
							print '<input name="product[]" type = "text" 
								class = "control_font_txt" />';
							print "</td>";
						print "</tr>";
					}
				print "</table>";
				print '<input type = "submit" name = "btnSubmit" 
			 			value = "  SUBMIT" class = "button_style" >';
			}
			if (isset($_POST['btnSubmit']))
			{
				echo "<div class = control_font>PRODUCTS CAPTURED<br><div/>";
				echo "--------------------------------<br><br>";
				$x = 1;
				print "<table border = 1 class = control_font>";
				foreach($_POST['product'] as $key => $value)
				{
					print "<tr>";
						print "<td>";
					  		echo "PRODUCT $x: ";
				  		print "</td>";
				  		print "<td>";
				  			echo $value."<br>";
				  		print "</td>";
			  		print "</tr>";
				  $x += 1;
				}
				print "</table>";
			}
?>
	</div>	
    </form>
  </body>
</html>


