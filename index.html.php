<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>McMaster Children's Christmas Party</title>
    <meta name="description" content="McMaster Children's Party">
    <meta name="author" content="Yash Gopal, Rade Kuruc, HCS">
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Mapbox-->
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />
    <!--Gridforms-->
    <link rel="stylesheet" href="assets/gridforms/gridforms.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="assets/css/skeleton.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/supplementary.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <div id="registrationHelper">
        <p id="eventDetails">You Selected: Party 1 - 9:00am to 11:00am <br> Saturday November 28th, 2015</p>
        <p id="runningTotal">Total: $15 Tax: $0.75 You pay: $16.75</p>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <img src="images/partyheader.jpg" id="splash-header">
            <div class="block">
                <h3 id="tagline"><img class="icons" src="images/megaphone.png"></h3>
                <div id="details">
                    <p>The 2015 Children's Party Committee in partnership with Human Resources Services is proud to present the 20th Annual McMaster Children's Party! The details are listed below.</p>
                    <table id="details-list">
                        <tbody>
                            <tr>
                                <td><img src="images/calendar_month.png">
                                </td>
                                <td>Saturday November 28th, 2015</td>
                            </tr>
                            <tr>
                                <td><img src="images/clock.png">
                                </td>
                                <td>
                                    <div class="time-block-wrapper-static">
                                        <div class="time-block one">
                                            <p id="number">Party 1</p>
                                            <p id="time">9:00am - 11:00am</p>
                                        </div>
                                        <div class="time-block two">
                                            <p id="number">Party 2</p>
                                            <p id="time">1:00pm - 3:00pm</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="images/location.png">
                                </td>
                                <td>Sport Hall of the David Bradley Athletic Centre</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="map" style="width:90%;height:200px;position:relative;overflow:hidden;margin: 0px auto;"></div>
                <div id="map-push">
                </div>
                <script>
                    L.mapbox.accessToken = 'pk.eyJ1IjoibWlnaHR5cmV2ZW5nZSIsImEiOiJjaWZmbTR3M2Y4bHQ1cnhrbm90bTIyNnQ5In0.lgVsXJk791nxlNuhV96RKQ';
                    L.mapbox.map('map', 'mightyrevenge.ciffm4uw58lqiskknfwzja9k4', {
                        // the options here prevent mouse wheel or trackpad scrolling
                        // and restrict the zooms to zoom levels 14 through 18
                        scrollWheelZoom: false,
                        maxZoom: 20,
                        minZoom: 13
                    }).setView([43.265, -79.917], 16);
                </script>
                <!--<script type="text/javascript">
                    function initMap() {
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 15
                        });
                        var geocoder = new google.maps.Geocoder;
                        geocoder.geocode({
                            'address': '1280 E Main St, Hamilton, ON L8S 4E8'
                        }, function (results, status) {
                            if (status === google.maps.GeocoderStatus.OK) {
                                map.setCenter(results[0].geometry.location);
                                new google.maps.Marker({
                                    map: map,
                                    position: results[0].geometry.location
                                });
                            } else {
                                window.alert('Geocode was not successful for the following reason: ' +
                                    status);
                            }
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpEIfqIuWxsz7sk9dMWaCPjeaw8ntY4Wk&callback=initMap" async defer></script>-->
            </div>
            <div class="block">
                <h3 id="tagline"><img class="icons box-header" src="images/image.png"></h3>
                <div class="gallery">
                </div>
            </div>
            <div class="block">
                <h3 id="tagline"><img class="icons box-header" src="images/news.png"></h3>
            </div>
            <div class="block">
                <h3 id="tagline"><img class="icons box-header" src="images/compose.png"></h3>
                <div id="registration">
                    <p>All children need to be listed on the registration in order to attend this event. Registration is <b>online only.</b> A limited number of spots are available on a first-come, first-serve basis.
                        <br/>
                        <br/>For further inquiries please contact Housing & Conference @ 905-525-9140 x20866</p>
                    <ul>
                        <li><img class="icons" src="images/coin_dollar.png">
                            <p>$15 + HST <b>per child</b>
                            </p>
                        </li>
                        <li><img class="icons" src="images/credit_card.png">
                            <p>American Express, MasterCard and Visa</p>
                        </li>
                    </ul>
                    <div class="content time-block-wrapper">
                        <div class="time-block one">
                            <p id="number">Party 1</p>
                            <p id="spotsLeft"></p>
                            <p id="time">9:00am - 11:00am</p>
                            <button class="btn btn-primary registerNow" id="registerNow-party1">Register Now</button>
                        </div>
                        <div class="time-block two">
                            <p id="number">Party 2</p>
                            <p id="spotsLeft"></p>
                            <p id="time">1:00pm - 3:00pm</p>
                            <button class="btn btn-primary registerNow" id="registerNow-party2">Register Now</button>
                        </div>
                    </div>
                </div>
                <?php include 'registrationForm.html'; include 'confirmationForm.html'; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-13">
            <div id="footer">
                <div id="icons-wrapper"><span class="icons fa fa-medium fa-2x"></span><span class="icons fa fa-envelope"></span>
                </div>
                <p>&copy; Housing & Conference Services &nbsp;&nbsp;|&nbsp;&nbsp; Front-end: Yash Gopal &nbsp;&nbsp;|&nbsp;&nbsp; Back-end & Integration: Rade Kuruc</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--Snowfall-->
    <script src="https://loktar00.github.io/JQuery-Snowfall/snowfall.jquery.min.js"></script>
    <script src="assets/gridforms/gridforms.js" type="text/javascript"></script>
    <script src="assets/js/jquery.scrolly.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
</body>

</html>
