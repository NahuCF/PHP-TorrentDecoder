<?php

function bytes_to_mb($size)
{
    return round((int)$size / 1000000, 2);
}


function get_file_size($file_name)
{
    define("LENGTH_WORD", 7); // lengthi
    define("kb", 1000);
    define("mb", 1000000);
    define("tb", 1000000000);

    $size = "";
    $file_content = file_get_contents($file_name);

    $begin = strpos($file_content, "lengthi") + LENGTH_WORD;
    $end = strpos($file_content, "e4:name");

    for($begin; $begin < $end; $begin++)
    {
        $size .= $file_content[$begin];
    }

    if($size <= kb)
    {
        return round((int)$size / kb) . "KB";
    }
    elseif($size <= mb) 
    {
        return round((int)$size / mb) . "MB";
    }
    else 
    {
        return round((int)$size / tb) . "TB";
    }

}

?>