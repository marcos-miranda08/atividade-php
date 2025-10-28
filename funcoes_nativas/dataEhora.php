<?php
date_default_timezone_set ("America/São Paulo");
echo "Data Atual: " . date("d/m/Y") . "<br>";
echo "Hora Atual: " . date("H:i:s") . "<br>";
echo "Daqui a 7 dias: " . date("d/m/Y", strtotime("+7 days"));
?>