<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML - Simple Example</title>
</head>
<body>

<h1>
Function Range
</h1>
    <?php
     function work($start, $end){ 
        foreach(range($start, $end) as $n){
            echo $n . "<br/>";
        }
     }
      work(1,20);
     ?>

<h1>Function Sum</h1>

<?php
     function sum(int $b, $c,$a, $d){ 
        $t = array($b, $c,$a, $d);
        $n = array_sum($t);

            echo '<p>Sum of array:</p>' . $n ;
        
     }
      sum(20,20,30,30);
     ?>
</body>
</html>