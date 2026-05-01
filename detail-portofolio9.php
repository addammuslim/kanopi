<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

	<title>Kanopi Awning Toko – Pelindung Area Depan Ruko</title>

	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/style.css">
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#135bec",
            "background-light": "#f6f6f8",
            "background-dark": "#101622",
          },
          fontFamily: {
            "display": ["Inter"]
          },
          borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
      },
    }
  </script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .btn-kon {
      display: table!important;
      padding: 15px!important;
      text-align: center!important;
    }
    @media (max-width: 768px) {
      .head-res {
        height: 490px!important;
      }
    }
  </style>

</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">

	<div class="relative flex min-h-screen flex-col overflow-x-hidden">

		<?php include('shared/header.php'); ?>

		<main class="flex-1">

<!-- HERO -->
<section class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-20">

	<div class="relative group overflow-hidden rounded-xl h-[620px] shadow-2xl head-res">

		<div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent z-10"></div>

		<img
		class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
		src="<?php echo $base_url; ?>/assets/images/webp/portofolio9.webp"
		alt="Kanopi awning kain hijau untuk area depan toko"
		/>

		<div class="absolute bottom-0 left-0 p-8 z-20">

			<span class="px-3 py-1 bg-primary text-white text-xs font-bold uppercase tracking-widest rounded mb-4 inline-block">
				Portfolio Project
			</span>

			<h1 class="text-white text-4xl md:text-5xl font-black leading-tight uppercase">
				Kanopi Awning<br>
				<span class="font-medium">Toko / Ruko</span>
			</h1>

		</div>
	</div>
</section>


<!-- CONTENT -->
<section class="px-6 md:px-10 py-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">

	<div class="lg:col-span-2">

		<div class="flex items-center gap-2 text-primary mb-4">
			<span class="material-symbols-outlined text-sm">store</span>
			<span class="text-sm font-semibold uppercase tracking-wider">
				Area Depan Toko
			</span>
		</div>

		<h2 class="text-3xl font-bold mb-6">
			Proyek Kanopi Awning Komersial
		</h2>

		<p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-8">

			Pemasangan kanopi awning kain pada area depan bangunan komersial untuk memberikan perlindungan terhadap panas matahari dan hujan. Kanopi ini membantu menjaga area depan toko tetap nyaman bagi pengunjung serta meningkatkan tampilan fasad bangunan.

		</p>

		<p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-8">

			Material kain awning berwarna hijau dipasang pada rangka besi dengan desain melengkung klasik yang memanjang mengikuti bentuk bangunan. Model ini banyak digunakan pada toko, ruko, restoran, dan bangunan komersial karena memberikan tampilan yang rapi, profesional, dan menarik.

		</p>

		<h3 class="text-xl font-bold mb-4 uppercase">
			Detail Pekerjaan
		</h3>

		<ul class="space-y-4 text-slate-600 dark:text-slate-400">

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Rangka besi kuat dengan desain awning melengkung
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Material kain awning tahan panas dan hujan
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Desain memanjang mengikuti fasad bangunan
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Cocok untuk toko, ruko, restoran, dan kafe
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Memberikan perlindungan tambahan untuk area depan bangunan
			</li>

		</ul>

	</div>


<!-- SPEC -->
<div class="space-y-6">

	<div class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">

		<h4 class="text-slate-900 dark:text-slate-100 font-bold mb-6 text-lg uppercase">
			Spesifikasi Teknis
		</h4>

		<div class="space-y-6">

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">layers</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Material</p>
					<p class="text-sm font-bold">Kain Awning & Rangka Besi</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">straighten</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Panjang Kanopi</p>
					<p class="text-sm font-bold">± 10 – 15 Meter</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">schedule</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Durasi Pemasangan</p>
					<p class="text-sm font-bold">± 2 – 4 Hari</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">shield</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Ketahanan</p>
					<p class="text-sm font-bold">± 5 – 8 Tahun Penggunaan</p>
				</div>
			</div>

		</div>
	</div>


<!-- CTA -->
<div class="bg-primary p-8 rounded-xl text-white shadow-xl">

	<h4 class="text-xl font-bold mb-3">
		INGIN MEMASANG KANOPI AWNING UNTUK TOKO ANDA?
	</h4>

	<p class="mb-6 text-sm">
		Kami melayani pembuatan dan pemasangan kanopi awning untuk toko, ruko, restoran, dan bangunan komersial dengan berbagai pilihan warna dan ukuran.
	</p>

	<a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Awning,%20Terimakasih." class="w-full py-3 bg-white text-primary font-bold rounded-lg hover:bg-slate-100 transition-colors relative z-10 btn-kon">Konsultasi Sekarang</a>

</div>

</div>

</section>

</main>

<?php include('shared/footer.php'); ?>

</div>

</body>
</html>