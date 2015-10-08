<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple StackExchange</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <?php
			$servername = "localhost";
			$username = "root";
			$password = "12345";
			$db = "stackexchange";

			// Create connection
			$conn = new mysqli($servername, $username, $password,$db);
			// Check connection
			if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
		?>

	</head>
	<body>
		<div class="container">
			<h1>Simple StackExchange</h1>
			
			<div class="content">
				<form>
					<input type="text" class="input-search">
					<div class="button-right"><button type="submit">Search</button></div>
				</form>
			</div>

			<div class="content">
				<br><h5>Cannot find what you're looking for? <a href="ask.php">Ask here</a></h5>
			</div>

			<div class="content">
				<h3>Recently Asked Questions</h3>
			</div>
		</div>
	</body>
</html>