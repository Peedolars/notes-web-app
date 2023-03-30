<?php
include("functions.php");
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.html">
<title>Simple Notes App using JavaScript and PHP/MySQL</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="js/js_code.js"></script>
<!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="col-md-4" style="margin:0 auto;float:none !important; margin-top:50px;margin-bottom:60px">
<div class="col-md-12 event-list-block">
<div class="cal-day">
<span>Date Today</span>
<?php echo date('M d, Y h:i:s A l',strtotime('+6 hour'));?>
</div>
<ul class="event-list">
	<?php load_notes(); ?>
</ul>
<input type="text" class="form-control evnt-input" placeholder="Enter your notes . . . . ." autofocus="autofocus" />
</div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/script.js"></script>

</body>
</html>