<!DOCTYPE html>
<html lang= 'ja'>
  <head>
    <meta charset= 'UTF-8'>
    <title>PHPの基礎></title>
  </head>
  <body>
    <p>
      <?php
      $vegetables = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
      foreach ($vegetables as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      
      ?>    
      </p>
  </body>
</html>  