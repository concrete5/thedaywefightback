<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class FightBackHelper {
	
	public function inDashboard(){
		$request = Request::get();
		$path = $request->getRequestCollectionPath();
		return strpos($path, '/dashboard') === 0;
	}
	
}