 <!DOCTYPE html>
<html lang="es">
<head>
	<title>Arduino Port Control</title>
	<meta charset="utf-8" />
	<script src="http//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<style type="text/css">
 
</style>
</head>
 
<body>
	<script type="text/javascript">

	 function process(onoff)
   		{
		       jQuery.ajax({ 
				type:'get',
				url:'command1.php',
				data:{
					onoff: onoff
				},
				dataType:'json',
				//success: function(rs)
				//{}
				//failure : function(rs)
				//{}
			});
			console.log("click var -> onoff");
			console.log(onoff);
		    }
	</script>

<button onclick="process(1);">ON</button>
<button onclick="process(0);">OFF</button><br>
</body>
</html>

