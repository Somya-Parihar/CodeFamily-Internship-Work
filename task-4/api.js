const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://dad-jokes.p.rapidapi.com/random/joke",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "6b7d07fd73msh30a6b483f2a240dp1b3721jsn4852e72b55bb",
		"X-RapidAPI-Host": "dad-jokes.p.rapidapi.com"
	}
}

$.ajax(settings).done(function (response) {
	console.log(response);
	console.log(response.body[0].setup)
	var setup = response.body[0].setup;
	var punchline = response.body[0].punchline;
	$('#joke').append(setup+'<br>'+punchline);
});
