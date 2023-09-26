<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal CI</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">Portal Codeigniter</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<!-- UNTUK LIST NEWS / CONTENT USING HTML -->
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Codeigniter 4 Sudah Rilis!</h5>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Pengembangan Codeiginter 4 Tertunda</h5>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
				</div>
			</div>
			<!-- UNTUK LIST NEWS / CONTENT USING ARRAY -->
			<?php foreach ($data_news as $news) : ?>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5"><?= $news['title'] ?></h5>
					<p><?= isset($news['tahun']) ? $news['tahun'] : 'Tidak ada' ?> - <?= $news['content'] ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> CI</div>
	</footer>
	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>