<?php
$xmldata = simplexml_load_file("menixShem.xml") or die("Failed to load");
foreach($xmldata->children() as $empl) {         
 echo $empl->ime . ", ";     
 echo $empl->cijena . ", ";     
 echo $empl->opis . "<br> ";       
} 
?>