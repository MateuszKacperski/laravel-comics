<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js');
</head>
<body>

    <header>
        <div class="container">

            <figure>
                <img src="../assets/img/dc-logo.png" alt="DC logo">
            </figure>
            <nav>
                <ul>
                    <li><a href="#"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <section id="products">
            <div class="card">
                <div class="product-card">
                    <div class="card-conteiner">
                        <img :src="img" :alt="title">
                        <h4>fasdf</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section id="top-footer">
        <div class="container">

            <nav>
                <div class="nav-row">
                    <div class="nav-col">
                        <h4>DC COMICS</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <h4>SHOP</h4>
                        <ul>
                            <li><a href="#">ShopDC</a></li>
                            <li><a href="#">ShopDC Collectionables</a></li>
                        </ul>
                    </div>
                    <div class="nav-col">
                        <h4>DC</h4>
                        <ul>
                            <li><a href="#">Term Of Use</a></li>
                            <li><a href="#">Privacy policy(New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="nav-col">
                        <h4>SITES</h4>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                <img src="../assets/img/dc-logo-bg.png" alt="DC logo">
            </div>
        </div>
    </section>
    <section id="bottom-footer">
        <div class="container">
            <div>
                <button>SING-UP-NOW!</button>
            </div>
            <div class="right">
                <h3>FOLLOW US</h3>
                <img src="../assets/img/footer-facebook.png" alt="Facebook">
                <img src="../assets/img/footer-twitter.png" alt="Twitter">
                <img src="../assets/img/footer-youtube.png" alt="Youtube">
                <img src="../assets/img/footer-pinterest.png" alt="Printerest">
                <img src="../assets/img/footer-periscope.png" alt="Periscope">
            </div>
        </div>
    </section>
</body>
</html>