<?php

namespace WP_Good_To_Go\Scanner;

class WP_GTG_Scanner {

    public $scans = [];

    public function __construct() {
        $this->find_scans();
    }

    private function find_scans() {
        $scan_files = glob(WPGTG_DIR_PATH . 'includes/scans/*.php');
        foreach ($scan_files as $scan_file) {
            $scan_file_name = basename( $scan_file, '.php' );
            $this->scans[] = $this->name_to_class( $scan_file_name );
        }
    }

    private function name_to_class( $scan_file_name ) {
        $class_name = str_replace( '-', '_', $scan_file_name );
        return ucwords( $class_name, '_' );
    }

}