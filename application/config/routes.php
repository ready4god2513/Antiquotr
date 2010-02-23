<?php defined('SYSPATH') OR die('No direct access allowed.');


$config['_default'] = 'quote';
$config['([0-9]+)(.*)'] = 'quote/view/$1/';
$config['new'] = 'quote/new_';
$config['create'] = 'quote/create';
$config['save'] = 'quote/save';
$config['feed'] = 'quote/feed';
$config['author'] = 'authors/new_';
$config['all'] = 'quote/all';