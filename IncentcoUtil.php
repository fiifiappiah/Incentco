<?php

namespace Incentco;

class IncentcoUtil 
{
    /**
     * Write a PHP function to iterate over an associative array printing each key and value.
     * Iterates an associative Array and prints value key pairs;
     * @param array $associativeArray
     */
    public function iterate_array($associativeArray = []){
        foreach ($associativeArray as $key=>$value){
            echo "key: $key => $value \n";
        }
    }
    
    /**
     * Write a PHP function with the following signature that returns as string that is a reverse of the parameter.
     * @param $text
     * @return string
     */
    public function revere_string($text){
        $reversedString = '';
        if(is_string($text)){
            $phraseLen = strlen($text);
            for($i = $phraseLen; $i>0; $i--){
                $reversedString .= $text[($i-1)];
            }
        }
        return $reversedString;
    }

    /**
     *  Explain what the following function will return given the following input and choose a new name for the function.
     *	$output= do_something(“http://www.mydomain.com/q?filter=test”);
     *	$output= do_something(“https://yourdomain.com/”);
     *	$output= do_something(“www.theirdomain.com/”);
     *
     * @note renamed function to url_parse, not to be confused with built-in func. parse_url
     *
     * @param $url
     * @return mixed|string
     */
	public function url_parser($url)
    {
        $url = strtolower($url);

        // Matches from beginning ^ of characters https of 1 or more + also match :// literally. '|' characters are delimiters
        // Will match "http://",
        // and Replace 'http://' with nothing i.e.remove it.
        $url = preg_replace("|^[htps]+://|", "", $url);
        
        // Matches from beginning ^ of characters www, escapes dot and match literally. '|' characters are delimiters
        // Will match wwww.
        // and replace 'www.' with nothing i.e. remove it.
        $url = preg_replace("|^www\.|", "", $url);
        
        // Will match single characters of /,:,? and return the rest of the string till the end $. '|' characters are delimiters
        // thus will replace anything after the first colon :,(or /,?) in the url with nothing. i.e. remove it.
        // Eg. url_parser(“www.theirdomain.com/”) returns: www.theirdomain.com
        $url = preg_replace("|[/:\?].*$|", "", $url);

        return $url;
    }
}