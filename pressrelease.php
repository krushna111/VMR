<?php include'header1.php';?>
<div id="content" class="site-content">
    <style>
        .vmr_font46 {
            font-size: 46px;
        }

        .vmr_font30 {
            font-size: 30px;
        }

        .vmr_font24 {
            font-size: 24px;
        }

        .vmr_font16 {
            font-size: 16px;
        }

        .vmr_font14 {
            font-size: 14px;
        }

        .vmr_font12 {
            font-size: 12px;
        }

        .bg_color_req_btn {
            background-color: #04b1c0;
        }

        .vmr_font_weight300 {
            font-weight: 300;
        }

        .vmr_font_weight500 {
            font-weight: 500;
        }

        .vmr_font_weight700 {
            font-weight: 700;
        }

        /*.text_color_grey {
color: #737E86;
}*/
        .pressrelease_pagination a {
            font-size: 18px;
            margin: 0px 8px;
        }

        .pressrelease_pagination span.page-numbers.current {
            background-color: #3b4acc;
            padding: 5px 10px;
            text-align: center;
            color: #fff;
        }

        .post-divider {
            border-top: 2px solid #3b4acc;
            margin-bottom: 20px;
            width: 100%;
        }

        .pr_title {
            font-family: 'Raleway Bold' !important;
        }

        .pr_date {
            font-weight: 700;
        }

        .post_section {
            padding-left: 0;
        }

        .prs_listing {
            margin-left: -52px;
        }

        @media(max-width: 992px) {
            .prs_listing {
                margin-left: -15px;
            }
        }
    </style>

    <section id="pressrelease" class="content-area">
        <div class="container">
            <div class="row prs_listing">
                <div class="col-md-12">
                    <h1 class="vmr-color-blue-dark pr_title">Press Releases</h1> <!-- Title added -->
                    <div class="pressrelease">
                        <div class="col-sm-12 post_section">
                            <div>
                                <h2 class="vmr-font24 vmr-color-blue-dark mt-4 mb-1 ">
                                    <a href="<?=HOST?>press-release/robo-taxi-market/"><span>Robo
                                            Taxi Market to Experience Growth by 2031</span></a>
                                </h2>
                                <!-- Display post creation date -->
                                <p class="post-date vmr-color-blue-dark pr_date">24 May 2024</p>
                                <!-- Horizontal line -->

                            </div>
                            <div class="vmr-font-w300 text-secondary text-left">
                                <p>“Robo Taxi Market by Product (L4 robo-taxi and L5 robo-taxi), by Application
                                    (Passenger and Freight),By...</p>
                                <div class="post-divider"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 post_section">
                            <div>
                                <h2 class="vmr-font24 vmr-color-blue-dark mt-4 mb-1 ">
                                    <a
                                        href="<?=HOST?>press-release/pv-products-india-market/"><span>PV
                                            Products India market Entering a Period of Growth by 2031</span></a>
                                </h2>
                                <!-- Display post creation date -->
                                <p class="post-date vmr-color-blue-dark pr_date">21 May 2024</p>
                                <!-- Horizontal line -->

                            </div>
                            <div class="vmr-font-w300 text-secondary text-left">
                                <p>PV Products India Market Segmentation On The Basis Of Type, Service, Geography And
                                    Forecast To...</p>
                                <div class="post-divider"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 post_section">
                            <div>
                                <h2 class="vmr-font24 vmr-color-blue-dark mt-4 mb-1 ">
                                    <a
                                        href="<?=HOST?>press-release/global-outsourced-semiconductor-assembly-and-test-market/"><span>Growth
                                            Outsourced Semiconductor Assembly And Test Market by 2031</span></a>
                                </h2>
                                <!-- Display post creation date -->
                                <p class="post-date vmr-color-blue-dark pr_date">21 May 2024</p>
                                <!-- Horizontal line -->

                            </div>
                            <div class="vmr-font-w300 text-secondary text-left">
                                <p>“Outsourced Semiconductor Assembly And Test (OSAT) Market Geographical Analysis,
                                    Segment Analysis, Key Developments And Forecast”&nbsp;published...</p>
                                <div class="post-divider"></div>
                            </div>
                        </div>
                        <div class="pressrelease_pagination text-center mb-2">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers"
                                href="<?=HOST?>pressrelease/page/2/">2</a>
                            <a class="page-numbers"
                                href="<?=HOST?>pressrelease/page/3/">3</a>
                            <span class="page-numbers dots">…</span>
                            <a class="page-numbers"
                                href="<?=HOST?>pressrelease/page/10/">10</a>
                            <a class="next page-numbers"
                                href="<?=HOST?>pressrelease/page/2/">Next »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include'footer.php';?>
