<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');

* {
  margin: 0;
  padding: 0;
}
body {
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("https://www.eatbanza.com/cdn/shop/collections/website-desktop1_1_1200x.jpg?v=1602556563")
      no-repeat center center fixed;

  background-size: cover;
}
header {
  height: 90px;
  width: 1100px;
  display: flex;
  gap: 20%;
  justify-content: space-around;
  padding: 1%;
  color: white;
  align-items: center;
}

header img {
  border-radius: 25px;
  height: 90%;
  width: 7%;
}
h1 {
  color: #29df6e;
  font-family: "Roboto Condensed", sans-serif;
}

	</style>
	<body>
		<!-- Page-level header -->
		<header>
      <img src="images.png" alt="logo of pizza" />
      <h1>Welcome to Pizza Delivery Service By Sujal</h1>
    </header>
		
<?php
// Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
	$emailAddress = $_GET['emailAddress'];
// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
	echo('<p>Your email address, '.$emailAddress.' has been added to our list of subscribers.</p>');
?>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
