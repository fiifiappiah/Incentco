-- Write a PHP function to iterate over an associative array printing each key and value.

-- Write a PHP function with the following signature that returns as string that is a reverse of the parameter.
    For example, if the string “hello world” was passed to this function as the $text argument, the function should return “dlrow olleh”

	public function reverse_string($text) {

	}

-- Write two (2) unit tests to validate the reverse_string() function above.

-- Explain what the following function will return given the following input and choose a new name for the function.

	$output= do_something(“http://www.mydomain.com/q?filter=test”);
	$output= do_something(“https://yourdomain.com/”);
	$output= do_something(“www.theirdomain.com/”);

	public function do_something($url) {
		$url= strtolower($url);

		$url= preg_replace("|^[htps]+://|", "", $url);
		$url= preg_replace("|^www\.|", "", $url);
		$url= preg_replace("|[/:\?].*$|", "", $url);
		return $url;