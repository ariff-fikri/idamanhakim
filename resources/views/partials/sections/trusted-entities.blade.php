<!--====== Start Company Section ======-->
<section class="bizzen-company-sec pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-box text-center mb-30" data-aos="fade-up" data-aos-duration="1000">
                    <h6>Dipercayai oleh agensi kerajaan, institusi pendidikan serta syarikat korporat</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @php
            $trustedEntities = [
                'institut-sosial-malaysia.png' => 'Institut Sosial Malaysia',
                'kemas-selangor.png' => 'KEMAS Selangor',
                'perhilitan.png' => 'PERHILITAN',
                'jkr.png' => 'JKR',
                'veterinar-sepang.png' => 'Jabatan Veterinar Sepang',
                'pejabat-tanah-sepang.png' => 'Pejabat Tanah Daerah Sepang',
                'hospital-serdang.png' => 'Hospital Serdang',
            ];
        @endphp
        <div class="entity-logo-marquee" data-aos="fade-up" data-aos-duration="1200">
            <div class="entity-logo-track">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ($trustedEntities as $file => $name)
                        <div class="entity-logo-box"><img src="{{ asset('assets/logo/' . $file) }}" alt="{{ $name }}" loading="lazy"></div>
                    @endforeach
                @endfor
            </div>
        </div>
    </div>
</section><!--====== End Company Section ======-->
