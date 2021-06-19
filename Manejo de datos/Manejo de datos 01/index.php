<?php

$data = 'Estudio PHP';

//echo $data[0];

// $post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quo? Sequi, eum earum aliquid excepturi tenetur quam iure at nemo hic consequatur, reiciendis molestiae error explicabo recusandae veniam optio corrupti.";
// $extract = substr($post, 0, 20);

// echo "$extract... [ver más]";

$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

echo '<pre>';
var_dump($tags);
echo '</pre>';
