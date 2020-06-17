$(document).ready(function(){

$.ajax({

       'url': '../versione-ajax/dischi.php',

       'method': 'GET',

       'success': function(data) {

           for (var i = 0; i < data.length; i++) {
               var source   = $('#card-template').html();
               var template = Handlebars.compile(source);
               var context = {img: data[i].poster, titolo: data[i].title, autore: data[i].author, anno: data[i].year, genere:data[i].genre}
               var html = template(context);
               $('.container').append(html);
              
           }

       },
       'error': function() {
          alert('errore');
       }
   });

})
