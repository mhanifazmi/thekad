<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $card->card_name }}&nbsp;| A Wedding Invitation</title>
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
    <meta charset="utf-8" />
    <meta name="viewport" id="vp">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="production" name="environment" />
    <meta content="{{ $card->card_name }}&nbsp;| A Wedding Invitation" property="og:title" />
    <meta content="{{ $_SERVER['SERVER_NAME'] }}" property="og:description" />
    <link rel="stylesheet" media="all" href="{{ asset('css/typo.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/animate.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/simply-countdown.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/calendar.css') }}?t={{ microtime() }}" />
    <link rel="stylesheet" media="all" href="{{ asset('css/owl.carousel.css') }}?t={{ microtime() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style type="text/css">
        #map {
            height: 400px;
        }

        svg {
            fill: {{ $card->main_color . ' !important' }};
        }

        .play-button {
            background-color: {{ $card->main_color . ' !important' }}
        }

        .section-header {
            color: {{ $card->main_color . ' !important' }};
        }

        .wish-button {
            border: 3px solid {{ $card->main_color . ' !important' }};
        }

        .groom,
        .with,
        .bride {
            font-size: 4rem !important;
            line-height: 1rem
        }

        @media screen and (max-width: 600px) {

            .groom,
            .with,
            .bride {
                font-size: 2rem !important;
            }
        }

        {{ $card->customs['styles'] }}
    </style>
</head>

<body class="application designs preview" style="color: {{ $card->main_color }}">
    <div class="wedding-card">
        <div class="envelop-card">
            <div class="envelop-content">
                @include('envelope')
            </div>
        </div>
        <section class="hero"
            style="background-image: url('{{ asset('images/themes/' . $card->background . '/bg.png') }}'); background-repeat: no-repeat; background-position: center top; background-size: 100% auto;">
            <div class="wrapper" style="padding-top: 180px">
                <div class="animate__animated animate__slideInDown animate__slow walimatul"
                    style="max-width: 300px; text-align: center; margin: auto; margin-bottom: 100px">
                    {!! $card->walimatul->svg !!}
                </div>
                <div class="wedding-couple" style="color: {{ $card->main_color }};">
                    <p style="text-transform: capitalize;" class="groom title-font-family">{{ $card->bride_name }}
                    </p>
                    <p class="with title-font-family">&amp;</p>
                    <p style="text-transform: capitalize;" class="bride title-font-family">{{ $card->partner_name }}
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
                <p class="greeting">
                    {!! $card->bismillah->svg !!}
                </p>
                <div class="wedding-inviter">
                    <p>{!! $card->info->father_name !!}</p>
                    <p>&</p>
                    <p>{!! $card->info->mother_name !!}</p>
                </div>
                <p class="greeting">Dengan segala hormatnya mempersilakan tuan/puan ke majlis perkahwinan puteri kami
                </p>
                <div class="wedding-people">
                    <p>{!! $card->info->bride !!}</p>
                    <p>&</p>
                    <p>{!! $card->info->bride_partner !!}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Tarikh</p>
                    <p>{{ $card->info->wedding_at_formatted }}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Masa</p>
                    <p>{{ $card->info->started_at }} - {{ $card->info->ended_at }}</p>
                </div>
                <div class="wedding-event-info">
                    <p class="info-heading">Tempat</p>
                    <p>{!! $card->info->venue !!}
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
                        "Dan tiap-tiap jenis Kami ciptakan berpasangan, supaya kami dan mengingati (kekuasaan kami dan
                        mentauhidkan Kami) akan kebesaran Allah."
                    </p>
                    <p class="firman-ayat">
                        Surah Adz-Dzariyaat 51; Ayat 49
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
        <section class="prayer"
            style="background-image: url(' {{ asset('images/themes/' . $card->background . '/small-section.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 100% 100%;">
            <div class="wrapper">
                <div class="doa">
                    <p>Ya Allah, satukanlah hati kedua mempelai ini, seperti mana Engkau satukan hati Adam & Hawa, Yusof
                        & Zulaikha, dan Engkau satukan hati Nabi Muhammad SAW & Siti Khadijah. Semago Allah SWT
                        memberkati kamu berdua serta menghimpunkan kebaikan dan keberkatan di dunia & akhirat</p>
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
        <section class="guest-images">
            <div class="wrapper">
                <div class="owl-carousel">
                    @foreach ($card->guest_images as $guest_image)
                        <img class="guest-image-img item" src="{{ asset($guest_image->path) }}">
                    @endforeach
                </div>
            </div>
        </section>
        <section class="fixed-menu">
            <div class="bottom-navigation acrylic">
                <div class="menu">
                    <a href="#" class="link modal-trigger" data-target="calendar" data-modal="calendar-modal">
                        <ion-icon name="calendar-clear-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-calendar">KALENDAR</p>
                    </a>
                    <a href="#" class="link modal-trigger" data-target="call" data-modal="contact-modal">
                        <ion-icon name="call-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-call">HUBUNGI</p>
                    </a>
                    <a href="#" class="link modal-trigger" data-target="map" data-modal="map-modal">
                        <ion-icon name="location-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-map">PETA</p>
                    </a>
                    <a href="#" class="link modal-trigger" data-target="map" data-modal="music-modal">
                        <ion-icon name="musical-notes-outline" size="large"></ion-icon>
                        <p class="svg-text" id="text-map">MUZIK</p>
                    </a>
                </div>
                <div class="footer">
                    <p style="margin-bottom: 5px;">Create digital invitation cards with &nbsp<a
                            href="https://thekad.digital">thekad.digital</a></p>
                </div>
            </div>
        </section>
    </div>

    <div class="modal" id="guess-book-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <form class="glass-form" method="POST" action="{{ route('card.make-a-wish', $card) }}">
                    @csrf
                    <h2>Make a wish!</h2>
                    <input required name="name" class="glass-input" type="text" placeholder="Name">
                    <textarea required name="wish" placeholder="Selamat Pengantin Baru! Semoga berbahagia dengan kehidupan baru."
                        class="glass-textarea" rows="3"></textarea>
                    <button class="glass-button" type="submit">SEND A WISH</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="music-modal">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-body">
                <div id="player" style="width: 100%"></div>
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

                <a href="{{ $card->info->venue_url_waze }}" target="_blank"
                    class="glass-button direction-button">Open in
                    Waze</a>
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
        var event_name = '{!! $card->card_name !!}' + ' wedding day!'
        var event_title = 'Wedding Day!'
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
    <script src="https://www.youtube.com/iframe_api"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}?t={{ microtime() }}"></script>
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
            hours: {{ $card->info->hours_minutes['hours'] }},
            minutes: {{ $card->info->hours_minutes['minutes'] }},
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
        function addGoogleMap() {
            var latitude = {{ $card->info->latitude }}; // Latitude of the location
            var longitude = {{ $card->info->longitude }}; // Longitude of the location
            var apiKey = 'AIzaSyAKiQARtgsOi4Au3wuR6FgxGIBzZW5Z-Dk';
            var mapContainer = document.getElementById('map');

            // Create the iframe element
            var iframe = document.createElement('iframe');
            iframe.setAttribute('width', '100%');
            iframe.setAttribute('height', '100%');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('style', 'border:0');
            iframe.setAttribute('allowfullscreen', '');
            iframe.setAttribute('aria-hidden', 'false');
            iframe.setAttribute('tabindex', '0');

            iframe.setAttribute('src', 'https://www.google.com/maps/embed/v1/place?key=' + apiKey +
                '&q={{ $card->info->venue }}');

            // Append the iframe to the map container
            mapContainer.appendChild(iframe);
        }

        addGoogleMap();
    </script>
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
        var player;
        var isPlaying = false;

        function onYouTubeIframeAPIReady() {
            try {
                player = new YT.Player('player', {
                    height: '360',
                    width: '640',
                    videoId: 'PEM0Vs8jf1w',
                    playerVars: {
                        autoplay: 1, // Autoplay is enabled
                    },
                });
            } catch (error) {
                console.error('YouTube API loading error:', error);
                onYouTubeIframeAPIReady();
                console.log(1)
            }
        }

        $(".play-button").click(function(e) {
            if (player) {
                if (isPlaying) {
                    player.pauseVideo();
                    isPlaying = false;
                    $(".play").removeClass("d-none");
                    $(".pause").addClass("d-none");

                } else {
                    player.playVideo();
                    isPlaying = true;
                    $(".play").addClass("d-none");
                    $(".pause").removeClass("d-none");
                }
            }
        });

        $('.welcome-button').click(function(event) {
            $('.envelop-card').hide();
            player.playVideo();
            isPlaying = true;
            $(".play").addClass("d-none");
            $(".pause").removeClass("d-none");
            $("html, body").animate({
                scrollTop: 0
            }, "fast");
            owl.trigger('play.owl.autoplay')
            return false;
        })

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            },
            margin: 5,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });

        $('.welcome-button').click(function(event) {
            owl.trigger('play.owl.autoplay')
        })
    </script>
</body>

</html>
