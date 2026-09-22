<!--====== Start Gallery Section ======-->
<section id="team" class="bizzen-team_one pt-115 pb-120 p-r z-1">
    <div class="team-bg bg_cover navy-texture-bg"><div class="navy-texture-img"></div></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <!--=== Section Title ===-->
                <div class="section-title text-center text-white mb-60">
                    <span class="sub-title" data-aos="fade-down" data-aos-duration="1000">Galeri Kami</span>
                    <h2 class="text-anm">Sebahagian Hasil Kerja Yang Telah Dilaksanakan</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="work-gallery" id="workGallery" data-aos="fade-up" data-aos-duration="1000"></div>
        <template id="workGalleryData">
            @php
                $galleryAspectRatios = ['1/1', '3/4', '4/3', '1/1', '3/4'];
                $galleryImages = [
                    'langsir-krim-siap.jpeg' => 'Langsir siap dipasang',
                    'langsir-teal-siap.jpeg' => 'Langsir siap dipasang',
                    'langsir-kuning-siap.jpeg' => 'Langsir siap dipasang',
                    'langsir-bilik-kondominium.jpeg' => 'Langsir bilik kondominium',
                    'langsir-bilik-mesyuarat-kuning-1.jpeg' => 'Langsir bilik mesyuarat',
                    'langsir-bilik-mesyuarat-kuning-2.jpeg' => 'Langsir bilik mesyuarat',
                    'langsir-pemasangan-oren.jpeg' => 'Pemasangan langsir',
                    'langsir-putih-pemasangan.jpeg' => 'Pemasangan langsir',
                    'langsir-ungu-pemasangan-1.jpeg' => 'Pemasangan langsir',
                    'langsir-ungu-pemasangan-2.jpeg' => 'Pemasangan langsir',
                    'kabinet-dapur.jpeg' => 'Kabinet dapur',
                    'kain-skirting-meja-majlis.jpeg' => 'Skirting meja majlis',
                    'persediaan-meja-majlis.jpeg' => 'Persediaan meja majlis',
                    'susunan-meja-kerusi-majlis-2.jpeg' => 'Susunan meja & kerusi majlis',
                    'mesyuarat-perjanjian-pelanggan.jpeg' => 'Mesyuarat perjanjian pelanggan',
                    'set-pinggan-mangkuk-katering.jpeg' => 'Set pinggan mangkuk katering',
                    'pembekalan-kotak-produk-1.jpeg' => 'Pembekalan produk',
                    'pembekalan-kotak-saunaku.jpeg' => 'Pembekalan produk',
                    'pembekalan-minyak-herba.jpeg' => 'Pembekalan produk herba',
                    'pembekalan-produk-campuran.jpeg' => 'Pembekalan produk',
                    'pembekalan-produk-herba.jpeg' => 'Pembekalan produk herba',
                    'pembekalan-air-botol-kerusi-lipat.jpeg' => 'Pembekalan air & kerusi lipat',
                    'penghantaran-tilam-lori-1.jpeg' => 'Penghantaran tilam',
                    'penghantaran-tilam-lori-2.jpeg' => 'Penghantaran tilam',
                    'penghantaran-tilam-pejabat.jpeg' => 'Penghantaran tilam',
                    'penghantaran-tilam-tangga.jpeg' => 'Penghantaran tilam',
                    'papan-tanda-pelita-cafe-fabrikasi.jpeg' => 'Fabrikasi papan tanda',
                    'papan-tanda-pemasangan.jpeg' => 'Pemasangan papan tanda',
                    'lori-tangga-gondola.jpeg' => 'Lori tangga gondola',
                    'pembaikan-bumbung.jpeg' => 'Pembaikan bumbung',
                    'pengecatan-siling-1.jpeg' => 'Pengecatan siling',
                    'pengecatan-siling-2.jpeg' => 'Pengecatan siling',
                    'pemasangan-jubin.jpeg' => 'Pemasangan jubin',
                    'kerja-paip-renovasi.jpeg' => 'Kerja paip renovasi',
                    'siling-kayu-beranda.jpeg' => 'Siling kayu beranda',
                    'beranda-siling-kayu-kipas.jpeg' => 'Siling kayu beranda',
                ];
            @endphp
            @foreach ($galleryImages as $file => $caption)
                <div class="gallery-col-item" data-more="{{ $loop->index >= 12 ? '1' : '0' }}">
                    <a href="{{ asset('assets/images/gallery/' . $file) }}" class="gallery-item" data-caption="{{ $caption }}" style="aspect-ratio: {{ $galleryAspectRatios[$loop->index % count($galleryAspectRatios)] }};">
                        <img src="{{ asset('assets/images/gallery/' . $file) }}" alt="{{ $caption }}" loading="lazy">
                        <span class="gallery-overlay"><i class="fas fa-search-plus"></i></span>
                    </a>
                </div>
            @endforeach
        </template>
        @if (count($galleryImages) > 12)
            <div class="row justify-content-center gallery-toggle-wrap">
                <div class="col-auto">
                    <button type="button" id="galleryToggleBtn" class="theme-btn style-one">Lihat Lebih Banyak<i class="far fa-arrow-down"></i></button>
                </div>
            </div>
        @endif
    </div>
</section><!--====== End Gallery Section ======-->
