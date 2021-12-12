<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?= get_bloginfo($show = 'description') ?> ">
	<title><?= wp_get_document_title() ?></title>
	<script>
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');
	</script>
	<?php wp_head() ?>
</head>

<body <?php body_class('bg-white dark:bg-gray-900') ?>>