<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
      table {
        color:red;
        border:solid;
        font-size:25px;
        
      }
      body {
        background-color:#ccc;
      }
     .title1 {
       font-size:25px;
       

      }
      .container {
        position: relative;
       text-align:center;
       bottom: -20px;
       color: red;
      }
      .container-text {
        text-align:center;
        font-size:25px;
      }
  </style>
</head>
<body>
<div class="title1">Tabla inmultiri</div>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>

</table>
<div class="container-text">Numere impare si numere pare</div>
<div class="container">
<?php

    $end=50;
    $even= "Numerele pare sunt : ";
    $odd="<br /> Numerele impare sunt : ";

    for($i=1;$i<=$end;$i++)
    {
        if($i%2==0)
        {
            $even.=$i.",";
        }else $odd.=$i.","; 
    }   
    echo $even.$odd;

?>
</div>


</body>
</html>


