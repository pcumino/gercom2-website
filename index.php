<?php 
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$node_link = $actual_link.":3000";
$ftplink = "ftp://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP| GERCOM2 - UFPA</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		a{
			color: white;
		}
	</style>
</head>
<body>
	<h1 class="text-center well"><b>GERCOM2 - UFPA</b></h1>
	<p>
		<div class="row text-center">
			<div class="col-sm-3 col-lg-3"></div>
			<div class="col-sm-3 col-lg-3"><div id="nodeAppLink" class="btn btn-primary"><a href="<?php echo $actual_link.':3000'?>">Visit our Node JS app</a></div></div>
			<div class="col-sm-3 col-lg-3"><div class="btn btn-primary"><a href="<?php echo $ftplink?>">Visit our FTP page</a></div></div>
			<div class="col-sm-3 col-lg-3"></div>
		</div>
	</p>
</body>
<script type="text/javascript">
	$(document).ready(function (){
		$.ajax({url: "<?php echo $node_link?>",
			success: function(result){
				$("#div1").html(result);
			},
			error: function(xhr, status, error){
				$("#nodeAppLink").prop({
					disabled: true
				});
				$("#nodeAppLink a").prop({
					disabled: true
				});
			}
		});
	});
</script>
</html>