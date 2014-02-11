<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThedaywefightbackPackage extends Package {

	protected $pkgHandle = 'thedaywefightback';
	protected $appVersionRequired = '5.6.0';
	protected $pkgVersion = '0.9.2';

	public function getPackageDescription() {
		return t("Displays a footer banner from thedaywefightback.org.");
	}

	public function getPackageName() {
		return t("The Day We Fight Back.");
	}

	public function install() {
		$pkg = parent::install();
	}

	public function on_start() {
		if (strtotime('now') < strtotime('12:01am february 10th 2014') && !Loader::helper('concrete/dashboard')->inDashboard()){
			$view = View::getInstance();
			$view->addFooterItem(
"<!--[if !(lte IE 8)]><!--> 
<script type='text/javascript'> 
	var tdwfb_config = {
		greeting: 'Dear Internet', // Sets the salutation at the top left, will be followed by a comma
		disableDate: false, // If true, the banner shows even if the date is not yet 02/11/2014
		callOnly: false // If true, the banner only displays a form for calling congress
	};
	(function(){
		var e = document.createElement('script'); e.type='text/javascript'; e.async = true;
		e.src = document.location.protocol + '//d1agz031tafz8n.cloudfront.net/thedaywefightback.js/widget.min.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s);
	})();
</script>
<!--<![endif]-->");
		}
	}
}
