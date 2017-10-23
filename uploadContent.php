<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Sky | Moodslider</title><!-- Start of Favicon -->
	<link href="pic/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="pic/favicon.ico" rel="icon" type="image/x-icon"><!-- End of favicon -->
	<meta content="Sky Moodslider" name="description">
	<meta content="Simon Morgan" name="author">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- start header -->
	<div id="header">
		<div class="container">
			<div class="header-info">
				<div class="row">
					<div class="col-lg-12 col-md-6 col-sm-6">
						<div class="row">
							<div class="col-lg-2 col-md-4 col-sm-4"><img alt="Sky Logo Lg" class="img-responsive" src="pic/skylogo-lg.png"></div>
							<div class="col-lg-10 col-md-8 col-sm-8">
								<div class="text-centre">
								<h2 class="title-bar">TITLE BAR</h2>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Header -->
	<!-- Start Navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-left" href="index.html"><img alt="SKy Logo xsml" class="img-responsive" src="pic/skylogo-xxxsml.png"></a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="inex.html"><span class="glyphicon glyphicon-home"></span> HOME</a>
					</li>
					<li>
						<a href="uploadContent.html"><span class="glyphicon glyphicon-upload"></span> Upload Content</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav><!-- end:navbar -->
	<!-- start of upload php -->
<?php

$name = $_FILES ['file']['name'];
$extension = strtolower(substr($name, strpos($name, '.') +1 ));//finds the file extension by looking for charecters after the '.' and makes it lowercase
//$size = $_FILES ['file']['size'];
$type = $_FILES ['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)){//Checks if the form has been submited
  if (!empty($name)){//Check if a file has been selected
    if (($extension=='xml')&&$type=='text/xml'){
      $location = 'uploads/'; //Specified location
      if (move_uploaded_file($tmp_name, $location.$name));{
        echo $name;
        echo " Upload Complete, you will now be redirected back to the Moodslider"; // Informs user upload is complete
        echo "<meta http-equiv=\"refresh\" content=\"2;url=index.html\"/>";
      }
    } else {
      echo "Error: The Upload File Must be of XML type";//Informs the user there is in an error in their choice of file
			echo "<meta http-equiv=\"refresh\" content=\"2;url=uploadContent.html\"/>";
		}
  }else{
    echo "Please choose a file"; //Asks user to select a file
		echo "<meta http-equiv=\"refresh\" content=\"2;url=uploadContent.html\"/>";
  }

}

?>
<!-- end of upload php -->
</body>
</html>
