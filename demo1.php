<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello World</title>
	<!-- add the jQuery script -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>	
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="libraries/jqwidgets/jqxcore.js"></script>
    <!-- add one or more widgets -->
    <script type="text/javascript" src="libraries/jqwidgets/jqxbuttons.js"></script>
    <!-- add the jQWidgets base styles and one of the theme stylesheets -->
    <link rel="stylesheet" href="libraries/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="libraries/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
</head>
<body>
    <input type="button" value="Click Me" id='myButton'/>


    <script>
    	$(document).ready(function() {
    		$('#myButton').jqxButton({width: '120px', height: '35px', theme: 'darkblue'})
    	});

    </script>
</body>
</html>