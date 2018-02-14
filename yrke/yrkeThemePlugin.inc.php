<?php

/**
 * @file plugins/themes/yrke/yrkeThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class yrkeThemePlugin
 * @ingroup plugins_themes_yrke
 *
 * @brief "yrke" theme plugin
 */

import('classes.plugins.ThemePlugin');

class yrkeThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'yrkeThemePlugin';
	}

	function getDisplayName() {
		return 'YRKE Theme';
	}

	function getDescription() {
		return 'Responsift theme for YRKE';
	}

	function getStylesheetFilename() {
		return 'yrke.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
