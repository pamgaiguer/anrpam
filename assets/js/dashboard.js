$(document).ready(function() {

  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");

    if (window.orientation == 0) {
      if ($("#wrapper").hasClass('toggled')) {
        $(".navbar").css({
          "max-height": "140px",
          "min-height": "140px"
        });
      }
    }

    if ($("#wrapper").hasClass('toggled')) {
      $(".brand-img").attr({
        'src': '../assets/img/dashboard/lg_sm_mindminers.png',
        'srcset': '../assets/img/dashboard/lg_sm_mindminers@2x.png 2x, ../assets/img/dashboard/lg_sm_mindminers@3x.png 3x'
      });
    } else {
      $(".brand-img").attr({
        'src': '../assets/img/dashboard/lg_mindminers_full.png',
        'srcset': '../assets/img/dashboard/lg_mindminers_full@2x.png 2x, ../assets/img/dashboard/lg_mindminers_full@3x.png 3x'
      });
    }
  });

  $("#openUserPanel").click(function(e) {
    e.preventDefault();
    $("#glyph").toggleClass('glyphicon-triangle-top');
  })

  $('[data-toggle="tooltip"]').tooltip();
});