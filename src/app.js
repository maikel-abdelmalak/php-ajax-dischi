$(document).ready(function(){

console.log('acia');
$.ajax({

       'url': '../versione-ajax/dischi.php',

       'method': 'GET',

       'success': function(data) {
           console.log(data);

       },
       'error': function() {
          alert('errore');
       }
   });

})
