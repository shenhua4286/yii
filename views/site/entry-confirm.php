<?php
use yii\helpers\Html;
?>

<p>haha</p>
<ul>
	
	<li>
		<?=Html::encode($model->name) ?>
	</li>
	<li>
		<?=Html::encode($model->email)?>
	</li>
</ul>