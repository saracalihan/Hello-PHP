

<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Personel</title>		
	</head>
	<body>
		<table align="center">
			<tr> <th height="50">Personellerimizden <?php echo" ".$_POST["name"]?></th></tr>
			<tr><td> <p> <?php if($_POST["name"]=="admin" && $_POST["password"]==1234)
			{
				for( $i=0;$i<1000;$i++)
				{echo"Admin ";}
			} 
			else
			
			
				echo"".$_POST["name"]." , ".$_POST["city"]." sehrinde <br>".$_POST["addres"]." 'adresinde yasayan ,cinsiyeti  ".$_POST["gender"]." olan ,".$_POST["abc"]." islerini yapan bir personelimizdir."
				?>
			</p></td></tr>
			
		 <tr> <td height="30" ><input type="button" onclick="window.location.href = 'index.php';" value="<=Geri"/> </td> </tr>
		</table>
	</body>
</html>


	
 
