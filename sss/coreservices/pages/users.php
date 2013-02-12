<div id="widget-area">

	<div class="col">

		<div class="widget">

			<div class="widget-title">

				<p>Add User</p>

			</div>

			<div class="widget-content">

				<form method="post" action="coreservices/adminservices/adduser.php">

					<label>Username</label>

					<input type="text" value="" name="username"/>

					<label>Password</label>

					<input type="password" value="" name="password"/>

					<label>First Name</label>

					<input type="text" value="" name="fname"/>

					<label>Last Name</label>

					<input type="text" value="" name="lname"/>

					<label>Rank</label>

					<select name="RANK">

						<option value="2">Pupil</option>

						<option value="4">Teacher</option>

						<option value="10">Admin</option>

					</select>

					<input type="submit" value="+ Add User" name=""/>

				</form>

			</div>

		</div>

	</div>

	<div class="col">

		<div class="widget">

			<div class="widget-title">

				<p>All Users</p>

			</div>

			<div class="widget-content">

				<?php listUsers(); ?>

			</div>

		</div>

	</div>

</div>