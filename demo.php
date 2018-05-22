<?php
	require_once 'lib/Autoload.php';
	
	$list = new ArrayList([
		'toto' => 'ligne 1',
		'titi' => 'ligne 2',
		'tata' => 'ligne 3',
		'tutu' => 'ligne 4',
		'tete' => 'ligne 5',
	]);
	
	var_dump($list->add('test1'));
	var_dump($list->add('test2', 'valeur'));
	
	var_dump($list);
	
	var_dump($list->get('test2'));
	var_dump($list->get('test'));
	var_dump($list->get('test2'));
	var_dump($list->get('valeur', true));
	
	var_dump($list->upd('test1', 'nouvelle valeur'));
	
	var_dump($list);
	
	var_dump($list->del($list, 'test1'));
	var_dump($list->del($list));
	
	var_dump($list);
	
	
