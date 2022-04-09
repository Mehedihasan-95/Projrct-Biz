<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>BizInfo</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../../favicon.ico"> -->
    <!-- Google Fonts -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700,800|Raleway::400,300,500,600,700,800|Roboto|Spectral|Rubik|Poppins|Galada|Baloo+Tammudu+2:400,300,500,600,700,800">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/typedjs/typed.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/chosen/chosen.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">
    <link rel="stylesheet" href="assets/css/dzsparallaxer.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/cyan_custom.css">
</head>

<body>
    <!-- Header -->
    <section>
        <div class="container g-py-25">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="g-font-weight-800 mb-0 g-brb-right"> <a class="g-color-gray-dark-v3 g-text-underline--none--hover" href="index.php">Logo</a> </h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div>
                        <a href="#!" class="btn btn-md u-btn-outline-aqua g-mr-10">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Select Plan -->
    <section>
        <div class="container g-pt-100 g-pb-50">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-10">
                    <h2 class="h1 g-font-weight-800 text-capitalize mb-2">Select Plan</h2>
                    <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan mb-2"></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia illum voluptatibus reprehenderit veritatis doloremque eius aut nihil vitae id suscipit praesentium ullam, repudiandae laudantium vero modi ipsam ex iste culpa.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 g-py-20">
                    <div class="text-center">
                        <p class="mb-0 g-font-size-20 text-capitalize">Before that, please select your</p>
                    </div>
                </div>
                <div class="col-sm-4 pr-0 g-mb-50">
                    <!-- Area of Interest -->
                    <select id="serviceOptions" class="js-custom-select g-brb-cyan-custom w-100 u-select-v1 g-color-gray-dark-v5 g-color-cyan--hover text-left g-rounded-10 g-pl-30 g-py-12" data-placeholder="Area of Interest" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="C-Corporation">C Corporation</option>
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="S-Corporation">S Corporation (US Residents Only)</option>
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="LLC">Limited Liability Company (LLC)</option>
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="Nonprofit">Nonprofit</option>
                    </select>
                    <!-- End Area of Interest -->
                </div>
                <div class="col-sm-1 px-0 text-center">
                    <h class="h1 mb-0">&</h>
                </div>
                <div class="col-sm-4 pl-0 g-mb-50">
                    <!-- Area of Interest -->
                    <select id="stateOptions" class="js-custom-select g-brb-cyan-custom w-100 u-select-v1 g-color-gray-dark-v5 g-color-cyan--hover text-left g-rounded-10 g-pl-30 g-py-12" data-placeholder="Choose State" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                    <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="C-Corporation">C Corporation</option>
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="S-Corporation">S Corporation (US Residents Only)</option>
                        <option class="g-brd-secondary-light-v2 g-color-white--active g-bg-cyan--active" value="LLC">Limited Liability Company (LLC)</option>
                    </select>
                    <!-- End Area of Interest -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Select Plan -->

    <!-- Price -->
    <section>
        <div class="container-fluid g-px-100--lg" id="tableBody1">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-3 text-center">
                    <p class="mb-0 g-font-size-18">Presenting</p>
                    <h3 class="g-font-weight-700">Our <span class="g-color-cyan">Best</span> Plan</h3>
                    <p>Form a company in 1-2 business days.</p>
                    <p>No EIN or bank account.</p>
                </div>
                <div class="col-lg-3">
                    <div class="u-shadow-softGray text-center g-pa-20 g-rounded-10">
                        <div>
                            <img class="g-width-70 g-height-70" src="assets/img/svgs/price-basic.svg">
                        </div>
                        <h4 class="g-font-weight-600">Basic</h4>
                        <p class="g-py-15">Form a company in 1-2 business days. No EIN or bank account.</p>
                        <h5 class="g-color-cyan mb-0">Formation and first year</h5>
                        <hr class="w-100 g-my-10">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="basicPrice">129</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>State fees</p>
                            <p class="g-font-weight-600">$<span id="basicStateFee">125</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p class="g-font-weight-600">Due Today</p>
                            <p class="g-font-weight-600">$<span id="basicTotal">254</span></p>
                        </div>

                        <h5 class="g-color-cyan mb-0">Future year fees</h5>
                        <hr class="w-100 g-my-5">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="basicFuturePrice">129</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Compliance + Annually</p>
                            <p class="g-font-weight-600">$<span id="basicAnnualPrice">25</span><span>+</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p>Due Anunually</p>
                            <p class="g-font-weight-600">$<span id="basicFutureTotal">154</span></p>
                        </div>

                        <div class="g-pt-15">
                            <a onclick="pricePlan(event, 'basic');" href=" finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="u-shadow-softGray text-center g-pa-20 g-rounded-10">
                        <div>
                            <img class="g-width-70 g-height-70" src="assets/img/svgs/pro-building.svg">
                        </div>
                        <h4 class="g-font-weight-600">Pro</h4>
                        <p class="g-py-15">Get a company, EIN, and bank <br> account in 12-14 business days*</p>
                        <h5 class="g-color-cyan mb-0">Formation and first year</h5>
                        <hr class="w-100 g-my-10">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="proPrice">249</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>State fees</p>
                            <p class="g-font-weight-600">$<span id="proStateFee">125</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p class="g-font-weight-600">Due Today</p>
                            <p class="g-font-weight-600">$<span id="proTotal">374</span></p>
                        </div>

                        <h5 class="g-color-cyan mb-0">Future year fees</h5>
                        <hr class="w-100 g-my-5">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="proFuturePrice">249</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Compliance + Annually</p>
                            <p class="g-font-weight-600">$<span id="proAnnualPrice">25</span><span>+</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p>Due Anunually</p>
                            <p class="g-font-weight-600">$<span id="proFutureTotal">274</span></p>
                        </div>

                        <div class="g-pt-15">
                            <a onclick="pricePlan(event, 'pro');" href="finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="u-shadow-softGray text-center g-pa-20 g-rounded-10">
                        <div>
                            <img class="g-width-70 g-height-70" src="assets/img/svgs/premium-building.svg">
                        </div>
                        <h4 class="g-font-weight-600">Premium</h4>
                        <p class="g-py-15">Get a company, EIN, and bank <br> account in 7-10 business days*</p>
                        <h5 class="g-color-cyan mb-0">Formation and first year</h5>
                        <hr class="w-100 g-my-10">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="plusPrice">329</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>State fees</p>
                            <p class="g-font-weight-600">$<span id="plusStateFee">125</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p class="g-font-weight-600">Due Today</p>
                            <p class="g-font-weight-600">$<span id="plusTotal">454</span></p>
                        </div>

                        <h5 class="g-color-cyan mb-0">Future year fees</h5>
                        <hr class="w-100 g-my-5">
                        <div class="d-flex justify-content-between g-mt-10">
                            <h5 class="g-pr-25">Plan</h5>
                            <div class="d-flex">
                                <h5 class="g-font-weight-600">$<span id="plusFuturePrice">329</span></h5>
                                <span class="g-font-size-14">/yr</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Compliance + Annually</p>
                            <p class="g-font-weight-600">$<span id="plusAnnualPrice">25</span><span>+</span></p>
                        </div>
                        <div class="d-flex justify-content-between g-mb-30">
                            <p>Due Anunually</p>
                            <p class="g-font-weight-600">$<span id="plusFutureTotal">354</span></p>
                        </div>

                        <div class="g-pt-15">
                            <a onclick="pricePlan(event, 'plus');" href="finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="col-md-12 text-center">
                    <p class="g-font-size-13 text-muted">* Processing times for customers without a U.S. social security number (SSN) are longer. Add 14 business days if you don't have an SSN</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->

    <!-- Price Table -->
    <div class="container-fluid g-px-90--lg g-pt-40" id="tableBody2">
        <div class="table-responsive">
            <table class="table table-bordered u-table--v2 g-col-border-side-0 table-layout-fixed">
                <tbody>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Prepare and file corporation</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="prepare"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Prepare and File LLC</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="prepareFileLLC"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Name Availability Search</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="NameAvailabilitySearch"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Phone, Email, and Chat Support</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="prepareFileLLC"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Online Document Access</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="NameAvailabilitySearch"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Registered Agent</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="NameAvailabilitySearch"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-5">Statement of Organizer</h6>
                                <span class="g-font-size-18 g-color-aqua g-font-weight-800 g-cursor-pointer" id="NameAvailabilitySearch"><i class="icon-question"></i></span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <!-- <i class="icon-check g-font-size-30 g-color-cyan"></i> -->
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="table-responsive g-my-50">
            <h4 class="g-font-weight-700 g-pl-10"><span class="g-color-cyan">Additional</span> Services</h4>
            <table class="table table-bordered u-table--v2 g-col-border-side-0 table-layout-fixed">
                <tbody>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-3">Standard Arizona State Filing Time</h6>
                                <span class="g-color-cyan">4WEEKS</span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 g-pr-3">Expedited Arizona State Filing Time</h6>
                                <span class="g-color-cyan">12 Business days</span>
                            </div>

                        </td>
                        <td class="align-middle text-center col-3">
                            <label class="form-check-inline u-check g-pl-25">
                                <input value="50" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-transition-0_2 g-transition--ease-in">
                                    <i class="fa" data-check-icon=""></i>
                                </div>
                                + $50
                            </label>
                        </td>
                        <td class="align-middle text-center col-3">
                            <label class="form-check-inline u-check g-pl-25">
                                <input value="60" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-transition-0_2 g-transition--ease-in">
                                    <i class="fa" data-check-icon=""></i>
                                </div>
                                + $60
                            </label>
                        </td>
                        <td class="align-middle text-center col-3">
                            <i class="icon-check g-font-size-30 g-color-cyan"></i>
                        </td>
                    </tr>
                    <tr class="td-brb-bottom-0">
                        <td class="col-2">
                        </td>
                        <td class="align-middle text-center col-3">
                            <div class="g-pt-15">
                                <a href="finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                            </div>
                        </td>
                        <td class="align-middle text-center col-3">
                            <div class="g-pt-15">
                                <a href="finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                            </div>
                        </td>
                        <td class="align-middle text-center col-3">
                            <div class="g-pt-15">
                                <a href="finalize-plan.php" class="btn btn-lg u-btn-aqua g-px-30">Get Started</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Price Table -->

    <!-- FAQ -->
    <section class="g-bg-f9 g-pos-rel g-overflow-hidden">
        <div class="container g-py-100">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="h3 g-font-weight-600 text-capitalize mb-2">Let's see some FAQ</h2>
                    <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan mb-2"></div>
                </div>
            </div>
            <div class="row g-pt-50">
                <div class="col-lg-12">
                    <div id="accordion-12" class="u-accordion u-accordion-color-cyan" role="tablist" aria-multiselectable="true">
                        <!-- Card -->
                        <div class="card g-brd-none rounded-0 g-mb-15">
                            <div id="accordion-12-heading-01" class="u-accordion__header g-pa-0" role="tab">
                                <h5 class="mb-0">
                                    <a class="d-flex g-color-main g-text-underline--none--hover g-brd-around g-brd-gray-light-v4 g-rounded-5 g-pa-10-15" href="#accordion-12-body-01" data-toggle="collapse" data-parent="#accordion-12" aria-expanded="true" aria-controls="accordion-12-body-01">
                                        Lorem 01
                                        <span class="ml-auto u-accordion__control-icon g-mr-10">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </h5>
                            </div>
                            <div id="accordion-12-body-01" class="collapse show" role="tabpanel" aria-labelledby="accordion-12-heading-01" data-parent="#accordion-12">
                                <div class="u-accordion__body g-color-gray-dark-v5">
                                    This is where we sit down, grab a cup of coffee and dial in the details. Understanding
                                    the task at hand and ironing out the wrinkles is key. Now that we've aligned the
                                    details, it's time to get things mapped out and organized. This part is really crucial
                                    in keeping the project in line to completion.
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card g-brd-none rounded-0 g-mb-15">
                            <div id="accordion-12-heading-02" class="u-accordion__header g-pa-0" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover g-brd-around g-brd-gray-light-v4 g-rounded-5 g-pa-10-15" href="#accordion-12-body-02" data-toggle="collapse" data-parent="#accordion-12" aria-expanded="false" aria-controls="accordion-12-body-02">
                                        Lorem 02
                                        <span class="u-accordion__control-icon ml-auto g-mr-10">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </h5>
                            </div>
                            <div id="accordion-12-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-12-heading-02" data-parent="#accordion-12">
                                <div class="u-accordion__body g-color-gray-dark-v5">
                                    This is where we sit down, grab a cup of coffee and dial in the details. Understanding
                                    the task at hand and ironing out the wrinkles is key. Now that we've aligned the
                                    details, it's time to get things mapped out and organized. This part is really crucial
                                    in keeping the project in line to completion.
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card g-brd-none rounded-0 g-mb-15">
                            <div id="accordion-12-heading-03" class="u-accordion__header g-pa-0" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover g-brd-around g-brd-gray-light-v4 g-rounded-5 g-pa-10-15" href="#accordion-12-body-03" data-toggle="collapse" data-parent="#accordion-12" aria-expanded="false" aria-controls="accordion-12-body-03">
                                        Lorem 03
                                        <span class="u-accordion__control-icon ml-auto g-mr-10">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </a>
                                </h5>
                            </div>
                            <div id="accordion-12-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-12-heading-03" data-parent="#accordion-12">
                                <div class="u-accordion__body g-color-gray-dark-v5">
                                    This is where we sit down, grab a cup of coffee and dial in the details. Understanding
                                    the task at hand and ironing out the wrinkles is key. Now that we've aligned the
                                    details, it's time to get things mapped out and organized. This part is really crucial
                                    in keeping the project in line to completion.
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
            <div class="row g-pt-50 justify-content-center text-center">
                <div class="col-lg-6">
                    <a href="faq.php" class="btn btn-xl u-btn-aqua">
                        Other FAQs
                        <i class="fa fa-arrow-right g-mr-5"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="g-pos-abs g-left-minus-20 g-bottom-0 g-opacity-0_3">
            <img src="assets/img/svgs/service-cate-bubble.svg">
        </div>
        <div class="g-pos-abs g-left-minus-20 g-bottom-0 g-opacity-0_3">
            <img style="transform: rotate(-90deg);" src="assets/img/svgs/service-cate-bubble.svg">
        </div>
    </section>
    <!-- End FAQ -->

    <!-- Prepare Modal -->
    <div class="modal fade" id="prepareModl" tabindex="-1" role="dialog" aria-labelledby="prepareModlLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="g-font-weight-700 text-capitalize"><span class="g-color-cyan">Prepare</span> and file corporation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="hs-icon hs-icon-close"></i>
                    </button>
                </div>
                <div class="g-pa-30">
                    <h4>What are Corporations?</h4>
                    <p class="text-justify pl-3">Corporations have been around for centuries and act as a legal entity that separates an owner from their business. As a separate entity, a corporation pays taxes and can be held liable for its actions. This separation shields owners from personal liability. Corporations require extensive record keeping, operational processes, and reporting, but are internationally recognized entities and can issue stock to attract outside investment.</p>
                    <div class="g-pt-15">
                        <h4>Additional Benefits of a Corporation</h4>
                        <p class="g-font-weight-600 pl-3 g-font-size-15">Separates Business from Personal</p>
                        <p class="text-justify pl-3">Corporations keep your income and losses and your business’s income and losses separate. If you’re saving for Susie to attend dental school or veterinary school so she can become a dentist or veterinarian or horse dentist, you don’t have to worry about the business’s debts eating into that money.</p>
                        <p class="g-font-weight-600 pl-3 g-font-size-15">Establishes an Official Business</p>
                        <p class="text-justify pl-3">As a corporation your company becomes a state-recognized entity. Not only is that distinction important on an official government level, but you’ll likely find clients and others more willing to take you seriously when you have that “INC” behind you company’s name.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Prepare Modal -->

    <!-- Prepare LLC Modal -->
    <div class="modal fade" id="prepareFileLLCModl" tabindex="-1" role="dialog" aria-labelledby="prepareFileLLCModlLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="g-font-weight-700"><span class="g-color-cyan">Prepare </span> and File LLC</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="hs-icon hs-icon-close"></i>
                    </button>
                </div>
                <div class="g-pa-30">
                    <h4>What are LLCs?</h4>
                    <p class="text-justify pl-3">Limited liability companies were first introduced in the 1970s. The concept has attracted many business owners because they offer liability protection, flexibility in taxation and management, and minimal record keeping. Although they are not internationally recognized, they do avoid corporate taxes and provide more ownership and distribution options.</p>
                    <div class="g-pt-15">
                        <h4>Additional Benefits of a LLC</h4>
                        <p class="g-font-weight-600 pl-3 g-font-size-15">Separates Business from Personal</p>
                        <p class="text-justify pl-3">LLCs keep your income and losses and your business’s income and losses separate. If you’re saving for Susie to attend dental school or veterinary school so she can become a dentist or veterinarian or horse dentist, you don’t have to worry about the business’s debts eating into that money.</p>
                        <p class="g-font-weight-600 pl-3 g-font-size-15">Establishes an Official Business</p>
                        <p class="text-justify pl-3">LLC your company becomes a state-recognized entity. Not only is that distinction important on an official government level, but you’ll likely find clients and others more willing to take you seriously when you have that “LLC” behind
                            <p class="g-font-weight-600 pl-3 g-font-size-15">Offers Flexible Management Structure</p>
                            <p class="text-justify pl-3">LLCs aren’t required to have the same formal structure as corporations. Corporations must meet annually to elect a board of directors to oversee the company policies and officers to run the business. But LLCs have much more flexibility in how they operate and make decisions for the business.</p>
                            <p class="g-font-weight-600 pl-3 g-font-size-15">Required Less Reporting</p>
                            <p class="text-justify pl-3">Although legal requirements for reporting and bookkeeping vary from state to state, generally speaking LLCs have fewer requirements for both than corporations. And let’s be real: When you dreamed up starting a business, how much of that involved doing red tape and bureaucracy?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Prepare LLC Modal -->

    <!-- Name Availability Search Modal -->
    <div class="modal fade" id="NameAvailabilitySearchModal" tabindex="-1" role="dialog" aria-labelledby="NameAvailabilitySearchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="g-font-weight-700"><span class="g-color-cyan">Name </span> Availability Search</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="hs-icon hs-icon-close"></i>
                    </button>
                </div>
                <div class="g-pa-30">
                    <h4>What is the Name Availability Search?</h4>
                    <p class="text-justify pl-3">Our formation experts will perform a detailed search of your state’s database to verify the name of your business is available before filing your paperwork. If the name you requested is not available, then we will contact you to find an acceptible alternative before starting the formation process.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Name Availability Search Modal -->

    <!-- Welcome Back Modal -->
    <div class="modal fade" id="welcomeBackModal" backdrop="false" tabindex="-1" role="dialog" aria-labelledby="welcomeBackLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">                
                <div class="g-pa-30 text-center">
                    <h1>Welcome Back</h1>
                    <p>Continue where you left off or clear <br> everything and start over?</p>
                    <div class="g-mt-45">
                        <div class="g-mb-15" id="continue">
                            <a href="#!" class="btn btn-lg u-btn-aqua g-px-35">Continue</a>
                        </div>
                        <div class="g-mb-15" id="startOver">
                            <a href="#" class="btn btn-lg u-btn-outline-aqua g-px-30">Start Over</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Back Modal -->

    <?php include('footer.php') ?>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/typedjs/typed.min.js"></script>
    <script src="assets/vendor/chosen/chosen.jquery.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.select.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dynamic-pricebar.js"></script>

    <!-- JS Plugins Init. -->
    <script type="text/javascript">
      

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
        $(function() {
            $("#header").load("header.html");
            $("#footer").load("cyan_footer.html");
        });
    </script>
</body>

</html>
