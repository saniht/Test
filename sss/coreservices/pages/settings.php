<div id="widget-area">

	<div class="">

		<div class="widget">

			<div class="widget-title">

				<p>Settings</p>

			</div>

			<div class="widget-content">

				<form method="post" action="coreservices/adminservices/savesettings.php">

					<label>Site Title</label>

					<input type="text" name="sitename" value="<?php echo(setting('sitename')); ?>" />

					<label>Site Description</label>

					<input type="text" name="sitedesc" value="<?php echo(setting('sitedesc')); ?>"/>

					<label>Lessons in a day</label>

					<input type="number" name="lessons" value="<?php echo(setting('lessons')); ?>"/>

					<label>Theme Name</label>

					<input type="text" name="theme" value="<?php echo(setting('theme')); ?>"/>

					<input type="submit" value="Save">

				</form>

			</div>

		</div>

	</div>

</div>