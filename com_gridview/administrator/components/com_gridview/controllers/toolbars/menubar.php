<?php

class ComGridViewControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
	
	public function getCommands()
	{
		$name = $this->getController()->getIdentifier()->name;
		
		$this->addCommand('Gridviews', array(
			'href'		=> 'index.php?option=com_gridview&view=gridviews',
			'active'	=> ($name == 'gridview')
		));
		
		$this->addCommand('Pages', array(
			'href'		=> 'index.php?option=com_gridview&view=pages',
			'active'	=> ($name == 'page')
		));
		
		$this->addCommand('Tiles', array(
			'href'		=> 'index.php?option=com_gridview&view=tiles',
			'active'	=> ($name == 'tile')
		));
		
		/* $this->addCommand('Images', array(
			'href'		=> 'index.php?option=com_gridview&view=images',
			'active'	=> ($name == 'image')
		)); */
		
		return parent::getCommands();
	}
	
	
}