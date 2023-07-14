<html>
<head>

	<title>Tsvetan Tsvetanov | Technical Lead | tsvetantsvetanov89@gmail.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="fonts.css" media="all" />

	<style>
		.zoom {
  			padding: 0px;
  			background-color: green;
 			transition: transform .2s; /* Animation */
  			width: 50px;
 			height: 80px;
 			margin: 0 auto;
		}

		.zoom:hover {
  			transform: scale(4.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
		}
	</style>

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>Tsvetan Tsvetanov</h1>
					<h2>Cloud Support Engineer, Technical Lead</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<img height="120" width="120" src="pic.png">
						<h3><a id="pdf" href="cv.pdf" target="_blank" download="PDF">Download PDF</a></h3>
						<h3><a id="pdf" href="https://bg.linkedin.com/in/tsvetan-tsvetanov-3a55b5182" target="blank">LinkedIn</a></h3>
						<h3><a href="mailto:tsvetantsvetanov89@gmail.com">tsvetantsvetanov89@gmail.com</a></h3>
						<h3>Phone: (359) - 888-593756</h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								Professional with 5+ years of experience with international businesses within complex and multicultural environments. Passionate and self-driven individual with excellent communication and problem-solving skills. I work efficiently under pressure and have strong attention to detail in order to complete strategic goals. Flexible and able to adapt to any change. 
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

							<div class="talent" style="horizontal-align:center">
								<h2 style="horizontal-align:center">Azure</h2>
								<p style="horizontal-align:center">Automation & Configuration Management</p>
								<p style="horizontal-align:center">Monitoring & Alerting</p>
								<p style="horizontal-align:center">Active Directory</p>
								<p style="horizontal-align:center">IaC with ARM/Bicep</p>
							</div>

							<div class="talent">
								<h2>Server Administration</h2>
								<p>Windows</p>
								<p>Linux</p>
								<p>Docker</p>
							</div>

							<div class="talent">
								<h2>Programming</h2>
								<p>C#</p>
								<p>HTML</p>
								<p>PHP</p>
								<p>Ruby</p>
							</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Tools</h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>Terraform</li>
								<li>Jenkins</li>
								<li class="last">Postman</li>
							</ul>

							<ul class="talent">
								<li>Powershell</li>
								<li>Bash</li>
								<li class="last">Azure CLI</li>
							</ul>

							<ul class="talent">
								<li>Ansible</li>
								<li>Chef</li>
								<li class="last">Puppet</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

				<?php
						require_once ('config.php');
					 
						try {
						   $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
						   $employerquery = $connection->query("SELECT DISTINCT employer_name FROM jobs ORDER BY id ASC");
						   $employers = $employerquery->fetchAll();
						   
						   if (empty($employers)) {
							  echo "<tr><td>Няма данни.</td></tr>\n";
						   } else {
								for ($i = 0; $i < count($employers); $i++) {
									$employer = $employers[$i];
									if ($i == (count($employers) - 1)) {
										print "<div class='job last'>
												<h2>{$employer['employer_name']}<br></br></h2>";
										try {
											$jobsquery = $connection->query("SELECT employer_name, job_title, period_time, job_description FROM jobs WHERE employer_name = \"{$employer['employer_name']}\" ORDER BY id ASC");
											$jobs = $jobsquery->fetchAll();
										
											if (empty($jobs)) {
												echo "<tr><td>Няма данни.</td></tr>\n";
											} else {
												for ($k = 0; $k < count($jobs); $k++) {
													$job = $jobs[$k];
													print "<h3>{$job['job_title']}</h3>	
														   <h4>{$job['period_time']}</h4>
														   <p>{$job['job_description']}</p>";
													if ($k == (count($jobs) - 1)) {
														print "</div>";
													}
												}
											}
										}
										catch (PDOException $e) {
											print "<tr><td><div align='center'>\n";
											print "Няма връзка към базата. Опитайте отново. <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: block;';\">Детайли</a><br/>\n";
											print "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: none;';\">Скрий</a></i></small></span>\n";
											print "</div></td></tr>\n";
										}	
									} else {
										print "<div class='job'>
												<h2>{$employer['employer_name']}<br></br></h2>";
										
										try {
											$jobsquery = $connection->query("SELECT employer_name, job_title, period_time, job_description FROM jobs WHERE employer_name = \"{$employer['employer_name']}\" ORDER BY id ASC");
											$jobs = $jobsquery->fetchAll();
										
											if (empty($jobs)) {
												echo "<tr><td>Няма данни.</td></tr>\n";
											} else {
												for ($k = 0; $k < count($jobs); $k++) {
													$job = $jobs[$k];
													print "<h3>{$job['job_title']}</h3>	
													<h4>{$job['period_time']}</h4>
													<p>{$job['job_description']}</p>";
													if ($k == (count($jobs) - 1)) {
														print "</div>";
													}
												}
											}
										}
										catch (PDOException $e) {
											print "<tr><td><div align='center'>\n";
											print "Няма връзка към базата. Опитайте отново. <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: block;';\">Детайли</a><br/>\n";
											print "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: none;';\">Скрий</a></i></small></span>\n";
											print "</div></td></tr>\n";
										}
									}
						   		}
							}
						}
						catch (PDOException $e) {
						   print "<tr><td><div align='center'>\n";
						   print "Няма връзка към базата. Опитайте отново. <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: block;';\">Детайли</a><br/>\n";
						   print "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: none;';\">Скрий</a></i></small></span>\n";
						   print "</div></td></tr>\n";
						}
				?>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
				<?php
						require_once ('config.php');
					 
						try {
						   $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
						   $educationquery = $connection->query("SELECT university_name, university_location, specialty_title FROM education ORDER BY id ASC");
						   $education = $educationquery->fetchAll();
					 
						   if (empty($education)) {
							  echo "<tr><td>Няма данни.</td></tr>\n";
						   } else {
							  foreach ($education as $edu) {
								print "<div class='yui-u'>
									<h2>{$edu['university_name']} - {$edu['university_location']}</h2>
									<h3>{$edu['specialty_title']}<br></br></h3>
								</div>";
							  }
						   }
						}
						catch (PDOException $e) {
						   print "<tr><td><div align='center'>\n";
						   print "Няма връзка към базата. Опитайте отново. <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: block;';\">Детайли</a><br/>\n";
						   print "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: none;';\">Скрий</a></i></small></span>\n";
						   print "</div></td></tr>\n";
						}
				?>
					</div><!--// .yui-gf -->

					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Certifications</h2>
						</div>
						<div class="yui-u">
				<table>
				<?php
						require_once ('config.php');
					 
						try {
						   $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
						   $certsquery = $connection->query("SELECT cert_title, issuer_name, date_of_issue, certificate_image FROM certifications ORDER BY id ASC");
						   $certs = $certsquery->fetchAll();
					 
						   if (empty($certs)) {
							  echo "<tr><td>Няма данни.</td></tr>\n";
						   } else {
							  foreach ($certs as $cert) {
								print "<tr><td style=\"vertical-align:top\"><h3>{$cert['cert_title']}&nbsp;&nbsp;</td><td>";
								print '<div class="zoom"><img height="80" width="50" src="data:image/jpeg;base64,'.base64_encode( $cert['certificate_image'] ).'"/></div>';
								print "</td><td style=\"vertical-align:top\">&nbsp;{$cert['date_of_issue']},</td><td style=\"vertical-align:top\">&nbsp;{$cert['issuer_name']}</td><tr><td>&nbsp;&nbsp;</td></tr></h3>";
							  }
						   }
						}
						catch (PDOException $e) {
						   print "<tr><td><div align='center'>\n";
						   print "Няма връзка към базата. Опитайте отново. <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: block;';\">Детайли</a><br/>\n";
						   print "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href=\"#\" onclick=\"document.getElementById('error').style = 'display: none;';\">Скрий</a></i></small></span>\n";
						   print "</div></td></tr>";
						}
				?>
				</table>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Languages</h2>
						</div>
						<div class="yui-u">
							<h2>Bulgarian</h2>
							<h3>Native</h3>
						</div>
						<div class="yui-u">
							<h2>English</h2>
							<h3>Fluent</h3>
						</div>
						<div class="yui-u last">
							<h2>Italian</h2>
							<h3>Basic</h3>
						</div>
					</div><!--// .yui-gf -->

				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>Tsvetan Tsvetanov &mdash; <a href="mailto:tsvetantsvetanov89@gmail.com">tsvetantsvetanov89@gmail.com</a> &mdash; (359) - 888-593756</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>
