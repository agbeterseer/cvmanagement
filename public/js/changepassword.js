$('#loading').hide();
$(document).ready(function() {

 $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$("#changep").click(function(e) {
    e.preventDefault();
   // alert('this is the real deal');
    $.ajax({
        type: 'post',
        url: '/user/password',
        data: {
            'passwordold': $('input[name=passwordold]').val(),
            'password': $('input[name=password]').val(),
            'password_confirmation' : $('input[name=password_confirmation]').val()
        },
         success: function(data) {
       
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.name);
            } else {
                $('.success').removeClass('hidden');
                $('.success').text('Password changed successfully!!');
               console.log(data); 
            }
        
        }

    });
        $('#passwordold').val('');
        $('#password').val('');
        $('#password_confirmation').val('');
        $('#loading').hide();
    });
});