<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_title) ?></title>
    
    <!-- External Libraries -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="foto/icon.png">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="antialiased">

    <!-- Navbar -->
    <nav class="sticky top-0 w-full z-50 border-b border-white/10 shadow-2xl transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 md:px-10 py-4">
            <a href="index.php" class="flex items-center" data-aos="fade-right">
                <img src="foto/logo_shankara.png" alt="Shankara Logo" class="h-[35px] w-auto brightness-200">
            </a>
            
            <ul class="hidden md:flex space-x-8 text-[11px] uppercase tracking-[0.2em] font-medium text-gray-300">
                <li><a href="index.php" class="hover:text-gold transition">Home</a></li>
                <li><a href="#tipe-unit" class="hover:text-gold transition">Tipe Unit</a></li>
                <li><a href="#kontak" class="hover:text-gold transition">Kontak</a></li>
            </ul>

            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center space-x-4 text-gray-400">
                    <a href="<?= $social_links['facebook'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                    <a href="<?= $social_links['instagram'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="<?= $social_links['tiktok'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-tiktok text-lg"></i></a>
                </div>
                <button id="menu-btn" class="block md:hidden text-white focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden fixed inset-0 w-full h-screen bg-[#0a0a0a] z-[60] p-10 flex flex-col items-center justify-center">
            <button id="close-btn" class="absolute top-10 right-10 text-white text-4xl">&times;</button>
            <ul class="flex flex-col space-y-6 text-center text-xl uppercase tracking-wider font-light text-white">
                <li><a href="index.php" class="hover:text-gold">Home</a></li>
                <li><a href="#tipe-unit" class="hover:text-gold">Tipe Unit</a></li>
                <li><a href="#kontak" class="hover:text-gold">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg h-[95vh] flex items-center px-10 md:px-24 relative">
        <div class="max-w-3xl z-10">
            <p class="text-gold uppercase tracking-[0.4em] text-xs mb-4" data-aos="fade-down">The Premium Living</p>
            <h1 class="text-6xl md:text-8xl font-bold leading-tight mb-6 uppercase tracking-tighter text-white" data-aos="fade-up">
                Building <br> <span class="text-gold">The Future</span>
            </h1>
            <p class="text-lg md:text-xl font-light mb-10 text-gray-400 max-w-xl" data-aos="fade-up" data-aos-delay="300">
                Hunian eksklusif dengan sentuhan desain modern tropis. Kenyamanan sempurna dalam balutan kemewahan malam.
            </p>
            <div data-aos="fade-up" data-aos-delay="500">
                <a href="#unit" class="border border-gold text-gold px-10 py-4 uppercase tracking-widest hover:bg-gold hover:text-black transition-all duration-500 font-bold text-xs gold-glow">
                    Explore Luxury
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-gold/5 rounded-full blur-[120px]"></div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-32 px-10 text-center bg-[#0d0d0d]">
        <h2 class="text-gold text-xs uppercase tracking-[0.5em] mb-8" data-aos="fade-up">Philosophy</h2>
        <p class="text-white text-2xl md:text-4xl leading-relaxed max-w-5xl mx-auto font-light italic" data-aos="fade-up">
            "Membangun bukan sekadar menyusun bata, melainkan menciptakan <span class="text-gold">ruang di mana masa depan keluarga Anda</span> bersinar paling terang."
        </p>
    </section>

    <!-- Cluster Section -->
    <section id="unit" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($clusters as $cluster): ?>
                <div class="group relative overflow-hidden rounded-2xl bg-[#151515] border border-white/5" data-aos="fade-up" data-aos-delay="<?= $cluster['delay'] ?>">
                    <img src="<?= htmlspecialchars($cluster['image']) ?>" class="w-full h-[450px] object-cover transition duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100" alt="<?= htmlspecialchars($cluster['name']) ?>">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 p-8">
                        <h3 class="text-2xl font-bold text-white mb-2"><?= htmlspecialchars($cluster['name']) ?></h3>
                        <?php if (!empty($cluster['dp'])): ?>
                            <p class="text-gold text-sm font-bold tracking-widest mb-4"><?= htmlspecialchars($cluster['dp']) ?></p>
                        <?php endif; ?>
                        <?php if (!empty($cluster['location'])): ?>
                            <p class="text-gold text-sm font-light tracking-widest mb-4 flex items-center gap-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <?= htmlspecialchars($cluster['location']) ?>
                            </p>
                        <?php endif; ?>
                        <div class="h-1 w-0 bg-gold transition-all duration-500 group-hover:w-full"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Pilihan Tipe Unit -->
    <section id="tipe-unit" class="py-20 px-10 md:px-24 bg-white">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-widest mb-4">Pilihan Tipe Unit</h2>
            <div class="h-1 w-20 bg-gold mx-auto"></div>
            <p class="text-gray-500 mt-6 max-w-2xl mx-auto italic">Temukan ruang ideal yang dirancang khusus untuk kenyamanan dan gaya hidup modern keluarga Anda di pusat kota Sambas.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($unit_types as $unit): ?>
            <div class="group overflow-hidden rounded-2xl bg-gray-50 shadow-sm hover:shadow-xl transition-all duration-500" data-aos="fade-up" data-aos-delay="<?= $unit['delay'] ?>">
                <div class="relative overflow-hidden">
                    <img src="<?= htmlspecialchars($unit['image']) ?>" alt="<?= htmlspecialchars($unit['title']) ?>" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-700">
                    <?php if (!empty($unit['badge'])): ?>
                        <div class="absolute top-4 left-4 bg-gold text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest"><?= htmlspecialchars($unit['badge']) ?></div>
                    <?php endif; ?>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($unit['title']) ?></h3>
                    <p class="text-gray-500 text-sm mb-6"><?= htmlspecialchars($unit['short_desc']) ?></p>
                    <div class="flex justify-between items-center border-t border-gray-200 pt-6">
                        <span class="text-gold font-bold"><?= htmlspecialchars($unit['dp']) ?></span>
                        <button onclick="openModal('modal-<?= $unit['id'] ?>')" class="text-xs font-bold uppercase tracking-widest text-black hover:text-gold transition-colors duration-300">
                            Lihat Detail &rarr;
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-20 px-10 md:px-24 flex flex-col md:flex-row items-center gap-16 bg-[#0a0a0a] text-white">
        <div class="md:w-1/2 flex justify-center" data-aos="zoom-in-right" data-aos-duration="600">
            <img src="foto/tipe36shankara.jpg" alt="Detail Rumah" class="max-w-xs md:max-w-md drop-shadow-2xl rounded-3xl object-cover">
        </div>

        <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
            <h2 class="text-3xl font-bold uppercase tracking-tight mb-12">
                Mengapa Shankara Group<br>
                <span class="text-gold">adalah Pilihan Tepat ?</span>
            </h2>
            
            <div class="space-y-10">
                <div class="flex gap-6" data-aos="fade-left" data-aos-delay="200">
                    <span class="text-gold font-bold text-xl">01</span>
                    <div>
                        <h4 class="font-bold text-white uppercase tracking-wider mb-2">Lokasi Bebas Banjir & Strategis</h4>
                        <p class="text-gray-400 text-sm leading-relaxed max-w-sm">Terletak di area berkontur tinggi dengan daya serap tanah yang optimal, menjaga hunian tetap kering dan bebas genangan secara alami tanpa bergantung pada saluran buatan.</p>
                    </div>
                </div>
                
                <div class="flex gap-6" data-aos="fade-left" data-aos-delay="400">
                    <span class="text-gold font-bold text-xl">02</span>
                    <div>
                        <h4 class="font-bold text-white uppercase tracking-wider mb-2">Sirkulasi Udara & Cahaya Maksimal</h4>
                        <p class="text-gray-500 text-sm leading-relaxed max-w-sm">Desain plafon tinggi dan jendela besar di setiap ruangan untuk menghemat energi listrik dan menjaga kesegaran udara di dalam rumah.</p>
                    </div>
                </div>

                <div class="flex gap-6" data-aos="fade-left" data-aos-delay="600">
                    <span class="text-gold font-bold text-xl">03</span>
                    <div>
                        <h4 class="font-bold text-white uppercase tracking-wider mb-2">Nilai Investasi Tinggi</h4>
                        <p class="text-gray-400 text-sm leading-relaxed max-w-sm">Pilihan investasi properti yang aman dan stabil, didukung oleh legalitas yang terjamin serta tren perkembangan kawasan yang positif di pusat kota.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Kontak -->
    <section id="kontak">
        <footer class="bg-[#050505] pt-24 pb-12 px-10 md:px-24 border-t border-white/5">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-16 mb-20 text-gray-400">
                <div class="col-span-1">
                    <img src="foto/logo_shankara.png" alt="Logo" class="h-8 mb-8 brightness-200">
                    <p class="text-xs leading-loose uppercase tracking-widest">Pionir hunian berkelanjutan yang menghadirkan rumah berkualitas dengan konsep sirkulasi udara alami dan lingkungan yang asri untuk keluarga Indonesia.</p>
                </div>
                <div class="col-span-1 text-[10px] uppercase tracking-widest">
                    <h4 class="text-white font-bold mb-8">Contact Us</h4>
                    <p class="mb-4">Jl. Raya Kartiasa No. 820,<br>Sambas, Indonesia</p>
                    <p class="text-white">Informasi Whatsapp</p>
                    <?php foreach ($wa_numbers as $num): ?>
                        <p class="text-gold"><?= htmlspecialchars($num) ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="col-span-2 text-[10px]">
                    <h4 class="text-white font-bold mb-8 uppercase tracking-widest">Kantor Pemasaran</h4>
                    <p class="text-gray-500 mb-4">
                        <strong class="text-gold">Main Office:</strong><br>
                        Jl. Raya Kartiasa No. 820, Desa Kartiasa, Sambas,<br>
                        Kalimantan Barat, Indonesia
                    </p>
                    <p class="text-gray-500 mb-4">
                        <strong class="text-gold">Marketing Gallery:</strong><br>
                        Lokasi Proyek Shankara Residence
                    </p>
                    <p class="text-gray-500">
                        <strong class="text-gold">Jam Operasional:</strong><br>
                        Senin - Jumat: 08:00 - 17:00<br>
                        Sabtu : 08:00 - 16:00
                    </p>
                </div>
            </div>
            
            <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-600 uppercase tracking-[0.3em]">
                <p>© <?= $year ?> <?= htmlspecialchars($company_name) ?>. All Rights Reserved - Create by <?= htmlspecialchars($creator_name) ?></p>
                <div class="flex space-x-8 mt-6 md:mt-0 text-white items-center">
                    <p>Ikuti Sosial Media Kami</p>
                    <a href="<?= $social_links['facebook'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                    <a href="<?= $social_links['instagram'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="<?= $social_links['tiktok'] ?>" target="_blank" rel="noopener noreferrer" class="hover:text-gold transition"><i class="fa-brands fa-tiktok text-lg"></i></a>
                </div>
            </div>
        </footer>

        <a href="https://wa.me/<?= $main_wa ?>" target="_blank" rel="noopener noreferrer" class="fixed bottom-10 right-10 bg-green-600 text-white w-14 h-14 rounded-full shadow-[0_10px_30px_rgba(22,163,74,0.4)] flex items-center justify-center hover:scale-110 transition z-50">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>
    </section>

    <!-- Modals Tipe Unit (Otomatis ter-generate untuk seluruh tipe) -->
    <?php foreach ($unit_types as $unit): ?>
    <div id="modal-<?= $unit['id'] ?>" class="fixed inset-0 z-[100] hidden overflow-y-auto bg-black bg-opacity-90 transition-all duration-300">
        <div class="flex min-h-screen items-center justify-center p-4">
            <div class="relative w-full max-w-5xl rounded-3xl bg-white shadow-2xl overflow-hidden">
                <button onclick="closeModal('modal-<?= $unit['id'] ?>')" 
                    class="absolute top-4 right-4 z-[110] flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-900 hover:bg-gold hover:text-white transition-all shadow-md">
                    <span class="text-2xl font-bold">&times;</span>
                </button>

                <div class="flex flex-col lg:flex-row">
                    <div class="lg:w-1/2 p-6">
                        <div class="space-y-4">
                            <img src="<?= htmlspecialchars($unit['denah']) ?>" alt="Denah <?= htmlspecialchars($unit['title']) ?>" class="w-full rounded-2xl shadow-lg">
                            <div class="grid grid-cols-2 gap-4">
                                <img src="<?= htmlspecialchars($unit['image']) ?>" alt="Foto <?= htmlspecialchars($unit['title']) ?>" class="rounded-xl border border-gray-200">
                                <div class="bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 text-[10px] text-center p-2 uppercase tracking-widest">
                                    Interior <br> Coming Soon
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2 p-8 lg:p-12 bg-gray-50 rounded-r-3xl">
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">SHANKARA GROUP <span class="text-gold uppercase"><?= htmlspecialchars($unit['title']) ?></span></h2>
                        <p class="text-sm text-gray-500 uppercase tracking-widest mb-6">Pusat Kota Sambas</p>
                        
                        <div class="mb-8">
                            <h4 class="font-bold text-gray-800 mb-2">Deskripsi Bangunan</h4>
                            <p class="text-gray-600 text-sm leading-relaxed mb-2"><?= htmlspecialchars($unit['full_desc_1']) ?></p>
                            <p class="text-gray-600 text-sm leading-relaxed"><?= htmlspecialchars($unit['full_desc_2']) ?></p>
                        </div>

                        <div class="grid grid-cols-2 gap-y-6 gap-x-4 mb-8">
                            <div class="flex items-center gap-3">
                                <span class="p-2 bg-white rounded-lg shadow-sm">🛏️</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase">Kamar Tidur</p>
                                    <p class="font-bold text-gray-800 text-sm"><?= htmlspecialchars($unit['kamar_tidur']) ?></p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="p-2 bg-white rounded-lg shadow-sm">🚿</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase">Kamar Mandi/WC</p>
                                    <p class="font-bold text-gray-800 text-sm"><?= htmlspecialchars($unit['kamar_mandi']) ?></p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="p-2 bg-white rounded-lg shadow-sm">🛋️</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase">Ruang Tamu</p>
                                    <p class="font-bold text-gray-800 text-sm">Tersedia</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="p-2 bg-white rounded-lg shadow-sm">🍳</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase">Dapur</p>
                                    <p class="font-bold text-gray-800 text-sm">Tersedia</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="p-2 bg-white rounded-lg shadow-sm">🌳</span>
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase">Halaman</p>
                                    <p class="font-bold text-gray-800 text-sm">Depan & Belakang</p>
                                </div>
                            </div>
                        </div>

                        <a href="https://wa.me/<?= $main_wa ?>?text=Halo%20Shankara%20Group,%20saya%20tertarik%20menanyakan%20ketersediaan%20unit%20<?= urlencode($unit['title']) ?>" target="_blank" rel="noopener noreferrer" class="block w-full py-4 bg-gray-900 text-white text-center rounded-xl font-bold hover:bg-gold transition-all">
                            Tanyakan Ketersediaan Unit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
