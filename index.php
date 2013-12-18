<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/yshout.js" type="text/javascript"></script>

		<link rel="stylesheet" href="css/example.yshout.css" />
		<link rel="stylesheet" href="css/style.css" />
				
		<script type="text/javascript">
		var v = <?php echo '"'.($_GET['nickName']).'"'; ?>;
			new YShout({
				yPath: '.',
				yLink: 'rars',
				defaultNickname : v
			});
			window.setInterval(function() {
			  var elem = document.body;
			  elem.scrollTop = elem.scrollHeight;
			}, 50);
		</script>
	</head>
	<body>
			<div id="yshout"></div>
		
	</body>
</html>
