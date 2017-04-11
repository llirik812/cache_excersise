<!DOCTYPE HTML>
<html>
 <head>
   <title>php test</title>
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
 </head>
 <body>
	<script type="text/javascript">
		$(document).ready(            
			function() {
				$.ajax({
		url: "/data.php", 
		success: function(result){
		        $("#data").html(result.data);
		},
		error: function(result,code) {
			console.log('error');
		}});
			}
		);
	</script>
<a href="/secondpage.html">Link to the second page</a>	<br/>
  <img src="/image.php">
<div id="data">
</div>       
</body> 
</html>