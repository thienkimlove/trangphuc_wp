<?php
namespace ElementorPro\Core\Editor;

use Elementor\Core\Editor\Notice_Bar as Base_Notice_Bar;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Notice_Bar extends Base_Notice_Bar {

	protected function get_init_settings() {
		return [];
	}
}
