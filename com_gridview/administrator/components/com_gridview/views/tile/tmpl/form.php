<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='. $tile->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('General Settings') ?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input type="text" id="field_title" name="title" value="<?= $tile->title ?>" />
				</li>
				<li>
					<label for="field_client"><?= @text('Client') ?>:</label>
					<input type="text" id="field_client" name="client" value="<?= $tile->client ?>" />
				</li>
				<li>
					<label for="field_page"><?= @text('Page') ?>:</label>
					<?= @helper('listbox.pages') ?>
				</li>
			</ul>
		</fieldset>
	</div>

	<div class="fltlft width-40">
		<?= @helper('accordion.startPane') ?>
			<?= @helper('accordion.startPanel', array('title' => 'Website Details')) ?>
				<fieldset class="adminform">
					<ul class="adminformlist">
						<li>
							<label for="field_launch"><?= @text('Launch Date') ?>:</label>
							<input type="text" id="field_launch" name="launch" value="<?= $tile->launch ?>" />
						</li>

						<li>
							<label for="field_address"><?= @text('Address') ?>:</label>
							<input type="text" id="field_address" name="address" value="<?= $tile->address ?>" />
						</li>
					</ul>
				</fieldset>
			<?= @helper('accordion.endPanel') ?>

			<?= @helper('accordion.startPanel', array('title' => 'Marketing Details')) ?>
				<fieldset class="adminform">
					<ul class="adminformlist">
						<li>
							<label for="field_materials"><?= @text('Materials') ?>:</label>
							<input type="text" id="field_materials" name="materials" value="<?= $tile->materials ?>" />
						</li>
					</ul>
				</fieldset>
			<?= @helper('accordion.endPanel') ?>

			<?= @helper('accordion.startPanel', array('title' => 'Good Times Details')) ?>
				<fieldset class="adminform">
					<ul class="adminformlist">
						<li>
							<label for="field_description"><?= @text('Description') ?>:</label>
							<textarea name="description"><?= $tile->description ?></textarea>
						</li>
					</ul>
				</fieldset>
			<?= @helper('accordion.endPanel') ?>
		<?= @helper('accordion.endPane') ?>
	</div>

</form>
