<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>jqxDragDrop</title>
	<link rel="stylesheet" href="libraries/jqwidgets/styles/jqx.base.css" type="text/css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="libraries/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="libraries/jqwidgets/jqxdragdrop.js"></script>
</head>
<body>
	<h1>Example dropTargetEnter and dropTargetLeave</h1>

	<img src="http://imgreptestdomain.largeinc.com/sites/all/themes/img_2012/img/logos/img-rep-header-logo.png" id="img"/>

	<div style="width:200px; height:200px; padding-top: 100px; background-color: yellow" id="drop"></div>
	<div id="log"></div>
	<script>
		$(document).ready(function() {
			$('#img').jqxDragDrop({
				dropTarget: "#drop",
				//feedback: 'original', // ẩn bóng
				initFeedback: function (feedback) { // css khi kéo
			         feedback.css('width', '100px'),
			         feedback.css('height', '100px'),
			         feedback.css('background-color', 'green'),
			         feedback.text('Go')    
			    },
			    onDragEnd: function() {
					//alert('end');
			    },
			    onDragStart: function() {
					//alert('start');
			    },
			    onDrag: function(data, pos) {
			    	$("#log").html("Left: " + pos.left + ", Top: " + pos.top);
			    	//console.log(pos);
			    },
			    onDropTargetEnter: function() {
			    	$('#drop').html('<p>dropTargetEnter</p>'); //1
			    },
			    onDropTargetLeave: function() {
			    	$('#drop').html('<p>dropTargetLeave</p>'); //2
			    }

			});

			

			

			

			$('#img').jqxDragDrop({
			    onTargetDrop: function () {
			        $("#log").html('On target drop');
			    }
			});

			$('#img').on('dropTargetEnter', function(event) {
				//1
			});
			$('#img').on('dropTargetLeave', function(event) {
				//2
			});

		});



	</script>
</body>
</html>