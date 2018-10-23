﻿<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

try {

    require_once 'ConnectDb.php';
    $show = new AllMetods();

    if ($_POST ?? false) {
        $show->add();

    }
    if ($_GET['del_id'] ?? false) {
        $show->delete();
    }

} catch (Exception $exception) {
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <title>address ::: user office ::: foodclub</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiPJOLvBwrSUQAuxp3BZyaJwrPeHPJ0EY&callback=initMap"
            async defer></script>

</head>

<body>
<div class="cbc">
    <div class="main">
        <header>
            <div class="center_box">
                <div class="wrapper">

                    <div class="logo_box">
                        <a href="index.html"><img src="assets/img/logo.png" alt="foodclub" /></a>
                    </div>

                    <div class="lng_box">
                        <a href="#" class="flag_ar"></a>
                    </div>

                    <div class="orders_counter">
                        <span class="num">2<span class="line"></span></span>
                        <span class="num">1<span class="line"></span></span>
                        <span class="num">7<span class="line"></span></span>
                        <span class="num">0<span class="line"></span></span>

                        <span class="label">orders<br/>today</span>
                    </div>

                    <div class="r_box">
                        <a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>

                        <div class="upan">
                            <div class="notice">
                                <a href="#" class="ico_notice nftoggle"></a>

                                <nav class="utnav">
                                    <ul>
                                        <li class="item">
                                            <span class="ico ico_1"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_2"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_3"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li><a href="#" class="more">Show more notifications</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="navbox">
                                <a href="#" class="midbox nftoggle">
                                    <img src="assets/imgc/user_ava_1_40.jpg" alt="" />
                                    <span class="warrd"></span>
                                </a>
                                <nav class="utnav">
                                    <ul>
                                        <li class="points">600 points</li>
                                        <li class="sepor"></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Orders</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li class="sepor"></li>
                                        <li><a href="#" class="logout">Log Out</a></li>
                                    </ul>
                                </nav>

                                <!--
                                    <nav class="utnav">
                                        <ul>
                                            <li><a href="#">Menu</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Reviews</a></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li><a href="#">Profile Settings</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#">Subway</a></li>
                                            <li><a href="#">McDonalds</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#"><span class="bplus"></span> Add Restaurant</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#" class="logout">Log Out</a></li>
                                        </ul>
                                    </nav>
                                 -->
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <div class="center_box cb">
            <div class="uo_tabs cf">
                <a href="#"><span>profile</a>
                <a href="#"><span>Reviews</span></a>
                <a href="#"><span>orders</span></a>
                <a href="#" class="active"><span>My Address</span></a>
                <a href="#"><span>Settings</span></a>
            </div>
            <div class="page_content bg_gray">
                <div class="uo_header">
                    <div class="wrapper cf">
                        <div class="wbox ava">
                            <figure><img src="assets/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
                        </div>
                        <div class="main_info">
                            <h1>Helena Afrassiabi</h1>
                            <div class="midbox">
                                <h4>560 points</h4>
                                <div class="info_nav">
                                    <a href="#">Get Free Points</a>
                                    <span class="sepor"></span>
                                    <a href="#">Win iPad</a>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="item">
                                    <div class="num">30</div>
                                    <div class="title">total orders</div>
                                </div>
                                <div class="item">
                                    <div class="num">14</div>
                                    <div class="title">total reviews</div>
                                </div>
                                <div class="item">
                                    <div class="num">0</div>
                                    <div class="title">total gifts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="uo_body">
                <div class="wrapper">
                    <div class="uofb cf">
                        <div class="l_col adrs">
                            <h2>Add New Address</h2>

                            <form action="/" method="post">
                                <div class="field">
                                    <label for="name">Name *</label>
                                    <input type="text" value="" palceholder="" id="name" name="name"
                                           class="vl_empty" required/>
                                </div>
                                <div class="field">
                                    <label for="city">Your city *</label>
                                    <input type="text" value="" palceholder="" id="city" name="city"
                                           class="vl_empty" required/>

                                </div>
                                <div class="field">
                                    <label for="area">Your area *</label>
                                    <input type="text" value="" palceholder="" id="area" name="area"
                                           class="vl_empty" required/>
                                </div>

                                <div class="field">
                                    <label for="street">Street</label>
                                    <input type="text" value="" palceholder="" id="street" name="street"
                                           class="vl_empty"/>
                                </div>
                                <div class="field">
                                    <label for="house">House * </label>
                                    <input type="text" value="" palceholder="House Name / Number" id="house"
                                           name="house" required/>
                                </div>

                                <div class="field">
                                    <label for="addit_info" class="pos_top">Additional information</label>
                                    <textarea rows="20" cols="45" id="addit_info" name="addit_info"></textarea>
                                </div>

                                <div class="field">
                                    <input type="submit" value="add address" id="submit" name="submit"
                                           class="green_btn"/>
                                </div>
                            </form>


                        </div>

                        <div class="r_col">
                            <h2>My Addresses</h2>

                            <div class="uo_adr_list">
                                <? $results = $show->getAddressInfo(); ?>
                                <? foreach ($results

                                as $value) : ?>
                                <tr>
                                    <div class="item">
                                        <h3><?= $value->name ?></h3>
                                        <p><?= $value->city ?>,<?= $value->area ?>, <?= $value->street ?>
                                            , <?= $value->house ?> ,<?= $value->addit_info ?></p>

                                        <div class="actbox">
                                            <a href="index.php?del_id=<?= $id = $value->id ?>" name="del" id="del"
                                               class="bcross"></a>
                                        </div>
                                        <div id="map" style="width: 450px; height: 400px;"></div>
                                        <script>

                                            function initMap() {
                                                var map = new google.maps.Map(document.getElementById('map'), {
                                                    zoom: 8,
                                                    center: {lat: -34.397, lng: 150.644}
                                                });
                                                var geocoder = new google.maps.Geocoder();

                                                document.getElementById('submit').addEventListener('click', function() {
                                                    geocodeAddress(geocoder, map);
                                                });
                                            }

                                            function geocodeAddress(geocoder, resultsMap) {
                                                var address = document.getElementById('city').value;
                                                geocoder.geocode({'city': address}, function(results, status) {
                                                    if (status === 'OK') {
                                                        resultsMap.setCenter(results[0].geometry.location);
                                                        var marker = new google.maps.Marker({
                                                            map: resultsMap,
                                                            position: results[0].geometry.location
                                                        });
                                                    } else {
                                                        alert('Geocode was not successful for the following reason: ' + status);
                                                    }
                                                });
                                            }

                                        </script>
                                    </div>
                                    <? endforeach ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="center_box">
        <div class="wrapper">

            <nav class="f_nav">
                <ul>
                    <li>
                        <a href="#">
                            <span class="fadv_ico"><span class="ico_1"></span></span>
                            <span class="title">Rewards Program</span>
                            <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fadv_ico"><span class="ico_2"></span></span>
                            <span class="title">monthly lottery</span>
                            <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fadv_ico"><span class="ico_3"></span></span>
                            <span class="title">Restaurant Owners</span>
                            <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fadv_ico"><span class="ico_4"></span></span>
                            <span class="title">about foodclub</span>
                            <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="bt_box">
        <div class="center_box">
            <div class="wrapper">
                <div class="soc_link">
                    <a href="#" class="apple"></a>
                    <a href="#" class="android"></a>
                    <a href="#" class="email"></a>
                    <a href="#" class="fb"></a>
                </div>
                <div class="copyright">
                    <div>© 2014 Zomlex Inc. All rights reserved.</div>
                    <nav>
                        <a href="#">Partner Agreement</a>
                        <span>|</span>
                        <a href="#">User Agreement</a>
                        <span>|</span>
                        <a href="#">FAQ</a>
                        <span>|</span>
                        <a href="#">Careers</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

</body>
</html>