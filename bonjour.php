	
<html>
<body>
  <?php 
      $myVar = "KO";
 
      if ($myVar == "OK") 
      {    
         echo"C'est bon<br>";
      } 
      else 
      {
        echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
        $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
        error_log($message); 
      } 
      echo $_SERVER["SERVER_NAME"];
      echo '<br>';
      echo $_SERVER["REMOTE_ADDR"];
  ?> 
</body>
</html>