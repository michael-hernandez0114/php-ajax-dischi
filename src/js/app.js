$(document).ready(function() {

    var cardHTML = $('#card-template').html();
    var newCardTemplate = Handlebars.compile(cardHTML);

    $.ajax({

        url: '../src/server.php',
        method: 'GET',
        success: function(data){
            console.log(data);

            var dischi = data;

            for (var i = 0; i < data.length; i++) {
                var disco = {
                    imgAlbum: data[i].poster,
                    albumName: data[i].title,
                    artist: data[i].artist,
                    year: data[i].year
                }

                var discoDaStampare = newCardTemplate(disco);
                $('#card-container').append(discoDaStampare);
            }
        },
        error: function(error){

        }


    });


})
