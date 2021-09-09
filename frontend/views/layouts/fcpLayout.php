<?php
use yii\helpers\Html;

use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php 
$this->beginPage();
?>
<!DOCTYPE html>
<html>
<header>
<title><?=Html::encode('fcp App')?></title>

<?php $this->head();?>
</header> 
<body>
<?php $this->beginBody();?>
<div class="container-fuid bg-primary text-white">
    <h1>fcp App</h1>
	</div>
	<div class="container" style="height:500px">
 <?=$content;?>
</div>

 <footer class="container-fluid bg-primary text-white"><span>copyright fcp team 2021</span></footer>
<?php $this->endBody();?>
</body>
</html>
<?php 

$this->endPage();
?>
