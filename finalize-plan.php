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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
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
<style>
    .hide {
        display: none;
    }
</style>

<body class="g-bg-f9">
    <main>

        <?php include('sidebar-finalize.php') ?>

        <!-- Finalize Form -->
        <section>
            <div class="container g-py-50">
                <div class="row justify-content-center text-center g-mb-35">
                    <div class="col-lg-8">
                        <h2 class="h3 g-font-weight-600 text-capitalize mb-2">Personal Information</h2>
                        <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan mb-2"></div>
                    </div>
                </div>
                <div class="row justify-content-center  ">
                    <div class="col-md-7">
                        <div class="d-block">
                            <div class="js-hr-progress-bar progress g-height-20 rounded g-overflow-visible g-mb-20">
                                <div class="js-hr-progress-bar-indicator progress-bar g-bg-cyan-gradient g-pos-rel" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
                                    <div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-cyan-gradient g-rounded-50x">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="personalInfo">
                    <div class="col-md-8">
                        <!-- <div class="g-pos-abs g-bottom-minus-30 g-left-minus-150 g-opacity-0_5">
                            <img src="assets/img/svgs/service-cate-bubble.svg" >
                        </div> -->
                        <div class="card border-0 rounded">
                            <div class="card-body g-pa-60">
                                <!-- <div class="text-center g-mb-30">
                                    <h4>Personal Information</h4>
                                </div> -->
                                <div>
                                    <form action="">
                                        <div class="form-group g-mb-20">
                                            <div class="d-flex">
                                                <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Email</label> <span class="ml-auto">We will send all notifications and updates to this email.</span>
                                            </div>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <div class="d-flex">
                                                <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Full Name</label>
                                                <span class="ml-auto">Enter your name as it appears on your passport.</span>
                                            </div>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="your full name">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Phone Number</label>
                                            <input id="inputGroup1_1 " type="tel" class="form-control form-control-md rounded phone">
                                            <span id="valid-msg" class="hide">Valid</span>
                                            <span id="error-msg" class="hide">Invalid number</span>
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <div class="d-flex">
                                                <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Mailing Address</label>
                                                <span class="ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="We will mail your debit card here. The address is not used for your company filing and can be outside the U.S.">
                                                    <a href="#!" class="g-color-cyan">
                                                        What address should I use?
                                                    </a>
                                                </span>
                                            </div>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="e.g. Example@xmail.com">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">City</label>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="City">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Region</label>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="Region">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Country</label>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="Country">
                                        </div>
                                        <div class="form-group g-mb-20">
                                            <label class="g-mb-5 g-font-size-18" for="inputGroup1_1">Postal Code</label>
                                            <input id="inputGroup1_1" class="form-control form-control-md rounded" type="number" placeholder="Postal Code">
                                        </div>
                                    </form>
                                    <div class="g-pt-15 g-mb-minus-20 text-right">
                                        <a href="#!" id="toCopnayView" class="sumbmitBtn btn u-btn-aqua g-px-30 g-py-15 g-font-size-16">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="companyInfo" style="display: none;">
                    <div class="col-md-10">
                        <div class="card border-0 rounded">
                            <div class="card-body g-pa-25">
                                <div class="row justify-content-end">
                                    <div class="col-md-6">
                                        <div>
                                            <h5 class="mb-0">Company Officers</h5>
                                            <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="">
                                            <div class="form-group g-mb-20 g-mt-15">
                                                <label class="g-mb-5" for="inputGroup1_1">Select a Company Name</label>
                                                <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="Company Name here..">
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select a Designator</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">inc.</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select an alternative name <span class="pl-2"><i class="icon-exclamation"></i></span> </label>
                                                <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="Metro-Xodus Food Company">
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Company Description</label>
                                                <textarea id="inputGroup2_2" class="form-control form-control-md rounded-0" rows="3" placeholder="Enter 2-4 sentence about your company, E.g. My Company is all about food delivery system. We supply food all over the world"></textarea>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Company Industry</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">Food Delivery.</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="g-mb-20 g-mt-35">
                                                <h5 class="mb-0">Share & Ownerdhip</h5>
                                                <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan"></div>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Authorized Shares Outstanding <span class="pl-2"><i class="icon-exclamation"></i></span> </label>
                                                <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="10,000,000">
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Par Value <span class="pl-2"><i class="icon-exclamation"></i></span> </label>
                                                <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="$1,1001">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="">
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5 d-flex align-items-center" for="inputGroup1_1">
                                                    Officer Full Name <span onclick="addOfficerName(event)" class="pl-2 g-color-cyan g-font-size-22 g-cursor-pointer"><i class="icon-plus"></i></span>
                                                </label>
                                                <div id="officer-full-name-inputs">
                                                    <div id="officer-full-name-boxes" class="input-group g-brd-primary--focus g-mb-20">
                                                        <input name="officersName[]" class="form-control form-control-md rounded pr-0" type="text" placeholder="Input Officer's Name" value="">
                                                        <div class="input-group-append">
                                                            <span onclick="getOfficersName(event);" class="input-group-text border-0 rounded-0 g-bg-white g-font-size-18 g-color-red"><i class="icon-close"></i></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="input-group g-brd-primary--focus g-mb-20">
                                                            <input class="form-control form-control-md rounded pr-0" type="text" placeholder="Wine Delivery">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text border-0 rounded-0 g-bg-white g-font-size-18 g-color-red"><i class="icon-close"></i></span>
                                                            </div>
                                                        </div> -->
                                                </div>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select A President/CEO</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">Food Delivery.</option>
                                                    <option value="1">Wine Delivery</option>
                                                </select>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select A Secretary</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">Food Delivery.</option>
                                                    <option value="1">Wine Delivery</option>
                                                </select>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select A Tresurer</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">Food Delivery.</option>
                                                    <option value="1">Wine Delivery</option>
                                                </select>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Select A Vice President</label>
                                                <select class="custom-select rounded">
                                                    <option selected="">Food Delivery.</option>
                                                    <option value="1">Wine Delivery</option>
                                                </select>
                                            </div>
                                            <div class="g-mb-15 g-mt-35">
                                                <h5 class="mb-0">Your Account</h5>
                                                <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan"></div>
                                            </div>
                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-5" for="inputGroup1_1">Create Password <span class="pl-2"><i class="icon-exclamation"></i></span> </label>
                                                <input id="inputGroup1_1" class="form-control form-control-md rounded" type="text" placeholder="165165416kfuytf">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="g-pt-15 d-flex justify-content-between align-items-center">
                                    <div>
                                        <a id="checkBack" class="checkBack g-text-underline--none--hover g-cursor-pointer g-font-size-20">
                                            <i class="fa fa-arrow-left"></i>
                                            Previous
                                        </a>
                                    </div>
                                    <div class="g-pt-15">
                                        <a href="#!" id="companyInfoBtn" class="sumbmitBtn btn u-btn-aqua g-px-30 g-py-15 g-font-size-16">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="reviewConfirm" style="display: none;">
                    <div class="col-md-12">
                        <div class="card rounded border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h2 class="mx-auto">Company Information</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card border-0 rounded g-height-100x">
                            <div class="card-body">
                                <div>
                                    <h2 class="h4 text-capitalize mb-0">Account Information</h2>
                                    <div class="d-inline-block g-width-100 g-height-2 g-bg-cyan"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Contact Information</h5>
                                        <p id="contactInfo">Elliot Anderson Elliot.Anderson@proton.mail +88 01686123456 </p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Mailing Address</h5>
                                        <p id="mailAddress">House No. 183, Road No. 5, Block 5, NY City, USA</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card border-0 rounded">
                            <div class="card-body">
                                <div>
                                    <h2 class="h4 text-capitalize mb-0">Company Information</h2>
                                    <div class="d-inline-block g-width-100 g-height-2 g-bg-cyan"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Company Name</h5>
                                        <p>Online Food Delivery System</p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Company Type</h5>
                                        <p>Corporation</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">State</h5>
                                        <p>Delaware</p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Industry</h5>
                                        <p>Animation</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25">
                                        <h5 class="text-capitalize">Description</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quos veritatis hic corrupti vel, eaque temporibus aut! In, quas, autem similique consectetur ullam sint quibusdam nihil nam minima praesentium recusandae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card border-0 rounded">
                            <div class="card-body">
                                <div>
                                    <h2 class="h4 text-capitalize mb-0">Officer Information</h2>
                                    <div class="d-inline-block g-width-100 g-height-2 g-bg-cyan"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">President</h5>
                                        <p>Online Food Delivery System</p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Secretary</h5>
                                        <p>Corporation</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">treasuerer</h5>
                                        <p>Delaware</p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Vice President</h5>
                                        <p>Animation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card border-0 rounded g-height-100x">
                            <div class="card-body">
                                <div>
                                    <h2 class="h4 text-capitalize mb-0">Shares & Ownership</h2>
                                    <div class="d-inline-block g-width-100 g-height-2 g-bg-cyan"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Shares Authorized</h5>
                                        <p>10,000,000</p>
                                    </div>
                                    <div class="g-pt-25 flex-1">
                                        <h5 class="text-capitalize">Company Type</h5>
                                        <p>Corporation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <a id="checkBackConfirm" class="checkBack g-text-underline--none--hover g-cursor-pointer g-font-size-20">
                                <i class="fa fa-arrow-left"></i>
                                Go Back
                            </a>
                            <a href="#!" id="toConfirmBtn" class="sumbmitBtn btn u-btn-aqua g-px-30 g-py-15 g-font-size-16">Confirm</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="paymentForm" style="display: none;">
                    <div class="col-md-12">
                        <div class="card rounded border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <!-- <i class="fa fa-arrow-left g-font-size-20"></i> -->
                                    <h2 class="mx-auto">Your Application is ready !!</h2>
                                </div>
                                <p class="text-center g-px-35">You're ready to begin the filing process! Once you place your order, you'll get access to your online account to upload your passport document securely and answer a few more questions before we start filing your company </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card rounded border-0">
                            <div class="card-body">
                                <div class="text-center g-pb-30">
                                    <h2>Biz Logo</h2>
                                    <h4>ONLINE FOOD SERVICE COMPANY</h4>
                                </div>
                                <div class="g-pb-30 text-center">
                                    <h5 class="text-uppercase">officers</h5>
                                    <div class="d-flex justify-content-center">
                                        <p class="g-px-15">Delaware</p>
                                        <p class="g-px-15">Delaware</p>
                                        <p class="g-px-15">Delaware</p>
                                        <p class="g-px-15">Delaware</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h4 class="text-uppercase">Company Type</h4>
                                        <p>Corporation</p>
                                    </div>
                                    <div>
                                        <h4 class="text-uppercase">state</h4>
                                        <p>Delaware</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 g-py-20">
                        <div class="card rounded border-0 g-height-100x">
                            <div class="card-body">
                                <div class="text-center g-mb-20">
                                    <h2 class="h4 text-capitalize mb-0">Shares & Ownership</h2>
                                    <div class="d-inline-block g-width-100 g-height-2 g-bg-cyan"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5>Basic Plan</h5>
                                    <h5>$119 / yr </h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5>One Time Free Delaware Fee</h5>
                                    <h5>$21 / yr </h5>
                                </div>
                                <hr class="g-py-0">
                                <div class="d-flex justify-content-between">
                                    <h5>Due Today</h5>
                                    <h5>$140 / yr </h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="assets/img/payPal-btn.png" class="img-fluid g-mb-15" alt="">
                        <img src="assets/img/supported-cards.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <a href="#!" class="btn btn-lg btn-block g-mb-15 u-btn-outline-aqua g-px-30">Credit Card</a>
                        <div class="form-group">
                            <div class="input-group g-brd-primary--focus">
                                <input id="inputGroup1_3" class="form-control form-control-md g-brd-right-none rounded" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" data-mask="9999-9999-9999-9999">
                                <div class="input-group-append">
                                    <span class="input-group-text rounded g-color-gray-dark-v5"><i class="icon-credit-card"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex flex-column text-center">
                            <a href="#!" class="btn btn-lg g-font-size-24 g-mb-15 u-btn-outline-aqua g-px-40">Place Order</a>
                            <a id="checkBackOrder" class="checkBack g-text-underline--none--hover g-cursor-pointer g-font-size-20">
                                <i class="fa fa-arrow-left"></i>
                                Check Again
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Finalize Form -->
    </main>

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
    <script src="assets/js/components/hs.header-side.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.select.js"></script>
    <script src="assets/js/components/hs.progress-bar.js"></script>
    <script src="assets/js/intlTelInput.js"></script>
    <script src="assets/js/intlTelInput.min.js"></script>
    <script src="assets/js/utils.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        function addOfficerName(e) {
            let idValue = 0;
            const officerFullNameBoxes = document.getElementById('officer-full-name-boxes');

            const inputFiledOfficerName = `<div id="officer-full-name-boxes" class="input-group g-brd-primary--focus g-mb-20">
                <input id=${idValue} name="officersName[]" class="form-control form-control-md rounded pr-0" type="text" placeholder="Input Officer's Name" value="">
                <div class="input-group-append">
                    <span onclick="removeOfficer(event)" class="input-group-text border-0 rounded-0 g-bg-white g-font-size-18 g-color-red"><i class="icon-close"></i></span>
                </div>
            </div>`
            officerFullNameBoxes.insertAdjacentHTML("afterend", inputFiledOfficerName);
        }

        function getOfficersName() {
            let officerName, i, l;
            let officerNames = [];
            officerName = document.getElementsByName("officersName[]");
            l = officerName.length;
            for (i = 0; i < l; i++) {
                console.log(`${i } is ${officerName[i].value}`)
                officerNames.push(officerName[i].value)
            }
            console.log(officerNames)
        }

        function removeOfficer(event) {
            console.log(event)
        }

        //telephone input js

        var telInput = $(".phone"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({
            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            initialCountry: 'bd',
            nationalMode: false,
            numberType: "MOBILE",
            preventInvalidNumbers: true,
            //separateDialCode: true,
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.addClass("text-success");
                    validMsg.removeClass("hide");
                } else {
                    errorMsg.addClass("text-danger");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);

        var personalInfoArr = {};
        var companyInfoArr = {};
        var personalDatas = JSON.parse(localStorage.getItem('personalDatas'));
        var companyDatas = JSON.parse(localStorage.getItem('companyDatas'));
        var personalForm = $('#personalInfo');
        var companyForm = $('#companyInfo');
        var reviewConfirm = $('#reviewConfirm');
        var paymentForm = $('#paymentForm');

        var chekcBackBtn = $('.checkBack');
        var checkBackConfirm = $('#checkBackConfirm');
        var checkBackOrder = $('#checkBackOrder');
        var progressBar = $('.js-hr-progress-bar-indicator');
        var progressBarTxt = $('.js-hr-progress-bar-indicator');

        $(document).on('ready', function() {
            $('.intl-tel-input').css("display", "block");
            localStorage.setItem("url", location.href);

            switch (localStorage.getItem("progress")) {
                case '0':
                    break;

                case '30':
                    personalForm.hide();
                    toggleFormView('toCopnayView', false)
                    showFormData(localStorage.getItem("progress"))
                    break;

                case '70':
                    personalForm.hide();
                    toggleFormView('companyInfoBtn', false)
                    showFormData(localStorage.getItem("progress"))
                    break;

                case '100':
                    personalForm.hide();
                    toggleFormView('toConfirmBtn', false)
                    showFormData(localStorage.getItem("progress"))
                    break;
                default:
            }

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of custom select
            $.HSCore.components.HSSelect.init('.js-custom-select');

            // initialization of horizontal progress bars
            $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });

            function getSidebarUpdated() {
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost/BizFormaiton/bizformaiton2-ui/sidebar-finalize-submenu.php',
                    success: function(msg) {}
                });
            }

            function toggleFormView(peram, decision) {
                if (peram === 'toCopnayView') {
                    personalForm.hide()
                    companyForm.show()
                    progressBar.css('width', '30%');
                    progressBarTxt.text('30%');
                    localStorage.setItem("progress", '30');
                    getSidebarUpdated();

                    var res = $('#personalInfo form input').length;

                    if (decision) {
                        for (i = 0; i < res; i++) {
                            personalInfoArr[document.querySelectorAll('#personalInfo label')[i].textContent] = $('#personalInfo form input').eq(i).val();
                        }
                        localStorage.setItem("personalDatas", JSON.stringify(personalInfoArr));
                        var jsonString = localStorage.getItem("personalDatas");
                        personalDatas = JSON.parse(jsonString);
                    }

                } else if (peram === 'checkBack') {
                    personalForm.show()
                    companyForm.hide()
                    progressBar.css('width', '0%');
                    progressBarTxt.text('0%')
                } else if (peram === 'companyInfoBtn') {
                    companyForm.hide();
                    reviewConfirm.show();
                    progressBar.css('width', '70%');
                    progressBarTxt.text('70%')
                    localStorage.setItem("progress", '70');
                    getSidebarUpdated();

                    if (decision) {
                        var res = $('#companyInfo form input').length;
                        for (i = 0; i < res; i++) {
                            companyInfoArr[document.querySelectorAll('#companyInfo label')[i].textContent] = $('#companyInfo form input').eq(i).val();
                        }
                        // Convert the person object into JSON string and save it into storage
                        localStorage.setItem("companyDatas", JSON.stringify(companyInfoArr));
                        // Retrieve the JSON string
                        var jsonString = localStorage.getItem("companyDatas");
                        // Parse the JSON string back to JS object
                        companyDatas = JSON.parse(jsonString);
                        console.log(companyDatas['Select a Company Name']); //retrieval of company name from input by label text

                    }
                    showFormData('70');

                } else if (peram === 'checkBackConfirm') {
                    reviewConfirm.hide();
                    companyForm.show();
                    progressBar.css('width', '30%');
                    progressBarTxt.text('30%')
                } else if (peram === 'toConfirmBtn') {
                    reviewConfirm.hide();
                    paymentForm.show();
                    progressBar.css('width', '100%');
                    progressBarTxt.text('100%')
                    localStorage.setItem("progress", '100');
                    getSidebarUpdated();
                } else if (peram === 'checkBackOrder') {
                    paymentForm.hide();
                    reviewConfirm.show();
                    progressBar.css('width', '70%');
                    progressBarTxt.text('70%')
                }
            }

            function showFormData(progress) {
                if (progress === '30') {
                    var res = $('#personalInfo form input').length;
                    for (i = 0; i < res; i++) {
                        $('#personalInfo form input').eq(i).val(personalDatas[$('#personalInfo label')[i].textContent]);
                    }
                } else {
                    var reslt = $('#personalInfo form input').length;
                    for (i = 0; i < reslt; i++) {
                        $('#personalInfo form input').eq(i).val(personalDatas[$('#personalInfo label')[i].textContent]);
                    }
                    var res = $('#companyInfo form input').length;
                    for (i = 0; i < res; i++) {
                        $('#companyInfo form input').eq(i).val(companyDatas[$('#companyInfo label')[i].textContent]);
                    }
                    $('#contactInfo').html(personalDatas['Full Name'] + '.<br>' + personalDatas['Email'] + '.<br>' + personalDatas['Phone Number']);
                    $('#mailAddress').html(personalDatas['Mailing Address']);
                }
            }

            $('.sumbmitBtn').click(function(e) {
                // console.log(e.target.id)
                var targetItemInfo = e.target.id
                toggleFormView(targetItemInfo, true);
            })

            chekcBackBtn.click(function(e) {
                // console.log(e.target.id)
                var targetItemId = e.target.id
                toggleFormView(targetItemId, true);
            })
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeaderSide.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>
</body>

</html>
