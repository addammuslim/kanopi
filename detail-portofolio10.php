<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

	<title>Kanopi Membrane Modern – Area Fasilitas Publik</title>

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
		src="<?php echo $base_url; ?>/assets/images/webp/portofolio10.webp"
		alt="Kanopi membrane modern untuk area fasilitas publik"
		/>

		<div class="absolute bottom-0 left-0 p-8 z-20">

			<span class="px-3 py-1 bg-primary text-white text-xs font-bold uppercase tracking-widest rounded mb-4 inline-block">
				Portfolio Project
			</span>

			<h1 class="text-white text-4xl md:text-5xl font-black leading-tight uppercase">
				Kanopi Membrane<br>
				<span class="font-medium">Area Fasilitas</span>
			</h1>

		</div>
	</div>
</section>


<!-- CONTENT -->
<section class="px-6 md:px-10 py-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">

	<div class="lg:col-span-2">

		<div class="flex items-center gap-2 text-primary mb-4">
			<span class="material-symbols-outlined text-sm">business</span>
			<span class="text-sm font-semibold uppercase tracking-wider">
				Area Komersial / Fasilitas Publik
			</span>
		</div>

		<h2 class="text-3xl font-bold mb-6">
			Proyek Kanopi Membrane Modern
		</h2>

		<p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-8">

			Pemasangan kanopi membrane pada area fasilitas publik yang berfungsi untuk memberikan perlindungan terhadap panas matahari dan hujan. Desain kanopi dibuat minimalis dengan struktur rangka baja lengkung yang memberikan tampilan modern serta elegan pada area bangunan.

		</p>

		<p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-8">

			Material membrane PVC tensile berwarna putih dipasang menggunakan sistem tarikan presisi sehingga menghasilkan permukaan yang tegang dan rapi. Kanopi ini juga dilengkapi dengan pencahayaan lampu pada bagian bawah struktur sehingga tetap memberikan penerangan pada malam hari.

		</p>

		<h3 class="text-xl font-bold mb-4 uppercase">
			Detail Pekerjaan
		</h3>

		<ul class="space-y-4 text-slate-600 dark:text-slate-400">

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Struktur rangka pipa baja dengan desain lengkung modern
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Material membrane PVC tensile fabric berkualitas tinggi
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Sistem tarikan membrane presisi dan simetris
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Finishing rangka cat putih tahan cuaca
			</li>

			<li class="flex items-start gap-3">
				<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm">✓</span>
				Dilengkapi pencahayaan lampu untuk penggunaan malam hari
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
					<p class="text-sm font-bold">Membrane PVC & Rangka Pipa Baja</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">square_foot</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Luas Area</p>
					<p class="text-sm font-bold">± 12 – 18 m²</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">schedule</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Durasi Pengerjaan</p>
					<p class="text-sm font-bold">± 3 – 5 Hari</p>
				</div>
			</div>

			<div class="flex items-center gap-4">
				<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
					<span class="material-symbols-outlined">shield</span>
				</div>

				<div>
					<p class="text-sm text-slate-500 uppercase">Ketahanan Struktur</p>
					<p class="text-sm font-bold">± 10 – 15 Tahun Penggunaan</p>
				</div>
			</div>

		</div>
	</div>


<!-- CTA -->
<div class="bg-primary p-8 rounded-xl text-white shadow-xl">

	<h4 class="text-xl font-bold mb-3">
		INGIN MEMBUAT KANOPI MEMBRANE SEPERTI INI?
	</h4>

	<p class="mb-6 text-sm">
		Kami melayani pembuatan dan pemasangan kanopi membrane untuk area rumah, fasilitas publik, area parkir, maupun area komersial dengan desain modern dan kuat.
	</p>

	<a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Membrane,%20Terimakasih." class="w-full py-3 bg-white text-primary font-bold rounded-lg hover:bg-slate-100 transition-colors relative z-10 btn-kon">Konsultasi Sekarang</a>

</div>

</div>

</section>
<!-- Gallery Section -->
<section class="px-6 md:px-10 py-16  max-w-7xl mx-auto">
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4 h-[600px]">
    <div class="col-span-2 row-span-2 rounded-xl overflow-hidden shadow-lg">
      <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" data-alt="Wide shot of the canopy showing architectural context" src="<?php echo $base_url; ?>/assets/images/webp/detail_portofolio1.1.webp"/>
    </div>
    <div class="rounded-xl overflow-hidden shadow-lg">
      <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" data-alt="Detail shot of the glass roof panel transparency" src="<?php echo $base_url; ?>/assets/images/webp/detail_portofolio1.2.webp"/>
    </div>
    <div class="rounded-xl overflow-hidden shadow-lg">
      <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" data-alt="Steel support joint detail of the canopy" src="<?php echo $base_url; ?>/assets/images/webp/detail_portofolio1.3.webp"/>
    </div>
    <div class="col-span-2 rounded-xl overflow-hidden shadow-lg">
      <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" data-alt="Evening shot with integrated LED lighting under canopy" src="<?php echo $base_url; ?>/assets/images/webp/detail_portofolio1.4.webp"/>
    </div>
  </div>
  <div class="text-center mt-10">
    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Membrane,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
      <i class="fa-brands fa-whatsapp"></i>
      <span>Konsultasi Gratis</span>
      <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
    </a>
  </div>
</section>

</main>

<?php include('shared/footer.php'); ?>

</div>

</body>
</html>