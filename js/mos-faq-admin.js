jQuery(document).ready(function($) {
  $('.mos-faq-wrapper .tab-nav > a').click(function(event) {
      event.preventDefault();
      var id = $(this).data('id');
      //alert('#mos-faq-' + id);
      $('#mos-faq-'+id).addClass('active');
      $('#mos-faq-'+id).siblings().removeClass('active');
      $(this).closest('.tab-nav').addClass('active');
      $(this).closest('.tab-nav').siblings().removeClass('active');
      //$(this).closest('.tab-nav').css("background-color", "red");
  });
  $('.moscp').each( function() {
    $(this).minicolors({
      control: $(this).attr('data-control') || 'hue',
      defaultValue: $(this).attr('data-defaultValue') || '',
      format: $(this).attr('data-format') || 'hex',
      keywords: $(this).attr('data-keywords') || '',
      inline: $(this).attr('data-inline') === 'true',
      letterCase: $(this).attr('data-letterCase') || 'lowercase',
      opacity: $(this).attr('data-opacity'),
      position: $(this).attr('data-position') || 'bottom',
      swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
      change: function(hex, opacity) {
        var log;
        try {
          log = hex ? hex : 'transparent';
          if( opacity ) log += ', ' + opacity;
          console.log(log);
        } catch(e) {}
      },
      theme: 'default'
    });

  });
});