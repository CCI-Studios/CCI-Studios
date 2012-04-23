<? defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://com_gridview/js/gridview.admin.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<?= @template('default_filter') ?>

	<table class="adminlist">
		<thead>
			<tr>
				<th width="10px" align="center"><?= @text('#') ?></th>
				<th width="20px"><?= @helper('grid.checkall') ?></th>

				<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
				<th width="150"><?= @helper('grid.sort', array('column' => 'gridview_gridview_id')) ?></th>

				<th width="20px"><?= @text('id') ?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td align="center" colspan="10">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>

		<tbody>
			<? $i = 1;
			foreach ($pages as $page): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $page)) ?></td>

				<td><a href="<?= @route('view=page&id='. $page->id) ?>">
					<?= $page->title ?>
				</a></td>
				<td align="center"><?= $page->gridview_gridview_id ?></td>

				<td align="center"><?= $page->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>

			<? if (!count($pages)): ?>
			<tr>
				<td align="center" colspan="10">
					<?= @text('There are no pages available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>
