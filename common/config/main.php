<?php
return [
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm' => '@vendor/npm-asset',
	],
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'view' => [
			'class' => 'yii\web\View',
			'renderers' => [
				'twig' => [
					'class' => 'yii\twig\ViewRenderer',
					'cachePath' => '@runtime/Twig/cache',
					// Array of twig options:
					'options' => [
						'auto_reload' => true,
					],
					'globals' => [
						'html' => ['class' => '\yii\helpers\Html'],
					],
					'uses' => ['yii\bootstrap'],
				],
			],
		],
	],

];
