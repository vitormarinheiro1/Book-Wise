<?php

// Model
require 'data.php';

$id = $_REQUEST['id'];

$filtered = array_filter($books, fn($l) => $l['id'] == $id);

$book = array_pop($filtered);

view('book', compact('book'));
