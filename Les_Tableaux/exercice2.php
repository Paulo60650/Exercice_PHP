<html>
<body>
  <?php 
   $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
   "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
   "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
 );
  $i = 0;
  $j = 0;
  $taille = count($a[19001]);
  while($i++ != $taille -1)
  {
    if($a[19001][$i] == 'Stage')
    $j = $i;
  }
  $j++;
  echo "La dernière semaine de Stage pour le groupe 19001 est la semaine ".$j."<br>";
// Avec une fonction
$aInverse = array_reverse($a["19001"], TRUE);
$iPosition = array_search("Stage", $aInverse);
$iPosition++;
echo "La dernière semaine de Stage pour le groupe 19001 est la semaine ".$iPosition."<br>";
  ?> 
</body>
</html>