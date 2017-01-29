<?php

function generatePage($body, $title) {
    $page = <<<EOPAGE
<!doctype html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> $title </title>	
		<link href="daemon_dash.css" rel="stylesheet" type="text/css" />
	</head>

    <body style="background-color: lightblue;" onload="getLocation()">

		<header id="header">
			<div class="innertube">
				<br>
				<h1 style="color:darkblue;">Food Finder</h1>
			</div>
		</header>

		<div id="wrapper">

			<main>
				<div class="innertube" id="content">
					<center> 
						<h1>Map of the US</h1> 
							$body
							<br>
							<input type="button" name="reset" value="Reset Map" onclick="window.location='main.php';">
					</center>

					<br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span style="font-size: 30px"> <b>Visualization 1: <b> </span>
					<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<center> <img width="1000px" height="600" src="graph1.png" alt="graph1"> </center>

					<br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span style="font-size: 30px"> <b>Visualization 2: <b> </span>
					<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<center> <img width="1000px" height="600" src="graph2.png" alt="graph2"> </center>

					<br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span style="font-size: 30px"> <b>Visualization 3: <b> </span>
					<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<center> <img width="1000px" height="600" src="graph3.png" alt="graph3"> </center>

				</div>
			</main>


			<nav id="nav">
				<div class="innertube">
					<h3>Find Your Food</h3>
					<ul>
						<p>What would you like to eat?</p>
						<form action="foodfinder.php" method="post">
							<li><input type="checkbox" name="typeOfFood[]" value="African">African
							<td>&#x1F1FF;&#x1F1E6;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="American">American
							<td>&#x1F1FA;&#x1F1F8;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Asian">Asian
							<td>&#x1F35A;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Bacon">Bacon
							<td>&#x1f437;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Burgers">Burgers
							<td>&#x1F354;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Cafe">Cafe
							<td>&#x1F376;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Chicken">Chicken
							<td>&#x1F413;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Chinese">Chinese
							<td>&#x1F1E8;&#x1F1F3;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Coffee">Coffee
							<td>&#x2615;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Fries">Fries
							<td>&#x1F35F;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="GlutenFree">Gluten Free
							<td>&#x1F33E;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Greek">Greek
							<td>&#x1F1EC;&#x1F1F7;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Ice_Cream">Ice Cream
							<td>&#x1F366;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Indian">Indian
							<td>&#x1F1EE;&#x1F1F3;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Italian">Italian
							<td>&#x1F1EE;&#x1F1F9;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Japanese">Japanese
							<td>&#x1F1EF;&#x1F1F5;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Korean">Korean
							<td>&#x1F1F0;&#x1F1F7;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Mexican">Mexican
							<td>&#x1F1F2;&#x1F1FD;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Middle_Eastern">Middle Eastern
							<td>&#x1F1F8;&#x1F1E6;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Organic">Organic
							<td>&#x1F353;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Pizza">Pizza
							<td>&#x1F355;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Salad">Salad
							<td>&#x1F33F;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Sandwich">Sandwiches
							<td>&#x1F354;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Seafood">Seafood
							<td>&#x1F41F;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Soup">Soup
							<td>&#x1F35C;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Steak">Steak
							<td>&#x1F404;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Sushi">Sushi
							<td>&#x1F363;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Thai">Thai
							<td>&#x1F1F9;&#x1F1ED;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Turkey">Turkey
							<td>&#x1F1F9;&#x1F1F7;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Vietnamese">Vietnamese
							<td>&#x1F1FB;&#x1F1F3;</li>
						<li><input type="checkbox" name="typeOfFood[]" value="Wine">Wine
							<td>&#x1F377;</li>

							<input type="submit" name="submit">
						</form>
					</ul>
				</div>
			</nav>

		</div>

		<footer id="footer">
			<div class="innertube">
				<p>Find Your Food</p>
			</div>
		</footer>

	</body>
</html>
EOPAGE;

    return $page;
}
?>