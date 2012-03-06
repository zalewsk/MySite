<html>
 <head>
  <title>Mike's Site</title>
 </head>
 
 <?php 
	//retrieve and parse the ip address, saving the country code into a new variable
	//search the db using the country code and set $country_name to the corresponding country.
	function idCountry($ip_address){
		$coutry_code = substr($ip_address, 0, 2);		
		
		//$mysqli = new mysqli("127.0.0.1", "catalog_user", "secret", "catalog_prod")
		//GLOBAL $country_name = "SELECT country FROM ip_addresses WHERE ccode = $country_code";
		if ($coutry_code == 192)
			return "Canada";
		else 
			return "Uganda";
	}
 ?>
 
 <body>
 <h1><?php echo '<p>My name is Mike.</p>'; ?> </h1>
 
 <h2><?php printf ("Based on your IP address of s%, I'd say you're from %s.", $_SERVER['REMOTE_ADDR'], idCountry($_SERVER['REMOTE_ADDR'])); ?> </h2>
 </body>
</html>
