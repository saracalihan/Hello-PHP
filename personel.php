

<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Personel</title>
		<style rel="stylesheet" href="text/css">
		h1{
			text-align :center;
			background-color: navy;
			color: white;
			padding: 20px ;
			
		}
		p{
		background-color: navy;
		font-size: 25px;
		align: center;
		color:white;
		}
		body{
		background-color: #DFF6F0;
	}
		</style>
	</head>
	<body>
		  <h1>Personellerimizden <?php echo" ".$_POST["name"]?></h1><br><br><br>
		<p> <?php if($_POST["name"]=="admin" && $_POST["password"]==1234)
		{
			for( $i=0;$i<1000;$i++)
			{echo"Admin ";}
		} 
		else
				echo"".$_POST["name"]." , ".$_POST["city"]." sehrinde ".$_POST["addres"]." 'adresinde yasayan ,cinsiyeti  ".$_POST["gender"]." olan ,".$_POST["abc"]." islerini yapan bir personelimizdir."?>
		</p>
	</body>
</html>


	
 
