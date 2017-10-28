<?php

function getLine($file, $line, $length = 4096){
    $returnTxt = null; // 初始化返回
    $i = 1; // 行数
 
    $handle = @fopen($file, "r");
    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle, $length);
            if($line == $i) $returnTxt = $buffer;
            $i++;
        }
        fclose($handle);
    }
    return $returnTxt;
}
