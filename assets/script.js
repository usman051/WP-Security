jQuery(document).ready(function($) {
  $('#scanButton').on('click', function() {
      $.ajax({
          url: ajaxurl,
          type: 'POST',
          data: {
              action: 'scan_ajax_action'
          },
          success: function(response) {
              $('#scanProgress').html(response);
          },
          error: function(error) {
              console.error('Error:', error);
              $('#scanProgress').html('Error occurred.');
          }
      });
  });
});
