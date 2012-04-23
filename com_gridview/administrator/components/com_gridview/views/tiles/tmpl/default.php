<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10px" align="center"><?= @text('#') ?></th>
				<th width="20px"><?= @helper('grid.checkall') ?></th>

				<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
				<th width="150"><?= @helper('grid.sort', array('column' => 'gridview_page_id')) ?></th>

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
			foreach ($tiles as $tile): ?>
			<tr>
				<td align="center"><?= $i ?></td>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $tile)) ?></td>

				<td><a href="<?= @route('view=tile&id='. $tile->id) ?>">
					<?= $tile->title ?>
				</a></td>
				<td align="center"><?= $tile->gridview_page_id ?></td>

				<td align="center"><?= $tile->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>

			<? if (!count($tiles)): ?>
			<tr>
				<td align="center" colspan="10">
					<?= @text('There are no tiles available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>
