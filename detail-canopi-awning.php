<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kanopi Awning Premium | Rizki Abadi Canopy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/style.css">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "primary-dark": "#0c4da2",
                        "secondary": "#f59e0b",
                        "accent-gold": "#d4af37",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "awning-terracotta": "#c2410c",
                        "awning-sand": "#d97706"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "heading": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Inter", "sans-serif"]
                    },
                    fontSize: {
                        '2xs': ['0.625rem', { lineHeight: '0.875rem' }],
                    },
                    borderRadius: {
                        "4xl": "2rem",
                        "5xl": "2.5rem",
                    }
                },
            },
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&family=Plus+Jakarta+Sans:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, h5, .heading-font {
            font-family: 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -0.02em;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        @keyframes pulse-glow {
            0% { box-shadow: 0 0 0 0 rgba(19, 91, 236, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(19, 91, 236, 0); }
            100% { box-shadow: 0 0 0 0 rgba(19, 91, 236, 0); }
        }
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        /* Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -10px rgba(19, 91, 236, 0.3);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.02);
        }
        .mt-100 {
            margin-top: -10px;
        }
        .mt-20 {
            margin-top: 20px!important;
        }
        
        /* Typography utilities */
        .text-shadow-sm {
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .text-shadow-lg {
            text-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, #135bec 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Price tag style */
        .price-tag {
            position: relative;
            display: inline-block;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            color: white;
            font-weight: 800;
            font-size: 1.5rem;
            box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.3);
        }
        .price-tag::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            border-radius: 9999px;
            z-index: -1;
            opacity: 0.5;
            filter: blur(8px);
        }
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
            .head-res {
                padding-bottom: 50px!important;
                padding-top: 30px!important;
            }
            .float-harga {
                left: -15px!important;
                padding: 10px!important;
            }
            .float-garansi {
                top: 60px!important;
                right: -15px!important;
            }
            .float-konsultasi {
                right: 10px!important;
                bottom: 35px!important;
            }
        }
    </style>
</head>
<body class="bg-white dark:bg-background-dark text-slate-900 dark:text-slate-100 font-body antialiased">
    <!-- Header -->
    <?php include('shared/header.php'); ?>

    
    <!-- MAIN CONTENT - KANOPI AWNING DETAIL PAGE -->
    <main class="flex-1">
        
        <!-- HERO SECTION - Kanopi Awning -->
        <section class="relative min-h-[100vh] overflow-hidden pt-2 pb-1 bg-gradient-to-br from-slate-900 via-slate-800 to-awning-terracotta head-res" id="awning-hero">
        
            <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-10 h-full min-h-[100vh] flex items-center">
                <div class="grid lg:grid-cols-2 gap-16 items-center w-full">
                    
                    <!-- Left Content -->
                    <div class="text-white space-y-8">
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 glass px-4 py-2 rounded-full border border-white/20">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs font-bold uppercase tracking-widest">Premium Quality · Fleksibel & Estetis</span>
                        </div>
                        
                        <!-- Main Heading -->
                        <h1 class="text-5xl mt-20 md:text-6xl lg:text-7xl font-black heading-font leading-[1.1]">
                            Kanopi <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-300">Awning</span>
                        </h1>
                        
                        <!-- Subheadline -->
                        <p class="text-sm text-white/80 leading-relaxed max-w-xl -mt-2">
                            Solusi kanopi fleksibel dengan sistem folding yang dapat dibuka dan ditutup sesuai kebutuhan. Memberikan perlindungan maksimal dari panas dan hujan tanpa mengorbankan estetika bangunan Anda.
                        </p>
                        
                        <!-- Key Features -->
                        <div class="grid grid-cols-2 gap-4 max-w-lg">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Fleksibel</span>
                                    <span class="text-xs text-white/60">Dapat dibuka/tutup</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Tahan UV & Air</span>
                                    <span class="text-xs text-white/60">Material premium</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Desain Modern</span>
                                    <span class="text-xs text-white/60">Berbagai pilihan warna</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Motorized Option</span>
                                    <span class="text-xs text-white/60">Kontrol otomatis</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20saya%20tertarik%20dengan%20Kanopi%20Awning.%20Mohon%20info%20lebih%20lanjut%20dan%20konsultasi%20gratis." 
                               class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-primary-dark transition-all duration-300 flex items-center gap-2 shadow-xl shadow-primary/30 group text-base">
                                <span class="material-symbols-outlined">chat</span>
                                Konsultasi Gratis Sekarang
                            </a>
                        </div>
                        
                    </div>
                    
                    <!-- Right Content - Image & Floating Cards -->
                    <div class="relative lg:block mt-100">
                        <!-- Social Proof -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex -space-x-2">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300 overflow-hidden">
                                    <img src="<?php echo $base_url; ?>/assets/images/webp/fajar.webp" alt="Customer" class="w-full h-full object-cover">
                                </div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300 overflow-hidden">
                                    <img src="<?php echo $base_url; ?>/assets/images/webp/adam.webp" alt="Customer" class="w-full h-full object-cover">
                                </div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300 overflow-hidden">
                                    <img src="<?php echo $base_url; ?>/assets/images/webp/aisyah.webp" alt="Customer" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-1 text-yellow-400">
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="material-symbols-outlined text-sm">star</span>
                                    <span class="material-symbols-outlined text-sm">star</span>
                                </div>
                                <p class="text-sm text-white"><span class="font-bold">150+</span> proyek terpasang</p>
                            </div>
                        </div>
                        
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/10 hover-scale">
                            <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning.webp" alt="Kanopi Awning Modern" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                        </div>
                        
                        <!-- Floating Cards -->
                        <div class="absolute -bottom-6 -left-6 glass-card rounded-2xl p-5 shadow-2xl max-w-[300px] animate-float float-harga">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">settings</span>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900">Sistem Folding</p>
                                    <p class="text-2xs text-slate-500">Mudah dibuka & ditutup</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute -top-6 -right-6 glass-card rounded-2xl p-4 shadow-2xl max-w-[180px] animate-float animation-delay-1000 float-garansi">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                <div>
                                    <p class="text-xs font-bold text-slate-900">Garansi 5 Thn</p>
                                    <p class="text-2xs text-slate-500">Material & mekanik</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-20 -right-8 glass-card rounded-2xl p-4 shadow-2xl max-w-[160px] float-konsultasi">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">handshake</span>
                                <div>
                                    <p class="text-xs font-bold text-slate-900">Konsultasi</p>
                                    <p class="text-2xs text-slate-500">GRATIS!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT IS AWNING SECTION -->
        <section class="py-24 bg-white dark:bg-background-dark" id="tentang-awning">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    
                    <!-- Left: Text -->
                    <div>
                        <!-- Section Label -->
                        <div class="inline-block mb-6">
                            <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">Apa Itu Kanopi Awning?</span>
                        </div>
                        
                        <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6 leading-tight">
                            Kanopi Fleksibel dengan <span class="text-primary">Sistem Lipat Modern</span>
                        </h2>
                        
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                            Kanopi Awning adalah sistem kanopi fleksibel yang menggunakan rangka aluminium dan kain berkualitas tinggi yang dapat dibuka dan ditutup sesuai kebutuhan. Cocok untuk teras rumah, kafe, toko, dan area outdoor yang membutuhkan fleksibilitas perlindungan dari panas matahari dan hujan.
                        </p>
                        
                        <!-- Key Advantages -->
                        <div class="space-y-6 mb-8">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">autorenew</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Sistem Buka-Tutup Fleksibel</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Dapat disesuaikan dengan kondisi cuaca, buka saat panas untuk teduh, tutup saat hujan atau tidak digunakan.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">palette</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Estetika Modern</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Desain minimalis dengan berbagai pilihan warna kain yang dapat disesuaikan dengan tema bangunan Anda.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">shield</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Material Premium</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Kain akrilik/kanvas berkualitas tinggi yang tahan terhadap sinar UV, air, dan jamur. Rangka aluminium anti karat.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-200 dark:border-slate-700">
                            <div>
                                <div class="text-3xl font-black text-primary">5+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Tahun Garansi</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-primary">20+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Pilihan Warna</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-primary">150+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Proyek</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right: Image & Feature Cards -->
                    <div class="relative">
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-2.webp" alt="Struktur Kanopi Awning" class="w-full h-auto">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                        
                        <!-- Feature Card 1 -->
                        <div class="absolute -top-6 -right-6 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-5 max-w-[200px] hidden lg:block">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">settings</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500">Sistem Operasi</p>
                                    <p class="text-xl font-black text-slate-900 dark:text-white">Manual/Motor</p>
                                    <p class="text-2xs">Bebas pilih</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature Card 2 -->
                        <div class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-5 max-w-[200px] hidden lg:block">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">water_drop</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500">Waterproof</p>
                                    <p class="text-xl font-black text-slate-900 dark:text-white">100% Anti Air</p>
                                    <p class="text-2xs">Kain coated</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Awning,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
        </section>

        <!-- KEUNGGULAN UTAMA - 3 POIN PENTING -->
        <section class="py-16 bg-primary/5">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="grid md:grid-cols-3 gap-8">
                    
                    <!-- Point 1 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-primary text-4xl">autorenew</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Fleksibel & Praktis</h3>
                        <p class="text-slate-600 dark:text-slate-400">Dapat dibuka dan ditutup sesuai kebutuhan, memberikan kontrol penuh terhadap cahaya dan perlindungan.</p>
                    </div>
                    
                    <!-- Point 2 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-primary text-4xl">wb_sunny</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Tahan UV & Air</h3>
                        <p class="text-slate-600 dark:text-slate-400">Kain premium dengan coating anti UV dan waterproof, melindungi dari sinar matahari dan hujan.</p>
                    </div>
                    
                    <!-- Point 3 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-primary text-4xl">verified</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Garansi 5 Tahun</h3>
                        <p class="text-slate-600 dark:text-slate-400">Garansi material kain, rangka, dan sistem mekanik untuk ketenangan pikiran Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- MATERIAL SPECIFICATIONS - AWNING -->
        <section class="py-24 bg-slate-50 dark:bg-slate-900/50" id="spesifikasi">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Spesifikasi Material</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Material Premium Kanopi Awning</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Kanopi awning kami menggunakan material berkualitas tinggi yang dirancang untuk ketahanan dan estetika maksimal.</p>
                </div>
                
                <!-- Specs Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Card 1: Material Kain -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">fabric</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Material Kain</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Akrilik Premium</span> - tahan UV & air</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Kanvas Coated</span> - waterproof 100%</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Sunbrella®</span> - anti jamur & pudar</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 2: Rangka Aluminium -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">build</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Rangka Awning</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Aluminium Powder Coating</span> - anti karat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Baja Ringan Galvanis</span> - kokoh & ringan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Konektor Stainless Steel</span> - tahan karat</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 3: Sistem Operasi -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">settings_remote</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Sistem Operasi</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Manual Crank</span> - ekonomis & awet</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Motorized</span> - remote control</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Sensor Otomatis</span> - deteksi angin/hujan</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 4: Ukuran & Bentang -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">width</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Ukuran & Bentang</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Lebar maksimal</span> hingga 6 meter</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Proyeksi keluar</span> 1.5m - 3.5m</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Kemiringan</span> adjustable</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 5: Ketahanan -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">shield</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Ketahanan Material</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Anti UV</span> - 98% perlindungan UV</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Waterproof</span> - tahan hujan lebat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Anti Jamur & Lumut</span> - coating khusus</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 6: Garansi -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">verified</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Garansi</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Garansi material</span> 3-5 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Garansi mekanik</span> 2 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Layanan perbaikan</span> seumur hidup</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-3.webp" alt="Struktur Kanopi Awning" class="w-full h-auto">
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Awning,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
        </section>

        <!-- KEUNGGULAN KANOPI AWNING -->
        <section class="py-24 bg-white dark:bg-background-dark" id="keunggulan">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Keunggulan Produk</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Mengapa Pilih Kanopi Awning?</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Solusi fleksibel untuk area outdoor dengan estetika modern dan perlindungan optimal.</p>
                </div>
                
                <!-- Advantages Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Advantage 1 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">autorenew</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Fleksibel Maksimal</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Dapat dibuka saat terik dan ditutup saat hujan atau tidak digunakan. Memberikan kontrol penuh.</p>
                    </div>
                    
                    <!-- Advantage 2 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">palette</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Desain Estetis</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Tersedia berbagai pilihan warna kain yang dapat disesuaikan dengan tema bangunan Anda.</p>
                    </div>
                    
                    <!-- Advantage 3 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">wb_sunny</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Perlindungan UV 98%</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Material kain dengan coating khusus yang memblokir sinar UV hingga 98%, melindungi dari paparan langsung.</p>
                    </div>
                    
                    <!-- Advantage 4 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">water_drop</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Waterproof 100%</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Kain dengan lapisan waterproof yang melindungi dari hujan, tidak tembus air.</p>
                    </div>
                    
                    <!-- Advantage 5 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">settings_remote</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Pilihan Motorized</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Tersedia sistem motorized dengan remote control, bahkan sensor otomatis untuk kenyamanan maksimal.</p>
                    </div>
                    
                    <!-- Advantage 6 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">build</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Perawatan Mudah</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Kain mudah dibersihkan dengan air sabun, rangka aluminium anti karat minim perawatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- APLIKASI & PENGGUNAAN - AWNING -->
        <section class="py-24 bg-slate-50 dark:bg-slate-900/50" id="aplikasi">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Area Aplikasi</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Cocok untuk Berbagai Area</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Kanopi awning sangat cocok untuk area yang membutuhkan fleksibilitas dan estetika modern.</p>
                </div>
                
                <!-- Application Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Item 1: Cafe & Resto -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-4.webp" alt="Cafe Awning" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">restaurant</span>
                            <h3 class="text-xl font-bold heading-font">Cafe & Resto</h3>
                            <p class="text-sm text-white/80">Area outdoor yang nyaman</p>
                        </div>
                    </div>
                    
                    <!-- Item 2: Teras Rumah -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-5.webp" alt="Teras Awning" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">deck</span>
                            <h3 class="text-xl font-bold heading-font">Teras Rumah</h3>
                            <p class="text-sm text-white/80">Area santai yang fleksibel</p>
                        </div>
                    </div>
                    
                    <!-- Item 3: Toko & Retail -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-6.webp" alt="Toko Awning" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">storefront</span>
                            <h3 class="text-xl font-bold heading-font">Toko & Retail</h3>
                            <p class="text-sm text-white/80">Menarik perhatian pelanggan</p>
                        </div>
                    </div>
                    
                    <!-- Item 4: Balkon Apartemen -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Awning-7.webp" alt="Balkon Awning" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">balcony</span>
                            <h3 class="text-xl font-bold heading-font">Balkon Apartemen</h3>
                            <p class="text-sm text-white/80">Solusi untuk ruang terbatas</p>
                        </div>
                    </div>
                </div>
                
                <!-- More Applications Note -->
                <div class="text-center mt-12">
                    <p class="text-slate-600 dark:text-slate-400">Dan masih banyak lagi: carport, gazebo, jendela toko, pintu masuk, dll.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20Awning,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
        </section>

        <!-- FAQ SECTION - AWNING -->
        <section class="py-24 bg-white dark:bg-background-dark" id="faq">
            <div class="max-w-4xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">FAQ</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Pertanyaan yang Sering Diajukan</h2>
                </div>
                
                <!-- FAQ Items -->
                <div class="space-y-4">
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apa perbedaan awning dengan kanopi biasa?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Awning adalah kanopi fleksibel yang dapat dibuka dan ditutup sesuai kebutuhan. Berbeda dengan kanopi tetap yang permanen, awning memberikan kontrol penuh terhadap perlindungan dari panas dan hujan.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah kain awning tahan air dan panas?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Ya, kain awning kami menggunakan material akrilik/kanvas premium dengan coating khusus yang waterproof dan anti UV 98%. Kain juga dilengkapi lapisan anti jamur sehingga awet meski terkena hujan.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah bisa menggunakan motor otomatis?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Tersedia pilihan sistem motorized dengan remote control. Bahkan kami juga menyediakan sensor otomatis yang dapat mendeteksi hujan atau angin kencang untuk menutup awning secara otomatis.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Berapa lama proses pemasangan awning?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Proses pemasangan awning biasanya memakan waktu 1-2 hari tergantung luas dan jenis sistem (manual atau motorized). Untuk pemasangan standar, bisa selesai dalam 1 hari.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Bagaimana cara membersihkan awning?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Cukup mudah, bersihkan dengan air sabun lembut dan sikat berbulu halus. Hindari penggunaan bahan kimia keras. Untuk perawatan berkala, cukup bersihkan setiap 3-6 bulan.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah awning tahan angin kencang?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Untuk awning manual, disarankan untuk menutup saat angin kencang. Untuk sistem motorized, kami menyediakan sensor angin yang akan menutup otomatis saat angin melebihi batas aman.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA - KONSULTASI GRATIS -->
        <section class="py-24 relative overflow-hidden bg-gradient-to-br from-primary to-primary-dark" id="cta">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-white rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full blur-[120px] translate-x-1/2 translate-y-1/2"></div>
            </div>
            
            <div class="relative z-20 max-w-4xl mx-auto px-6 lg:px-10 text-center text-white">
                <!-- Icon -->
                <div class="w-20 h-20 bg-white/20 rounded-3xl flex items-center justify-center mx-auto mb-8 backdrop-blur-sm">
                    <span class="material-symbols-outlined text-5xl">chat</span>
                </div>
                
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black heading-font mb-6">
                    Siap Memiliki Kanopi <br/>Awning Modern?
                </h2>
                
                <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">
                    Konsultasi GRATIS dengan tim ahli kami. Dapatkan penawaran harga terbaik dan desain yang sesuai dengan kebutuhan Anda.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20saya%20tertarik%20dengan%20Kanopi%20Awning.%20Mohon%20info%20lebih%20lanjut%20dan%20konsultasi%20gratis." 
                       class="bg-white text-primary px-10 py-5 rounded-xl font-bold text-lg hover:bg-slate-100 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 shadow-2xl group">
                        <span class="material-symbols-outlined">chat</span>
                        Konsultasi Gratis via WhatsApp
                    </a>
                    <button class="bg-transparent border-2 border-white/30 text-white px-10 py-5 rounded-xl font-bold text-lg hover:bg-white/10 hover:scale-105 transition-all duration-300">
                        <span class="flex items-center gap-2">
                            <span class="material-symbols-outlined">call</span>
                            <?php echo $notlp; ?>
                        </span>
                    </button>
                </div>
                
                <p class="mt-8 text-white/60 text-sm font-medium">
                    ✓ Respon cepat dalam 1x24 jam  ✓ Survey lokasi gratis  ✓ Konsultasi desain tanpa biaya
                </p>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include('shared/footer.php'); ?>


    <!-- Simple JavaScript for FAQ Accordion -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.border button');
            
            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.material-symbols-outlined');
                    
                    // Toggle content visibility
                    if (content.style.display === 'none' || !content.style.display) {
                        content.style.display = 'block';
                        icon.textContent = 'remove';
                    } else {
                        content.style.display = 'none';
                        icon.textContent = 'add';
                    }
                });
                
                // Hide all content initially
                if (button.nextElementSibling) {
                    button.nextElementSibling.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>