<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kanopi Kaca Tempered Premium | Rizki Abadi Canopy</title>
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
                        "tempered-blue": "#1e4b8f",
                        "tempered-teal": "#0f766e"
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

    
    <!-- MAIN CONTENT - KANOPI KACA TEMPERED DETAIL PAGE -->
    <main class="flex-1">
        
        <!-- HERO SECTION - Kanopi Kaca Tempered -->
        <section class="relative min-h-[100vh] overflow-hidden pt-2 pb-1 bg-gradient-to-br from-slate-900 via-slate-800 to-tempered-blue head-res" id="tempered-hero">
        
            <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-10 h-full min-h-[100vh] flex items-center">
                <div class="grid lg:grid-cols-2 gap-16 items-center w-full">
                    
                    <!-- Left Content -->
                    <div class="text-white space-y-8">
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 glass px-4 py-2 rounded-full border border-white/20">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                            <span class="text-xs font-bold uppercase tracking-widest">Premium Quality · Mewah & Elegan</span>
                        </div>
                        
                        <!-- Main Heading -->
                        <h1 class="text-5xl mt-20 md:text-6xl lg:text-7xl font-black heading-font leading-[1.1]">
                            Kanopi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-300">Kaca Tempered</span>
                        </h1>
                        
                        
                        <!-- Subheadline -->
                        <p class="text-sm text-white/80 leading-relaxed max-w-xl -mt-2">
                            Solusi atap premium dengan material kaca tempered berkualitas tinggi yang kuat, aman, dan memberikan tampilan mewah & elegan untuk hunian maupun komersial Anda.
                        </p>
                        
                        <!-- Key Features -->
                        <div class="grid grid-cols-2 gap-4 max-w-lg">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Kuat 5x Lipat</span>
                                    <span class="text-xs text-white/60">Dibanding kaca biasa</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Aman</span>
                                    <span class="text-xs text-white/60">Pecah menjadi butiran</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Estetika Mewah</span>
                                    <span class="text-xs text-white/60">Tampilan modern minimalis</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <span class="block font-bold text-sm">Anti Gores</span>
                                    <span class="text-xs text-white/60">Permukaan keras</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20saya%20tertarik%20dengan%20Kanopi%20Kaca%20Tempered.%20Mohon%20info%20lebih%20lanjut%20dan%20konsultasi%20gratis." 
                               class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-primary-dark hover:scale-105 transition-all duration-300 flex items-center gap-2 shadow-xl shadow-primary/30 group text-base">
                                <span class="material-symbols-outlined group-hover:rotate-12 transition-transform">chat</span>
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
                                <p class="text-sm text-white"><span class="font-bold">250+</span> proyek terpasang</p>
                            </div>
                        </div>
                        
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/10 hover-scale">
                            <img src="<?php echo $base_url; ?>/assets/images/webp/Kanopi-Kaca-Tempered.webp" alt="Kanopi Kaca Tempered Modern" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                        </div>
                        
                        <!-- Floating Cards -->
                        <div class="absolute -bottom-6 -left-6 glass-card rounded-2xl p-5 shadow-2xl max-w-[300px] animate-float float-harga">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">savings</span>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900">Harga Terjangkau</p>
                                    <!-- <p class="text-2xs text-slate-500">Mulai Rp 950K/m²</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute -top-6 -right-6 glass-card rounded-2xl p-4 shadow-2xl max-w-[180px] animate-float animation-delay-1000 float-garansi">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                <div>
                                    <p class="text-xs font-bold text-slate-900">Garansi 10 Thn</p>
                                    <p class="text-2xs text-slate-500">Kualitas premium</p>
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
            
            <!-- Scroll Indicator -->
            <!-- <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 hidden md:block">
                <div class="flex flex-col items-center gap-2 text-white/50">
                    <span class="text-2xs tracking-widest uppercase">Scroll</span>
                    <div class="w-5 h-8 border-2 border-white/30 rounded-full flex justify-center">
                        <div class="w-1 h-2 bg-white rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div> -->
        </section>

        <!-- WHAT IS KACA TEMPERED SECTION -->
        <section class="py-24 bg-white dark:bg-background-dark" id="tentang-tempered">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    
                    <!-- Left: Text -->
                    <div>
                        <!-- Section Label -->
                        <div class="inline-block mb-6">
                            <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">Apa Itu Kanopi Kaca Tempered?</span>
                        </div>
                        
                        <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6 leading-tight">
                            Atap Kaca Premium dengan <span class="text-primary">Keamanan Maksimal</span>
                        </h2>
                        
                        <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                            Kanopi Kaca Tempered adalah sistem atap yang menggunakan kaca pengaman yang dipanaskan hingga suhu 600°C kemudian didinginkan secara cepat, menghasilkan kaca yang 5 kali lebih kuat dari kaca biasa dan aman karena pecah menjadi butiran tumpul.
                        </p>
                        
                        <!-- Key Advantages -->
                        <div class="space-y-6 mb-8">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">bolt</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Kekuatan 5x Lipat</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Proses tempering membuat kaca menjadi sangat kuat terhadap benturan dan tekanan dibanding kaca biasa.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">shield</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Keamanan Tinggi</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Jika pecah, kaca tempered hancur menjadi butiran-butiran kecil tumpul yang tidak berbahaya, berbeda dengan kaca biasa yang pecah menjadi serpihan tajam.</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-primary">visibility</span>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">Estetika Mewah</h3>
                                    <p class="text-slate-600 dark:text-slate-400">Tampilan transparan yang elegan memberikan kesan mewah, modern, dan minimalis pada bangunan Anda.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-200 dark:border-slate-700">
                            <div>
                                <div class="text-3xl font-black text-primary">10+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Tahun Garansi</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-primary">5x</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Kuat dari kaca biasa</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-primary">250+</div>
                                <div class="text-xs text-slate-500 uppercase tracking-wider">Proyek</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right: Image & Feature Cards -->
                    <div class="relative">
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-detail-1.webp" alt="Struktur Kanopi Kaca Tempered" class="w-full h-auto">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                        
                        <!-- Feature Card 1 -->
                        <div class="absolute -top-6 -right-6 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-5 max-w-[200px] hidden lg:block">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">bolt</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500">Kekuatan</p>
                                    <p class="text-xl font-black text-slate-900 dark:text-white">5x</p>
                                    <p class="text-2xs">lebih kuat</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature Card 2 -->
                        <div class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-5 max-w-[200px] hidden lg:block">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">thermostat</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500">Tahan Panas</p>
                                    <p class="text-xl font-black text-slate-900 dark:text-white">250°C</p>
                                    <p class="text-2xs">perbedaan suhu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20kaca%20tempered,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
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
                            <span class="material-symbols-outlined text-primary text-4xl">bolt</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">5x Lebih Kuat</h3>
                        <p class="text-slate-600 dark:text-slate-400">Dibanding kaca biasa, tahan terhadap benturan dan tekanan.</p>
                    </div>
                    
                    <!-- Point 2 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-primary text-4xl">shield</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Aman & Bersertifikat</h3>
                        <p class="text-slate-600 dark:text-slate-400">Pecah menjadi butiran tumpul, SNI & standar internasional.</p>
                    </div>
                    
                    <!-- Point 3 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="material-symbols-outlined text-primary text-4xl">verified</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Garansi 10 Tahun</h3>
                        <p class="text-slate-600 dark:text-slate-400">Garansi material dan pemasangan untuk ketenangan pikiran Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- MATERIAL SPECIFICATIONS -->
        <section class="py-24 bg-slate-50 dark:bg-slate-900/50" id="spesifikasi">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Spesifikasi Material</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Teknologi & Material Premium Kaca Tempered</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Kanopi kaca tempered kami menggunakan material berkualitas tinggi dengan spesifikasi teknik yang terukur untuk hasil maksimal.</p>
                </div>
                
                <!-- Specs Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Card 1: Material -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">inventory</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Material Kaca</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Kaca Tempered</span> - proses tempering 600°C</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Kaca Laminated</span> - dengan film PVB</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Clear Glass</span> - bening transparan</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 2: Ketebalan -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">straighten</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Ketebalan</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">8mm</span> - standar kanopi rumah</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">10mm</span> - bentang lebar</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">12mm - 15mm</span> - komersial premium</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 3: Rangka -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">construction</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Material Rangka</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Baja Galvanis</span> - anti karat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Stainless Steel 304</span> - premium</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Aluminium</span> - ringan, anti karat</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Card 4: Ukuran -->
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">width</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 heading-font">Ukuran & Bentang</h3>
                        <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Ukuran custom</span> sesuai kebutuhan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Maksimal per panel</span> 2m x 3m</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Bentang bebas</span> hingga 4 meter</span>
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
                                <span><span class="font-bold text-slate-900 dark:text-white">Tahan gores</span> - kekerasan tinggi</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Tahan panas</span> hingga 250°C温差</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Tidak berubah bentuk</span> - stabil</span>
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
                                <span><span class="font-bold text-slate-900 dark:text-white">Garansi material</span> 10 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span><span class="font-bold text-slate-900 dark:text-white">Garansi pemasangan</span> 2 tahun</span>
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
            <div class="max-w-7xl mx-auto pt-20 px-6 lg:px-10">
                <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-detail.webp" alt="Struktur Kanopi Spandek" class="w-full h-auto">
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20kaca%20tempered,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
        </section>

        <!-- KEUNGGULAN KANOPI KACA TEMPERED -->
        <section class="py-24 bg-white dark:bg-background-dark" id="keunggulan">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Keunggulan Produk</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Mengapa Pilih Kanopi Kaca Tempered?</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Dibanding material lain, kanopi kaca tempered menawarkan keindahan dan keamanan yang tak tertandingi.</p>
                </div>
                
                <!-- Advantages Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Advantage 1 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">visibility</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Tampilan Mewah & Modern</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Kaca tempered memberikan kesan elegan, mewah, dan minimalis yang sulit ditandingi material lain.</p>
                    </div>
                    
                    <!-- Advantage 2 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">bolt</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Kekuatan 5x Lipat</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Proses tempering membuat kaca menjadi sangat kuat terhadap benturan dan tekanan.</p>
                    </div>
                    
                    <!-- Advantage 3 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">shield</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Keamanan Terjamin</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Jika pecah, kaca hancur menjadi butiran tumpul yang tidak membahayakan, aman untuk keluarga.</p>
                    </div>
                    
                    <!-- Advantage 4 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">light_mode</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Cahaya Alami Maksimal</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Transparansi sempurna, ruangan di bawah kanopi tetap terang alami tanpa halangan.</p>
                    </div>
                    
                    <!-- Advantage 5 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">science</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Anti Gores & Tahan Panas</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Permukaan keras dan tahan gores, serta mampu menahan perbedaan suhu ekstrem.</p>
                    </div>
                    
                    <!-- Advantage 6 -->
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-3xl p-8 hover:bg-primary/5 transition-all duration-300 group">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl">brush</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 heading-font">Fleksibel Desain</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Dapat dikombinasikan dengan berbagai material dan finishing rangka sesuai keinginan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- APLIKASI & PENGGUNAAN -->
        <section class="py-24 bg-slate-50 dark:bg-slate-900/50" id="aplikasi">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Area Aplikasi</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Cocok untuk Berbagai Kebutuhan</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Kanopi kaca tempered dapat diaplikasikan di berbagai jenis bangunan, dari residensial hingga komersial mewah.</p>
                </div>
                
                <!-- Application Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Item 1: Carport Mewah -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-detail-1.webp" alt="Carport Kaca Tempered" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">garage</span>
                            <h3 class="text-xl font-bold heading-font">Carport Mewah</h3>
                            <p class="text-sm text-white/80">Tampilan elegan untuk kendaraan</p>
                        </div>
                    </div>
                    
                    <!-- Item 2: Teras & Balkon -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-2.webp" alt="Teras Kaca Tempered" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">deck</span>
                            <h3 class="text-xl font-bold heading-font">Teras & Balkon</h3>
                            <p class="text-sm text-white/80">Area halaman belakang rumah</p>
                        </div>
                    </div>
                    
                    <!-- Item 3: Rooftop & Skywalk -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-3.webp" alt="Rooftop Kaca" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">roofing</span>
                            <h3 class="text-xl font-bold heading-font">Rooftop & Skywalk</h3>
                            <p class="text-sm text-white/80">Area mewah dengan view langit</p>
                        </div>
                    </div>
                    
                    <!-- Item 4: Gedung Perkantoran -->
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl hover-lift">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/canopi-kaca-tempered-4.webp" alt="Kanopi Kantor" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <span class="material-symbols-outlined text-3xl mb-2">business_center</span>
                            <h3 class="text-xl font-bold heading-font">Gedung Perkantoran</h3>
                            <p class="text-sm text-white/80">Kesan profesional & modern</p>
                        </div>
                    </div>
                </div>
                
                <!-- More Applications Note -->
                <div class="text-center mt-12">
                    <p class="text-slate-600 dark:text-slate-400">Dan masih banyak lagi: restoran mewah, hotel, showroom, dll.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi%20kaca%20tempered,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
        </section>

        <!-- PORTFOLIO GALLERY -->
        <!-- <section class="py-24 bg-white dark:bg-background-dark" id="portfolio">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Portfolio Proyek</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">250+ Proyek Terpasang</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Berikut adalah beberapa proyek kanopi kaca tempered yang telah kami kerjakan.</p>
                </div>
                
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    <div class="col-span-1 md:col-span-2 row-span-2 overflow-hidden rounded-3xl group relative h-96">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-1.webp" alt="Proyek Kaca Tempered 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <div>
                                <h3 class="text-2xl font-bold text-white">Carport Mewah</h3>
                                <p class="text-white/80">Jakarta Selatan · 2024</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden rounded-3xl group relative h-64">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-2.webp" alt="Proyek Kaca Tempered 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <h3 class="text-lg font-bold text-white">Teras Rooftop</h3>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden rounded-3xl group relative h-64">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-3.webp" alt="Proyek Kaca Tempered 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <h3 class="text-lg font-bold text-white">Balkon Minimalis</h3>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden rounded-3xl group relative h-64">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-4.webp" alt="Proyek Kaca Tempered 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <h3 class="text-lg font-bold text-white">Restoran Mewah</h3>
                        </div>
                    </div>
                    
                    <div class="overflow-hidden rounded-3xl group relative h-64">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-5.webp" alt="Proyek Kaca Tempered 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <h3 class="text-lg font-bold text-white">Hotel Lobby</h3>
                        </div>
                    </div>
                    
                    <div class="col-span-1 md:col-span-2 overflow-hidden rounded-3xl group relative h-64">
                        <img src="<?php echo $base_url; ?>/assets/images/webp/portfolio-6.webp" alt="Proyek Kaca Tempered 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <div>
                                <h3 class="text-2xl font-bold text-white">Showroom Mobil</h3>
                                <p class="text-white/80">Dengan konsep terbuka</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="text-center mt-12">
                    <button class="inline-flex items-center gap-2 border-2 border-primary text-primary px-8 py-4 rounded-xl font-bold hover:bg-primary hover:text-white transition-all duration-300">
                        <span>Lihat Semua Portfolio</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section> -->

        <!-- PRICE TABLE / PAKET HARGA -->
        <!-- <section class="py-24 bg-slate-50 dark:bg-slate-900/50" id="harga">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="bg-primary/10 text-primary text-2xs font-bold px-4 py-2 rounded-full uppercase tracking-widest inline-block mb-6">Harga Terjangkau</span>
                    <h2 class="text-4xl lg:text-5xl font-black heading-font text-slate-900 dark:text-white mb-6">Paket Pemasangan Kanopi Kaca Tempered</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Harga sudah termasuk material + pemasangan. Konsultasi gratis untuk menentukan paket yang sesuai.</p>
                </div>
                
                
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    
                    
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift relative">
                        <div class="absolute top-6 right-6 bg-green-100 text-green-600 text-2xs font-bold px-3 py-1 rounded-full">Best Seller</div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2 heading-font">Paket Hemat</h3>
                        <p class="text-slate-500 dark:text-slate-400 mb-6">Solusi ekonomis untuk hunian</p>
                        
                        <div class="mb-6">
                            <span class="text-4xl font-black text-primary">Rp 950K</span>
                            <span class="text-slate-500">/m²</span>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Kaca tempered 8mm (bening)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Rangka baja galvanis</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Garansi material 5 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Free konsultasi</span>
                            </li>
                        </ul>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20Paket%20Hemat%20Kanopi%20Kaca%20Tempered" 
                           class="block w-full bg-primary/10 text-primary text-center py-3 rounded-xl font-bold hover:bg-primary hover:text-white transition-all duration-300">
                            Konsultasi Gratis
                        </a>
                    </div>
                    
                    
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-2xl hover-lift scale-105 relative border-2 border-primary">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white text-xs font-bold px-6 py-2 rounded-full shadow-lg">
                            REKOMENDASI
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2 heading-font mt-4">Paket Premium</h3>
                        <p class="text-slate-500 dark:text-slate-400 mb-6">Kualitas terbaik untuk hasil maksimal</p>
                        
                        <div class="mb-6">
                            <span class="text-4xl font-black text-primary">Rp 1.250K</span>
                            <span class="text-slate-500">/m²</span>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Kaca tempered 10mm (bening/hitam)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Rangka stainless steel 304</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Garansi material 10 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Free konsultasi + survey lokasi</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Aksesoris stainless steel</span>
                            </li>
                        </ul>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20Paket%20Premium%20Kanopi%20Kaca%20Tempered" 
                           class="block w-full bg-primary text-white text-center py-3 rounded-xl font-bold hover:bg-primary-dark transition-all duration-300 shadow-lg shadow-primary/30">
                            Konsultasi Gratis
                        </a>
                    </div>
                    
                    
                    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-xl hover-lift relative">
                        <div class="absolute top-6 right-6 bg-yellow-100 text-yellow-600 text-2xs font-bold px-3 py-1 rounded-full">Premium</div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2 heading-font">Paket Luxury</h3>
                        <p class="text-slate-500 dark:text-slate-400 mb-6">Untuk proyek komersial & mewah</p>
                        
                        <div class="mb-6">
                            <span class="text-4xl font-black text-primary">Rp 1.650K</span>
                            <span class="text-slate-500">/m²</span>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Kaca tempered laminated 12mm</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Rangka stainless steel 316 premium</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Garansi material 15 tahun</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Free konsultasi + survey + desain 3D</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                <span class="text-sm">Finishing premium + LED strip</span>
                            </li>
                        </ul>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20Paket%20Luxury%20Kanopi%20Kaca%20Tempered" 
                           class="block w-full bg-primary/10 text-primary text-center py-3 rounded-xl font-bold hover:bg-primary hover:text-white transition-all duration-300">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
                
                
                <p class="text-center text-slate-500 dark:text-slate-400 text-sm mt-8 italic">*Harga dapat berbeda tergantung luas, lokasi, dan tingkat kesulitan pemasangan. Konsultasi gratis untuk penawaran pasti.</p>
            </div>
        </section> -->

        <!-- FAQ SECTION -->
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
                            <span class="font-bold text-lg">Berapa lama proses pemasangan kanopi kaca tempered?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Proses pemasangan kanopi kaca tempered umumnya memakan waktu 3-7 hari tergantung luas dan kerumitan desain. Untuk carport rumah standar (20-30m²) biasanya selesai dalam 4-5 hari.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah kaca tempered aman jika pecah?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Sangat aman. Kaca tempered dirancang khusus agar jika pecah, akan hancur menjadi butiran-butiran kecil tumpul yang tidak membahayakan, berbeda dengan kaca biasa yang pecah menjadi serpihan tajam.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah ada garansi?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Ya, kami memberikan garansi material 5-15 tahun tergantung jenis kaca, dan garansi pemasangan 2 tahun. Jika ada kebocoran atau masalah dalam masa garansi, kami perbaiki gratis.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah konsultasi benar-benar gratis?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Ya, 100% gratis! Tim kami akan membantu Anda memilih jenis material, menghitung estimasi biaya, bahkan survey lokasi tanpa dipungut biaya. Silakan hubungi kami via WhatsApp.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apa perbedaan kaca tempered biasa dengan kaca tempered laminated?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Kaca tempered biasa jika pecah menjadi butiran. Kaca tempered laminated memiliki lapisan film PVB di tengahnya, sehingga jika pecah, pecahannya tetap menempel pada film, memberikan keamanan ekstra dan tetap utuh meskipun retak.
                        </div>
                    </div>
                    
                    <div class="border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden">
                        <button class="w-full flex items-center justify-between p-6 text-left hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            <span class="font-bold text-lg">Apakah kaca tempered tahan panas?</span>
                            <span class="material-symbols-outlined text-primary">add</span>
                        </button>
                        <div class="px-6 pb-6 text-slate-600 dark:text-slate-400">
                            Ya, kaca tempered mampu menahan perbedaan suhu hingga 250°C, sehingga aman untuk iklim tropis dan tidak mudah retak akibat perubahan suhu drastis.
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
                    Siap Memiliki Kanopi <br/>Kaca Tempered Mewah?
                </h2>
                
                <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">
                    Konsultasi GRATIS dengan tim ahli kami. Dapatkan penawaran harga terbaik dan desain yang sesuai dengan kebutuhan Anda.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20saya%20tertarik%20dengan%20Kanopi%20Kaca%20Tempered.%20Mohon%20info%20lebih%20lanjut%20dan%20konsultasi%20gratis." 
                       class="bg-white text-primary px-10 py-5 rounded-xl font-bold text-lg hover:bg-slate-100 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 shadow-2xl group">
                        <span class="material-symbols-outlined group-hover:rotate-12 transition-transform">chat</span>
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