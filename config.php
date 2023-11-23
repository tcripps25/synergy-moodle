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
 * Synergy Learning config.
 *
 * @package    theme_synergylearning
 * @copyright  2023 Tom Cripps
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();
                                                                                         
$THEME->name = 'synergylearning';                                                                                                             
                                                                                                                                    
// CSS stylesheets                                                                                                                    
$THEME->sheets = [];                                                                                                                
                                                                                                                                    
// Styles for TinyMCE                                                             
$THEME->editor_sheets = [];                                                                                                         
                                                                                                                                    
// Inherit all the good bits from boost that synergylearning needs                                                                    
$THEME->parents = ['boost'];                                                                                                        
                                                                                                                                                        
$THEME->enable_dock = false;                                                                                                        
                                                                                                                                                      
$THEME->yuicssmodules = array();                                                                                                    
                                                                                                                                    
// Allows synergylearning to override renderers              
$THEME->rendererfactory = 'theme_overridden_renderer_factory';                                                                      
                                                                                                                                                
$THEME->requiredblocks = '';   

// Disable the 'add a block' block
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;

$THEME->haseditswitch = true;
