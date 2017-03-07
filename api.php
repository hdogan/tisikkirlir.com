<?php
require 'Converter.php';

use Tisikkirlir\Converter;

header('Content-Type: application/json; charset=utf-8');

$text = isset($_GET['text']) ? trim(filter_var(rawurldecode($_GET['text']), FILTER_SANITIZE_STRING)) : '';

if (empty($text)) {
	header('HTTP/1.1 400 Bad Request', true, 400);
	echo json_encode([
		'code' => 400,
		'success' => false,
		'message' => 'Bisilir yizsini girizikili!',
	]);
}
else {
	header('HTTP/1.1 200 OK', true, 200);
	echo json_encode([
		'code' => 200,
		'success' => true,
		'text' => Converter::convert($text),
	]);
}
