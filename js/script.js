const API_KEY = 'd4e405d277e61ec9cad4eabc09739545';
latitude = 100;
longtitude = 110;

function getWeather(latitude, longtitude) {
  $.ajax({
    url: 'http://api.openweathermap.org/data/2.5/',
    data: {
      lat: latitude,
      lon: longtitude,
      units: 'imperial',
      APPID: API_KEY
    },
    success: data => {
       console.log(data);
    }
  })
}

function getCoords(city_search) {
    $.ajax({
      url: 'https://nominatim.openstreetmap.org/search.php',
      data: {
        city: city_search,
        format: 'jsonv2',
      },
      success: data => {
         console.log(data);
      }
    })
  }
