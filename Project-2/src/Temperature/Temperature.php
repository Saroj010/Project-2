<?php
namespace dell\Temperature;

function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key => $value) {
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value) {
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    }
    $r .= implode(', ', $values);
    return $r;
}

$url = 'https://weather-ydn-yql.media.yahoo.com/forecastrss';
$app_id = 'U3XlFw7g';
$consumer_key = 'dj0yJmk9YzBpblBQVWlwT2FnJmQ9WVdrOVZUTlliRVozTjJjbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWMz';
$consumer_secret = '19eee89a534f977d5c8b22f9f4501cf7dd0e91fd';
$query = array(
    'location' =>$_POST ['name'],
    'format' => 'json',
);

$oauth = array(
    'oauth_consumer_key' => $consumer_key,
    'oauth_nonce' => uniqid(mt_rand(1, 1000)),
      'oauth_signature_method' => 'HMAC-SHA1',
    'oauth_timestamp' => time(),
    'oauth_version' => '1.0'
);

$base_info = buildBaseString($url, 'GET', array_merge($query, $oauth));
$composite_key = rawurlencode($consumer_secret) . '&';
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;

$header = array(
    buildAuthorizationHeader($oauth),
    'X-Yahoo-App-Id: ' . $app_id
);
$options = array(
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_HEADER => false,
    CURLOPT_URL => $url . '?' . http_build_query($query),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false
);

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);

// print_r($response);
$return_data = json_decode($response);
$result= $return_data->current_observation->condition->Temperature;
if($result){
$name= "The Temperature of \n".$_POST['name']."\nis\n".$result.".";
}

// echo "<pre>";
// var_dump($return_data);
// echo "</pre>";
// print_r($return_data);
// $result = 20;

class Temperature
{
    public 
     $result; 
     public function Temperature()
     {
        echo $this->result;
     } 
}
$obj = new Temperature;
$obj->result = $name;

  echo $obj->tempareture();