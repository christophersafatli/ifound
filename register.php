<title>Registration</title>

<?php
	include("ssi/rl_header.php");
?>

<style>
	body {
		max-width: 980px;
		margin: 2em auto;
		font: normal 17px/1.5 Arial, sans-serif;
		color: #79941f;
		overflow-y: scroll;
	}

	.content {
		margin: 0 30px;
	}

	.field.buttons button {
		margin-right: .5em;
	}

	#invalid {
		display: none;
		float: left;
		width: 290px;
		margin-left: 120px;
		margin-top: .5em;
		color: #CC2A18;
		font-size: 130%;
		font-weight: bold;
	}

	.idealforms.adaptive #invalid {
		margin-left: 0 !important;
	}

	.idealforms.adaptive .field.buttons label {
		height: 0;
	}
</style>

<body>

	<img src="img/logo.png" class="logo"/> <!-- logo -->

	<hr style="margin-bottom: 0px;"/>
	<!-- the break -->

	<div class="idealsteps-container">

		<nav class="idealsteps-nav"></nav>
		<!-- Steps -->

		<div id="responsemsg"></div>
		<!-- The response message-->

		<form id="frmInputData" action="php/into_data.php" method="post" novalidate autocomplete="off" class="idealforms">

			<div class="idealsteps-wrap">

				<!-- Step 1 -->

				<section class="idealsteps-step">

					<div class="field">
						<label class="main">User Name:</label>
						<input name="username" type="text" data-idealforms-ajax="php/ajax-username.php">
						<span class="error"></span>
					</div>

					<div class="field">
						<label class="main">E-Mail:</label>
						<input name="email" type="email" data-idealforms-ajax="php/ajax-email.php">
						<span class="error"></span>
					</div>

					<div class="field">
						<label class="main">Password:</label>
						<input name="password" type="password">
						<span class="error"></span>
					</div>

					<div class="field">
						<label class="main">Confirm:</label>
						<input name="confirmpass" type="password">
						<span class="error"></span>
					</div>

					<div class="field buttons">
						<label class="main">&nbsp;</label>
						<button type="button" class="next">
							Next &raquo;
						</button>
					</div>

				</section>

				<!-- Step 2 -->

				<section class="idealsteps-step">

					<div class="field">
						<label class="main">Phone:</label>
						<input name="phone" type="text" placeholder="000-000-0000">
						<span class="error"></span>
					</div>

					<div class="field">
						<label class="main">Gender:</label>
						<p class="group">
							<label>
								<input name="gender" type="radio" value="Male">
								Male</label>
							<label>
								<input name="gender" type="radio" value="Female">
								Female</label>
						</p>
						<span class="error"></span>
					</div>

					<div class="field">
						<label class="main">Date:</label><!-- mm-dd-yy -->
						<input name="date" type="text" placeholder="mm/dd/yyyy" class="datepicker">
						<span class="error"></span>
					</div>

					<div class="field buttons">
						<label class="main">&nbsp;</label>
						<button type="button" class="prev">
							&laquo; Prev
						</button>
						<button type="submit" class="submit" value="submit">
							Submit
						</button>
						<!-- name="submit" added -->
					</div>

				</section>

			</div>

			<span id="invalid"></span>

		</form>

	</div>
	
<?php
	include("ssi/rl_footer.php")
?>

