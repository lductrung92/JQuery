<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>appendTo</title>
	<link rel="stylesheet" href="../libraries/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../libraries/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../libraries/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../libraries/jqwidgets/jqxdragdrop.js"></script>

</head>
<body>
	<img id="img" style="width: 20px; height: 20px" src="http://www.downtowntempe.com/_files/images/shop-small-logo.png"/>
	<script type="text/javascript">
		$('#img').jqxDragDrop({
		    appendTo: 'body',
		    distance: 100 // khoang cach tu 
		});
	</script>
</body>
</html>