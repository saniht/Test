<div id="widget-area">

	<div class="">

		<div class="widget">

			<div class="widget-title">

				<p><?php subject('name'); ?></p>

			</div>

			<div class="widget-content">

				<p><?php subject('description'); ?></p>

			</div>

		</div>


	<div class="widget">

			<div class="widget-title">

				<p><?php subject('name'); ?> Classes</p>

			</div>

			<div class="widget-content">

				<p><?php listClasses($_GET['ID']); ?></p>

			</div>

		</div>

	</div>

</div>