jQuery(document).ready(function($) {
    $('#my-button').click(function() {
      alert("Hi");
      var myFirst = document.getElementById("myFirst").value;
      var mySecond = document.getElementById("mySecond").value;
      var additional = document.getElementById("additional").value;
      var myCondition = document.getElementById("myCondition").value;
        $.ajax({
            type: 'POST',
            url: my_ajax_quant_get_data_object.ajax_url,
            data: {
                action: 'get_db_data',
                nonce : my_ajax_quant_get_data_object.nonce,
                    'myFirst': myFirst ,
                    'mySecond': mySecond ,
                    'additional': additional ,
                    'myCondition': myCondition
            },
            success: function(response) {
                alert('Server Response: ' + response);
            }
        });
    });
});
