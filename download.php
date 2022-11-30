<?php
// error_reporting(E_ALL ^ E_NOTICE);
include_once("db_connect.php");
// $connect = mysqli_connect("localhost", "root", "", "report_dpa");
$id = $_GET['id'];
// echo $id . "<br>";
$url1 = $_GET['url'];
// echo $url1. "<br>";
// echo $url . "<br>";
$name = $_GET['name'];
// echo $name . "<br>";



$curl = curl_init();

curl_setopt_array($curl, array(
   CURLOPT_URL => $url1,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'GET',
   CURLOPT_SSL_VERIFYPEER => false
));

$response = curl_exec($curl);
curl_close($curl);

$obj = json_decode($response);
$x = $obj->url;
echo $x;


header('Location:' . $x . '');



   // $filename = $id . '_' . $name . '.mp4';
   // $myFile = $x;

   // $ext = strtolower(substr($fl, strrpos($myFile, ".")));
   // $mime_types = array(
   //    '.txt' => 'text/plain',
   //    '.htm' => 'text/html',
   //    '.html' => 'text/html',
   //    '.php' => 'text/html',
   //    '.css' => 'text/css',
   //    '.js' => 'application/javascript',
   //    '.json' => 'application/json',
   //    '.xml' => 'application/xml',
   //    '.swf' => 'application/x-shockwave-flash',
   //    '.flv' => 'video/x-flv',

   //    // images
   //    '.png' => 'image/png',
   //    '.jpe' => 'image/jpeg',
   //    '.jpeg' => 'image/jpeg',
   //    '.jpg' => 'image/jpeg',
   //    '.gif' => 'image/gif',
   //    '.bmp' => 'image/bmp',
   //    '.ico' => 'image/vnd.microsoft.icon',
   //    '.tiff' => 'image/tiff',
   //    '.tif' => 'image/tiff',
   //    '.svg' => 'image/svg+xml',
   //    '.svgz' => 'image/svg+xml',

   //    // video
   //    '.3gp' => 'video/3gpp',
   //    '.3g2' => 'video/3g2',
   //    '.avi' => 'video/avi',
   //    '.mp4' => 'video/mp4',
   //    '.asf' => 'video/asf',
   //    '.mov' => 'video/quicktime',
   // );

   // if (array_key_exists($ext, $mime_types)) {
   //    $mm_type = $mime_types[$ext];
   // } else {
   //    $mm_type = "application/octet-stream";
   // }
   // $mm_type = "application/octet-stream";

   // header("Cache-Control: public, must-revalidate");
   // header("Pragma: public");
   // header("Pragma: hack");
   // header("Content-Type: " . $mm_type);
   // header('Content-Disposition: attachment; filename="' . $filename . '"');
   // header("Content-Transfer-Encoding: binary\n");
   // ob_clean();
   // flush();
   // readfile($myFile);
   // exit;
