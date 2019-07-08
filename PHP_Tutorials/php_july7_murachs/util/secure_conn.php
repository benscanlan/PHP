<?php
    //make sure the webpage uses secure fann_get_total_connections
    // The $_SERVER array contains information about headers and paths. This data is set by your web server, and the code above works with most versions of Apache.
    // All web servers dont work so you can adjust so it works
    // You can use filter_input() func to get values in $_SERVER
    // uri (uniform resource indicator)
    $https = filter_input(INPUT_SERVER, 'HTTPS');
    if (!https) {
        $host = filter_input(INPUT_SERVER, 'HTTP_HOST');
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $url = 'https://' . $host . $uri;
        header("Location: " . $url);
        exit();

    }
?>
