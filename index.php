<?php
ob_start();
$text = " ";
visitor($text);
function visitorlogger($ip) {
    $file = fopen('../evisitors.txt', 'a') or die('unable to open file');
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
if(strpos(file_get_contents('../evisitors.txt'), $text) !== false) {

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
</head>
<body>
  <h1>ESTROGEN HIEST</h1>
  <img src="./assets/estrogen_hiest.png" alt="estrogen_hiest">
  <h2>Releases April 69th 2024</h2>
<div class="container">
<div class="iframe">
  <!--<iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/5n2BT6qtJoparlqZtjcmO0?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>-->
  <p>presave album thingy will be here <br> and maybe other links to other platforms</p>
</div>
<div class="insta_widget">
  <p>this will be insta widget</p>
</div>
</div>
<div class="visitors">
    <p id="visitors"></p>
  </div>
</body>