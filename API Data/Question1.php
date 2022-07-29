<?php
$endpoint = 'https://www.datim.org/api/sqlViews/fgUtV6e9YIX/data.json';
$session = curl_init($endpoint);
//want the response back
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($session);
//closing session
curl_close($session);
//make it easier to parse php by decoding json
$data = json_decode($data, true);
// dd($data);
if ($data == NULL) die('Error parsing json');

print_r( $data['pager']);
  
?>

