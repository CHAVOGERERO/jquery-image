# jquery-image
jquery-image-center example

## 전체소스
```
<!DOCTYPE html>
<html>
<head>
	<title>jquery image center example</title>
	<script type="text/javascript" src="./jquery-3.2.1.min.js"></script>

	<!-- image center thumbnail library -->
	<script type="text/javascript" src="./jquery.blImageCenter.js"></script>
</head>

<body style="text-align:center;">
	<h1>가로로 긴 이미지 예시</h1>
	<img src="{이미지경로}" alt="widthalign"/>
	<div id="thumb" style="width:200px; height:200px; border:1px solid gray; margin:0 auto;">
		<img src="{이미지경로}" alt="widthalign"/>
	</div>
	<hr/>

	<h1>세로로 긴 이미지 예시</h1>
	<img src="{이미지경로}" alt="vertical"/>
	<div id="thumb" style="width:200px; height:200px; border:1px solid gray; margin:0 auto;">
		<img src="{이미지경로}" alt="vertical"/>
	</div>
	<hr/>	
	<script>
		$(document).ready(function(){
			$("#thumb img").centerImage();
		});
	</script>
</body>
</html>
```
<br>
## 중요한 부분
```
<script type="text/javascript" src="./jquery-3.2.1.min.js"></script>
<!-- image center thumbnail library -->
<script type="text/javascript" src="./jquery.blImageCenter.js"></script>
```
**jqeury-3.2.1.min.js** 파일은 항상 **기본**이다.<br>
```
<script>
	$(document).ready(function(){
		$("#thumb img").centerImage();
	});
</script>
```
**jquery.blImageCenter.js** 라이브러리로 이미지를 css없이 간편하게 중앙포커스를 할 수 있다.
<br>
## 샘플 이미지
### 가로 샘플
![width_image](./width.jpg "width_image")
### 세로 샘플
![vertical_image](./vertical_img.jpg "vertical_image")
