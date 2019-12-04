<?php 
 $server ="localhost";
 $usr	 ="root";
 $pass	 ="1";
 $dbname ="phpsql";

 $konek =mysqli_connect($server, $usr, $pass, $dbname);

 if($konek)