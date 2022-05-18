<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">

        <title>Natours | Exciting tours for adventurous people</title>
    </head>
    <body>
        <header class="header">
            <div class="header__logo-box">
                <img src="{{ asset('images/logo-white.png') }}" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <p class="heading-primary--main">Outdoors</p>
                    <p class="heading-primary--sub">is where life happen</p>
                </h1>

                <a href="#" class="btn btn--white btn--animated">Discover our tours</a>
            </div>
        </header>

        <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">Col 1 of 2</div>
                <div class="col-1-of-2">Col 1 of 2</div>
            </div>

            <div class="row">
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-1-of-3">Col 1 of 3</div>
            </div>

            <div class="row">
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-2-of-3">Col 2 of 3</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-2-of-4">Col 2 of 4</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-3-of-4">Col 3 of 4</div>
            </div>
        </section>
        -->

        <main>
            {{--Start about--}}
            <section class="section-about">
                <div class="u-center-text u-mb-8">
                    <h2 class="heading-secondary">
                        Exciting tours for adventurous people
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-mb-small">You're going to fall in love with nature</h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, culpa ducimus eum excepturi
                            fugiat harum maxime nobis nulla odit officia possimus quasi quo reiciendis rem repellat,
                            repellendus sequi sunt vero!
                        </p>

                        <h3 class="heading-tertiary u-mb-small">Live adventures like you never have before</h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, culpa ducimus eum excepturi
                            fugiat harum maxime nobis nulla odit officia possimus quasi quo reiciendis rem repellat,
                            repellendus sequi sunt vero!
                        </p>

                        <a href="javascript:void(0)" class="btn-text">
                            Learn more &rarr;
                        </a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="images/nat-1-large.jpg" alt="" class="composition__photo composition__photo--p1">
                            <img src="images/nat-2-large.jpg" alt="" class="composition__photo composition__photo--p2">
                            <img src="images/nat-3-large.jpg" alt="" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>
            {{--End about--}}

            {{--Start features--}}
            <section class="section-features">

                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-mb-small">Explore the world</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-mb-small">Meet nature</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-mb-small">Find your way</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-mb-small">Live a healthier life</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--End features--}}

            {{--Start tours--}}
            <section class="section-tours">
                <div class="u-center-text u-mb-8">
                    <h2 class="heading-secondary">
                        Most popular tours
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>

                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">
                                        The sea explorer
                                    </span>
                                </h4>

                                <div class="card__details u-mt-4">
                                    <ul>
                                        <li>3 day tours</li>
                                        <li>Up to 30 people</li>
                                        <li>2 tour guides</li>
                                        <li>Sleep in cozy hotels</li>
                                        <li>Difficulty: easy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$297</p>
                                    </div>

                                    <a href="javascript:void(0)" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>

                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">
                                        The forest hiker
                                    </span>
                                </h4>

                                <div class="card__details u-mt-4">
                                    <ul>
                                        <li>7 day tours</li>
                                        <li>Up to 40 people</li>
                                        <li>6 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: medium</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$497</p>
                                    </div>

                                    <a href="javascript:void(0)" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>

                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">
                                        The snow adventure
                                    </span>
                                </h4>

                                <div class="card__details u-mt-4">
                                    <ul>
                                        <li>5 day tours</li>
                                        <li>Up to 15 people</li>
                                        <li>3 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: hard</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$897</p>
                                    </div>

                                    <a href="javascript:void(0)" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-mb-8 u-mt-9">
                    <a href="javascript:void(0)" class="btn btn--green">Discover all tours</a>
                </div>
            </section>
            {{--End tours--}}

            {{--Start stories--}}
            <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="images/video.mp4" type="video/mp4">
                        <source src="images/video.webm" type="video/webm">
                    </video>
                </div>

                <div class="u-center-text u-mb-8">
                    <h2 class="heading-secondary">
                        We make people genuinely happy
                    </h2>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="images/nat-8.jpg" alt="" class="story__img">
                            <figcaption class="story__caption">Mary Smith</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-mb-small">I had the best week ever with my family</h3>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem
                                deserunt dolore
                                dolores enim eos eveniet, illo incidunt inventore, libero necessitatibus nostrum
                                pariatur perspiciatis quibusdam quisquam quos reprehenderit sit totam, libero
                                necessitatibus nostrum
                                pariatur perspiciatis quibusdam quisquam.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="images/nat-9.jpg" alt="" class="story__img">
                            <figcaption class="story__caption">Jack Wilson</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-mb-small">WOW! My life is completely different now</h3>
                            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem
                                deserunt dolore
                                dolores enim eos eveniet, illo incidunt inventore, libero necessitatibus nostrum
                                pariatur perspiciatis quibusdam quisquam quos reprehenderit sit totam, libero
                                necessitatibus nostrum
                                pariatur perspiciatis quibusdam quisquam.</p>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-mt-9">
                    <a href="javascript:void(0)" class="btn-text">
                        Read all stories &rarr;
                    </a>
                </div>
            </section>
            {{--End stories--}}

            {{--Start booking--}}
            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="#" class="form">
                                <div class="u-mb-4">
                                    <h2 class="heading-secondary">
                                        Start booking now
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                    <label for="name" class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email address" id="email"
                                           required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>

                                <div class="form__group u-mb-4">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Small tour group
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Large tour group
                                        </label>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <button class="btn btn--green">Next step &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            {{--Start booking--}}

            <footer class="footer">
                <div class="footer__logo-box">
                    <img src="images/logo-green-2x.png" alt="Logo" class="footer__logo">
                </div>
                <div class="row">
                    <div class="col-1-of-2">
                        <div class="footer__navigation">
                            <ul class="footer__list">
                                <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                                <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                                <li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
                                <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                                <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-1-of-2">
                        <div class="footer__copyright">
                            Built my <a href="#" class="footer__link">Jonas Schmedtmann</a> for his online course <a
                                href="#" class="footer__link">Advanced CSS and Sass</a>. Copyright &copy; by Jonas
                            Schemedtmann. You are 100% allowed to use this webpage for both personal and commercial us.
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>
