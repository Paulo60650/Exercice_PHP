<html>
<body>
  <?php 
   $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
   "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
   "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
 );
 $nb = 0;
 foreach($a['19003'] as $value)
 {
   if($value == 'Stage')
   $nb++;
 }
 echo"Le stage du groupe 19003 dure ".$nb." semaines"."<br>";
// Avec une fonction
 $aNbSemaines = array_count_values($a["19003"]);
echo"Le stage du groupe 19003 dure ".$aNbSemaines["Stage"]." semaines";
  ?> 
</body>
</html>