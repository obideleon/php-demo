<?php

require 'helpers.php';
// require 'router.php';
require 'Database.php';

$db = new Database();

$posts = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

dd($posts);