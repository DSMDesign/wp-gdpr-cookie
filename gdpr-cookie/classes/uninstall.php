<?php
namespace GDPRCookie;

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

class Uninstall
{
    public function uninstall()
    {
        self::dropDatabaseTables();    
    }

    private function dropDatabaseTables() {
        global $wpdb;
        $dropTables = array(
            $wpdb->prefix.'scw_gdprc_config',
            $wpdb->prefix.'scw_gdprc_snippets',
            $wpdb->prefix.'scw_gdprc_snippet_cookies',
            $wpdb->prefix.'scw_gdprc_snippet_variables',
        );
        foreach ($dropTables as $dropTable) {
            $wpdb->query("DROP TABLE IF EXISTS $dropTable");
        }
    }
}
