<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>AJAX Search</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<h1>Search</h1>
<form id="search-form">
<input name="search" id="term"> <input type="submit">
</form>
<div id="results"></div>
<script>
$(function() 
{
	$("#search-form").on("submit", function(e) 
	{

	    e.preventDefault();
	    var search_term = $("#term").val();
	  	var display_results = $("#results");
	  	display_results.html("loading...");
	  	var results = '';

	  	$.post("search/search", {term: search_term}, function(data)  
	    { 
	    	if (data.length == 0) 
	    	{ 
	    		results = 'No Results';
	  		} 
	  		else 
	  		{
				  $.each(data, function() {
				  results += this.name + ' by ' + this.author + '<br>';
				});
			}
			display_results.html(results);
		});
	})
});
</script>
</body>
</html>