@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="/index">Home</a></li>
                        <li class="active"><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Contact Email Area Start -->
        <div class="contact-area ptb-100 ptb-sm-60">
            <div class="container">
                <h3 class="mb-20">Contact Us</h3>
                <p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <form id="contact-form" class="contact-form" action="mail.php" method="post">
                    <div class="address-wrapper row">
                        <div class="col-md-12">
                            <div class="address-fname">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-email">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-web">
                                <input class="form-control" type="text" name="website" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-subject">
                                <input class="form-control" type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-textarea">
                                <textarea name="message" class="form-control" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="footer-content mail-content clearfix">
                        <div class="send-email float-md-right">
                            <input value="Submit" class="return-customer-btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Email Area End -->
        <!-- Google Map Start -->
        <div class="goole-map">
            <div id="map" style="height:400px"></div>
        </div>
        <!-- Google Map End -->        
        <!-- Support Area Start Here -->
    @endsection

    <!-- ajax mail -->
    <script src="js/ajax-mail.js"></script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#314453"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "lightness": "-12"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#4bc7e9"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
    
