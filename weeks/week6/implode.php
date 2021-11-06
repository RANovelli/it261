<?php
// implodes and wines function
// cab, merlot, syrah, malbec, blend

$wines = array(
    'cab', 
    'merlot', 
    'syrah', 
    'malbec', 
    'blend'
);

// echo $wines;

$my_wines = implode(', ', $wines);
echo $my_wines;