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
 * Essential is a clean and customizable theme.
 *
 * @package     theme_essential
 * @copyright   2017 Gareth J Barnard
 * @copyright   2016 Gareth J Barnard
 * @copyright   2014 Gareth J Barnard, David Bezemer
 * @copyright   2013 Julian Ridden
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

?>
    <nav id="essentialnavbar" role="navigation" class="moodle-has-zindex<?php echo ($oldnavbar) ? ' oldnavbar' : '';  echo ($haslogo) ? ' logo' : ' nologo';?>">
        <div class="navbar">
            <div class="container-fluid navbar-inner">
                <div class="row-fluid">
                    <div class="custommenus pull-left">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target="#essentialmenus">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <?php echo $OUTPUT->get_title('navbar'); ?>
                    <div class="pull-right">
                        <div class="usermenu navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_user(); ?>
                        </div>
                        <div class="messagemenu navbarrightitem">
                            <?php echo $OUTPUT->navbar_plugin_output(); ?>
                        </div>
                        <div class="navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_goto_bottom(); ?>
                        </div>
                        <?php echo $OUTPUT->context_header_settings_menu(); ?>
                        <?php echo $OUTPUT->region_main_settings_menu(); ?>
                        <div id="custom_menu_editing" class="navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_editing(); ?>
                        </div>
                        <div class="navbarrightitem">
                            <?php echo $OUTPUT->search_box(); ?>
                        </div>
                    </div>
                        <div id='essentialmenus' class="nav-collapse collapse pull-left">
                            <?php
                            echo $OUTPUT->custom_menu_courses();
                            if ($colourswitcher) {
                                echo $OUTPUT->custom_menu_themecolours();
                            }?>
                            <div id="custom_menu" class="custom_menu"><ul class="nav" id="yui_3_17_2_1_1525108864401_692"><li class="dropdown" id="yui_3_17_2_1_1525108864401_691"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Curso Introductorio" id="yui_3_17_2_1_1525108864401_690">Curso Introductorio<span aria-hidden="true" class="fa fa-caret-right"></span></a><div class="dropdown-menu"><ul><li><a title="Moodle para Estudiantes" href="https://worldcampus.metrouni.us/course/view.php?id=192">Moodle para Estudiantes</a></li><li><a title="Orientación a Estudiantes" href="https://worldcampus.metrouni.us/course/view.php?id=92">Orientación a Estudiantes</a></li></ul></div></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Servicios estudiantiles">Servicios estudiantiles<span aria-hidden="true" class="fa fa-caret-right"></span></a><div class="dropdown-menu"><ul><li><a title="My MIU" href="http://www.myportal.metrouni.us/" target="_blank">My MIU</a></li><li><a title="Soporte en línea" href="http://www.support.metrouni.us/" target="_blank">Soporte en línea</a></li><li><a title="Biblioteca Virtual" href="#">Biblioteca Virtual</a></li><li><a title="Tutoriales" href="#">Tutoriales</a></li></ul></div></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Calendario Académico">Calendario Académico<span aria-hidden="true" class="fa fa-caret-right"></span></a><div class="dropdown-menu"><ul><li><a title="Track A" href="http://metrouni.us/pdf/Calendario2018-2019A.pdf" target="_blank">Track A</a></li><li><a title="Track B" href="http://metrouni.us/pdf/Calendario2018-2019B.pdf" target="_blank">Track B</a></li></ul></div></li></ul></div>
                            <?php
                            echo $OUTPUT->custom_menu();
                            echo $OUTPUT->custom_menu_activitystream();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
