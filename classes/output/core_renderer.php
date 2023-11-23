<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Overrides Boost renderer.
 *
 * @package    theme_synergylearning
 * @copyright  2023 Tom Cripps
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();                                    

class theme_synergylearning_core_renderer extends \theme_boost\output\core_renderer {

// Function to get the footer logo from the theme setting for 'footerlogo'. If the 'footerlogo' isn't set, 
// the admin setting 'compactlogo' is used. If this isn't set, the function returns empty which is handled in the mustache template 'footer.mustache'.

function get_footer_logo() {
    global $PAGE, $OUTPUT;

        $output = '';
        $logo_url = $OUTPUT->image_url('footerlogo', 'theme_synergylearning');
        $compact_url = $OUTPUT->get_compact_logo_url();

        if ($PAGE->theme->settings->footerlogo && !empty($logo_url)) {
                $output = $logo_url;          
        } else {
            if (!empty($compact_url)) {
                $output = $compact_url;
            }
        }
        return $output;
}

// function to fetch the copyright text from the copyright text setting, and returns it if it exists, with the current year appended.
// The text is rendered after a copyright icon in the mustache template 'footer.mustache'.
function get_copyright_text() {
   global $PAGE;

    $text= '';
    $year = date("Y");

    if ($PAGE->theme->settings->copyrighttext) {
        $text = $PAGE->theme->settings->copyrighttext;
        return $text." ".$year;

    } else {
        return '';
    }  
}

}