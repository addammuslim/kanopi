<?php include('./shared/config.php'); ?>
<!DOCTYPE html>
<html lang="id"><head>
    <title>Tentang Kami - Rizki Abadi Canopy</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0077cc",
                        "primary-dark": "#003366",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <?php include 'shared/header.php'; ?>
        <main class="flex-grow">
            <section class="relative h-[500px] flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" data-alt="Modern architectural canopy structure on a luxury residential building" style="background-image: url('<?php echo $base_url; ?>/assets/images/webp/Kanopi-Kaca-Tempered.webp');">
                    <div class="absolute inset-0 bg-slate-900/60"></div>
                </div>
                <div class="relative z-10 text-center px-4 max-w-4xl">
                    <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest uppercase bg-primary text-white rounded-full">TENTANG</span>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight" style="text-transform:uppercase;">Rizki Abadi Canopy</h1>
                    <p class="text-lg md:text-xl text-slate-200 max-w-2xl mx-auto">Spesialis Kanopi Berpengalaman Sejak 1999, Melayani Proyek Residensial dan Komersial dengan Kualitas Terbaik.</p>
                    <div class="text-center mt-10">
                        <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Konsultasi Gratis</span>
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class="py-24 px-4 bg-white dark:bg-slate-900/50">
                <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="aspect-[1/1] rounded-2xl overflow-hidden shadow-2xl">
                            <img alt="Quality construction work" class="w-full h-full object-cover" data-alt="Close up of high quality canopy installation details" src="<?php echo $base_url; ?>/assets/images/webp/about-us.webp"/>
                        </div>
                        <div class="absolute -top-8 -right-8 bg-primary p-8 rounded-2xl shadow-xl hidden lg:block">
                            <p class="text-5xl font-black text-white mb-1">25+</p>
                            <p class="text-white/80 font-medium">Tahun Pengalaman</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">Sejarah &amp; Filosofi</h2>
                        <h3 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Lebih Dari Sekadar Perlindungan, Kami Menciptakan Estetika</h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                            Sejak tahun 1999, Rizki Abadi Canopy telah mendedikasikan diri dalam industri konstruksi kanopi. Dengan lebih dari dua dekade pengalaman, kami memahami bahwa kanopi bukan sekadar atap pelindung dari cuaca, melainkan elemen estetika yang mendefinisikan karakter sebuah bangunan.
                        </p>
                        <p class="text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                            Filosofi desain kami berfokus pada tiga pilar utama: <strong>Kekuatan Struktur</strong> yang teruji, <strong>Kualitas Material</strong> premium, dan <strong>Desain Modern</strong> yang selalu mengikuti perkembangan zaman.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                <div>
                                    <h4 class="font-bold">Kualitas Premium</h4>
                                    <p class="text-xs text-slate-500">Material standar industri terbaik.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">architecture</span>
                                <div>
                                    <h4 class="font-bold">Desain Presisi</h4>
                                    <p class="text-xs text-slate-500">Pengerjaan detail dan akurat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 px-4 bg-background-light dark:bg-background-dark">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">Komitmen Kami</h2>
                        <h3 class="text-3xl md:text-4xl font-bold">Layanan Profesional Tanpa Kompromi</h3>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white dark:bg-slate-800 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-shadow">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-primary text-3xl">sentiment_satisfied</span>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Kepuasan Pelanggan</h4>
                            <p class="text-slate-600 dark:text-slate-400">Prioritas utama kami adalah mewujudkan ekspektasi klien melalui hasil kerja yang maksimal dan memuaskan.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-shadow">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-primary text-3xl">support_agent</span>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Konsultasi Profesional</h4>
                            <p class="text-slate-600 dark:text-slate-400">Tim ahli kami siap memberikan solusi desain dan teknis yang paling sesuai dengan kebutuhan ruang Anda.</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-10 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-shadow">
                            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-primary text-3xl">construction</span>
                            </div>
                            <h4 class="text-xl font-bold mb-4">Pemasangan Teliti</h4>
                            <p class="text-slate-600 dark:text-slate-400">Proses instalasi dilakukan oleh tenaga ahli berpengalaman dengan ketelitian tinggi untuk keamanan jangka panjang.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 px-4 bg-white dark:bg-slate-900">
                <div class="max-w-7xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold mb-8">Material Berkualitas Tinggi</h2>
                            <p class="text-slate-600 dark:text-slate-400 mb-10">Kami hanya menggunakan material pilihan yang telah teruji ketahanannya terhadap cuaca ekstrem di Indonesia.</p>
                            <div class="space-y-6">
                                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                    <div class="w-12 h-12 bg-primary text-white flex items-center justify-center rounded-lg font-bold">01</div>
                                    <div>
                                        <h5 class="font-bold">Kanopi Alderon (uPVC)</h5>
                                        <p class="text-sm text-slate-500">Meredam panas dan suara hujan dengan sangat baik.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                    <div class="w-12 h-12 bg-primary text-white flex items-center justify-center rounded-lg font-bold">02</div>
                                    <div>
                                        <h5 class="font-bold">Polycarbonate</h5>
                                        <p class="text-sm text-slate-500">Tahan benturan dan memiliki berbagai pilihan warna transparan.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                    <div class="w-12 h-12 bg-primary text-white flex items-center justify-center rounded-lg font-bold">03</div>
                                    <div>
                                        <h5 class="font-bold">Kaca Tempered</h5>
                                        <p class="text-sm text-slate-500">Tampilan mewah, elegan, dan sangat kuat untuk kesan modern.</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                    <div class="w-12 h-12 bg-primary text-white flex items-center justify-center rounded-lg font-bold">04</div>
                                    <div>
                                        <h5 class="font-bold">Rangka Baja Berkualitas</h5>
                                        <p class="text-sm text-slate-500">Menggunakan Hollow atau Baja WF dengan cat anti-karat premium.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <img class="rounded-xl object-cover h-64 w-full" data-alt="Close up of modern glass canopy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyefdebwwVOZ5JW65RkKEN8SdivtllyhULLPCvoQM62v3Z1iTtjnqsUmydWDyqDwjkqr2WMLlbjJMF2EsMCkg5h2nbYgFVsTvGgcFQj4rIG4UxIVp40iyZ3TRSUMqyEr3jngrZHRWb9Tz5xD7rcbU2NzKsZzDGEmTdFKnMKa4OG3kwYLcmSp7UawK2zDBTWugGeoClaXnoxafrlD9NI5i8qQUoeByZlJ06TgB92dyHUcRbPphUnCLqyapo7Zv9yT2QvjhBtPriSjY"/>
                                <img class="rounded-xl object-cover h-48 w-full" data-alt="Structural steel details of a building" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXbV3KUpPQwkXxs0-BWJYrGURaQw-Xo5akSULO9JxF4Xpa0a1gCnWcLeiStBwMV1cW8htMYqk9VI7w_HhdyF65wXibL3GXvD4iz3EwC2kXpt5AVMpw4diI_PFL9HaCBtbLXLZtggnjktbCgxgAlQqEXgnV9GbK0fQNWGVNgFjuj6xtoJeAkIyM7gbLbdBI9ApdgU2B8p0r9ypKuQ0ce67InKuRFbPQoC3GNYoB75UtoWSHtwl3RTerEJzsaZss5IrtYPY2IoMDdhk"/>
                            </div>
                            <div class="space-y-4 pt-12">
                                <img class="rounded-xl object-cover h-48 w-full" data-alt="Contemporary commercial architecture facade" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTWeZjmftbj7OPsS_CSdK_s3qZHRyL5Ikxnnd8s612VSbAuOaVpi5IF65kcdGm_tJzzBvNI9ohjNM6wr1DdRJ9oEb5NVqMzdVCfrhrzY9i94j9fmpIO6NV5a-QSUuG5WNpdcB8S5uNy3fd778GxNYYXRs_oKaDlwKZcwmF065PINEmrFGaIY6SW7AW_wYnbS5aJggXaVPutBWFj4ZYDlX6RocKUnU9S4UWlAbQtQcIwuMjqxl7i1qgitftvlWs0TAgJkn887DI07g"/>
                                <img class="rounded-xl object-cover h-64 w-full" data-alt="Modern residence with stylish porch canopy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXW9O9TQpZhIBL3EdPstEO7pMDCuQEAAjPrsZzIFkaXmwewZGerotxwS0SIMlqWx3yyAVfhZp0rF5-KKBWRJ6Y58nCPltd4ixfIizCT6-Zl6v_Bu8XEcr2W0Sqdh0K7a2GZ4_2TqcSMP5iC7_dAEiNrTt_Spr5qthxIbPVt7-evD4PslXfOlC6ZWUidXVDXpms0zy0mtZQTbo8PZfaAktLQLWJzYh4PIe2O4lR1XqOILvMKdu9ucvbdAdceEUflYKOYXIllxe6PD8"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="https://wa.me/<?php echo $nohp; ?>?text=Halo%20<?php echo $sapa; ?>,%20saya%20mau%20tanya%20harga%20dan%20konsultasi%20Kanopi,%20Terimakasih." class="inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary/90 hover:text-white transition-all group">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Gratis</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </section>
            <section class="py-24 px-4 text-white bg-[#002244]">
                <div class="max-w-7xl mx-auto">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                        <div class="lg:col-span-1">
                            <h2 class="text-3xl font-bold mb-6">Mengapa Memilih Kami?</h2>
                            <p class="text-white/80 leading-relaxed mb-8">Kami bukan sekadar tukang, kami adalah mitra dalam mewujudkan hunian impian Anda dengan standar profesionalisme tinggi.</p>
                            <a href="<?php echo $base_url; ?>/portofolio" class="bg-white text-primary px-8 py-3 rounded-full font-bold hover:bg-slate-100 transition-colors">Lihat Portfolio</a>
                        </div>
                        <div class="lg:col-span-2 grid sm:grid-cols-2 gap-8">
                            <div class="flex gap-4">
                                <span class="material-symbols-outlined text-4xl opacity-50">calendar_today</span>
                                <div>
                                    <h4 class="text-xl font-bold mb-2">Sejak 1999</h4>
                                    <p class="text-sm text-white/70">Pengalaman panjang yang menjamin kualitas pengerjaan.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <span class="material-symbols-outlined text-4xl opacity-50">engineering</span>
                                <div>
                                    <h4 class="text-xl font-bold mb-2">Tenaga Profesional</h4>
                                    <p class="text-sm text-white/70">Tim teknis terlatih dan berdedikasi tinggi.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <span class="material-symbols-outlined text-4xl opacity-50">payments</span>
                                <div>
                                    <h4 class="text-xl font-bold mb-2">Harga Kompetitif</h4>
                                    <p class="text-sm text-white/70">Keseimbangan antara kualitas premium dan harga yang adil.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <span class="material-symbols-outlined text-4xl opacity-50">auto_awesome</span>
                                <div>
                                    <h4 class="text-xl font-bold mb-2">Desain Modern</h4>
                                    <p class="text-sm text-white/70">Selalu mengikuti tren arsitektur terkini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'shared/footer.php'; ?>
    </div>
</body></html>