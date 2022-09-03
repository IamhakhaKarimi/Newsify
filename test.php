<?php

include('core/Model.php');
include('core/Post.php');

$post_model = new Post();
$data = [
	'title' => 'Some title',
	'description' => 'Some lorem ipsum, ...',
	'image' => 'image_file.png'
];

$query = $post_model->update($data, 10);

echo $query;

