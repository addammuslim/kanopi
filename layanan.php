<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Canopy Encyclopedia · Premium Responsive + WhatsApp</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/style.css">
    <style>
        @media (max-width: 768px) {
            .text-xl {
                font-size: 14px!important;
                line-height: 1.3em!important;
            }
            .mb-8 {
                margin-bottom: 5px!important;
            }
            .btn-full-res {
                width: 100%!important;
                text-align: center!important;
                margin-bottom: 10px!important;
                display: block!important;
            }
            .btn-full-wa-res {
                width: 100%!important;
                text-align: center!important;
                display: inline-flex!important;
                align-items: anchor-center!important;
                justify-content: center!important;
            }
            .hidden-res {
                display: none!important;
            }
        }
        .text-link-arrow {
            top: 3px;
            position: relative;
        }
        /* fallback untuk gambar membrane jika link rusak */
        .membrane-bg-fallback {
            background: linear-gradient(135deg, #0b2b5c, #1e4b8f);
        }
        /* gallery tab transitions */
        .gallery-tab {
            transition: all 0.3s ease;
        }
        .gallery-item {
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 30px -10px rgba(19, 91, 236, 0.3);
        }
        .gallery-item::after {
            content: "search";
            font-family: "Material Symbols Outlined";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            font-size: 32px;
            background: rgba(19, 91, 236, 0.9);
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
            z-index: 20;
        }
        .gallery-item:hover::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
        .gallery-item:hover img {
            transform: scale(1.1);
            filter: brightness(0.7);
        }
        
        /* Workflow animations */
        .workflow-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .workflow-card:hover {
            transform: translateY(-10px);
        }
        .workflow-line {
            transition: all 0.8s ease;
        }
        .workflow-number {
            transition: all 0.3s ease;
        }
        .workflow-card:hover .workflow-number {
            transform: scale(1.1);
            background-color: #135bec;
            color: white;
        }
        .workflow-icon {
            transition: all 0.5s ease;
        }
        .workflow-card:hover .workflow-icon {
            transform: rotate(5deg) scale(1.1);
        }
        /* Animasi muncul saat scroll */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease forwards;
        }
        .delay-1 {
            animation-delay: 0.2s;
            opacity: 0;
        }
        .delay-2 {
            animation-delay: 0.4s;
            opacity: 0;
        }
        .delay-3 {
            animation-delay: 0.6s;
            opacity: 0;
        }
        .delay-4 {
            animation-delay: 0.8s;
            opacity: 0;
        }
        .h-30 {
            height: 10rem;
        }
        
        /* Testimonial styles */
        .testimonial-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 40px -15px rgba(19, 91, 236, 0.3);
        }
        
        /* Modal zoom styles */
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }
        .modal-backdrop.active {
            opacity: 1;
            visibility: visible;
        }
        .modal-content {
            max-width: 90vw;
            max-height: 90vh;
            transform: scale(0.9);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        .modal-backdrop.active .modal-content {
            transform: scale(1);
        }
        .modal-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            cursor: pointer;
            z-index: 10000;
            transition: transform 0.3s ease;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            backdrop-filter: blur(4px);
        }
        .modal-close:hover {
            transform: rotate(90deg);
            background: rgba(255,255,255,0.2);
        }
        .testimonial-image {
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .testimonial-image::after {
            content: "search";
            font-family: "Material Symbols Outlined";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            font-size: 16px;
            background: rgba(19, 91, 236, 0.9);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        .testimonial-image:hover::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
        .testimonial-image:hover img {
            transform: scale(1.1);
            filter: brightness(0.7);
        }
        
        /* Rating stars */
        .star-rating {
            color: #fbbf24;
            display: inline-flex;
            gap: 2px;
        }
        
        /* testimonial carousel 3 kolom */
        .testimonial-carousel-container {
            position: relative;
            overflow: hidden;
            padding: 2.5rem 0;
        }
        .testimonial-carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .testimonial-carousel-slide {
            flex: 0 0 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            padding: 0 0.5rem;
        }
        
        
        
        /* WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            z-index: 999;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid white;
        }
        .whatsapp-float:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.6);
        }
        .whatsapp-float::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25D366;
            animation: pulse-wa 2s infinite;
            z-index: -1;
        }
        @keyframes pulse-wa {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            70% {
                transform: scale(1.3);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
        .whatsapp-float span {
            font-size: 32px;
        }
        
        /* Tooltip WhatsApp */
        .whatsapp-tooltip {
            position: absolute;
            right: 70px;
            background: white;
            color: #075E54;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            white-space: nowrap;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        .whatsapp-float:hover .whatsapp-tooltip {
            opacity: 1;
            visibility: visible;
            right: 80px;
        }
        
        /* Hero section - statis dengan efek interaktif */
        .hero-static {
            position: relative;
            overflow: hidden;
        }
        .hero-static::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(19,91,236,0.2) 0%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
            transition: opacity 0.5s ease;
        }
        .hero-static:hover::before {
            opacity: 0.8;
        }
        .hero-static img {
            transition: transform 8s ease;
        }
        .hero-static:hover img {
            transform: scale(1.05);
        }
        .hero-content {
            z-index: 2;
        }
        
        /* Tombol Detail style */
        .btn-detail {
            background: transparent;
            border: 2px solid #135bec;
            color: #135bec;
            transition: all 0.3s ease;
        }
        .btn-detail:hover {
            background: #135bec;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(19, 91, 236, 0.3);
        }
        
        /* Responsive breakpoints */
        @media (max-width: 768px) {
            .testimonial-carousel-slide {
                grid-template-columns: 1fr;
            }
            
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
            }
            .whatsapp-float span {
                font-size: 28px;
            }
            .flex-wrap.gap-3 {
                justify-content: center;
            }
        }
        @media (min-width: 769px) {
            
        }
    </style>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "accent-gold": "#d4af37",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">

<!-- Top Navigation Bar dengan Menu Responsive Modern -->
<?php include 'shared/header.php'; ?>


<!-- HERO SECTION - SUPER SIMPLE, RESPONSIVE, TANPA HARGA -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-slate-900 to-slate-800 flex items-center" id="hero-section">
    <!-- Background Pattern Minimal -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
    </div>
    
    <!-- Konten Utama -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Kiri: Teks -->
            <div class="text-white space-y-6 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20 mx-auto lg:mx-0">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium">TERPERCAYA SEJAK 1999</span>
                </div>
                
                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
                    Jasa Pasang <br class="hidden sm:block"/>
                    <span class="text-primary">Kanopi Profesional</span>
                </h1>
                
                <!-- Subheadline -->
                <p class="text-base md:text-lg text-slate-300 max-w-xl mx-auto lg:mx-0">
                    Dapatkan kanopi berkualitas dengan harga terjangkau untuk rumah atau usaha Anda. Konsultasi gratis, survey lokasi tanpa biaya, dan garansi pemasangan.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-4">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20ingin%20konsultasi%20tentang%20canopy,%20Terimakasih." target="_blank"
                       class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-primary/90 hover:scale-105 transition-all duration-300 flex items-center gap-2 shadow-lg shadow-primary/30">
                        <span class="material-symbols-outlined">chat</span>
                        Konsultasi Gratis
                    </a>
                    <a href="<?php echo $base_url; ?>/portofolio" class="bg-white/10 backdrop-blur-sm border border-white/30 text-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:text-slate-900 transition-all duration-300">
                        Lihat Portofolio
                    </a>
                </div>
            </div>
            
            <!-- Kanan: Gambar (Desktop Only) -->
            <div class="hidden lg:block">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo $base_url; ?>/assets/images/webp/cover-layanan.webp" alt="Kanopi Modern" class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 hidden md:block">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-2 bg-white rounded-full mt-2 animate-bounce"></div>
        </div>
    </div>
</section>

<!-- VERSION MOBILE SEDERHANA (Tampil hanya di HP) -->
<section class="lg:hidden block bg-slate-900 pb-16 px-6">
    <!-- Gambar terpisah untuk mobile -->
    <div class="rounded-xl overflow-hidden shadow-2xl mb-8">
        <img src="<?php echo $base_url; ?>/assets/images/webp/cover-layanan.webp" alt="Kanopi" class="w-full h-56 object-cover">
    </div>
    
    <!-- Teks ulang untuk mobile -->
    <div class="text-white text-center space-y-4">
        <h2 class="text-3xl font-black">
            Jasa Pasang <span class="text-primary">Kanopi</span>
        </h2>
        <p class="text-slate-300">
            Konsultasi gratis & survey lokasi tanpa biaya
        </p>
        <div class="pt-4">
            <a href="https://wa.me/6281234567890" 
               class="inline-block bg-primary text-white px-8 py-4 rounded-xl font-bold w-full">
                <span class="flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">chat</span>
                    Konsultasi Gratis
                </span>
            </a>
        </div>
    </div>
</section>


<!-- The Canopy Guide Section -->
<section class="py-24 px-6 lg:px-10 max-w-7xl mx-auto" id="guide">
    <div class="text-center mb-20">
        <h2 class="text-6xl font-black text-slate-900 dark:text-white mb-4">JENIS-JENIS <span class="text-primary">KANOPI</span></h2>
        <div class="h-1.5 w-24 bg-primary mx-auto rounded-full mb-6"></div>
        <p class="text-slate-600 dark:text-slate-400 w-full mx-auto text-lg font-light leading-relaxed">
            Kami melayani jasa pemasangan berbagai jenis kanopi berkualitas untuk rumah, ruko, cafe, dan bangunan komersial. Dikerjakan oleh tenaga profesional dengan material pilihan yang kuat, rapi, dan tahan lama sehingga memberikan perlindungan maksimal sekaligus mempercantik tampilan bangunan Anda.
        </p>
    </div>
    <div class="flex flex-col gap-32">

<!-- Item 1: Kanopi Membran -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
    <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-2xl transition-all duration-700 group-hover:shadow-primary/10">
        <img alt="Kanopi Membran" class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700" src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Membran.webp"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-3">Kanopi Membran</h3>
        <div class="flex gap-3 mb-3">
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">LUXURY</span>
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">DURABLE</span>
        </div>
        <p class="text-slate-800 dark:text-slate-400 text-lg mb-3">
            Kanopi berbahan kain khusus berkualitas tinggi (PVC, PVDF, atau PTFE) dengan sistem tarik dan rangka baja kokoh. Fleksibel dibentuk sesuai desain arsitektur, menghadirkan tampilan modern dan elegan.
        </p>
        <ul class="space-y-4 mb-5">
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tampilan premium</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Bentang lebar tanpa banyak tiang</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tahan panas & hujan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Daya tahan tinggi terhadap cuaca ekstrem</span>
                </div>
            </li>
        </ul>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo $base_url; ?>/layanan/canopi-membran" class="inline-flex gap-2 bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-full font-bold hover:bg-primary hover:text-white transition-all group btn-detail btn-full-res">
                <span>Lihat Detail</span>
            </a>
            <a target="_blank" href="https://wa.me/6285887639199?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Membran,%20Terimakasih." class="inline-flex gap-3 bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group btn-full-wa-res">
                <span><i class="fa-brands fa-whatsapp"></i> Tanya Harga & Konsultasi</span>
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            
        </div>
    </div>
</div>

<!-- Item 2: Kanopi Alderon (Reversed) -->
<div class="group flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
    <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-2xl transition-all duration-700 group-hover:shadow-primary/10">
        <img alt="Kanopi Alderon" class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700" src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Alderon.webp"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-3">Kanopi Alderon (uPVC)</h3>
        <div class="flex gap-3 mb-3">
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">THERMAL</span>
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">SILENT</span>
        </div>
        <p class="text-slate-800 dark:text-slate-400 text-lg mb-3">
            Menggunakan atap uPVC berlapis yang efektif meredam panas dan suara hujan, tahan karat, serta cocok untuk kebutuhan hunian maupun usaha.
        </p>
        <ul class="space-y-4 mb-5">
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Meredam panas & suara</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Anti karat</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Minim perawatan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tampilan rapi</span>
                </div>
            </li>
        </ul>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo $base_url; ?>/layanan/canopi-alderon" class="inline-flex gap-2 bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-full font-bold hover:bg-primary hover:text-white transition-all group btn-detail btn-full-res">
                <span>Lihat Detail</span>
            </a>
            <a target="_blank" href="https://wa.me/6285887639199?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Alderon,%20Terimakasih." class="inline-flex gap-3 bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group btn-full-wa-res">
                <span><i class="fa-brands fa-whatsapp"></i> Tanya Harga & Konsultasi</span>
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            
        </div>
    </div>
</div>

<!-- Item 3: Kanopi Polycarbonate -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
    <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-2xl transition-all duration-700 group-hover:shadow-primary/10">
        <img alt="Kanopi Polycarbonate" class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700" src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Polycarbonate1.webp"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-3">Kanopi Polycarbonate</h3>
        <div class="flex gap-3 mb-3">
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">ICONIC</span>
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">VERSATILE</span>
        </div>
        <p class="text-slate-800 dark:text-slate-400 text-lg mb-3">
            Kanopi transparan atau semi transparan yang tetap memasukkan cahaya alami serta melindungi dari hujan, dengan tampilan modern dan minimalis.
        </p>
        <ul class="space-y-4 mb-5">
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Ringan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tahan benturan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tampilan Estetis</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Memberikan pencahayaan alami</span>
                </div>
            </li>
        </ul>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo $base_url; ?>/layanan/canopi-polycarbonate" class="inline-flex gap-2 bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-full font-bold hover:bg-primary hover:text-white transition-all group btn-detail btn-full-res">
                <span>Lihat Detail</span>
            </a>
            <a target="_blank" href="https://wa.me/6285887639199?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Polycarbonate,%20Terimakasih." class="inline-flex gap-3 bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group btn-full-wa-res">
                <span><i class="fa-brands fa-whatsapp"></i> Tanya Harga & Konsultasi</span>
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            
        </div>
    </div>
</div>

<!-- Item 4: Kanopi Kaca Tempered (Reversed) -->
<div class="group flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
    <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-2xl transition-all duration-700 group-hover:shadow-primary/10">
        <img alt="Kanopi Kaca Tempered" class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700" src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Kaca-Tempered.webp"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-3">Kanopi Kaca Tempered</h3>
        <div class="flex gap-3 mb-3">
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">UV-SAFE</span>
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">LIGHT</span>
        </div>
        <p class="text-slate-800 dark:text-slate-400 text-lg mb-3">
            Menggunakan kaca tempered tebal yang dipadukan dengan rangka stainless steel atau baja berkualitas. Memberikan kesan mewah dan elegan sekaligus tetap kokoh dan aman.
        </p>
        <ul class="space-y-4 mb-5">
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tampilan eksklusif</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Kuat terhadap beban dan benturan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tahan lama</span>
                </div>
            </li>
        </ul>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo $base_url; ?>/layanan/canopi-kaca-tempered" class="inline-flex gap-2 bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-full font-bold hover:bg-primary hover:text-white transition-all group btn-detail btn-full-res">
                <span>Lihat Detail</span>
            </a>
            <a target="_blank" href="https://wa.me/6285887639199?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Kaca%20Tempered,%20Terimakasih." class="inline-flex gap-3 bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group btn-full-wa-res">
                <span><i class="fa-brands fa-whatsapp"></i> Tanya Harga & Konsultasi</span>
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            
        </div>
    </div>
</div>

<!-- Item 5: Kanopi Spandek -->
<div class="group flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
    <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-2xl transition-all duration-700 group-hover:shadow-primary/10">
        <img alt="Kanopi Spandek" class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700" src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Spandek.webp"/>
    </div>
    <div class="w-full lg:w-1/2">
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-3">Kanopi Spandek</h3>
        <div class="flex gap-3 mb-3">
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">SECURE</span>
            <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-lg tracking-wide">SILENT</span>
        </div>
        <p class="text-slate-800 dark:text-slate-400 text-lg mb-3">
            Kanopi berbahan campuran aluminium dan zinc yang ringan serta ekonomis. Pemasangannya relatif cepat dan cocok untuk kebutuhan praktis dengan anggaran lebih terjangkau.
        </p>
        <ul class="space-y-4 mb-5">
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Harga ekonomis</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Ringan</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Tahan karat</span>
                </div>
            </li>
            <li class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary">check_circle</span>
                <div>
                    <span class="font-bold block text-slate-900 dark:text-white">Pemasangan cepat</span>
                </div>
            </li>
        </ul>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo $base_url; ?>/layanan/canopi-spandek" class="inline-flex gap-2 bg-transparent border-2 border-primary text-primary px-6 py-3 rounded-full font-bold hover:bg-primary hover:text-white transition-all group btn-detail btn-full-res">
                <span>Lihat Detail</span>
            </a>
            <a target="_blank" href="https://wa.me/6285887639199?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Spandek,%20Terimakasih." class="inline-flex gap-3 bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group btn-full-wa-res">
                <span><i class="fa-brands fa-whatsapp"></i> Tanya Harga & Konsultasi</span>
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            
        </div>
    </div>
</div>

    </div>
    
    <!-- Tombol Konsultasi Gratis di bagian bawah -->
    <!-- <div class="text-center mt-20">
        <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20ingin%20konsultasi%20tentang%20canopy,%20Terimakasih." target="_blank" class="inline-flex items-center gap-3 bg-primary text-white px-10 py-5 rounded-full font-bold hover:bg-primary/90 hover:scale-105 transition-all group shadow-lg shadow-primary/30">
            <span>Mulai Konsultasi Gratis</span>
            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div> -->
</section>

<!-- Footer -->
<?php include 'shared/footer.php'; ?>

</body>
</html>