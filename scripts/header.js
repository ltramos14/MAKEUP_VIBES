$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()  >  600){
            $('header').addClass('header2');   
        }else{
            $('header').removeClass('header2'); 
        }
    });
});