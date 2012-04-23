<?php

class ComGridViewModelPages extends KModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'title')
			->insert('gridview_gridview_id', 'int');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if ($state->gridview_gridview_id) {
			$query->where('gridview_gridview_id', '=', $state->gridview_gridview_id);
		}

		parent::_buildQueryWhere($query);
	}
}
