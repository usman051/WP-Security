jQuery(document).ready(function($) {
   
    $('#scanButton').on('click', function() {
      $.ajax({
        url: ajaxurl,
        type: 'POST',
        data: {
          action: 'scan_ajax_action' 
        },
        success: function(response) {
          $('#scanProgress').html('Scans completed: ' + response); 
        },
        error: function(error) {
          console.error('Error:', error);
          $('#scanProgress').html('Error occurred.'); 
        }
      });
      
    });

  
    
  });
  function updateProgress(progress) {
    jQuery('.progress').css('width', progress + '%').attr('aria-valuenow', progress).text(progress + '% Complete');
  }