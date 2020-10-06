<?php 
    declare(strict_types=1);

    function suma():float
    {
        echo $argv[1];
        return array_sum(func_get_args());
        
    }
    echo suma($argv);
    