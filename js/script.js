$( document ).ready(function() {
    $(window).resize(function(){
       console.log('resize called');
       var width = $(window).width();
       if(width <= 991){
           $('#myelement').removeClass('width8').addClass('width6');
       }       
    })
    .resize();//trigger the resize event on page load.
});