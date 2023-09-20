<?php
	$doc = new DOMDocument;
	$doc->load('rate.xml');

	$rate = $doc->documentElement;
	$r = $rate->getElementsByTagName('r')->item($_GET['id']);
	$oldr = $rate->removeChild($r);
	$file = $doc->saveXML();
	
	$xml=simplexml_load_string($file);
	$xml->saveXML('rate.xml');
	
	header("Location: view_rate.php");
	die();
?>