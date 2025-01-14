<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
	<link rel="stylesheet" href="../../../assets/main.css">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black font-sans leading-normal tracking-normal">

	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container mx-auto my-8 p-8 bg-black shadow-md rounded-lg">
		<h1 class="text-3xl font-bold text-neutral-200 mb-6">List Movie</h1>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php foreach ($movies as $movie) : ?>
				<div class="bg-neutral-900 rounded-lg shadow-lg overflow-hidden">
					<div class="p-6">
						<h2 class="text-xl font-bold text-white mb-2">
							<?= $movie->title ? html_escape($movie->title) : "cobo sek" ?>
						</h2>
						<p class="text-gray-400 mb-4">
							Published at <?= $movie->created_at ?>
						</p>
						<p class="text-gray-300 mb-4">
							<?= $movie->deskripsi ?>
						</p>
						<a href="<?= site_url('movie/show/' . $movie->slug) ?>" class="text-purple-500 hover:underline">
							Read More
						</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
			<?= $this->pagination->create_links(); ?>
	</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>