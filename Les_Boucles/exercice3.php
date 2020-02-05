<html>  
<link rel="stylesheet" href="assets/CSS/style.css">
<body>
  <?php 
     echo "<table>";
     echo "<tr>";
     echo "<td>X</td>";
     for ($i = 0; $i <= 12; $i++)
     {
       echo "<td>$i</td>";
     }
     echo "</tr>";
     for ($i = 0; $i <= 12; $i++)
     {
      echo "<tr>";
      echo "<td>$i</td>";
      for ($j = 0; $j <= 12; $j++)
      {
        $res = $i * $j;
        echo "<td> $res </td>";
      }
      echo "</tr>";
     }
     echo "</table>";
  ?> 
</body>
</html>