<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		The API Uses Http Basic Authorization. Contact the site admin to obtain an authorization Username and Password
	</p>
	<p><a class="btn btn-default" href="/site/contact">Contact &raquo;</a></p>
	<p>
		The following Functions are available ...
	</p>
	<ul>
		<li>GET /v1/pedigrees: list all pedigrees page by page;</li>
		<li>GET /v1/pedigrees/123: return the details of the pedigree 123</li>
	</ul>
	<p>
		In the response headers, there is information about the total count, page count, etc. 
		There are also links that allow you to navigate to other pages of data. For example, 
		<ul>
			<li>GET /v1/pedigrees?page=2</li>
		</ul> 
		would give you the next page of the pedigree data
	</p>
	<p>
		The API implements filters. You can search by any field by specifying the "filter" parameter. For
		example
		<ul>
			<li>GET /v1/pedigrees?filter[Name][like]=Domus</li>
			<li>GET /v1/pedigrees?filter[Name][like]=Domus&fields=Name&page=3</li>
			<li>GET /v1/pedigrees?filter[SireId]=123&fields=Name&page=3</li>
		</ul>
	</p>
	<p><a class="btn btn-default" href="https://www.yiiframework.com/doc/guide/2.0/en/rest-quick-start">Yii2 REST Documentation &raquo;</a></p>

</div>
