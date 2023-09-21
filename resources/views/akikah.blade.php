<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Kad | Majlis Aqiqah&nbsp;</title>
    <meta charset="utf-8" />
    <meta name="viewport" id="vp">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="production" name="environment" />
    <meta content="The Kad | Majlis Aqiqah" property="og:title" />
    <meta content="{{ $_SERVER['SERVER_NAME'] }}" property="og:description" />
    <link rel="stylesheet" media="all" href="{{ asset('css/typo.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/animate.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/simply-countdown.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/calendar.css') }}?t={{ microtime() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        #map {
            height: 400px;
        }

        @media screen and (max-width: 460px) {
            section.hero .wrapper {
                padding: 150px 0px 0px 0px;
            }

            section.hero .wedding-couple p {
                font-size: 3em;
            }

            section.hero .wedding-couple p.with {
                font-size: 3em;
            }
        }

        .custom-font {
            font-family: 'Tangerine', cursive !important;
            font-weight: 700;
        }

        @media screen and (min-width: 461px) {
            section.hero .wrapper {
                padding: 200px 0px 0px 0px;
            }

            section.hero .wedding-couple p {
                font-size: 70px;
            }

            section.hero .wedding-couple p.with {
                font-size: 70px;
            }
        }
    </style>
</head>

<body class="application designs preview" style="color: #5c6274">
    <div class="wedding-card">
        <section class="hero"
            style="background-image: url('{{ asset('images/themes/' . $card->background . '/bg.png') }}'); background-repeat: no-repeat; background-position: center top; background-size: 100% auto;">
            <div class="wrapper">
                <div class="animate__animated animate__slideInDown animate__slow walimatul"
                    style="max-width: 300px; text-align: center; margin: auto; margin-bottom: 50px">
                    <img style="width: 100%;" src="{{ asset('images/bismillah/bismillah-2.png') }}" />
                    <p style="margin-top: 10px !important">Jemputan Ke Majlis Aqiqah</p>
                </div>
                <div class="wedding-couple" style="color: #5c6274;">
                    <p style="text-transform: capitalize; font-size: 50px"
                        class="custom-font groom animate__animated animate__slideInLeft animate__slow">
                        {{ $card->info->bride }}
                    </p>
                    <p class="custom-font with animate__animated animate__bounceIn animate__slower">&amp;</p>
                    <p style="text-transform: capitalize; font-size: 50px"
                        class="custom-font bride animate__animated animate__slideInRight animate__slow">
                        {{ $card->info->bride_partner }}
                    </p>
                </div>
                <div style="margin-top: 100px">
                    <p class="date" style="color: #000; "><span class="week-day">
                            {{ $card->info->wedding_at_formatted }}, <br>
                            {{ $card->info->hijri_wedding_at }}
                    </p>
                </div>
                <button class="play-button">
                    <ion-icon class="play" name="play-outline" size="large"></ion-icon>
                    <ion-icon class="pause d-none" name="pause-outline" size="large"></ion-icon>
                </button>
            </div>
        </section>
        <section class="event-info">
            <div class="wrapper">
                <h2 class="section-header" style="font-size: 60px">Jemputan</h2>
                <p class="greeting">Dengan segala penghormatan, kami mengundang tuan/puan untuk hadir di acara Majlis
                    Aqiqah.
                </p>
                <div class="wedding-people">
                    <p>{{ $card->info->bride }}</p>
                    <p>&</p>
                    <p>{{ $card->info->bride_partner }}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Date</p>
                    <p>{{ $card->info->wedding_at_formatted }}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Time</p>
                    <p>{{ $card->info->started_at }} - {{ $card->info->ended_at }}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Venue</p>
                    <p>{{ $card->info->venue }}
                    </p>
                </div>
            </div>
        </section>
        <section class="countdown"
            style="background-image: url('{{ asset('images/themes/' . $card->background . '/small-section.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 100% 100%;">
            <div class="wrapper" style=" margin-top: 30px;">
                <h2 class="section-header">Save the Date</h2>
                <hr class="hr-shine-top">
                <div class="simply-countdown simply-countdown-one"></div>
                <hr class="hr-shine-bottom">
                <div class="firman-container">
                    <p class="firman">
                        "Tiap-tiap anak itu tertebus (terpelihara daripada kemudaratan dan kemungkaran) dengan
                        aqiqahnya, disembelih haiwan untuknya pada hari ketujuh, dicukur kepalanya dan diberi nama"
                    </p>
                    <p class="firman-ayat">
                        Hadis Riwayat Ahmad dan Tirmidzi
                    </p>
                </div>
            </div>
        </section>
        <section class="guest-book">
            <div class="wrapper">
                <h2 class="section-header">Guest Book</h2>
                <div class="slick-track" style="margin-top: 30px">
                    @foreach ($card->wishes as $wish)
                        <div class="guestbook">
                            <p class="comment-name">{{ $wish->name }}</p>
                            <p class="comment-body">{{ $wish->wish }}</p>
                        </div>
                    @endforeach
                </div>
                <a href="#" class="modal-trigger wish-button" data-modal="guess-book-modal">WISH THEM</a>
            </div>
        </section>
        <section class="prayer" style="background-color: #efefef">
            <div class="wrapper">
                <div class="doa">
                    <p style="text-align: center; text-justify: inter-word;">
                        Ya Allah, jagalah dia (bayi) dari keburukan jin, manusia ummi shibyan, serta segala keburukan
                        dan maksiat. Jagalah dia dengan penjagaan dan tanggungan-Mu yang terpuji, dengan kebaikan dan
                        perlindunganmu yang lestari.
                        <br>
                        <br>
                        Dengan hal tersebut aku mampu melaksanakan apa yang Kau bebankan padaku, dari hak-hak ketuhanan
                        yang mulia. Hiasi dia dengan apa yang ada diantara kami dan makhluk-Mu, yakni akhlak mulia dan
                        anugerah yang paling indah.
                        <br>
                        <br>
                        Ya Allah, jadikan kami dan mereka sebagai ahli ilmu, ahli kebaikan, dan ahli al-Quran. Jangan
                        kau jadikan kami dan mereka sebagai ahli kejelekan, keburukan, aniaya, dan tercela.
                    </p>
                    <p class="hand hand-gesture"
                        style="font-weight: bold; font-style: normal; letter-spacing: 3px; cursor: pointer;">
                        <img class="gesture-bw" style="width: 40px; margin-right: 10px;"
                            src="{{ asset('images/doa-gesture-bw.svg') }}" />
                        <img class="gesture-colored d-none" style="width: 40px; margin-right: 10px;"
                            src="{{ asset('images/doa-gesture-colored.svg') }}" />
                        <span class="count">{{ $card->doa ? $card->doa->count : 0 }}</span>
                    </p>
                </div>
            </div>
        </section>
        <div class="fixed-menu">
            <div class="bottom-navigation acrylic">
                <div class="menu">
                    <a href="#" class="link modal-trigger" data-target="calendar" data-modal="calendar-modal">
                        <ion-icon name="calendar-clear-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-calendar">CALENDAR</p>
                    </a>
                    <a href="#" class="link modal-trigger" data-target="call" data-modal="contact-modal">
                        <ion-icon name="call-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-call">CALL</p>
                    </a>
                    <a href="#" class="link modal-trigger" data-target="map" data-modal="map-modal">
                        <ion-icon name="location-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-map">MAP</p>
                    </a>
                </div>
                <div class="footer">
                    <p style="margin-bottom: 5px;">Create digital invitation cards with &nbsp<a
                            href="https://thekad.digital">thekad.digital</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="guess-book-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <form class="glass-form" method="POST" action="{{ route('card.make-a-wish', $card) }}">
                    @csrf
                    <h2>Make a wish!</h2>
                    <input required name="name" class="glass-input" type="text" placeholder="Name">
                    <textarea required name="wish" placeholder="" class="glass-textarea" rows="3"></textarea>
                    <button class="glass-button" type="submit">SEND A WISH</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="calendar-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <h1 class="modal-title" style="color: #fff">Kalendar</h1>
                <div style="max-width: 100%;" id="calendar"></div>
                <a href="{{ $card->google_calendar }}" target="_blank" class="glass-button">Save the Date</a>
            </div>
        </div>
    </div>

    <div class="modal" id="map-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <h1 class="modal-title" style="color: #fff">Peta</h1>
                <div id="map"></div>
                <button onclick="myNavFunc()" target="_blank" class="glass-button direction-button">Open in Google
                    Map</button>
            </div>
        </div>
    </div>

    <div class="modal" id="contact-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <h1 class="modal-title" style="color: #fff">Untuk dihubungi</h1>
                @foreach ($card->contacts as $contact)
                    <p class="contact-name">{{ $contact->name }}: <a
                            href="tel:{{ $contact->contact }}">{{ $contact->contact }}</a></p>
                @endforeach
            </div>
        </div>
    </div>


    <script>
        var event_date = '{{ $card->info->wedding_at->format('m/d/Y') }}';
        var event_name = 'Majlis Aqiqah Arya Sofea & Hana Sajeeda'
        var event_title = 'Majlis Aqiqah'
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/simplyCountdown.js') }}?t={{ microtime() }}"></script>
    <script type="text/javascript" src="{{ asset('js/calendar.js') }}?t={{ microtime() }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        $(document).ready(function() {
            $('.slick-track').slick({
                slidesToShow: 1,
                dots: true,
                centerMode: false,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>
    <script>
        simplyCountdown('.simply-countdown', {
            year: {{ $card->info->wedding_at->format('Y') }},
            month: {{ $card->info->wedding_at->format('m') }},
            day: {{ $card->info->wedding_at->format('d') }},
        });

        $(".hand-gesture").hover(function() {
            $('.gesture-bw').addClass('d-none')
            $('.gesture-colored').removeClass('d-none')
        }, function() {
            $('.gesture-bw').removeClass('d-none')
            $('.gesture-colored').addClass('d-none')
        });

        $(".hand-gesture").on('click', function($e) {
            $e.preventDefault();
            $.ajax({
                method: "post",
                url: "{{ route('card.doa', $card) }}",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    $('.hand-gesture').off('hover click');
                    $('.count').html(data.count)
                    $('.gesture-bw').addClass('d-none')
                    $('.gesture-colored').removeClass('d-none')
                    $(".hand-gesture").css({
                        'cursor': 'context-menu'
                    });
                }
            });
        });

        $(".modal-trigger").click(function(e) {
            e.preventDefault();
            dataModal = $(this).attr("data-modal");
            $("#" + dataModal).css({
                "display": "block"
            });
            // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
        });

        $(".close-modal, .modal-sandbox").click(function() {
            $(".modal").css({
                "display": "none"
            });
            // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
        });
    </script>
    <script type="text/javascript">
        function initMap() {
            const myLatLng = {
                lat: {{ $card->info->latitude }},
                lng: {{ $card->info->longitude }}
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: myLatLng,
            });

            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "",
            });
        }

        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyBX1389E2vxBHZq_2btBljwxy-8CDD-NxA&callback=initMap"></script>
    <script>
        function myNavFunc() {
            // If it's an iPhone..
            if ((navigator.platform.indexOf("iPhone") != -1) ||
                (navigator.platform.indexOf("iPod") != -1) ||
                (navigator.platform.indexOf("iPad") != -1))
                window.open(
                    "maps://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination={{ $card->info->latitude }},{{ $card->info->longitude }}"
                );
            else
                window.open(
                    "https://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination={{ $card->info->latitude }},{{ $card->info->longitude }}"
                );
        }
    </script>
    <script>
        var audio = new Audio('{{ asset($card->info->song) }}');

        $(function() {
            $(".play-button").click(function() {
                if ($(".pause").hasClass("d-none")) {
                    audio.play()
                    $(".play").addClass("d-none");
                    $(".pause").removeClass("d-none");
                } else {
                    audio.pause()
                    $(".play").removeClass("d-none");
                    $(".pause").addClass("d-none");
                }
                // $(input).addClass("active");
            });
        });
    </script>
</body>

</html>
