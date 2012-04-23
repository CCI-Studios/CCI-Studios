<?php

class ComGridViewModelTiles extends KModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'title')
			->insert('gridview_page_id', 'int');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if ($state->gridview_page_id) {
			$query->where('gridview_page_id', '=', $state->gridview_page_id);
		}

		parent::_buildQueryWhere($query);
	}
}
