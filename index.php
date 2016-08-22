<?php
echo '<h3>Taaps - Teste formularios HTML</h3><h1>Parametros Recebidos:</h1>:';
foreach($_GET as $key => $value){
  echo "<h3>" . $key . " : " . $value . "</h3><br />\r\n";
}
?>