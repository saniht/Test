<div id="widget-area">

	<div class="full">

		<div class="widget">

			<div class="widget-title">

				<p>My Timetable</p>

			</div>

			<div class="widget-content">

				<?php fullTimetable(); ?>

			</div>

		</div>

	</div>

	<div class="col">

		<div class="widget">

			<div class="widget-title">

				<p>My Homework</p>

			</div>

			<div class="widget-content">

				<?php getMyHomework(); ?>

			</div>

		</div>

	</div>

	<div class="col">

		<div class="widget">

			<div class="widget-title">

				<p>Today - <?php echo(date("l d/m/Y")); ?></p>

			</div>

			<div class="widget-content">

				<?php getToday(); ?>

			</div>

		</div>

	</div>

</div>