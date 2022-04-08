<!-- Sidebar Navigation -->
<div id="js-header" class="u-header u-header--side" data-header-position="left" data-header-breakpoint="lg">
    <div class="u-header__sections-container g-py-10 g-py-40--lg g-px-14--lg" style="background-image: url('assets/img/svgs/side-navbar-bg.svg'); background-position: center; background-repeat: no-repeat;">
        <div class="u-header__section u-header__section--dark">
            <nav class="navbar navbar-expand-lg">
                <div class="js-mega-menu container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span class="hamburger hamburger--slider">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->


                    <!-- Navigation -->
                    <div class="collapse navbar-collapse flex-sm-row" id="navBar" style="margin-top: 30%;">
                        <ul class="navbar-nav ml-auto text-capitalize g-font-weight-600 u-sub-menu-color-white u-sub-menu-v1">
                            <li class="nav-item g-my-5">
                                <a href="#!" class="nav-link" style="font-size: 1.3354rem;">Finalizing Progress
                                </a>
                                <!-- Submenu -->
                                <ul class="list-unstyled finalize-indicate" id="sidebar">
                                    <li>
                                        <a id="progress1">Personal Info</a>
                                    </li>
                                    <li>
                                        <a id="progress2">Company Info</a>
                                    </li>
                                    <li>
                                        <a id="progress3">Review & Confirm</a>
                                    </li>
                                    <li>
                                        <a id="progress4">Payment</a>
                                    </li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                            <li class="nav-item g-my-5 g-mt-50">
                                <a href="#!" class="nav-link" style="font-size: 1.3354rem;">Your selected plan
                                </a>
                                <!-- Submenu -->
                                <ul class="list-unstyled selected-plans">
                                    <li>
                                        <a id="sidebar-service">C-Corporation</a>
                                    </li>
                                    <li>
                                        <a id="sidebar-state">California</a>
                                    </li>
                                    <li>
                                        <a><span id="sidebar-plan">Pro</span> Plan</a>
                                    </li>
                                </ul>
                                <!-- End Submenu -->
                            </li>
                        </ul>
                    </div>
                    <!-- End Navigation -->

                    <div class="text-center g-color-white g-hidden-lg-down g-pt-40">
                        <a href="price-table.php" class="btn u-btn-outline-white">
                            <i class="fa fa-arrow-circle-left"></i>
                            I changed my mind
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Sidebar Navigation -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let pricingPlan = JSON.parse(localStorage.getItem("pricingPlan"));
        $('#sidebar-plan').html(pricingPlan.planName);
        $('#sidebar-state').html(localStorage.getItem("selectedState"));
        $('#sidebar-service').html(localStorage.getItem("selectedService"));

        let progress = localStorage.getItem("progress");

        switch (progress) {
            case '0':
                $("#progress1").addClass("visited");
                break;
            case '30':
                $("#progress1").addClass("visited");
                $("#progress2").addClass("visited");
                break;

            case '70':
                $("#progress1").addClass("visited");
                $("#progress2").addClass("visited");
                $("#progress3").addClass("visited");
                break;

            case '100':
                $("#progress1").addClass("visited");
                $("#progress2").addClass("visited");
                $("#progress3").addClass("visited");
                $("#progress4").addClass("visited");
                break;
            default:
                $("#progress1").addClass("visited");
        }
    });
</script>
