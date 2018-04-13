<!DOCTYPE html>
<html>
<head>
	<title>document</title>
	<script type="text/javascript" src="./jquery-3.2.1.min.js"></script>

	<!-- image center thumbnail library -->
	<script type="text/javascript" src="./jquery.blImageCenter.js"></script>
</head>
<body style="text-align:center;">
	<h1>가로로 긴 이미지 예시</h1>
	<img src="./widthalign.png" alt="widthalign"/>
	<div id="thumb" style="width:200px; height:200px; border:1px solid gray; margin:0 auto;">
		<img src="./widthalign.png" alt="widthalign"/>
	</div>
	<hr/>

	<h1>세로로 긴 이미지 예시</h1>
	<img src="./vertical.png" alt="vertical"/>
	<div id="thumb" style="width:200px; height:200px; border:1px solid gray; margin:0 auto;">
		<img src="./vertical.png" alt="vertical"/>
	</div>
	<hr/>
	<script>
		$(document).ready(function(){
			$("#thumb img").centerImage();
		});
	</script>
</body>
</html>