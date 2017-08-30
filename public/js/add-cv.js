$('#loading').hide();
$(document).ready(function() {

 $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$("#add").click(function(e) {
    e.preventDefault();
   alert('this is the real deal');

    $.ajax({
        type: 'post',
        url: '/addItem',
        data: {
             'candidates_name': $('input[name=candidates_name]').val(),
            'profession': $('input[name=profession]').val(),
            'years_of_experience': $('input[name=years_of_experience]').val(),
            'region' : $('input[name=region]').val(),
            'location' : $('input[name=location]').val()
        },
        beforeSend:function () {
            // alert('seding.....');
            $('#loading').show();
            console.log('loading data to the server');
            // body...
        },
        success: function(data) {
             console.log('data....r');
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.name);
            } else {
               
            $('#table').append("<tr class='item" + data.candidates_name + "'><td>" + data.profession + "</td> </tr>");
       
            }
           console.log('data....s');
        }

    });
     
        $('#candidates_name').val('');
        $('#profession').val('');
        $('#years_of_experience').val('');
        $('#region').val('');
        $('#location').val('');

        $('#loading').hide();
    });
});