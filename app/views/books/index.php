<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Show Books</title>
  <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<a href="#" id="book-button">Load Books</a>
<div id="book-list"></div>
<script>
$(function() {
	$('#book-button').on('click', function(e) { 
  		e.preventDefault();
		$('#book-list').html('loading...');



		$.get('books/books', function(data) { 

			console.log(data);

  			var book_list = '';

			$.each(data, function(){ 
  				book_list += this + '<br>';
			})

			$("#book-list").html(book_list);
			$('#book-button').hide();
		});
	});
});
</script>
</body>
</html>