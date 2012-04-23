<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='. $page->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('General Settings') ?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input type="text" id="field_title" name="title" value="<?= $page->title ?>" />
				</li>
				<li>
					<label for="field_gridview"><?= @text('Gridview') ?>:</label>
					<?= @helper('listbox.gridviews') ?>
				</li>
			</ul>
		</fieldset>
	</div>
</form>
