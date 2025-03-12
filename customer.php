<?php include'header1.php';?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<div id="content" class="site-content">
    <style>
        .vmr_font34 {
            font-size: 34px;
        }

        .vmr_font30 {
            font-size: 30px;
        }

        .vmr_font24 {
            font-size: 24px;
        }

        .vmr_font18 {
            font-size: 18px;
        }

        .vmr_font16 {
            font-size: 16px;
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

        #list-indicators p .fa-check-square:before {
            color: #03acba !important;
        }

        .bg_color_req_btn:hover {
            color: #fff;
            background-color: #10d0d9 !important;
        }

        div#faqs p {
            color: #1c1c1d;
            font-weight: 300;
        }

        div#research-specialists p {
            color: #1c1c1d;
            font-weight: 300;
        }

        div#customer-service p {
            color: #1c1c1d;
            font-weight: 300;
        }

        .iconHelp strong {
            color: #1c1c1d;
            font-weight: 300;
        }

        .page-template-tpl-clienthelp {
            color: #3b4acc !important;
            font-weight: 400;
        }

        .page-template-tpl-clienthelp a.standardlinkdkBlue {
            color: #3b4acc !important;
            font-weight: 400;
        }

        .page-template-tpl-clienthelp a.standardlinkdkBlue:hover {
            color: #3b4acc !important;
            font-weight: 400;
        }

        .page-template-tpl-clienthelp a {
            color: #3b4acc;
            font-weight: 400;
        }

        .page-template-tpl-clienthelp a:hover {
            color: #3b4acc;
            font-weight: 400;
        }

        .page-template-tpl-clienthelp a.vmr-color-white.vmr-bg-blue-dark.btn.p-3.industry_btn:hover {
            color: #fff;
        }

        .page-template-tpl-clienthelp a.vmr-color-white.vmr-bg-blue-dark.btn.p-3.industry_btn {
            color: #fff;
        }

        .page-template-tpl-clienthelp b,
        strong {
            color: #414fcd;
            font-weight: 500;
            font-size: 18px;
        }

        a.btn.btnBlu.fixed {
            background: #0dafbf;
            color: #fff;
            margin: 20px 0px;
        }

        h2#res-assi {
            /*width: 301px;*/
            color: #fff;
            font-size: 20px;
            background: #0dafbf;
            padding: 16px 16px 10px 16px;
            margin: 0 0px 0px -23px;
            border-radius: 4px;
            text-align: center;
        }

        a.vmr-color-white.vmr-bg-blue-dark.btn.p-3.industry_btn:hover {
            background: #0dafbf;
        }

        .request_text {
            font-size: 16px !important;
            letter-spacing: 0px;
            line-height: 23px;
            color: #211f21 !important;
            font-weight: 300 !important;
        }

        .single_image img {
            max-height: 100px;
        }

        .request_demo_even_sec {
            background-color: #f7f6f6 !important;
        }

        .post_box_shadow {
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .19) !important;
        }

        @media screen and (max-width: 767px) {
            .post_box_shadow img {
                width: 100%;
            }
        }

        .page-id-70249 .get-in-touch .custom-col-md-4 {
            width: 29% !important;
            float: left;
        }

        .col-md-9 {
            float: right;
        }

        .col-lg-7.col-md-7.col-sm-5.col-xs-12.vcenter {
            display: inline-block;
            vertical-align: middle;
            float: none;
            text-align: center;
            top: 50px;
        }

        #people_saying p {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            color: #666;
            margin: 0;
            border-left: 9px solid #99CBE8;
            padding-left: 8px;
            margin-bottom: 21px;
        }

        .askingblock .icon {
            float: left;
            width: 21.39px;
            background-image: url('https://www.technavio.com/image/Path-1.svg');
            height: 17.58px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 10px;
            -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
            -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
            -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
            -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        }

        .askingblock .head {
            cursor: pointer;
            font-size: 20px;
            color: #707070;
            line-height: 24px;
            font-weight: 200;
        }

        .collapsed .icon {
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .title {
            min-height: 28px;
            float: left;
            width: 100%;
            margin-left: 0px;
        }

        .collapse {
            float: left;
            width: 97%;
            margin-left: 32px;
            color: #666;
        }

        .head span {
            font-size: 18px;
            font-weight: 500;
            line-height: 24px;
            color: #3B4ACC;
        }

        section#vmr-industries-section {
            display: none;
        }

        div#vmi-tagline h2 {
            text-align: center;
            display: grid;
            width: 1024px;
            color: #fff;
            max-width: 1920px;
        }

        p {
            margin-bottom: 1em;
            font-weight: 400;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
            font-weight: 400;
        }

        section#vmr-indus-section {
            display: none !important;
        }

        ul.narra-list li {
            list-style: disc;
        }

        .row.get-in-touch {
            width: 95%;
            margin: 30px auto;
        }

        .left-block-help {
            margin-top: 40px;
            padding-bottom: 30px !important;
            padding-left: 23px !important;
            background-color: #414fcd !important;
            border-radius: 5px !important;
        }

        section#vmr-research-section .col-12.text-center.col-md-4:first-child {
            top: 70px;
        }

        section#vmr-research-section .col-12.text-center.col-md-4:nth-child(3) {
            top: 70px;
        }

        .nav-tabs {
            background-color: #e0e0e0 !important;
            border-color: transparent !important;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            padding: 0px 0px;
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .btn-group-vertical>.btn-group:after,
        .btn-group-vertical>.btn-group:before,
        .btn-toolbar:after,
        .btn-toolbar:before,
        .clearfix:after,
        .clearfix:before,
        .container-fluid:after,
        .container-fluid:before,
        .container:after,
        .container:before,
        .dl-horizontal dd:after,
        .dl-horizontal dd:before,
        .form-horizontal .form-group:after,
        .form-horizontal .form-group:before,
        .modal-footer:after,
        .modal-footer:before,
        .modal-header:after,
        .modal-header:before,
        .nav:after,
        .nav:before,
        .navbar-collapse:after,
        .navbar-collapse:before,
        .navbar-header:after,
        .navbar-header:before,
        .navbar:after,
        .navbar:before,
        .pager:after,
        .pager:before,
        .panel-body:after,
        .panel-body:before,
        .row:after,
        .row:before {
            display: table;
            content: " ";
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px;
        }

        .nav>li {
            position: relative;
            display: block;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            border-color: transparent !important;
            color: #fff !important;
            border-bottom: none !important;
            background-color: #414fcd !important;
            border-bottom: 5px solid #0bc4d4 !important;
        }

        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0;
            font-size: 18px;
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: #eee;
        }

        .btn-group-vertical>.btn-group:after,
        .btn-toolbar:after,
        .clearfix:after,
        .container-fluid:after,
        .container:after,
        .dl-horizontal dd:after,
        .form-horizontal .form-group:after,
        .modal-footer:after,
        .modal-header:after,
        .nav:after,
        .navbar-collapse:after,
        .navbar-header:after,
        .navbar:after,
        .pager:after,
        .panel-body:after,
        .row:after {
            clear: both;
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .fade.in {
            opacity: 1;
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

        .tab-content {
            background-color: #f8f8f8;
        }

        .vmr-bg-blue-dark {
            background-color: #3B4ACC;
            width: 100%;
        }

        /*.tab-content p{padding: 3rem!important;}*/
        ul.nav.nav-tabs {
            background-color: #e0e0e0 !important;
            border-color: transparent !important;
        }
    </style>
    <section id="vmr-data-section" class="content-area mt-4 mb-4">
        <div class="container">
            <div class="row max1024">
                <div class="col-12 col-md-4">
                    <div class="vmr-color-blue-dark">
                        <div class="left-block-help">
                            <h2 id="res-assi" class="vmr-color-blue-dark vmr_font_weight500 mb-1"
                                style="color: #fff; font-size: 20px;">Research Assistance</h2>
                            <p style="color: #fff; padding-top: 23px;"><strong style="color: #fff !important;">US Toll
                                    Free Number</strong>:&nbsp;<a style="color: #fff;" href="tel:8007821768"><br>
                                    +1 (800) 782 1768</a></p>
                            <p style="color: #fff;"><strong style="color: #fff !important;">Direct US
                                    Number</strong>:&nbsp;<a style="color: #fff;" href="tel:6507814080"><br>
                                    +1-650-781-4080</a></p>
                            <p style="color: #fff;"><strong style="color: #fff !important;">Email:</strong><br>
                                <a style="color: #fff;"
                                    href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>
                            </p>
                        </div>
                        <div class="mt-5 mb-2 pb-5"><a class="vmr-color-white vmr-bg-blue-dark btn p-3 industry_btn"
                                href="<?=HOST?>blog/">Take a look at our Blogs</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div>
                        <div class="vmr-color-blue-dark">
                            <p>
                                <script data-minify="1"
                                    src="<?=HOST?>js/jquery.min.js"></script>
                                <br>
                                <script data-minify="1"
                                    src="<?=HOST?>/js/bootstrap.min.js"></script>
                            </p>
                            <ul class="nav nav-tabs">
                                <li class=""><a href="#customer-service" data-toggle="tab"
                                        aria-expanded="false">Customer Service</a></li>
                                <li class="active"><a href="#faqs" data-toggle="tab" aria-expanded="true">FAQs</a></li>
                                <li class=""><a href="#research-specialists" data-toggle="tab"
                                        aria-expanded="false">Research Specialists</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="customer-service" class="tab-pane fade in">
                                    <h1 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Contact Customer Service
                                    </h1>
                                    <div class="iconHelp">
                                        <p><b>Phone:</b> +1-650-781-4080</p>
                                        <p><b>Email:</b> <a class="standardlinkdkBlue"
                                                href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>
                                        </p>
                                        <p><b>Company Name:</b> Verified Market Research and Consulting FZ-LLC</p>
                                        <p><b>Location:</b> Dubai</p>
                                        <p><b>Address:</b><br>
                                            Burjuman Office Tower Mankhool,</p>
                                        <p><b>Tel:</b> +971-503102968</p>
                                    </div>
                                </div>
                                <p><a name="top"></a></p>
                                <div id="faqs" class="tab-pane active fade in">
                                    <div class="middle">
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Frequently Asked
                                            Questions</h2>
                                        <p><a class="standardLinkDkBlue" href="#2">Our Site</a> | <a
                                                class="standardLinkDkBlue" href="#3">Our Reports</a> | <a
                                                class="standardLinkDkBlue" href="#4">Ordering &amp; Delivery</a> | <a
                                                class="standardLinkDkBlue" href="#5">Privacy &amp; Security</a></p>
                                        <div class="spacer18"></div>
                                        <p><a class="anchor" name="1"></a></p>
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">About Us</h2>
                                        <p><b>What is VerifiedMarketResearch.com?</b><br>
                                            <strong>Verified Market Research</strong> is a leading Global Research and
                                            Consulting firm that has been providing advanced analytical research
                                            solutions, custom consulting and in-depth data analysis for 10+ years to
                                            individuals and companies alike that are looking for accurate, reliable and
                                            up to date research data and technical consulting. We offer insights into
                                            strategic and growth analyses and data necessary to achieve corporate goals
                                            and help make critical revenue impacting decisions.
                                        </p>
                                        <p>Most Fortune 5000 companies trust us with their Research &amp; Consulting
                                            requirements with over 15% of them having procured an off the shelf report
                                            from us once in the past 5 years.</p>
                                        <p><b>Why use VerifiedMarketResearch.com?</b><br>
                                            Our research studies help our clients make superior data-driven decisions,
                                            understand market forecasts, capitalize on future opportunities and optimize
                                            efficiency by working as their partner to deliver accurate and valuable
                                            information. We, at Verified Market Research assist in understanding
                                            holistic market indicating factors and most current and future market
                                            trends. Our analysts, with their high expertise in data gathering and
                                            governance, utilize industry techniques to collate and examine data at all
                                            stages. They are trained to combine modern data collection techniques,
                                            superior research methodology, subject expertise and years of collective
                                            experience to produce informative and accurate research.</p>
                                        <p><b>Who do we serve?</b><br>
                                            Having serviced over 5000+ clients globally, providing reliable market
                                            research services to 100+ Global Fortune 500 companies such as Amazon, Dell,
                                            IBM, Shell, Exxon Mobil, General Electric, Siemens, Microsoft, Sony and
                                            Hitachi. We have co-consulted with some of the world’s leading consulting
                                            firms like McKinsey &amp; Company, Boston Consulting Group, Bain and Company
                                            for custom research and consulting projects for businesses worldwide.</p>
                                        <p><b>How do I use VerifiedMarketResearch.com?</b></p>
                                        <p><b>Online:</b><br>
                                            You can begin with a keyword search using the Search field on top of every
                                            page or browse research by industries or markets. When you find a report of
                                            interest, click on the title to view extensive product information,
                                            including a descriptive abstract and table of contents. The same report can
                                            also be visualized using our BI Enabled dashboard <a
                                                href="<?=HOST?>vmintelligence/">Verified
                                                Market Intelligence</a>.</p>
                                        <p><b>Call:</b><br>
                                            (Int’l) to speak to one of our industry-specific research specialists. They
                                            can help you with your requirements be it custom consulting, Off the shelf
                                            Market Research Report with Short term and Long term forecast and our BI
                                            Enabled dashboard Verified Market Intelligence to visualise your market.</p>
                                        <p><b>What is Verified Market Intelligence (VMI)?</b><br>
                                            Verified Market Intelligence is our BI enabled platform for narrative
                                            storytelling of your market. VMI offers in-depth forecasted trends and
                                            accurate Insights on over 20,000+ emerging &amp; niche markets, helping you
                                            make critical revenue impacting decisions for a brilliant future. You can
                                            use VMI for Quantitative data presentation with over 15+ Key Market
                                            Indicators saving you more than 70% of your time and resources while
                                            presenting your research findings.</p>
                                        <p><b>What can VMI help with?</b><br>
                                            VMI provides a holistic overview and global competitive landscape for your
                                            market with respect to Region, Country, and Segment and Key players. Present
                                            your Market Report &amp; findings with inbuilt presentation features saving
                                            over 70% of your time and resources for Investor, Sales &amp; Marketing,
                                            R&amp;D and Product Development pitches. VMI enables data delivery in Excel
                                            and Interactive PDF formats with over 15+ Key Market Indicators for your
                                            market. You can now present live, your Market reports with our data
                                            storytelling platform <a
                                                href="<?=HOST?>vmintelligence/">Verified
                                                Market Intelligence</a>. You can request a demo <a
                                                href="<?=HOST?>request-a-demo/">here</a>.
                                        </p>
                                        <p><b>How can I use Verified Market Intelligence?</b></p>
                                        <p><b>Online:</b><br>
                                            You can begin by accessing the market of your choice with a keyword search
                                            using the Search field on top of every page or browse research by industries
                                            or markets. When you find a report/ market of interest, click on “Enable VMI
                                            Access” which shall take you to a checkout page where we can grant user
                                            access for VMI for the desired market. You have the ability to enable over
                                            20,000+ Emerging &amp; Niche markets on VMI depending on your areas of
                                            interest and research requirements. You can request a demo <a
                                                href="<?=HOST?>request-a-demo/">here</a>
                                        </p>
                                        <p><b>Call:</b><br>
                                            <strong>+1 (800)-782-1768 Toll Free</strong> or <strong>+1 (650)-781-4080
                                                (US)</strong> to speak to one of our industry-specific research
                                            specialists. They can help you meet your needs and answer any questions you
                                            may have in your search. You can also email us at <a
                                                href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>
                                        </p>
                                        <p><b>Can I combine VMI access with a Research Report?</b><br>
                                            Yes! You can avail VMI access individually or couple it with a research
                                            report. For E.g. If you have already purchased a market research report, you
                                            can add VMI access by purchasing it inside your login dashboard.
                                            Alternatively you can request our sales executive to enable the same for you
                                            at an added cost.</p>
                                        <p><b>What is VMR consult?</b><br>
                                            VMR consult is a class leading independent consulting service for all your
                                            consulting needs. With one of the most talented and professional teams in
                                            the business, we ensure customized solutions for any and all kinds of
                                            research needs. Our meticulous approach towards our research helps us
                                            decipher specific client problems to offer them bespoke solutions that help
                                            them take critical decisions.</p>
                                        <p>At Verified Market Research, our team has had the experience of providing
                                            customized research solutions to 100+ fortune 5000 companies and has
                                            co-assisted the Big Four consulting firms on several consulting
                                            projects.<br>
                                            <b>How can I contact customer service?</b><br>
                                            Our customer service and research specialist team are available by phone
                                            <strong>US Toll Free No: +1 (800) 782 1768</strong> <strong>Direct US No: +1
                                                (650) 781 4080</strong> by email at <a
                                                href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>
                                        </p>
                                        <p><a class="standardLinkDkBlue" href="#top">^top</a></p>
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Our Site</h2>
                                        <p><b>How do I use the site?</b><br>
                                            You can search or browse to find reports relevant to your business. Next,
                                            explore individual reports by reading their abstracts and tables of contents
                                            or searching inside the report to see how often and in what context your
                                            keywords appear. Finally, choose the format and delivery option that’s best
                                            for you and place your order using our secure online shopping cart.</p>
                                        <p><b>How does search work?</b><br>
                                            Search finds reports containing your keywords in the title, abstract, table
                                            of contents, or publisher name.</p>
                                        <p><a class="standardLinkDkBlue" href="#top">^top</a></p>
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Our Reports</h2>
                                        <p><b>What types of research and reports do you have?</b><br>
                                            We offer syndicated market research reports, which feature quantitative and
                                            qualitative research on markets, industries, and companies. The formats and
                                            lengths of reports vary from 10-page company profiles to exhaustive
                                            1,000-page industry overviews. The majority of our reports are stand-alone
                                            market studies.</p>
                                        <p><b>Who produces the reports?</b><br>
                                            The reports are produced by our in-house team of 250+ market analysts and
                                            SMEs who analyse key market factors coupled with primary and secondary
                                            interviews to compile a comprehensive and accurate report.</p>
                                        <p><b>How are reports priced?</b><br>
                                            Report prices are set by the effort and time taken to compile the specific
                                            report. We periodically offer special promotions. Speak to a research
                                            specialist to find the report which will best meet your needs and budget.
                                        </p>
                                        <p><a class="standardLinkDkBlue" href="#top">^top</a></p>
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Ordering and Delivery
                                        </h2>
                                        <p><b>How do I place an order?</b><br>
                                            First choose the required report title. Then click the <em>Add to Cart</em>
                                            button to begin the ordering process. The <em>Shopping Cart</em> will hold
                                            this product and any other choices until you decide to <em>Proceed to
                                                Checkout</em>. You can access your <em>Shopping Cart</em> from the cart
                                            link to the right of the Welcome message and your name on the overhead part
                                            of any page. You can also change the quantity of the report. Once you’ve
                                            completed your choices here, click the payment option button.</p>
                                        <p><b>What types of payment are accepted?</b><br>
                                            For online orders we accept Visa, American Express and Mastercard.
                                            Arrangements for payment by check, wire transfer or invoice can be made by
                                            contacting customer service at <strong>US Toll Free No: +1 (800) 782
                                                1768</strong><br>
                                            <strong>Direct US No: +1 (650) 781 4080</strong><br>
                                            or <a
                                                href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>.
                                        </p>
                                        <p><b>How long does delivery take?</b><br>
                                            Items purchased online are normally available within 48-72 hours after your
                                            order is processed. For specific and customised changes in the report an
                                            additional time may be required depending upon the complexity of the
                                            modification.</p>
                                        <p><a class="standardLinkDkBlue" href="#top">^top</a></p>
                                        <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Privacy and Security
                                        </h2>
                                        <p><b>How is my privacy protected?</b></p>
                                        <p>We protect your privacy by strictly adhering to the guidelines set out in our
                                            <a href="<?=HOST?>privacy-policy/">privacy policy</a>. If at any point you don’t
                                            wish to receive updates, newsletters, or promotional communications you can
                                            opt-out or unsubscribe by following the directions in the email or emailing
                                            <a
                                                href="mailto:help@verifiedmarketresearch.com">help@verifiedmarketresearch.com</a>
                                            with the word “remove me” in the subject line.</p>
                                        <p><b>How is the site secured?</b></p>
                                        <p>We use a variety of security technologies and procedures to help protect your
                                            personal information. We store the personal information you provide on
                                            computer systems, which are located in secure, controlled facilities. All
                                            information is encrypted via Secure Socket Layer (SSL).</p>
                                        <p><b>What are cookies and how are they used?</b></p>
                                        <p>A “cookie” is a passive piece of information stored on your computer’s hard
                                            drive. It automatically informs verifiedmarketresearch.com of site-specific
                                            information, such as your username and what information products you’ve
                                            bought from our site in the past. Setting your browser to accept cookies
                                            will streamline your use of verifiedmarketresearch.com, so that you don’t
                                            have to log-in each time you visit our web site.</p>
                                        <p><a class="standardLinkDkBlue" href="#top">^top</a></p>
                                    </div>
                                    <div class="bottom"></div>
                                </div>
                                <div id="research-specialists" class="tab-pane fade in">
                                    <div class="row">
                                        <div class="col" style="float: left; width: 51%;">
                                            <div class="iconResSpecialist">
                                                <h2 class="vmr-color-blue-dark vmr_font_weight700 mb-1">Contact a
                                                    Research Specialist</h2>
                                                <p>Our dedicated research specialists bring an unbiased approach to
                                                    identifying the research you need to make effective strategic
                                                    decisions.</p>
                                            </div>
                                            <hr noshade="noshade" size="1" width="100%">
                                            <p><b>Name:</b><br>
                                                Edwyne Fernandes<br>
                                                Director of Client Service</p>
                                            <p><b>Email:</b><br>
                                                <a class="standardLinkdkBlue"
                                                    href="mailto:sales@verifiedmarketresearch.com">sales@verifiedmarketresearch.com</a>
                                            </p>
                                            <p><b>Direct Line:</b><br>
                                                <a href="tel:6507814080"> +1 (650) 781 4080</a>
                                            </p>
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="col" style="width: 49%; float: right; margin-top: 32px;">
                                            <div><img fetchpriority="high" decoding="async" loading="lazy"
                                                    src="https://images.verifiedmarketresearch.com/assets/reserach-speacialist.jpg"
                                                    alt="Customer service representative" width="300" height="199"
                                                    data-lazy-src="https://images.verifiedmarketresearch.com/assets/reserach-speacialist.jpg"
                                                    data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                                        fetchpriority="high" decoding="async" loading="lazy"
                                                        src="https://images.verifiedmarketresearch.com/assets/reserach-speacialist.jpg"
                                                        alt="Customer service representative" width="300"
                                                        height="199" /></noscript></div>
                                            <p><a class="btn btnBlu fixed"
                                                    title="Let us help you find the right information."
                                                    href="<?=HOST?>contact-us/">Ask a
                                                    question</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php include'footer.php';?>
