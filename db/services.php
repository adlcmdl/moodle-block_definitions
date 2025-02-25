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
 * External functions and service definitions
 *
 * @package   block_definitions
 * @author    Tim Martinez <tim.martinez@adlc.ca>
 * @copyright 2021 Pembina Hills School Division. All rights reserved.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
    'block_definitions_get_definition' => [
        'classname' => 'block_definitions_external',
        'methodname' => 'get_definition',
        'classpath' => 'blocks/definitions/externallib.php',
        'description' => 'Get a definition',
        'ajax' => true,
        'type' => 'read',
    ],
];

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = [
    'Defintions' => [
        'shortname' => 'block_definitions',
        'functions' => [
            'block_definitions_get_definition',
        ],
        'restrictedusers' => 0,
        'enabled' => 1,
    ],
];
