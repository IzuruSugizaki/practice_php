<!DOCTYPE>
<html>
 <head>
  <title>2次方程式の解法</title>
  <meta charset="utf-8">
 </head>
 <body>
  <h2>2次方程式の解法</h2>
  <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $res = "";
    if(is_numeric($a) && is_numeric($b) && is_numeric($c) && $a != 0){
      $d = $b * $b - 4 * $a * $c;
      if($d > 0){
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        $res = $x1.",".$x2."(異なる二つの解)";
      } elseif($d < 0){
        $xr = -$b / (2 * $a);
        $xi = sqrt( abs($d)) / (2 * $a);
        $res = $xr." + ".$xi."i,".$xr." - ".$xi."i(虚数解)";
      } else{
        $x = -$b / (2 * $a);
        $res = $x."(重解)";
      }
      echo "<p>2次方程式の解は".$res."です。</p>";
    } else{
      echo "<p>aが0であるか、入力が数値でありません。</p>";
    }
  ?>
 </body>
</html>
