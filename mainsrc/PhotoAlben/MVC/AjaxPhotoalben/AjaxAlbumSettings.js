//alert('SETTINGS');
$('#album-settings-form').submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'http://localhost:8888/php-example-project/photoalben/settings-update',
        data: $(this).serialize(),

        
    }).done(function(data){
       // alert('Done');
        $('.ajaxSettingsForm').html(data);
    }).fail(function(){
        alert('Fail');
    });
});