$("input:checkbox, input:radio, input:file").not('[data-no-uniform="true"],#uniform-is-ajax').uniform();
   /* $('.tooltip').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })*/
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();  
   /* $('#tooltip').tooltip({
    'show': false,
        'placement': 'top',
        'title': "Hidde/Show"
});*/
$('[rel="tooltip"]').tooltip();
 
    $("#panel").on("show.bs.collapse", function(){
      $("#tooltip").html('<i class="fa fa-chevron-up fa-fw"></i>');
      $("#tooltip").attr("data-original-title", "Hide");
    });
    $("#panel").on("hide.bs.collapse", function(){
      $("#tooltip").html('<i class="fa fa-chevron-down fa-fw"></i>');
      $("#tooltip").attr("data-original-title", "Show");

    });
});

    // popover demo
    $("[data-toggle=popover]")
        .popover()
$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}


/*
$('#blogin_form').click(function(){
    toastr.error('I do not think that word means what you think it means.','Inconceivable!');
});*/
paceOptions = {
  // Configuration goes here. Example:
  elements: false,
  restartOnPushState: false,
  restartOnRequestAfter: false
}


