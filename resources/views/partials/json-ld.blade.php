<!--====== Structured Data (JSON-LD) ======-->
@php
    $orgId = url('/').'/#organization';
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['GeneralContractor', 'LocalBusiness'],
                '@id' => $orgId,
                'name' => 'Idaman Hakim Enterprise',
                'legalName' => 'Idaman Hakim Enterprise (002846778-U / 201803217854)',
                'taxID' => '201803217854',
                'url' => url('/'),
                'logo' => asset('assets/logo/Logo_Idaman-01.png'),
                'image' => asset('assets/logo/Logo_Idaman-01.png'),
                'email' => 'idamanhakim.my@gmail.com',
                'telephone' => '+60193127345',
                'description' => 'Rakan niaga & pembekalan yang dipercayai agensi kerajaan, institusi pendidikan dan syarikat korporat. Berdaftar dalam 30 bidang di bawah Kementerian Kewangan Malaysia (MOF).',
                'priceRange' => 'RM',
                'currenciesAccepted' => 'MYR',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '1A, Jalan Diplomatik 2, Presint 15',
                    'postalCode' => '62050',
                    'addressLocality' => 'Putrajaya',
                    'addressRegion' => 'Wilayah Persekutuan Putrajaya',
                    'addressCountry' => 'MY',
                ],
                'areaServed' => [
                    ['@type' => 'City', 'name' => 'Sepang'],
                    ['@type' => 'City', 'name' => 'Putrajaya'],
                ],
                'openingHoursSpecification' => [
                    [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                        'opens' => '08:30',
                        'closes' => '22:00',
                    ],
                ],
                'sameAs' => [
                    'https://www.facebook.com/moriproduction/',
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Perkhidmatan Idaman Hakim Enterprise',
                    'itemListElement' => [
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Pembekalan Agensi Kerajaan & Korporat']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Fabrikasi & Pemasangan Papan Tanda']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Pemasangan Langsir & Kabinet']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Katering & Pengurusan Acara Majlis']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Penghantaran & Pembekalan Produk']],
                    ],
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => url('/').'/#website',
                'url' => url('/'),
                'name' => 'Idaman Hakim Enterprise',
                'inLanguage' => 'ms-MY',
                'publisher' => ['@id' => $orgId],
            ],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
