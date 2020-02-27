<form action="personel.php" Method="POST" >

<html>
	<head>
	<title >php</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body >
	
		<table align="center" >
			<tr>
				<th colspan="3" height="40" >PERSONEL</th>			
			</tr>
			<tr>
				<td  >Name</td>
				<td colspan="2" > <input type="text" name="name"  > </td>				
			</tr>
			<tr>
				<td >Password</td>
				<td colspan="2" ><input type="password" name="password" ></td>				
			</tr>
			<tr>
				<td colspan="2"><input type="radio" name="gender" value="erkek" checked >Male</td>
				<td ><input type="radio" name="gender" value="kadýn"  >female</td>
				
			</tr>
			<tr>
				<td  ><input type="checkbox" name="abc" value="a"  >a</td>
				<td  ><input type="checkbox" name="abc" value="b" checked >b</td>
				<td  ><input type="checkbox" name="abc" value="c"  >c</td>
			</tr>
			<tr>
				<td colspan="3"> 
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
				<td  colspan="2"><textarea rows="5" cols="20" name="addres" ></textarea></td>
				
			</tr>
			<tr >
				<td colspan="3" class="slctd"><input type="submit" value="submit"></td>
				
			</tr>

			
		</table>
		<h6>admin 1234</h6>
	</body>
</html>
</form>