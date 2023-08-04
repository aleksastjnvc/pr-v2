jQuery(document).ready(function($) {
    $('#contact-form').submit(function(e) {
      e.preventDefault(); // prevent the form from being submitted via HTTP POST


      var formData = {
        name: $("input[name=name]").val(),
        email: $("input[name=email]").val(),
        website: $("input[name=website]").val(),
        message: $("textarea[name=message]").val()
    };


      $.ajax({
        type: 'POST',
        url: `/wp-admin/admin-ajax.php`, // use the WordPress global ajaxurl variable
        data: {
            action: 'pr_send_email',
            form_data: formData
        },
        success: function(response) {
          if (response == 'success') {
            $('#contact-form')[0].reset(); // reset the form
            alert('Form submitted');
          } else {
            alert('Error');
          }
        }
      });
    });
  });
  