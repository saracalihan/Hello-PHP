<form action="personel.php" Method="POST" >

<html>
	<head>
	<title >Hakkinda</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
		<table align="center" border="1">
			<tr>
				<th colspan="2" height="40" >PERSONEL</th>			
			</tr>
			<tr>
				<td  >Name</td>
				<td  > <input type="text" name="name"  > </td>				
			</tr>
			<tr>
				<td >Password</td>
				<td  ><input type="password" name="password" ></td>				
			</tr>
			<tr>
				<td colspan="2"><input type="radio" name="gender" value="erkek"  >Male
								<input type="radio" name="gender" value="kadin" checked >female</td>
				
			</tr>
			<tr ><td colspan="2">
				<input type="checkbox" name="abc" value="a"  >a
				<input type="checkbox" name="abc" value="b" >b
				<input type="checkbox" name="abc" value="c"  >c
				<?php
					
				
				
				?>
				<input type="checkbox" name="abc" value="non" checked >non
		
			</tr>
			<tr>
				<td colspan="2"> 
					<select name="city">						
					<option value="00" selected>----city----</option>
					<option value="Istanbul">istanbul</option>
					<option value="Sakarya" >sakarya</option>
					<option value="Giresun">giresun</option>
					</select>
				</td>				
			</tr>
			<tr>
				<td >Addres</td>
				<td  ><textarea rows="5" cols="20" name="addres" ></textarea></td>
				
			</tr>
			<tr >
				<td colspan="2"><input type="submit" value="submit"></td>
				
			</tr>

			
		</table>
		<h6>admin 1234</h6>
	</body>
</html>
</form>