<?php
 
return function($nome){return  parse_ini_file("configs/$nome.ini", false);};
