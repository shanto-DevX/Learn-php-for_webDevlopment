<?php

require('./userInfo.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get User IP</title>
  </head>
  <body>
    <h1>Geting Use Data using php</h1>
    <h2><? echo userInfo::get_ip();?></h2>
    <h2><? echo userInfo::get_device();?></h2>
    <h2><? echo userInfo::get_os();?></h2>
    <h2><? echo userInfo::get_browser();?></h2>
  </body>
</html>
