<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>JqxDocking Example</title>
	
	<link rel="stylesheet" href="libraries/jqwidgets/styles/jqx.base.css" type="text/css" />
	<link rel="stylesheet" href="libraries/jqwidgets/styles/jqx.classic.css" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="libraries/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="libraries/jqwidgets/jqxdocking.js"></script>
    <script type="text/javascript" src="libraries/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Create jqxDocking
            $('#docking').jqxDocking('disableWindowResize', 'window2');
        });
    </script>
</head>
<body class='default'>
	<div id="docking">
        <div>
            <div id="window1">
                <img src="http://mudslayermfg.com/images/prosbo_hires.jpg"/>
            </div>
            <div id="window2">
                <div>Header 2</div>
                <div>Content 2</div>
            </div>
        </div>
    </div>
    <div id="docking1">
        
    </div>
</body>
</html>