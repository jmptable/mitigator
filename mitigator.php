<!doctype.html>
<html>
	<head>
		<title>mitigator</title>
		<link rel="stylesheet" href="default.css">
	</head>
	<body onload="makeRequest('a')">
		<script src="mitigator.js"></script>
		
		<div id="header">
			<h3 class="content-bubble" style="padding: 1em;">~ mitigator ~</h3>
			<hr>
		</div>

		<div id="container">
			<div id="center" class="column">
				<div class="column-bubble">
					<b>focus</b>
					<hr>
					<?php for ($i = 1; $i <= 10; $i++) { ?>
						<div class="content-bubble">
							<table style="width: 100%;"><tr>
								<td><div class="task-info">
									<table>
										<tr>
											<td>name:</td>
											<td id="title">test task #<?=$i?></td>
										</tr>
										<tr>
											<td>due date:</td>
											<td>tomorrow</td>
										</tr>
									</table>
								</div></td>
								<td valign=top><div class="task-description">
									This is a task necessary to test the system.
								</div></td>
							</tr></table>
						</div>
					<?php }?>
				</div>
			</div>
			
			<div id="left" class="column">
				<div class="column-bubble">
					<b>collections</b>
					<hr>
				</div>
			</div>
			
			<div id="right" class="column">
				<div class="column-bubble">
					<b>details</b>
					<hr>
				</div>
			</div>

		</div>

		<div id="footer"></div>
	</body>
</html>
