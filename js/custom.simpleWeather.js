$(document).ready(function() {
  $.simpleWeather({
    location: 'Ufa, RU',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = 'Уфа, '+weather.temp+'&deg;'+weather.units.temp;

      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});