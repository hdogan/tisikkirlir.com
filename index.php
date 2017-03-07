<?php
require 'Converter.php';

use Tisikkirlir\Converter;

$badges = [
	'http://forthebadge.com/images/badges/built-by-hipsters.svg',
	'http://forthebadge.com/images/badges/compatibility-betamax.svg',
	'http://forthebadge.com/images/badges/compatibility-blackberry.svg',
	'http://forthebadge.com/images/badges/compatibility-ie-6.svg',
	'http://forthebadge.com/images/badges/designed-in-ms-paint.svg',
	'http://forthebadge.com/images/badges/fuck-it-ship-it.svg',
	'http://forthebadge.com/images/badges/gluten-free.svg',
	'http://forthebadge.com/images/badges/makes-people-smile.svg',
	'http://forthebadge.com/images/badges/powered-by-water.svg',
	'http://forthebadge.com/images/badges/uses-html.svg',
	'http://forthebadge.com/images/badges/validated-html2.svg',
];

$text = '';

if (isset($_POST['text'])) {
	$text = trim(filter_var(rawurldecode($_POST['text']), FILTER_SANITIZE_STRING));
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="jumbotron">
	<div class="container text-center">
	<h1>Tişikkirlir Yapmaca</h1>
	<p>Lirim ipsim dilir sit imit, cinsictitir idipiscing ilit...</p>
	</div>
</div>
<div class="form">
	<div class="container text-center">
		<form method="post">
		<div class="form-group">
			<input class="form-control input-lg" type="text" name="text" placeholder="Buraya bişiler yaz" value="<?= $text ?>">
		</div>
		<div class="form-group">
			<button class="btn btn-danger btn-lg" type="submit">Évir und Çevir</button>
		</div>
		</form>
	</div>
</div>

<?php if (isset($_POST['text'])): ?>
<div class="result">
	<div class="container">
	<?php if (empty($text)): ?>
		<div class="well text-center text-danger">
			<h2>Achtung! Bişilir yizsini girizikili!</h2>
		</div>
	<?php else: ?>
		<div class="well text-center text-info">
			<h2><?= Converter::convert($text) ?></h2>
		</div>
	<?php endif; ?>
	</div>
</div>
<?php endif; ?>
<div class="api">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

		<div class="panel panel-default">
			<div class="panel-body">
				Biz developerları pek severiz, onlar için ücretsiz JEST API yaptık. <code>http://api.tisikkirlir.com/?text=deneme</code> gibi kullanabilirsiniz. İstek sayısı sınırlaması yok, mokunu çıkarmayın ama.
			</div>
		</div>

			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Bu sayfa hazırlanırken harcanan kaynak</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><span class="big">1</span> Türk kahvesi</li>
							<li><span class="big">1</span> ince belli bardakta çay</li>
							<li><span class="big">164</span> satır (boş satırlar dahil) kod</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="text-center">
		<small>&copy; <?= date('Y') ?> <a href="http://hi.do">hi.do</a></small>
		<p><img src="<?= array_rand(array_flip($badges), 1) ?>" height="25"></p>
	</div>
</footer>
</body>
</html>
