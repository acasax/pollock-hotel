$(document).ready(function() {

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://community-open-weather-map.p.rapidapi.com/weather?q=Kru%C5%A1evac%2C%20RS&lat=0&lon=0&callback=test&id=2172797&lang=null&units=%22metric%22%20or%20%22imperial%22&mode=xml%2C%20html",
        "method": "GET",
        "headers": {
            "x-rapidapi-key": "d2f945b858msh143b2b15e358928p17c032jsn998fdfc5d8da",
            "x-rapidapi-host": "community-open-weather-map.p.rapidapi.com"
        }
    };

    $.ajax(settings).done(function(response) {
        var str = response.replace("test(", "");
        var str1 = str.replace(")", "");
        var temperatura = jQuery.parseJSON(str1);
        var krusevac = temperatura.main.temp;
        fToC(krusevac);

    });

    function fToC(fahrenheit) {
        var fTemp = fahrenheit;
        var fToCel = fTemp - 273.15;
        var message = fToCel;
        $('#tvreme').text(message.toFixed(0));
    }


});