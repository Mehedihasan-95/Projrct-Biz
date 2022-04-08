$(document).on('ready', function () {
    var xWidth = $(window).width();
    if(xWidth <= 1375) {

        $('#serviceBanner').removeClass('banner-size');
        $('#serviceBanner').addClass('banner-size-70');
        var container = $('#container'); 
        if(container.hasClass('g-height-650px')) {
            container.removeClass('g-height-650px');
            container.addClass('g-height-610px');
        }
    }

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
    var bodyTag = $('body');
    if (bodyTag.hasClass('homePage')){
        $('#homeAlert').css('display', 'block');
    }
    else{
        // alert('no')
        console.log(window.location.pathname);
    }
});