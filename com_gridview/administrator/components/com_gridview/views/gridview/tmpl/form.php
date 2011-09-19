<?= @helper('behavior.mootools') ?>
<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='. $gridview->id) ?>" method="post" class="-koowa-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('General Settings') ?></legend>
			
			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input type="text" id="field_title" name="title" value="<?= $gridview->title ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>

