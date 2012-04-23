<?php

class ComGridViewTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{

	public function gridviews($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'	=> 'gridviews',
			'name'	=> 'gridview_gridview_id',
			'value'	=> 'id',
			'text'	=> 'title',
			'prompt'=> '- Select Gridview -',
		))->append(array(
			'attribs'	=> array('id' => $config->name),
		));

		return parent::_listbox($config);
	}

	public function pages($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'	=> 'pages',
			'name'	=> 'gridview_page_id',
			'value'	=> 'id',
			'text'	=> 'title',
			'prompt'=> '- Select Page -',
		))->append(array(
			'attribs'	=> array('id' => $config->name),
		));

		return parent::_listbox($config);
	}


	public function tileTypes($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'		=> '',
		))->append(array(
			'selected' => $config->{$config->name}
		));

		$options = array();

		$options[] = $this->option(array('text' => JText::_('Image'), 'value' => '1'));
		$options[] = $this->option(array('text' => JText::_('Youtube'), 'value' => '1'));

		$config->options = $options;
		return $this->optionlist($config);
	}

}
