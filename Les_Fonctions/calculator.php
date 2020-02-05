<html>
<body>
  <?php 
    function calculator($nb, $sign, $nb2)
    {
       if(($sign == "+" || $sign == "-" || $sign == "x" || $sign == "*" || $sign == "/") && is_numeric($nb) && is_numeric($nb2))
       {
        if($sign == "+")
        {
           return $nb + $nb2;
        }
        if($sign == "-")
        {
           return $nb - $nb2;
        }
        if($sign == "x" || $sign == "*")
        {
           return $nb * $nb2;
        }
        if($sign == "/")
        {
           return $nb / $nb2;
        }
       }
       else 
       {
          echo "L'opérateur ou les nombres ne sont pas valides";
       }
    } 
    echo calculator(4, "+", 5)."<br>";
    echo calculator(4, "-", 5)."<br>";
    echo calculator(4, "x", 5)."<br>";
    echo calculator(4, "*", 5)."<br>";
    echo calculator(4, "/", 5)."<br>";
   //  Test d'opération non valide
    echo calculator(4, ".", 5)."<br>";
    echo calculator(4, "/", "b")."<br>";
  ?> 
</body>
</html>