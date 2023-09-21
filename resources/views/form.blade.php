<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="{{ asset('css/website.css') }}" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        body {
            background-color: #E58C8A;
        }
        .bg-E58C8A{
            color: #E58C8A;
        }
    </style>
</head>

<body class="leading-normal tracking-normal gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <section class="border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Kad Kahwin Digital Anda
            </h2>

            <div class="container border rounded m-6 pb-6 tab-component bg-white w-full">
                <ul class="flex border-b tab-buttons">
                    <li class="border-r">
                        <button data-tab-index="0"
                            class="bg-E58C8A tab-item bg-white inline-block py-2 px-4 hover:text-blue-800 font-semibold focus:outline-none active">Card Info</button>
                    </li>
                    <li class="border-r">
                        <button data-tab-index="1"
                            class="bg-E58C8A tab-item bg-white inline-block py-2 px-4 hover:text-blue-800 font-semibold focus:outline-none">Location</button>
                    </li>
                    <li class="border-r">
                        <button data-tab-index="2"
                            class="bg-E58C8A tab-item bg-white inline-block py-2 px-4 hover:text-blue-800 font-semibold focus:outline-none">Contact Detail</button>
                    </li>
                    <li class="border-r cursor-not-allowed">
                        <button data-tab-index="3"
                            class="bg-E58C8A tab-item bg-white inline-block py-2 px-4 font-semibold cursor-not-allowed disabled focus:outline-none">Tab
                            4</button>
                    </li>
                </ul>
                <ul class="flex tab-contents pb-6 pl-6 pr-6 py-6">
                    <li class="mx-auto" data-tab-content-index="0">
                        <div class="flex flex-wrap formbold--mx-3">
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5 w-full">
                                    <label for="name_1" class="formbold-form-label">Your name(Short name)</label>
                                    <input type="text" name="name_1" id="name_1" class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <label for="name_2" class="formbold-form-label">Partner name(Short name)</label>
                                    <input type="text" name="name_2" id="name_2" class="formbold-form-input" />
                                </div>
                            </div>
                        </div>
                        <div class="formbold-mb-5">
                            <label for="father_name" class="formbold-form-label">Father name</label>
                            <input type="text" name="father_name" id="father_name" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="mother_name" class="formbold-form-label">Mother name</label>
                            <input type="text" name="mother_name" id="mother_name" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="bride" class="formbold-form-label">Your name(Full name)</label>
                            <input type="text" name="bride" id="bride" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="bride_partner" class="formbold-form-label">Partner name(Full name)</label>
                            <input type="text" name="bride_partner" id="bride_partner" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="wedding_at" class="formbold-form-label">Date (Masihi)</label>
                            <input type="date" name="wedding_at" id="wedding_at" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="hijri_wedding_at" class="formbold-form-label">Date(Hijri)</label>
                            <input type="text" name="hijri_wedding_at" id="hijri_wedding_at" class="formbold-form-input" />
                        </div>
                        <div class="flex flex-wrap formbold--mx-3">
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5 w-full">
                                    <label for="started_at" class="formbold-form-label"> Started at </label>
                                    <input type="time" name="started_at" id="started_at" class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <label for="ended_at" class="formbold-form-label"> Ended at </label>
                                    <input type="time" name="ended_at" id="ended_at" class="formbold-form-input" />
                                </div>
                            </div>
                        </div>
                        <div class="formbold-mb-5">
                            <label for="name" class="formbold-form-label">Song</label>
                            <select name="song" id="song" class="formbold-form-input">
                                <option value="songs/close-to-you.mp3">Close to You</option>
                                <option value="songs/ya-jamalu.mp3">Ya Jamalu</option>
                                <option value="songs/langit-daiyan.mp3">Langit</option>
                            </select>
                        </div>
                    </li>
                    <li class="hidden" data-tab-content-index="1">
                        <div class="formbold-mb-5">
                            <label for="name" class="formbold-form-label">Venue</label>
                            <input type="text" name="venue" id="venue" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="venue_url" class="formbold-form-label">Google Map</label>
                            <input type="text" name="venue_url" id="venue_url" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="name" class="formbold-form-label">Latitude</label>
                            <input type="text" name="latitude" id="latitude" class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="name" class="formbold-form-label">Longitude</label>
                            <input type="text" name="longitude" id="longitude" class="formbold-form-input" />
                        </div>
                    </li>
                    <li class="hidden" data-tab-content-index="2">
                        <div class="formbold-mb-5 formbold-pt-3">
                            <label class="formbold-form-label formbold-form-label-2 flex justify-between">
                                <span class="basis-half">
                                    Contact details 
                                </span>
                                <span class="formbold-btn basis-half add-contact">+</button>
                            </label>
                            <div class="flex flex-wrap formbold--mx-3 contact-section">
                                <div class="w-full flex flex-wrap contact-detail">
                                    <div class="w-full sm:w-5 formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <label for="name" class="formbold-form-label">Name</label>
                                            <input type="text" name="contact_name[]" id="contact_name" class="formbold-form-input" />
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-5 formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <label for="name" class="formbold-form-label">Contact</label>
                                            <input type="text" name="contact_contact[]" id="contact_contact" class="formbold-form-input" />
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-2 formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <label for="name" class="formbold-form-label">&nbsp;</label>
                                            <button type="button" class="formbold-btn remove-contact">-</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="hidden disabled" data-tab-content-index="3">
                        tab content 4
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="p-4 rounded-lg bg-white shadow md:px-6 md:py-8 dark:bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <span class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                Made with &#10084;&nbsp;by&nbsp;<a href="https://mhanifazmi.com">&nbsp;mhanifazmi.com</a>
            </span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        // add row
        $(".add-contact").click(function() {
            console.log(1)
            html = $('.contact-detail').clone().appendTo('.contact-section');

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '.remove-contact', function() {
            $(this).closest('.contact-detail').remove();
        });
    </script>
    <script
        src="http://maps.google.com/maps/api/js?key=AIzaSyBX1389E2vxBHZq_2btBljwxy-8CDD-NxA&libraries=places&region=uk&language=en&sensor=true">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
        $(function() {
            var lat = 44.88623409320778,
                lng = -87.86480712897173,
                latlng = new google.maps.LatLng(lat, lng),
                image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';

            //zoomControl: true,
            //zoomControlOptions: google.maps.ZoomControlStyle.LARGE,

            var mapOptions = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    panControl: true,
                    panControlOptions: {
                        position: google.maps.ControlPosition.TOP_RIGHT
                    },
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.TOP_left
                    }
                },
                map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: image
                });

            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input, {
                types: ["geocode"]
            });

            autocomplete.bindTo('bounds', map);
            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(autocomplete, 'place_changed', function(event) {
                infowindow.close();
                var place = autocomplete.getPlace();
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                moveMarker(place.name, place.geometry.location);
                $('.MapLat').val(place.geometry.location.lat());
                $('.MapLon').val(place.geometry.location.lng());
            });
            google.maps.event.addListener(map, 'click', function(event) {
                $('.MapLat').val(event.latLng.lat());
                $('.MapLon').val(event.latLng.lng());
                infowindow.close();
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    "latLng": event.latLng
                }, function(results, status) {
                    console.log(results, status);
                    if (status == google.maps.GeocoderStatus.OK) {
                        console.log(results);
                        var lat = results[0].geometry.location.lat(),
                            lng = results[0].geometry.location.lng(),
                            placeName = results[0].address_components[0].long_name,
                            latlng = new google.maps.LatLng(lat, lng);

                        moveMarker(placeName, latlng);
                        $("#searchTextField").val(results[0].formatted_address);
                    }
                });
            });

            function moveMarker(placeName, latlng) {
                marker.setIcon(image);
                marker.setPosition(latlng);
                infowindow.setContent(placeName);
                //infowindow.open(map, marker);
            }
        });
    </script>
    <script>
        const activeTabClasses = [
            'border-l', 'border-t', 'border-r', 'rounded-t', 'text-blue-700', 'font-semibold', 'active'
        ];
        const inactiveTabClasses = [
            'text-blue-500', 'hover:text-blue-800', 'font-semibold'
        ];

        function toggleTabs(activeIndex) {
            $('.tab-buttons > li > button').each(function(k, v) {
                let current = $(v);
                if (current.hasClass('active')) {
                    current.removeClass(activeTabClasses);
                    current.addClass(inactiveTabClasses);
                    current.parent().removeClass('-mb-px');
                } else {
                    current.parent().addClass('-mb-px');
                }
            });
            $('.tab-buttons > li > button[data-tab-index=' + activeIndex + ']').each(function(k, v) {
                $(v).removeClass(inactiveTabClasses);
                $(v).addClass(activeTabClasses);
            });
        }

        $('.tab-item').on('click', function(e) {
            let sender = e.currentTarget;
            if (sender && !sender.classList.contains('disabled')) {
                let index = sender.attributes['data-tab-index'].value;
                if (index !== undefined) {
                    toggleTabs(index);
                    $('.tab-contents > li').each(function(k, v) {
                        let currIndex = v.attributes['data-tab-content-index'].value;
                        if (currIndex == index) {
                            $(v).removeClass('hidden');
                        } else {
                            $(v).addClass('hidden');
                        }
                    });
                }
                return false;
            }
        });
    </script>
</body>

</html>
