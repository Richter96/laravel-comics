<footer id="app_footer">
    <section class="top_footer">
        <div class="row row-cols-6 container-md m-auto">
            <div class="col d-flex flex-column">
                <h5>DC COMICS</h5>
                <ul>
                    <li><a href="">Characters</a> </li>
                    <li><a href="">Comics</a> </li>
                    <li><a href="">Movie</a> </li>
                    <li><a href="">Tv</a> </li>
                    <li><a href="">Games</a> </li>
                    <li><a href="">Videos</a> </li>
                    <li><a href="">News</a> </li>
                </ul>
                <h5>SHOP</h5>
                <ul>
                    <li><a href="">Shop Dc</a> </li>
                    <li><a href="">Shop Dc Collectibles</a> </li>
                </ul>
            </div>
            <div class="col d-flex flex-column">
                <h5>DC</h5>
                <ul>
                    <li><a href=""> Terms Of Use</a> </li>
                    <li><a href=""> Privacy policy (New)</a> </li>
                    <li><a href=""> Ad Choices</a> </li>
                    <li><a href=""> Advertising</a> </li>
                    <li><a href=""> Jobs</a> </li>
                    <li><a href=""> Subscriptions</a> </li>
                    <li><a href=""> Talent Workshops</a></li>
                    <li><a href=""> CPSC Certificates</a></li>
                    <li><a href=""> Ratings</a></li>
                    <li><a href=""> Shop Help</a></li>
                    <li><a href=""> Contact Us</a></li>
                </ul>
            </div>
            <div class="col d-flex flex-column">
                <h5>SITES</h5>
                <ul>
                    <li><a href="">Dc</a></li>
                    <li><a href="">MAD Magazine</a></li>
                    <li><a href="">Dc Kids</a></li>
                    <li><a href="">DC Universe</a></li>
                    <li><a href="">DC Power Visa</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bottom_footer">
        <div class="row container-md m-auto">
            <div class="col d-flex align-items-center">
                <button class="btn_singup bg-transparent">SING-UP NOW!</button>
            </div>
            <div class="social col d-flex align-items-center justify-content-end">
                <span class="fw-bold">FOLLOW AS</span>
                <img class="ps-3" src="../assets/img/footer-facebook.png" alt="">
                <img class="ps-3" src="../assets/img/footer-twitter.png" alt="">
                <img class="ps-3" src="../assets/img/footer-youtube.png" alt="">
                <img class="ps-3" src="../assets/img/footer-pinterest.png" alt="">
                <img class="ps-3" src="../assets/img/footer-periscope.png" alt="">
            </div>
        </div>
    </section>
</footer>

<style lang="scss" scoped>
    footer {

        .top_footer {
            background-image: url(../assets/img/footer-bg.jpg);

            ul {
                list-style: none;
                padding: 0;
            }

            h5 {
                margin: 1rem 0;
                color: #ffffff;
            }

            li {
                line-height: 1rem;
            }

            a {
                font-size: 0.7rem;
                text-decoration: none;
                color: gray;
            }
        }

        .bottom_footer {
            padding: 1rem 0;
            background-color: $footerBottom;

            .btn_singup {
                border: 1px solid $primary;
                color: white;
                padding: 0.5rem 1rem;
            }

            .circle {
                width: 2.5rem;
                aspect-ratio: 1/1;
                margin-left: 0.5rem;
                color: $primary;
            }

            span {
                color: $primary;
            }
        }
    }
</style>