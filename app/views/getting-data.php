<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Getting Data</title>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<ul>
  <li><a href="#" id="tab1" class="tabs">Alice In  
    Wonderland</a></li>
  <li><a href="#" id="tab2" class="tabs">Tom Sawyer</a></li>
</ul>
<h1 id="title"></h1>
<div id="container"></div>
<script>
  $(function() {
  $(".tabs").on("click", function(e) { 
    e.preventDefault();
  var tab = $(this).attr("id");
  var title = $(this).html();
  $("#container").html("loading…");
  $.get(tab, function(data) {
  $("#title").html(title);
  $("#container").html(data);
});
});
});
</script>
</body>
</html>