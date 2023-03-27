<html>
<head>

	<title>Tsvetan Tsvetanov | Technical Lead | tsvetantsvetanov89@gmail.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="fonts.css" media="all" />

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
						<h3><a id="pdf" href="#" target="_blank" download="PDF">Download PDF</a></h3>
						<h3><a href="mailto:tsvetantsvetanov89@gmail.com">tsvetantsvetanov89@gmail.com</a></h3>
						<h3>(359) - 888-593756</h3>
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
								Experienced Cloud Support Engineer, currently working as a Technical Lead in the Azure Monitoring and Automation team at Tek Experts. A naturally curious persion with passion to learn about emerging technologies. 
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

							<div class="talent">
								<h2>Problem-Solving</h2>
								<p> Research and analytical skills</p>
								<p> Decision making</p>
							</div>

							<div class="talent">
								<h2>Communication</h2>
								<p>Strong interpersonal skills</p>
								<p>Team player</p>
								</div>

								<div class="talent">
									<h2>Organization</h2>
									<p>Time management</p>
									<p>Drive</p>
								</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>Windows</li>
								<li>Linux</li>
								<li class="last">Active Directory</li>
							</ul>

							<ul class="talent">
								<li>Azure</li>
								<li>PowerShell/Bash</li>
								<li class="last">Terraform</li>
							</ul>

							<ul class="talent">
								<li>C#</li>
								<li>HTML/CSS</li>
								<li class="last">MS Office</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

					 <?php
						require_once ('config.php');
					 
						try {
						   $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
						   $jobsquery = $connection->query("SELECT employer_name, job_title, period_time, job_description FROM jobs ORDER BY period_time DESC");
						   $jobs = $jobsquery->fetchAll();
					 
						   if (empty($jobs)) {
							  echo "<tr><td>Няма данни.</td></tr>\n";
						   } else {
							  foreach ($jobs as $job) {
								 print "<tr><td>{$job['employer_name']}</td><td align=\"right\">{$job['job_title']}</td></tr>\n";
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
						<div class="yui-u">

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>South-West University - Blagoevgrad, Bulgaria</h2>
							<h3>Business Administration<br></br></h3>
						</div>
						<div class="yui-u">
							<h2>PMG Akad. S. P. Koroliov - Blagoevgrad, Bulgaria</h2>
							<h3>Mathematics/English</h3>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Certifications</h2>
						</div>
						<div class="yui-u">
							<h3>Azure Administrator Associate - Microsoft</h3>
							<h3>C# Programming Basics - SoftUni</h3>
							<h3>C# Programming Fundamentals - SoftUni</h3>
							<h3>C# Advanced - SoftUni</h3>
							<h3>Windows Server Administration - SoftUni</h3>
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

