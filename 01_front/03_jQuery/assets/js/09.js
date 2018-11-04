$(function(){
    // 1. Une requète AJAX SIMPLE
    $.ajax('http://geoip.nekudo.com/api')
    .done(function(data){
        console.log(data);
        console.log(data.ip);
    });

    // 2. avec getJson
    


});