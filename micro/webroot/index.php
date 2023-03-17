<!DOCTYPE html>
<html>
  <head>
    <title>deta-php-engine</title>
    <style>
		body {
			background-color: #121212;
			color: #f8f8f8;
			font-family: Arial, sans-serif;
			text-align: center;
		}

		h1 {
			font-size: 6em;
			text-shadow: 3px 3px #FF0000;
		}

		p {
			font-size: 1.5em;
			margin-top: 0;
			margin-left: auto;
			margin-right: auto;
			max-width: 80%;
		}

		a {
			text-decoration: none;
			color: #f2f2f2;
			background-color: #333;
			padding: 10px 20px;
			border-radius: 20px;
			transition: all 0.3s ease-in-out;
		}

		a:hover {
			color: #333;
			background-color: #f2f2f2;
			transform: scale(1.1);
		}

    </style>
  </head>
  <body>
    <h1>deta-php-engine</h1>
	<hr/><br/>
	  <p>
		<?php
			// Display PHP version
			echo "PHP Version: " . phpversion() . "<br>";

			// Display loaded extensions
			$loaded_extensions = get_loaded_extensions();
			echo "Loaded Extensions: " . implode(", ", $loaded_extensions) . "<br>";

			// Display maximum execution time
			$max_execution_time = ini_get('max_execution_time');
			echo "Max Execution Time: " . $max_execution_time . "<br>";

			// Display memory limit
			$memory_limit = ini_get('memory_limit');
			echo "Memory Limit: " . $memory_limit . "<br>";

			// Display error reporting level
			$error_reporting = error_reporting();
			echo "Error Reporting: " . $error_reporting . "<br>";
		?>

	  </p>
		<hr/><br/>
	<a href="https://github.com/tuefekci/deta-php-engine">github.com/tuefekci/deta-php-engine</a>
	<a href="/phpinfo.php">phpinfo</a>
  </body>
</html>
