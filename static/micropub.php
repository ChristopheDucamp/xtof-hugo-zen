<?
// Tell client where I can syndicate to
if(isset($_GET['q']) && $_GET['q'] == "syndicate-to"){
    header('Content-type: application/x-www-form-urlencoded');
    echo "syndicate-to[]=twitter.com%2Fxtof_fr";
    exit;
}

// Check for post
if(!empty($_POST)){
    $headers = apache_request_headers();
    // Check token is valid
    $token = $headers['Authorization'];
    $ch = curl_init("https://tokens.indieauth.com/token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, Array(
         "Content-Type: application/x-www-form-urlencoded"
        ,"Authorization: $token"
    ));
    $response = Array();
    parse_str(curl_exec($ch), $response);
    curl_close($ch);
    // Check for scope=post
    // Check for me=https://christopheducamp.com
    $me = $response['me'];
    $iss = $response['issued_by'];
    $client = $response['client_id'];
    $scope = $response['scope'];
    if(empty($response)){
        header("HTTP/1.1 401 Unauthorized");
        exit;
    }elseif($me != "https://christopheducamp.com" || $scope != "post"){
        header("HTTP/1.1 403 Forbidden");
        exit;
    // Check that something was posted
    }elseif(empty($_POST['content']){
        header("HTTP/1.1 400 Bad Request");
        echo "Missing content";
    }else{

        // DO YOUR THING HERE
        //  ie. insert post content and metadata into your store, write it to a file, whatever you do to add it to your site.
        // For demonstration purposes, let's dump the POST request into a file and return the URL of the file.

        $fn = "posts/".time().".txt";
        $h = fopen($fn, 'w');
        foreach($_POST as $k => $v){
            $data .= "[$k] => $v<br/>";
        }

        fwrite($h, $data); 
        fclose($h); 

        // Set headers, return location
        header("HTTP/1.1 201 Created");
        header("Location: ".$fn);
    }
}
?>