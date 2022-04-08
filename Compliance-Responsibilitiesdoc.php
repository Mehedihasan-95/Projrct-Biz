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

  <!-- CSS Unify -->
  <link rel="stylesheet" href="assets/css/unify-core.css">
  <link rel="stylesheet" href="assets/css/unify-components.css">
  <link rel="stylesheet" href="assets/css/unify-globals.css">
  <link rel="stylesheet" href="assets/css/dzsparallaxer.css">


  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/cyan_custom.css">
</head>

<body>
  <main>

  <?php include('sidenavbar.php') ?>

    <!-- Promo Block -->
    <section  >
      <div class="container g-py-50" id="bodyContainer">
        <div class="row">
          <div class="col-md-12">
            <h2>Compliance Responsibilities</h2>
            <div class="d-inline-block g-width-55 g-height-2 g-bg-cyan mb-2"></div>
            <p>Each state has different requirements for annual compliance. We've broken down the responsibilities for each state on our pricing page. If you have our Pro plan, we'll file your compliance for you and invoice you for the state fee. You're responsible for filing these under the Plus plan.</p>

            <p class="pt-1">
              You can take a look at the compliance by state using our handy tool on our start page <a class=" g-color-cyan" href="price-table.php">here</a>. Simply select the state and entity type and select the "View Ongoing Compliane" option to view your responsibilites.
            </p>
            <p class="pt-1">As a BizFormation customer, you'll get reminders for compliance automatically by email.</p>

          </div>
        </div>
      </div>
    </section>
    <!-- End Promo Block -->    
   
  </main>

  <div class="u-outer-spaces-helper"></div>


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

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.carousel.js"></script>
  <script src="assets/js/components/hs.header-side.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "awesome",
            "creative",
            "unify"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // Sidebar Dropdown
        var dropdown = $(".has-sideDropdown-menu a");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
                
                var a = this.nextElementSibling.firstElementChild.firstElementChild;
                
            });
        }

      });

      $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeaderSide.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'vertical',
                breakpoint: 991
            });

            var xWidth = $(window).width();

            if(xWidth <= 1300) {
                $('#bodyContainer').addClass('g-px-50')
            }
        });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);

      });
      
  </script>


</body>
</html>
