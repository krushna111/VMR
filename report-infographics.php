<?php include'header1.php';?>
<div id="content" class="site-content">
    <style>
        .vmr-info-search-input {
            border: 1px solid #fff;
            outline: 0
        }

        .vmr-pagination.meta {
            padding: 10px;
        }

        .vmr-pagination .page-numbers {
            padding: 10px;
            margin: 0;
        }

        .vmr-pagination ul.page-numbers {
            padding: 0;
        }

        .vmr-pagination .page-numbers.current {
            font-weight: 600;
            color: #3B4ACC;
        }

        .vmr-pagination .prev {
            margin-right: 0;
        }

        .vmr-pagination .next {}

        .vmr-pagination ul,
        .vmr-pagination li {
            display: inline-block;
        }

        .vmr-sorting {
            border: 1px solid #3B4ACC;
            outline: 0;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .vmr-sorting::-ms-expand {
            display: none;
        }

        .vmr-sorting-wrap {}

        .vmr-sorting-wrap:after {
            color: #000;
            position: absolute;
            right: 0;
            top: 18px;
            z-index: 1;
            width: 10%;
            height: 100%;
            pointer-events: none;
        }

        #vmr-info-bottom {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #vmr_sorting_wrapr ul.dropdown-menu1 a.dropdown-item:hover {
            color: #fff;
            background-color: #3b4acc;
        }

        .pagination_count {
            line-height: 40px;
        }

        section#vmr-infographics-top-section .col-12.col-md-12 form input.btn {
            max-width: 155px !important;
            width: 100%;
            height: 44px;
        }

        .fliter_catgories {
            cursor: pointer;
        }
    </style>
    <div class="loader_section" style="display:none">
        <div class="loader fliter_loader"></div>
    </div>
    <section id="vmr-infographics-top-section" class="content-area vmr-bg-blue-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1 class="text-center vmr-color-white text-uppercase mb-2 mt-2">Our <br>Infographics</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 text-center">

                    <form action="/" method="post" onsubmit="vmr_infographics_searching(); return false;">
                        <div class="mb-3">
                            <input id="infographics_searching"
                                class="vmr-info-search-input vmr-bg-blue-dark vmr-color-white border-white rounded w-50 pr-2 pl-2 pt-2 pb-2"
                                type="text" name="s" value="" placeholder="Search for Infographics">
                            <input type="hidden" name="post_type" value="infographics">
                        </div>
                        <div class="mb-3"><input class="btn vmr-color-blue-dark vmr-bg-white pr-2 pl-2" type="submit"
                                name="search_info" value="Submit"></div>
                        <p class="vmr-color-white">Or browser all infographics below</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="vmr-infographics-section" class="content-area">

        <div class="container">
            <div class="row mt-3 vmr-color-blue-dark">
                <div class="col-12 col-md-12">
                    <div class="float-right">
                        <span class="pagination_count">Found 823 Results | <strong>Page 1</strong> of 9</span>
                        <div class="vmr-sorting-wrap vmr-inline-block ml-2" id="vmr_sorting_wrapr">
                            <span id="vmr_info_cat_dropdown" onclick="new_catgories_main()" data-dropdown="0"><label
                                    class="fliter_catgories ml-0">Filter By <i class="fa fa-angle-down"
                                        aria-hidden="true" style=" float: right;"></i></label></span>
                            <div class="fliter_dropdown ml-0 hidden">
                                <ul class="dropdown">
                                    <li class="nav-item"><a class="nav-link pb-1 pt-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="all_rcategory"
                                            style="display: inline-block;">All</a> </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="aerospace-defence"
                                            style="display: inline-block;">Aerospace &amp; Defence Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="airport-systems" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Airport Systems
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="aviation" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Aviation
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="cns-systems" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>CNS Systems
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="components" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Components
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="defence-platforms-systems" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Defence
                                                    Platforms &amp; Systems Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronic-warfare" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronic
                                                    Warfare Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="homeland-security" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Homeland
                                                    Security Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="maintenance-repair-and-overhaul-mro"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Maintenance,
                                                    Repair, and Overhaul (MRO) Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="marine-others" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Marine/Others
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security-aerospace-defence" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="simulation-training" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Simulation &amp;
                                                    Training Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="space" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Space
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="unmanned-systems" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Unmanned Systems
                                                    Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="agriculture"
                                            style="display: inline-block;">Agriculture Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="agricultural-biologicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Agricultural
                                                    Biologicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="agrochemicals-fertilizers-agriculture"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Agrochemicals
                                                    &amp; Fertilizers Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="animal-feed-feed-additives-agriculture"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Animal Feed
                                                    &amp; Feed Additives Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="farm-equipment-irrigations" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Farm Equipment
                                                    &amp; Irrigations Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="feed-animal-nutrition" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Feed &amp;
                                                    Animal Nutrition Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="life-sciences-agriculture" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Life Sciences
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="precision-agriculture" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Precision
                                                    Agriculture Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="seeds-others" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Seeds &amp;
                                                    Others Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing &amp;
                                                    Services Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="automobile-transportation"
                                            style="display: inline-block;">Automobile &amp; Transportation Research</a>
                                        <a href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="airport-systems-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Airport Systems
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="automotive-components" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Automotive
                                                    Components Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="automotive-logistics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Automotive
                                                    Logistics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="automotive-technology-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Automotive
                                                    Technology &amp; Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="autonomous-vehicles" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Autonomous
                                                    Vehicles Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="aviation-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Aviation
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="bikes-and-motorcycles" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Bikes And
                                                    Motorcycles Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="farm-equipment-irrigations-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Farm Equipment
                                                    &amp; Irrigations Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="ice-electric-hybrid-autonomous-vehicles"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>ICE, Electric,
                                                    Hybrid, Autonomous Vehicles Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="marine-others-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Marine/Others
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="off-road-vehicles-lcv-hcv" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Off Road
                                                    Vehicles, LCV, HCV Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="power-generation-transmission-distribution-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Power
                                                    Generation, Transmission &amp; Distribution Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="railway" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Railway
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sensor-and-control-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sensor And
                                                    Control Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="telematics-infotainment" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Telematics &amp;
                                                    Infotainment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="tires-wheels" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Tires &amp;
                                                    Wheels Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="unmanned-systems-automobile-transportation"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Unmanned Systems
                                                    Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="banking-financial-services-insurance-2"
                                            style="display: inline-block;">Banking, Financial Services &amp; Insurance
                                            Research</a> <a href="javascript:void(0)"
                                            onclick="new_catgories_dropdown(this)" data-dropdown="0"><i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="banking-banking-financial-services-insurance-2"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Banking
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="fintech-banking-financial-services-insurance-2"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>FinTech
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="insurance-banking-financial-services-insurance-2"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Insurance
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="payments-banking-financial-services-insurance-2"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Payments
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification-banking-financial-services-insurance-2"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="business-services"
                                            style="display: inline-block;">Business Services Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="accounting-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Accounting
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="architectural-and-engineering-services"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Architectural
                                                    and Engineering Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="commercial-cleaning-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Commercial
                                                    Cleaning Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="corporate-training-development" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Corporate
                                                    Training &amp; Development Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="environmental-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Environmental
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="health-and-safety-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Health and
                                                    Safety Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="human-resources-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Human Resources
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="information-technology-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Information
                                                    Technology Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="management-consulting" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Management
                                                    Consulting Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="overhead-consumables-and-accessories"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Overhead,
                                                    Consumables and Accessories Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="professional-services-business-services"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Professional
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="real-estate-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Real Estate
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="supply-chain-management-services"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Supply Chain
                                                    Management Services Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="chemical-material"
                                            style="display: inline-block;">Chemical &amp; Material Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="adhesives-sealants" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Adhesives &amp;
                                                    Sealants Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="advanced-materials" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Advanced
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="agrochemicals-fertilizers" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Agrochemicals
                                                    &amp; Fertilizers Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="basic-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Basic Chemicals
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="disinfectants-preservatives" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Disinfectants
                                                    &amp; Preservatives Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="feed-animal-nutrition-chemical-material"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Feed &amp;
                                                    Animal Nutrition Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="inorganic-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Inorganic
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="metals-alloys" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Metals &amp;
                                                    Alloys Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="nano-technology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Nano Technology
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="organic-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Organic
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="packaging-chemical-material" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Packaging
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="petrochemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Petrochemicals
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="pharmaceutical-chemical-material"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Pharmaceutical
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="plastics-polymers-resins" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Plastics,
                                                    Polymers &amp; Resins Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="polymers-plastics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Polymers &amp;
                                                    Plastics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="renewable-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Renewable
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="specialty-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Specialty
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification-chemical-material"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="water-treatment-chemicals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Water Treatment
                                                    Chemicals Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="construction-engineering"
                                            style="display: inline-block;">Construction &amp; Engineering Research</a>
                                        <a href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="building-construction-construction-engineering"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Building
                                                    Construction Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="construction-equipment-machinery"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Construction
                                                    Equipment &amp; Machinery Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="construction-materials" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Construction
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="engineering-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Engineering
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="green-construction" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Green
                                                    Construction Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="infrastructure-construction" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Infrastructure
                                                    Construction Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="machinery-equipment-construction-engineering"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Machinery &amp;
                                                    Equipment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="safety-security-equipment-construction-engineering"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Safety &amp;
                                                    Security Equipment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="smart-infrastructure" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Smart
                                                    Infrastructure Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="specialty-construction" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Specialty
                                                    Construction Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification-construction-engineering"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="consumer-goods"
                                            style="display: inline-block;">Consumer Goods Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="beauty-personal-care" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Beauty &amp;
                                                    Personal Care Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="clothing-footwear-accessories" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Clothing,
                                                    Footwear &amp; Accessories Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="consumer-electronic-devices-consumer-goods"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Consumer
                                                    Electronic Devices Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="consumer-fb" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Consumer F&amp;B
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronic-electrical" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronic &amp;
                                                    Electrical Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronics-appliances-consumer-goods"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronics
                                                    &amp; Appliances Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-packaging-consumer-goods" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Packaging
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="homecare-decor" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Homecare &amp;
                                                    Decor Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="luxury-designer-consumer-goods" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Luxury &amp;
                                                    Designer Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sports-leisure" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sports &amp;
                                                    Leisure Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sustainable-consumer-goods" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sustainable
                                                    Consumer Goods Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="education"
                                            style="display: inline-block;">Education Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="e-learning-online-education" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>E-Learning &amp;
                                                    Online Education Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="higher-education" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Higher Education
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="k-12-education" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>K-12 Education
                                                    Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="electronics-semiconductor"
                                            style="display: inline-block;">Electronics &amp; Semiconductor Research</a>
                                        <a href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="advanced-materials-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Advanced
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="augmented-virtual-reality" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Augmented/Virtual
                                                    Reality Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="battery-wireless-charging" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Battery &amp;
                                                    Wireless Charging Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="camera-display-lighting" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Camera, Display
                                                    &amp; Lighting Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="chipset-and-processors" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Chipset And
                                                    Processors Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="communication-connectivity-technoology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Communication
                                                    &amp; Connectivity Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="consumer-electronic-devices" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Consumer
                                                    Electronic Devices Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="data-center-networking" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Data Center
                                                    &amp; Networking Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="display-technology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Display
                                                    Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="drones-robotics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Drones &amp;
                                                    Robotics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronic-electrical-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronic &amp;
                                                    Electrical Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronics-system-components" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronics
                                                    System &amp; Components Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="energy-storage-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Energy Storage
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="industrial-automation" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Industrial
                                                    Automation Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="information-system-analytics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Information
                                                    System &amp; Analytics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="internet-of-things-m2m" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Internet of
                                                    Things &amp; M2M Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="materials-components" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Materials &amp;
                                                    Components Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="nanotechnology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Nanotechnology
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="next-generation-technologies-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Next Generation
                                                    Technologies Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="power-energy" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Power &amp;
                                                    Energy Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="power-generation-transmission-distribution-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Power
                                                    Generation, Transmission &amp; Distribution Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security-access-control-and-robotics"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security, Access
                                                    Control And Robotics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="semiconductor-materials-components"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Semiconductor
                                                    Materials &amp; Components Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sensor-and-control" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sensor And
                                                    Control Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="silicon-wafer-fabrication" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Silicon, Wafer
                                                    &amp; Fabrication Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="simulation-training-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Simulation &amp;
                                                    Training Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="specialty-chemicals-electronics-semiconductor"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Specialty
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="wearable-technology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Wearable
                                                    Technology Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="energy-power"
                                            style="display: inline-block;">Energy &amp; Power Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="batteries" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Batteries
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="drilling-intervention-completion"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Drilling,
                                                    Intervention &amp; Completion Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="energy-storage" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Energy Storage
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="industrial-motors-pumps-control-devices"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Industrial
                                                    Motors, Pumps &amp; Control Devices Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="offshore-oil-gas" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Offshore Oil
                                                    &amp; Gas Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="power-generation-transmission-distribution"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Power
                                                    Generation, Transmission &amp; Distribution Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="renewable-energy" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Renewable Energy
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="smart-grid" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Smart Grid
                                                    Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="food-beverages"
                                            style="display: inline-block;">Food &amp; Beverages Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="alternative-food-sources" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Alternative Food
                                                    Sources Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="animal-feed-feed-additives" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Animal Feed
                                                    &amp; Feed Additives Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="cold-chain-logistics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Cold Chain
                                                    Logistics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="flavors-colors-fragrances" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Flavors, Colors
                                                    &amp; Fragrances Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-additives-ingredients" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Additives
                                                    &amp; Ingredients Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-additives" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Additives Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-ingredients" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Ingredients Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-logistics" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Logistics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-logistics-cold-chain-packaging"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Logistics, Cold Chain &amp; Packaging Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-processing-and-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Processing and Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-packaging" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Packaging
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-processing-equipment-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Processing
                                                    Equipment &amp; Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-safety-processing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Safety
                                                    &amp; Processing Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-safety-standards" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food Safety
                                                    &amp; Standards Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="nutraceuticals-dietary-supplements"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Nutraceuticals
                                                    &amp; Dietary Supplements Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="nutraceuticals-functional-foods" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Nutraceuticals
                                                    &amp; Functional Foods Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="packaging-food-beverages" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Packaging
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="plant-based-alternatives-ingredients"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Plant Based
                                                    Alternatives/Ingredients Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="processed-frozen-foods" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Processed &amp;
                                                    Frozen Foods Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="proteins-vitamins-and-minerals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Proteins,
                                                    Vitamins and Minerals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="seeds-others-food-beverages" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Seeds &amp;
                                                    Others Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="software-services-food-beverages"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Software &amp;
                                                    Services Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="internet-communication-technology"
                                            style="display: inline-block;">Internet, Communication &amp; Technology
                                            Research</a> <a href="javascript:void(0)"
                                            onclick="new_catgories_dropdown(this)" data-dropdown="0"><i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="analytics-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Analytics
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="application-software-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Application
                                                    Software Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="artificial-intelligence-ai-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Artificial
                                                    Intelligence (AI) Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="augmented-virtual-reality-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Augmented/Virtual
                                                    Reality Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="banking" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Banking
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="cloud-computing-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Cloud Computing
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="communication-connectivity-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Communication
                                                    &amp; Connectivity Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="communication-services-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Communication
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="cyber-security-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Cyber Security
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="data-center-networking-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Data Center
                                                    &amp; Networking Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="digital-media-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Digital Media
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="digitalization-iot-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Digitalization
                                                    &amp; IoT Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="e-commerce-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>E-commerce
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="endpoint-security" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Endpoint
                                                    Security Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare-it-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Healthcare IT
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare-services-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Healthcare
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="industrial-automation-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Industrial
                                                    Automation Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="information-system-analytics-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Information
                                                    System &amp; Analytics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="internet-of-things-m2m-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Internet of
                                                    Things &amp; M2M Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="maintenance-and-repair-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Maintenance and
                                                    Repair Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="materials-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Materials
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="medical-devices-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Medical Devices
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="mobility-telecom-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Mobility &amp;
                                                    Telecom Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="network-security-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Network Security
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="next-generation-technologies-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Next Generation
                                                    Technologies Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="organic-chemicals-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Organic
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="pharmaceutical-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Pharmaceutical
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="professional-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Professional
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="public-safety-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Public Safety
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security-access-control-and-robotics-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security, Access
                                                    Control And Robotics Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="security-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Security
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="software-services-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Software &amp;
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="wearable-technology-internet-communication-technology"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Wearable
                                                    Technology Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="manufacturing"
                                            style="display: inline-block;">Manufacturing Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="advanced-materials-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Advanced
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="automotive-components-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Automotive
                                                    Components Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="building-construction-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Building
                                                    Construction Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="chemicals-pharmaceuticals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Chemicals &amp;
                                                    Pharmaceuticals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="construction-materials-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Construction
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="consumer-goods-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Consumer Goods
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="data-center-networking-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Data Center
                                                    &amp; Networking Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronics-semiconductor-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronics
                                                    &amp; Semiconductor Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="environmental-management" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Environmental
                                                    Management Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="environmental-safety-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Environmental
                                                    &amp; Safety Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare-services-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Healthcare
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="heavy-industry" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Heavy Industry
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="industrial-automation-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Industrial
                                                    Automation Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="machinery-equipment" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Machinery &amp;
                                                    Equipment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="materials" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Materials
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="metals-alloys-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Metals &amp;
                                                    Alloys Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="packaging-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Packaging
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="pharmaceutical-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Pharmaceutical
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="plastics-polymers-resins-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Plastics,
                                                    Polymers &amp; Resins Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="recycling" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Recycling
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="recycling-waste-management" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Recycling &amp;
                                                    Waste Management Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="safety-equipment" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Safety Equipment
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="safety-security-equipment" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Safety &amp;
                                                    Security Equipment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sensor-and-control-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sensor And
                                                    Control Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="software-services-manufacturing" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Software &amp;
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="specialty-chemicals-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Specialty
                                                    Chemicals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-inspection-certification-manufacturing"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing,
                                                    Inspection &amp; Certification Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="textiles-apparel" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Textiles &amp;
                                                    Apparel Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="valves-actuators" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Valves &amp;
                                                    Actuators Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)"
                                            data-slug="mining-minerals-and-metals"
                                            style="display: inline-block;">Mining, Minerals, and Metals Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="advanced-materials-mining-minerals-and-metals"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Advanced
                                                    Materials Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="basic-chemicals-mining-minerals-and-metals"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Basic Chemicals
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="environmental-safety" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Environmental
                                                    &amp; Safety Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="metallic-minerals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Metallic
                                                    Minerals Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="metals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Metals Research
                                                    Analysis</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="metals-alloys-mining-minerals-and-metals"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Metals &amp;
                                                    Alloys Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="mining-equipment-technology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Mining Equipment
                                                    &amp; Technology Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="mining-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Mining Services
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="non-metallic-minerals" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Non-Metallic
                                                    Minerals Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="pharma-healthcare"
                                            style="display: inline-block;">Pharma &amp; Healthcare Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="biotechnology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Biotechnology
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="cell-biology" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Cell Biology
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="consumer-goods-pharma-healthcare"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Consumer Goods
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>healthcare</a>
                                            </li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare-it" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Healthcare IT
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="healthcare-services" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Healthcare
                                                    Services Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="life-sciences" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Life Sciences
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="machinery-equipment-pharma-healthcare"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Machinery &amp;
                                                    Equipment Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="medical-device" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Medical Device
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="medical-devices" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Medical Devices
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="nutraceuticals-dietary-supplements-pharma-healthcare"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Nutraceuticals
                                                    &amp; Dietary Supplements Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="pharmaceutical" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Pharmaceutical
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="testing-services-pharma-healthcare"
                                                    class="dropdown-item"><i class="fa fa-angle-double-right"
                                                        aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Testing &amp;
                                                    Services Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link pt-1 pb-1" href="javascript:void(0)"
                                            onclick="vmr_infographics_sorting(this)" data-slug="retail"
                                            style="display: inline-block;">Retail Research</a> <a
                                            href="javascript:void(0)" onclick="new_catgories_dropdown(this)"
                                            data-dropdown="0"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu1">
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="apparel-footwear" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Apparel &amp;
                                                    Footwear Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="brick-and-mortar" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Brick And Mortar
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="e-commerce" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>E-Commerce
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="electronics-appliances" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Electronics
                                                    &amp; Appliances Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="food-beverage-retail" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Food &amp;
                                                    Beverage Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="home-furniture" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Home &amp;
                                                    Furniture Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="luxury-designer" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Luxury &amp;
                                                    Designer Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="medical-devices-retail" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Medical Devices
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="specialty-retail" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Specialty Retail
                                                    Research</a></li>
                                            <li><a href="javascript:void(0)" onclick="vmr_infographics_sorting(this)"
                                                    data-slug="sports-leisure-retail" class="dropdown-item"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"
                                                        style="font-size: 14px;padding-right: 3px;"></i>Sports &amp;
                                                    Leisure Research</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 vmr_info_posts_list">
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/wi-fi-chipset-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Wi-Fi Chipset Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Wi-Fi Chipset Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/wi-fi-chipset-market-infographic/">Wi-Fi
                            Chipset Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/service-robotics-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Service Robotics Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Service Robotics Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/service-robotics-market-infographic/">Service
                            Robotics Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/maritime-vsat-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            alt="Maritime VSAT Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                                alt="Maritime VSAT Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/maritime-vsat-market-infographic/">Maritime
                            VSAT Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/density-meter-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Density Meter Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Density Meter Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/density-meter-market-infographic/">Density
                            Meter Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/credit-insurance-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Banking-Financial-Services-Insurance.png"
                            alt="Credit Insurance Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Banking-Financial-Services-Insurance.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Banking-Financial-Services-Insurance.png"
                                alt="Credit Insurance Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/credit-insurance-market-infographic/">Credit
                            Insurance Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/latin-america-cloud-professional-services-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            alt="Latin America Cloud Professional Services Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                                alt="Latin America Cloud Professional Services Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/latin-america-cloud-professional-services-market-infographic/">Latin
                            America Cloud Professional Services Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/india-computer-storage-devices-and-servers-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            alt="India Computer Storage Devices And Servers Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                                alt="India Computer Storage Devices And Servers Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/india-computer-storage-devices-and-servers-market-infographic/">India
                            Computer Storage Devices And Servers Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/java-web-frameworks-software-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            alt="Java Web Frameworks Software Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                                alt="Java Web Frameworks Software Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/java-web-frameworks-software-market-infographic/">Java
                            Web Frameworks Software Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/erythromycin-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Pharma-Healthcare-200x255-2.webp"
                            alt="Erythromycin Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Pharma-Healthcare-200x255-2.webp"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Pharma-Healthcare-200x255-2.webp"
                                alt="Erythromycin Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/erythromycin-market-infographic/">Erythromycin
                            Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/unlocking-opportunities-in-cross-border-ecommerce-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Retail-Market-Category-Reports-Cover-Page.png"
                            alt="Cross-Border Ecommerce Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Retail-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Retail-Market-Category-Reports-Cover-Page.png"
                                alt="Cross-Border Ecommerce Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/unlocking-opportunities-in-cross-border-ecommerce-market-infographic/">Cross-Border
                            Ecommerce Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/x-ray-diffraction-equipment-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                            alt="X-Ray Diffraction Equipment Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                                alt="X-Ray Diffraction Equipment Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/x-ray-diffraction-equipment-infographic/">X-Ray
                            Diffraction Equipment Infographic</a></div>
                </div>

 
                <div class="col-12 col-md-3 col-sm-6">
                    <a
                        href="<?= HOST?>infographics/powered-air-purifying-respirator-papr-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                            alt="Powered Air Purifying Respirator (PAPR) Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Manufacturing-Market-Category-Reports-Cover-Page.png"
                                alt="Powered Air Purifying Respirator (PAPR) Market Infographic"></noscript>
                        <!-- <img src="" alt=""> -->
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/powered-air-purifying-respirator-papr-market-infographic/">Powered
                            Air Purifying Respirator (PAPR) Market Infographic</a></div>
                </div>
            </div>
            <div class="row mt-3 vmr-pagination">
                <div class="col-12 col-md-12 text-center">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers"
                                href="<?= HOST?>report-infographics/page/2/">2</a></li>
                        <li><a class="page-numbers"
                                href="<?= HOST?>report-infographics/page/3/">3</a></li>
                        <li><a class="page-numbers"
                                href="<?= HOST?>report-infographics/page/4/">4</a></li>
                        <li><a class="page-numbers"
                                href="<?= HOST?>report-infographics/page/5/">5</a></li>
                        <li><span class="page-numbers dots">…</span></li>
                        <li><a class="page-numbers"
                                href="<?= HOST?>report-infographics/page/9/">9</a></li>
                        <li><a class="next page-numbers"
                                href="<?= HOST?>report-infographics/page/2/">Next »</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="vmr-trend-info-section" class="content-area">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 col-md-12">
                    <h2 class="vmr-color-blue-dark text-center text-uppercase">Trending <br>Infographics</h2>
                </div>
            </div>
            <div class="row mt-4 blog_page_sec">
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/wi-fi-chipset-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Wi-Fi Chipset Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Wi-Fi Chipset Market Infographic"></noscript>
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/wi-fi-chipset-market-infographic/">Wi-Fi
                            Chipset Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/service-robotics-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Service Robotics Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Service Robotics Market Infographic"></noscript>
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/service-robotics-market-infographic/">Service
                            Robotics Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/maritime-vsat-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            alt="Maritime VSAT Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Internet-Communication-Technology-Market-Category-Reports-Cover-Page.png"
                                alt="Maritime VSAT Market Infographic"></noscript>
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/maritime-vsat-market-infographic/">Maritime
                            VSAT Market Infographic</a></div>
                </div>
                <div class="col-12 col-md-3 col-sm-6">
                    <a href="<?= HOST?>infographics/density-meter-market-infographic/">
                        <img src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            alt="Density Meter Market Infographic"
                            data-lazy-src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                            data-ll-status="loaded" class="entered lazyloaded"><noscript><img
                                src="https://images.verifiedmarketresearch.com/assets/Electronics-Semiconductor.png"
                                alt="Density Meter Market Infographic"></noscript>
                    </a>
                    <div class="mt-3 mb-3 text-center"><a
                            href="<?= HOST?>infographics/density-meter-market-infographic/">Density
                            Meter Market Infographic</a></div>
                </div>
            </div>
        </div>
    </section>
    <section data-bg="https://images.verifiedmarketresearch.com/assets/BG-300x54.png" id="vmr-info-bottom"
        class="content-area rocket-lazyload entered lazyloaded exited"
        style="background-image: url(&quot;https://images.verifiedmarketresearch.com/assets/BG-300x54.png&quot;);"
        data-ll-status="entered">
        <div class="container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-md-12 text-center text-uppercase">
                    <a href="<?= HOST?>request-a-demo/"
                        class=" text-white vmr-color-white btn mt-5 mb-5 vmr-btn-blue-light pl-5 pr-5 pt-3 pb-3 common-width-btn">Request
                        a demo</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include'footer.php';?>
<script>
function vmr_infographics_sorting(e){
	var sort_by = jQuery(e).attr('data-slug');
	// var sort_by = jQuery(e).val();
	// alert(sort_by);
	if(sort_by != ''){
		//jQuery('.fliter_dropdown').css("display", "none");
		jQuery(".loader_section").addClass("loader_sec");
	    //jQuery(".fliter_loader").css("display", "block");
		// var sort_arr = sort_by.split('_');
		// var sort_val = sort_arr[0];
		// var sort_order = sort_arr[1];
		var base_url = "<?= HOST?>report-infographics/";
		var paged = "1";
		jQuery.ajax({
           	method: 'POST',
           	url: "<?= HOST?>wp-admin/admin-ajax.php",
           	data: {
               	action  : 'vmr_infographics_sorting', //You can pass other parameters to be used in shortcode
               	// sort_val : sort_val,
               	catg_slug : sort_by,
               	// sort_order: sort_order,
               	base_url: base_url,
               	paged: paged
           	},
           	success: function(data){
             	console.log(data);
             	var json_arr = JSON.parse(data);
             	var post_list = json_arr.post_list;
             	var pagination = json_arr.pagination;
             	var status = json_arr.status;
             	var paged = json_arr.paged;
             	var total_pages = json_arr.total_pages;
             	var total_count = json_arr.total_count;
             	if (total_pages != 0 ) {
             		var strong_page = '| <strong>Page '+ paged +'</strong> of '+ total_pages ;
             		
             	}else{
             		var strong_page = ' ';
             	}
             	
             	
             	jQuery(".fliter_loader").css("display", "none");
             	jQuery(".loader_section ").removeClass("loader_sec");
             	jQuery('.vmr_info_posts_list').html(post_list);
             	jQuery('.pagination_count').html('<span class="pagination_count">Found '+  total_count + ' Results' + strong_page + '</span>');
             	jQuery('.vmr-pagination .col-12').html(pagination);
           	},
           	error: function(data){
             	console.log(data);
           	}
        });
	}
}
function vmr_infographics_searching(){
var searching_value = document.getElementById("infographics_searching").value;
 
       var base_url = "<?= HOST?>report-infographics/";
	   var paged = "1";
	   jQuery(".loader_section").addClass("loader_sec");
	    jQuery(".fliter_loader").css("display", "block");
	   console.log(paged);
		jQuery.ajax({
           	method: 'POST',
           	url: "<?= HOST?>wp-admin/admin-ajax.php",

           	data: {
               	action  : 'vmr_infographics_searching', //You can pass other parameters to be used in shortcode
               	searching_value : searching_value,
               	base_url: base_url,
               	paged: paged
               	
           	},
           	success: function(data){
             	console.log(data);

             	var json_arr = JSON.parse(data);
             	var post_list = json_arr.post_list;
             	var pagination = json_arr.pagination;
             	var status = json_arr.status;
             	jQuery('.vmr_info_posts_list').html(post_list);
             	jQuery('.vmr-pagination .col-12').html(pagination);
             	jQuery(".fliter_loader").css("display", "none");
                jQuery(".loader_section ").removeClass("loader_sec");
           	},
           	error: function(data){
             	console.log(data);
           	}
        });
        return false;
}
function new_catgories_dropdown(e) {
	var data_dropdown = jQuery(e).attr('data-dropdown');
	if (data_dropdown == '0') {
		 jQuery(e).find('i').removeClass('fa-angle-down');
		 jQuery(e).find('i').addClass('fa-angle-up');
		 jQuery(e).parent().addClass('dropdown_new'); 
		 jQuery('.dropdown_new').find('.dropdown-menu1').css("display", "block");
		 jQuery(e).attr('data-dropdown', '1'); //setter
	}
	else{
		jQuery(e).find('i').removeClass('fa-angle-up');
		 jQuery(e).find('i').addClass('fa-angle-down');
		jQuery('.dropdown_new').find('.dropdown-menu1').css("display", "none");
         jQuery(e).parent().removeClass('dropdown_new'); 
          jQuery(e).attr('data-dropdown', '0');
	}
}
function new_catgories_main() {
	//e.returnValue = true;
	var data_dropdown = jQuery('#vmr_info_cat_dropdown').attr('data-dropdown');
	if (data_dropdown == '0') { 
		jQuery(".fliter_catgories").find('i').removeClass('fa-angle-down');
		 jQuery(".fliter_catgories").find('i').addClass('fa-angle-up');
		 jQuery('.fliter_dropdown').removeClass('hidden');
		 // jQuery('.fliter_dropdown').css("display", "block");
		 jQuery('#vmr_info_cat_dropdown').attr('data-dropdown', '1'); //setter
	}
	else{
		jQuery(".fliter_catgories").find('i').removeClass('fa-angle-up');
		jQuery(".fliter_catgories").find('i').addClass('fa-angle-down');
		// jQuery('.fliter_dropdown').css("display", "none");
		jQuery('.fliter_dropdown').addClass('hidden');
          jQuery('#vmr_info_cat_dropdown').attr('data-dropdown', '0');
	}
}

</script>
