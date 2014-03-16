<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16.03.14
 * Time: 17:12
 */

namespace Cundd\NoshiWebsite\Plugins;

use Cundd\Noshi\ConfigurationManager;
use Cundd\Noshi\Ui\AbstractUi;

/**
 * A very simple plugin to insert a "night" stylesheet
 *
 * @package Cundd\NoshiWebsite\Plugins
 */
class Stylesheet extends AbstractUi {
	/**
	 * Render the UI element
	 *
	 * @return string
	 */
	public function render() {
		$resourcePath = ConfigurationManager::getConfiguration()->getResourceDirectoryUri();
		$fileSuffix = (intval(@date('H')) > 18) ? '-dark' : '';
		return "<link rel=\"stylesheet\" href=\"$resourcePath/Stylesheets/main$fileSuffix.css\" />";
	}

}
