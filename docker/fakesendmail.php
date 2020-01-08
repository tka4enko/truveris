<?php

$options = getopt("", ['prepend', 'file:', 'dir:']);
$output_dir = isset($options['dir']) ? $options['dir'] : sys_get_temp_dir().'/mail';
$file_name = make_name();
$file_path = $output_dir . '/' . $file_name;

$content = file_get_contents('php://stdin');

if( !is_dir( $output_dir ) ) {
    @mkdir( $output_dir, 0777, true );
    if( !is_dir( $output_dir ) ) {
        die('Mail folder ['.$output_dir.'] not created');
    }
}

file_put_contents($file_path, $content);

function make_name($i=0) {
    global $output_dir;
    $fn = (($i > 0) ? (date('Y-m-d_H-i-s_').$i) : (date('Y-m-d_H-i-s')) ).'.eml';

    return file_exists($output_dir.'/'.$fn) ? mkname(++$i) : $fn;
}