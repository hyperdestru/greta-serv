$(function() {

	var apiKey = '8652125de18e839054a875b7cd0a634a';
	var baseUrl = 'http://api.openweathermap.org/data/2.5/weather?APPID=' + apiKey + '&unit=metric' + '&lang=fr';
	console.log(baseUrl);

	$('#weather button').click(function(e) {
		e.preventDefault();

		var cityValue = $('#city').val();

		var params = {
			url: baseUrl + '&q=' + cityValue,
			method: 'GET'
		};

		$.ajax(params).done(function(response) {
			//Show card on click
			$('.card').removeClass('d-none');

			//Display city name in h5 title
			$('.card-title').text(response.name);

			//Display weather info (nuageux, degagé...)
			$('.description-weather').text(response.weather[0].description);

			console.log('success');
		})
		.fail(function() {
			console.log('query fail');
		});
	});
});

