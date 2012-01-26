<?php

require("UAParser.php");

$result = UA::parse();

print "<html><head><title>ua-parser-php</title></head><body><h1>ua-parser-php Test</h1>";
print "<p><a href='https://github.com/dmolsen/ua-parser-php'>ua-parser-php</a> is a pseudo-port of <a href='http://code.google.com/p/ua-parser/'>ua-parser</a>. Please use this page to test your browser. ";
print "If you notice any incorrect information email me at dmolsen+uaparser@gmail.com. Please include the <em>uaOriginal</em> field as well as what you think the browser should be classified as in your message. </p>";

if ($result) {
	print "<pre>";
	print_r($result);
	print "</pre>";
} else {
	print "Sorry, ua-parser-php was unable to match your user agent which was: ";
	print $_SERVER["HTTP_USER_AGENT"];
}

print "</body></html>";

?>