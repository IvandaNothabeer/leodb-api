<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    The following Functions are available ...<br>
    <br>
	GET /pedigrees: list all pedigrees page by page;<br>
    GET /pedigrees/123: return the details of the pedigree 123;<br>
    <br>
    In the response headers, there is information about the total count, page count, etc. 
    There are also links that allow you to navigate to other pages of data. For example, 
    /pedigrees?page=2 would give you the next page of the pedigree data
    <br>
    </p>
    <p><a class="btn btn-default" href="https://www.yiiframework.com/doc/guide/2.0/en/rest-quick-start">Yii2 REST Documentation &raquo;</a></p>
    
</div>
