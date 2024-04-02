<?php
ob_start();
$text = " ";
visitor($text);
function visitorlogger($ip) {
    $file = fopen('../../evisitors.txt', 'a') or die('unable to open file');
    fwrite($file, $ip);
    fclose($file);
    $counter = fopen("counter.txt", "r+") or die("<script> console.log('cannot access counter file') </script>");
    $count = fread($counter,filesize("counter.txt"));
    $count = $count + 1;
    fclose($counter);
    file_put_contents("counter.txt", $count);
}
function visitor(&$visitor){
  if(!isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $visitor = $_SERVER['REMOTE_ADDR'].PHP_EOL;
  } else {
    $visitor = $_SERVER["HTTP_CF_CONNECTING_IP"].PHP_EOL;
  }
}
if(strpos(file_get_contents('../../evisitors.txt'), $text) !== false) {

} else {
  visitorlogger($text);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="og:description" content="ESTROGEN HIEST">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="./js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dheereshagrwal/colored-icons@1.7.5/src/app/ci.min.css"/>
</head>
<body>
  <div class="header">
  <div class="title">
  <h1>ESTROGEN HIEST</h1>
  </div>
  <div class="socials">
    <ul id="socials">
    <li>
    <a href="https://open.spotify.com/artist/5n2BT6qtJoparlqZtjcmO0"><i class="ci ci-spotify ci-2x"></i><a>&nbsp;
    <a href="https://www.instagram.com/spectrums.band/"><i class="ci ci-instagram ci-2x"></i><a>&nbsp;
    <a href="https://www.youtube.com/@spectrums."><i class="ci ci-youtube ci-2x"></i><a>&nbsp;
    <a href="https://twitter.com/spectrums_band"><i class="ci ci-twitter ci-2x"></i><a>&nbsp;
    <a href="https://www.tiktok.com/@spectrums.band"><i class="ci ci-tiktok ci-2x"></i><a>&nbsp;
</li>
</ul>
</div>
</div>
  <img src="./assets/estrogen_hiest.png" alt="estrogen_hiest">
  <h2 id="release"></h2>
  <p>In the meantime go follow Spectrums. on their numerous socials</p>
<div class="visitors">
    <p id="visitors"></p>
  </div>
</body>
