<?php

namespace frontend\widgets;

use yii\base\Widget;

class SettingWidget extends Widget
{

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$main = 'test';
		return $this->render('settingwidget');
	}
}