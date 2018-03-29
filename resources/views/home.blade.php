<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--<link rel="icon" href="/favicon.ico">--}}

    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="author" content="">

    <title>{{ $meta['title'] }}</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="//localhost:8081/css/styles.css">--}}
</head>

<body>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <img
                        id="logo"
                        src="{{ asset('img/logo.png') }}"
                        alt="Pedatric Associates of Savannah"
                        srcset="{{ asset('img/logo.svg') }}">
            </div>
        </div>
    </div>
</header>

<section id="offices">
    <div class="container">
        <div class="row">

            @foreach ($offices as $office)

                <div class="col-md-4">

                    <div class="ghost-box">
                        <h2>{{ $office['title'] }}</h2>

                        <address class="gutter-bottom">
                            <p class="with-icon before-phone">
                                <i class="fa fa-phone"></i>
                                {{ $office['phone'] }}
                            </p>
                            <p class="with-icon before-map-marker">
                                <i class="fa fa-map-marker"></i>
                                {{ $office['address'] }} <br>
                                {{ $office['city'] }}, GA {{ $office['zip'] }}
                            </p>
                            <p class="with-icon before-clock-o address-box">
                                <i class="fa fa-phone"></i>

                                @foreach ($office['hours'] as $hours)

                                    {{ $hours }} <br>

                                @endforeach
                            </p>
                        </address>

                        <div class="center">
                            <a href="http://www.pedsav.com/index.php?option=com_content&view=article&id=4&Itemid=6"
                               class="btn btn-sm btn-secondary"
                                target="_blank"
                                rel="nofollow">

                                More Details
                            </a>
                        </div>
                    </div> <!-- // ghost box -->

                </div>

            @endforeach

        </div>
        
        <div class="row gutter-top-2x">
            <div class="col-md-12 center header-buttons">

                <?php
                    $buttons = [
                        [
                            'href' => 'https://health.healow.com/pedsav',
                            'title' => 'Online Bill Pay'
                        ],
                        [
                            'href' => 'http://www.pedsav.com/index.php?option=com_content&view=article&id=23&Itemid=25',
                            'title' => 'New Parent Form'
                        ],
                    ];
                ?>

                @foreach ($buttons as $button)
                    <a href="{{ $button['href'] }}"
                       target="_blank"
                       rel="nofollow"
                       class="btn btn-lg btn-orange">

                        {{ $button['title'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="rocket">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>New Website</h2>
                <h3>Launching Soon!</h3>
                <p class="gutter-top">
                    We're working on a brand-new website to go along with our brand-new look! If you don't find what you're looking for on this page, visit our existing website for additional information &amp; resources.
                </p>
                <div class="gutter-top">
                    <a href="http://old.pedsav.com" class="btn btn-lg btn-secondary" target="_blank" rel="nofollow">
                        View Old Site
                    </a>
                </div>
            </div>
            <div class="col-md-6 center">
                <img
                        src="{{ asset('img/rocket-with-stars.png') }}"
                        alt="Image of rocket ship representing a new website launching soon"
                        srcset="{{ asset('img/rocket-with-stars.svg') }}">
            </div>
        </div>
    </div>
</section>

<div id="clouds">
    <img
            src="{{ asset('img/rocket-clouds.png') }}"
            alt="Image of rocket ship representing a new website launching soon"
            srcset="{{ asset('img/rocket-clouds.svg') }}">
</div>

<section id="doctors">
    <div class="container text-center" id="doc-container">
        <div class="row justify-content-md-center">

            @foreach ($doctors as $doctor)

                <div class="col-md-3 col-sm-6 gutter-bottom">
                    <img
                            src="{{ asset('img/team/' . $doctor['img']) . '.jpg' }}"
                            alt="{{ $doctor['name'] }}">
                    <h4>{{ $doctor['name'] }}</h4>
                    <p class="smaller-text">{{ $doctor['credentials'] }}</p>
                </div>

            @endforeach

        </div>
    </div>
</section>

<section id="video">
    <div id="ducky">
        <img
                src="{{ asset('img/ducky.png') }}"
                alt="Image of rubber ducky floating on the water"
                srcset="{{ asset('img/ducky.svg') }}"
                aria-hidden="true">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://player.vimeo.com/video/260049335" width="490" height="276" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <h3>We Love New Parents!</h3>
                <p>
                    We understand that it's a big decision when it comes to choosing your child's first pediatrician.
                </p>
                <p>
                    Pediatric Associates of Savannah has been the baby experts since 1971. Caring from the start.
                </p>
                <p class="gutter-top">
                    <a href="//facebook.com/" target="_blank" rel="nofollow">
                        <i class="fa fa-facebook biggest-text"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="fishy">
        <img
                src="{{ asset('img/fishy.png') }}"
                alt="Image of rubber ducky floating on the water"
                srcset="{{ asset('img/fishy.svg') }}"
                aria-hidden="true">
    </div>
</section>

<footer class="sm-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 responsive-right">
                <img
                        src="{{ asset('img/logo-slogan.png') }}"
                        alt="Pediatric Associates of Savannah: Caring from the Start"
                        srcset="{{ asset('img/logo-slogan.svg') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 sm-half-gutter-top">
                <p>
                    Need more info?
                    <a href="//old.pedsav.com" target="_blank" rel="nofollow">Visit our old site</a>.
                </p>
            </div>
            <div class="col-md-6 responsive-right">
                <p class="smallest-text small-gutter-top">
                    &copy; {{ date('Y') }} Pediatric Associates of Savannah
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>