<?php 
header('Content-type: application/json');//with header Content type  
echo file_get_contents("https://github.com/rohitnotes/response/blob/master/list.json"); 
?> 
