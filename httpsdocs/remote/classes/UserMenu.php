<?php 

namespace CB;

$customUserMenuClass = CORE_ROOT.'php'.DIRECTORY_SEPARATOR.'UserMenu.php';
if(is_file($customUserMenuClass)){
	include($customUserMenuClass);
	return;
}

/* define generic user menu class */
class UserMenu implements iUserMenu{
	public function getAccordionItems(){
		$rez = array(
			array('title' => '<b>'.mb_strtoupper(L\Folders,'UTF8').'</b>'
				,'iconCls' => 'icon-folderView'
				,'layout' => 'fit'
				,'autoScroll' => false
				,'items' => array(
					'xtype' => 'CBBrowserTree'
					,'rootId' => Browser::getRootFolderId() 
					,'rootVisible' => true
				)
			)
		);
		return $rez;
	}
  
	public function getToolbarItems(){
		$rez = array(
			array('html' => '<a href="#">'.L\Dashboard.'</a>', 'title' => L\Dashboard, 'cls' => 'mtb_link', 'link' => 'CBDashboard')
			,array('html' => '<a href="#">'.L\Tasks.'</a>', 'title' => L\Tasks, 'cls' => 'mtb_link', 'link' => 'CBTasksViewGridPanel') //, 'showDescendants' => true, , 'iconCls' => 'icon-taskView'
			,array('html' => '<a href="#">'.L\Calendar.'</a>', 'title' => L\Calendar, 'cls' => 'mtb_link', 'link' => 'CBCalendarViewPanel') //, 'iconCls' => 'icon-calendarView'
		);
		return $rez;
	}
}
