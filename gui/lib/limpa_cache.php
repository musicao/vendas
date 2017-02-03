<?php
return function()
{
    $fator =1;
    $valor = 3600 * $fator;
	$dir='lib.configs';
    $path = Eglobal::getStance()->getPath();
	 
foreach (new DirectoryIterator($path($dir).'individual') as $fileInfo) {    
    if($fileInfo->isDot()) continue;
    if((time() - $fileInfo->getCTime()) > $valor )
    {
        unlink($fileInfo->getPathname());
        }
    
}
};
