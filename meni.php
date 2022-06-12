<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
	<meta name="JMBAG" content="0268039418">

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav>

			<div>
			  <ul class="naslov" class="float-left">
				<li class="pon"><a href="login.html">Login</a></li>
				<li class="pon"><a href="meni.html">Jelovnik</a></li>
				<li class="pon"><a href="lokacija.html">Lokacija</a></li>
			  </ul>
			  <ul>
				<img id="logo"src="slike/logo.png" class="float-right" alt="" />
			  </ul>
			</div>
		  </nav>
	</header>
	<div class="main">
		<section class="col-md-12 " style="background-color:rgb(235, 196, 163);">

        <?php
        $xmldata = simplexml_load_file("menix.xml") or die("Failed to load");
        foreach($xmldata->children() as $empl) {         
        echo $empl->ime . ", ";     
        echo $empl->cijena . ", ";     
        echo $empl->opis . "<br> ";       
        } 
        ?>


			
		</section>
	</div>


<footer>
	<p id="im">Viktor Horvat</p>
</footer>
</body>
</html>