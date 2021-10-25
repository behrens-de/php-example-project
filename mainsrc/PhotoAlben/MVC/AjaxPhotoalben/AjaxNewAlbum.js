$('.newAlbumAjaxBtn').click(function(e){
    e.preventDefault();

    //alert('TEST BTN');

    $.ajax({
        type: 'POST',
        url: 'http://localhost:8888/php-example-project/photoalben-newAlbum',
        data: {
            userid: $(this).data('userid'),
            albumName: $(this).data('album-name'),
            albumBeschreibung: $(this).data('album-beschreibung'),
        },
        
    }).done(function(data){
       // alert('Done');
        $('#relPhotoalbum').html(data);
    }).fail(function(){
        alert('Fail');
    });
});