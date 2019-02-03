<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Sociallink;

class IconsWidget extends Widget
{

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$main = Sociallink::find()->where(['status' => 1])->all();
		return $this->render('iconswidget', ['main' => $main]);
	}
}