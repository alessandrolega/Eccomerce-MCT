<?php
require_once('controllers.php');
// require_once(get_template_directory() . '/config.php');


function get_image_path($image_filename)
{
    $local_path = '/mct';
    $production_path = '';
    $base_url = is_local() ? $local_path : $production_path;
    return $base_url . '/wp-content/themes/merceriacreativatania/assets/images/' . $image_filename;
}
function get_views_path($views_filename)
{
    $local_path = '/mct';
    $production_path = '';
    $base_url = is_local() ? $local_path : $production_path;
    return $base_url . '/wp-content/themes/merceriacreativatania/views/' . $views_filename;
}

function get_merceria_path($path)
{
    $local_path = '/mct';
    $production_path = '';
    $base_url = is_local() ? $local_path : $production_path;
    return $base_url . '/wp-content/themes/merceriacreativatania/' . $path;
}

function get_link_path($path)
{
    $local_path = '/mct';
    $production_path = '';
    $local_link = '';
    $production_link = 'index.php/';
    $base_url = is_local() ? $local_path : $production_path;
    $base_link = is_local() ? $local_link : $production_link;
    return $base_url . $base_link . $path;
}


function is_local()
{
    return strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
}

?>