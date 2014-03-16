<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16.03.14
 * Time: 17:12
 */

namespace Cundd\NoshiWebsite\Plugins;

use Cundd\Noshi\Ui\AbstractUi;

class Stylesheet extends AbstractUi {
	/**
	 * Render the UI element
	 *
	 * @return string
	 */
	public function render() {
		return '<link rel="stylesheet" href="{resourcePath}/Stylesheets/main.css" />';
	}

}
