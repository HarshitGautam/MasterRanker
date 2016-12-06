<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Onassis - Bootstrap 3 Theme</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/Chart.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>
	

	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
		<!-- Navigation bar -->


		
<!-- ======================================================================================================== -->
		
		
		
		
		
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Onassis</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#services" class="smoothScroll">Services</a>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
		<div class="container">
  <!-- Navigation -->
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href="/index.html">Home</a></li>
            <li class="active"><a href="/markets.html">Markets</a></li>
            <li><a href="/buy.html">Buy</a></li>
            <li><a href="/svstrike.html">svStrike</a></li>
            <li><a href="/training.html">Training</a></li>
            <li><a href="/contact.html">Contact Us</a></li>
            <li class="visible-xs-block"><a href="/about.html">About Us</a></li>
            <li class="visible-xs-block"><a href="/careers.html">Careers</a></li>
            <li class="visible-xs-block"><a href="/press-release.html">Press Release</a></li>
            <li class="visible-xs-block"><a href="https://susteen7.zendesk.com/hc/en-us">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="press-release.html">Press Release</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold" href="https://susteen7.zendesk.com/hc/en-us">Support</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>

			<br>
			<h1>Master Ranker</h1>
			<h2>One Stop For All Your University Rankings</h2>
		<form enctype="form-data/multipart" action="index.php" method="post">
    <div class="form-group">
      <select class="form-control" name="select_school" id="dropdown1" >
	 <option value="0" selected>Select School</option>
<?php
	$conn = new mysqli("localhost","root","","ranking_master");

		//print_r($_POST);
		echo "called";
		$result = $conn->query("SELECT s.scId,s.schoolName,u.universityName FROM school as s,university as u where u.uId=s.uId order by universityName asc");
		
		while($row = $result->fetch_assoc()){
			$tempString=$row['universityName']."-".$row['schoolName'];
			echo "<option value=".$row['scId'].">".$tempString."</option>";
		}
	
?>
      </select>
      <br>
	  <select class="form-control" name="select_program" id="dropdown2" >
        <option value="0" selected>Select Program</option>
         <option value="100001">MBA</option>
         <option value="100002">MS-IS</option>
         <option value="100003">MS-BA</option>
      </select>
	  <br>
        <select class="form-control" name="select_year"id="dropdown3" >
		<option value="0" selected>Select Year</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
      </select>
	  <br>
	  <select class="form-control" name="select_source" id="dropdown4" >
	  <option value="0" selected>Select Source</option>
      <option value="10001">College Choice</option>
      <option value="10002">TFE Times</option>
	  <option value="10003">US news</option>
	  <option value="10004">MBA 50</option>
      </select>
	  <br>
	  <br>
    </div>
	<input type="submit" value="Submit" name= "submit" onclick="decide()">
  </form>
  <br>
  
 <script language="Javascript">
 /*
 function decide()
{
   
     
    if(document.getElementById("dropdown1")!=0 && document.getElementById("dropdown2")==0 && document.getElementById("dropdown3")==0 &&document.getElementById("dropdown4")==0)
    {
		 alert("called");
        var row = document.getElementById("myRow");
    var x = row.insertCell(6);
    x.innerHTML = "row.name"+" 2016";
    } 
    
}*/

</script>  
 <?php 
 if(isset($_POST) && array_key_exists('submit',$_POST))
 {
 $selected_school = isset($_POST['select_school']) ? $_POST['select_school'] : '';
 $selected_program = isset($_POST['select_program']) ? $_POST['select_program'] : '';
 $selected_year = isset($_POST['select_year']) ? $_POST['select_year'] : '';
 $selected_source = isset($_POST['select_source']) ? $_POST['select_source'] : '';
  $servername ='localhost';
  $username = 'root';
  $password = '';
  $dbname = 'ranking_master';
  
echo " $selected_school,$selected_program,$selected_year, $selected_source ";


$conn = new mysqli($servername, $username, $password, $dbname);
$query="";
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
#no filter is selected
 if ($selected_school==0&&$selected_program==0&& $selected_year==0 && $selected_source==0)
 { 
	echo "<script language=\"Javascript\"> alert(\"Please select one of the filter value\")</script>";

	}
# only school is selected
 else if ($selected_school!=0&&$selected_program==0&& $selected_year==0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId and r.scId = $selected_school order by programName asc, year desc";
 }
 #only program is selected
 else if ($selected_school==0&&$selected_program!=0&& $selected_year==0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.pId=$selected_program and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by universityName ASC, year desc,rank ASC";
 }
 #only year is selected
  else if ($selected_school==0&&$selected_program==0&& $selected_year!=0 && $selected_source==0)
 {
	echo "<script language=\"Javascript\"> alert(\"Please select a valid combination of filter value \")</script>";
 }
 #only source is selected
  else if ($selected_school==0&&$selected_program==0&& $selected_year==0 && $selected_source!=0)
 {
	echo "<script language=\"Javascript\"> alert(\"Please select a valid combination of filter value \")</script>";
 }
 #When school and program is selected
 else if ($selected_school!=0&&$selected_program!=0&& $selected_year==0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and r.pId=$selected_program and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by year desc, rank asc";
 }
 #When a school and year is selected
 else if ($selected_school!=0&&$selected_program==0&& $selected_year!=0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and year=$selected_year and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by programName asc,year desc";
 }
 #When a school and a source is selected
 else if ($selected_school!=0&&$selected_program==0&& $selected_year==0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by programName asc, year desc";
 }
 #When a program and year is selected
 else if ($selected_school==0&&$selected_program!=0&& $selected_year!=0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.pId=$selected_program and year=$selected_year and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by rank asc";
 }
 #When a source and an year is selected
 else if ($selected_school==0&&$selected_program==0&& $selected_year!=0 && $selected_source!=0)
 {
	echo "<script language=\"Javascript\"> alert(\"Please select a valid combination of filter value \")</script>";
	}
 #When a program and source is selected
 else if ($selected_school==0&&$selected_program!=0&& $selected_year==0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.pId=$selected_program and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by universityName ASC, year desc,rank asc";
 }
 #When a school,a program and an year is selected
 else if ($selected_school!=0&&$selected_program!=0&& $selected_year!=0 && $selected_source==0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and r.pId=$selected_program and year=$selected_year and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by sourceName asc";
 }
 #When a school, program and source is selected
  else if ($selected_school!=0&&$selected_program!=0&& $selected_year==0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and r.pId=$selected_program and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by year desc";
 }
 #When a school, year and source
  else if ($selected_school!=0&&$selected_program==0&& $selected_year!=0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and year=$selected_year and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by programName asc, year desc";
 }
 #When a program, year and source
  else if ($selected_school==0&&$selected_program!=0&& $selected_year!=0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.pId=$selected_program and year=$selected_year and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by rank asc";
 }
 #When all fields is selected
  else if ($selected_school!=0&&$selected_program!=0&& $selected_year!=0 && $selected_source!=0)
 {
	$query = "select u.universityName, sc.schoolName, r.year, r.rank, p.programName, s.sourceName from university u, school sc, ranked r, program p, source s  where r.scId=$selected_school and r.pId=$selected_program and year=$selected_year and r.sId=$selected_source and u.uId = sc.uId and r.scId = sc.scId and p.pId = r.pId and s.sId = r.sId order by programName asc, year desc";
 }
 if($query!=NULL )
{
if (!$conn->query($query)) 
{
    printf("Errormessage: %s\n", $conn->error);
}
	$result = $conn->query($query);
}
 }
?>
  <table class="demo" align="center" style="color: #fff;" id="table1">
        <tr style="color: #fff;" class="header" id="myRow">
            <td>University</td>
            <td>School</td>
			<td>Program</td>
			<td>Source</td>
			<td>Year</td>
			<td>Rank</td>
        </tr>
    <?php
		 if($result != NULL)
		 {
           $i = 0;
           while ($row = $result->fetch_assoc()) 
		   {
               $class = ($i == 0) ? "" : "alt";
               echo "<tr class=\"".$class."\">";
               echo "<td>".$row["universityName"]."</td>";
			   echo "<td>".$row["schoolName"]."</td>";
               echo "<td>".$row["programName"]."</td>";
			   echo "<td>".$row["sourceName"]."</td>";
			   echo "<td>".$row["year"]."</td>";
			   echo "<td>".$row["rank"]."</td>";
               echo "</tr>";
               $i = ($i==0) ? 1:0;
           }
 }
 
        ?>
    </table>
<br>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>At Master Ranker we believe that education and career decisions are too important to leave to chance, so we want to ensure candidates have access to the best tools and the best information from authentic sources before making a decision.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>WE WORK HARD TO DELIVER A <bold>HIGH QUALITY SERVICE</bold>. OUR AIM IS YOUR COMPLETE <bold>SATISFACTION</bold>.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->
	
	<!-- ========== ABOUT - GREY SECTION ========== -->
	<section id="about" name="about"></section>
	<div id="g">
		<div class="container">
			<div class="row">
				<h3>ABOUT US</h3>
				<br>
				<br>
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
				<p>Our mission is to provide one stop solution to students in search of US University rankings. With that in mind, we have created a portal which collates ranking of Schools and their programs from major ranking sources. Our enhanced searching ability based on multiple criteria, which students consider while selecting colleges, makes us stand out. At Master Ranker we believe that education and career decisions are too important to leave to chance, so we want to ensure candidates have access to the best tools and the best information from authentic sources before making a decision. Our ambition is to be the world’s leading university ranking company in the higher education field.</p>
				<br>
				<br>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-3 team">
					<img class="img-circle" src="assets/img/team01.jpg" height="90" width="90">
					<h4>Kunal Sharma</h4>
					<h5><i>Product Manager</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="assets/img/team02.jpg" height="90" width="90">
					<h4>Chinmay Pai</h4>
					<h5><i>Front-end Developer</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="assets/img/team03.jpg" height="90" width="90">
					<h4>Harshit Gautam</h4>
					<h5><i>Web Designer</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="assets/img/team04.jpg" height="90" width="90">
					<h4>Akshat Maltare</h4>
					<h5><i>Back-end</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>CONTACT US</b></h3>
					<br>
					<div class="col-lg-4">
						<h3><b>Send Us A Message:</b></h3>
						<h3>inboxharshit@gmail.com</h3>
						<br>
					</div>
					
					<div class="col-lg-4">	
						<h3><b>Call Us:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>
					
					<div class="col-lg-4">
						<h3><b>We Are Social</b></h3>
						<p>
							<a href="index.html#"><i class="icon-facebook"></i></a>
							<a href="index.html#"><i class="icon-twitter"></i></a>
							<a href="index.html#"><i class="icon-envelope"></i></a>
						</p>
						<br>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>