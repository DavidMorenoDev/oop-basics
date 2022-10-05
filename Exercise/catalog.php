<?php

require_once ("classNovela.php");


$objSombra = new Novel("La sombra del viento", "Carlos Ruiz Zafón",'Thriller', 2003, '198', 15.79,);
$arrInfoBook = $objSombra -> getInfoBook();


print_r("<pre>");
print_r($arrInfoBook);
print_r("</pre>");

/* unset ($objSombra); */

?>