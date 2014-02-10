<?php defined('C5_EXECUTE') or die(_("Access Denied."));
class ThedaywefightbackPackage extends Package {

	protected $pkgHandle = 'thedaywefightback';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '0.9.1';
	
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
		$view = View::getInstance();
		$view->addFooterItem('<!--[if !(lt IE 8)]><!-->
   			<script type="text/javascript">
   			var tdwfb_config = {
				disableDate: false // If true, the banner shows even if the date is not yet 02/11/2014. Use for testing.
  				};
     			(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=document.location.protocol+"//d1agz031tafz8n.cloudfront.net/thedaywefightback.js/widget.min.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()
   			</script>
			<!--<![endif]-->');
	}
}
