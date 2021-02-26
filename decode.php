<?php

function bytes_to_mb($size)
{
    return round((int)$size / 1000000, 2);
}


function get_size_mb($file_name)
{
    define("LENGTH_WORD", 7); // lengthi

    $size = "";
    $file_content = file_get_contents($file_name);

    $begin = strpos($file_content, "lengthi") + LENGTH_WORD;
    $end = strpos($file_content, "e4:name");

    for($begin; $begin < $end; $begin++)
    {
        $size .= $file_content[$begin];
    }

    return bytes_to_mb($size);

}

?>