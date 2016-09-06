<?php

/**
 * THIS IS A SAMPLE WIDGET INSTALLER. THIS WIDGET
 * INSTALLER WILL CREATE A NEW WIDGET BASED ON THE
 * SPECIFICATIONS YOU OUTLINE BELOW.
 *
 * @docs	http://documentation.zenbership.com/Widgets/File-List
 *
 * @author      Ascad Networks
 * @link        http://www.ascadnetworks.com/
 * @link        http://www.zenbership.com/
 * @copyright   (c) 2013 Ascad Networks
 * @license     http://documentation.zenbership.com/Basics/License
 * @project     Zenbership Membership Software
 */

$widget_id	= 'my_unique_widget_id';
$widget_name	= 'My Widget Name';
$widget_type    = 'code';

if (empty($widget_id)) { $id = uniqid(); }

/**
 * Establish the widget's data.
 * id: Widget ID. Lowercase, numbers, and underscores only.
 * name: Widget's reference name.
 * type: 'plugin', 'menu', 'html', 'code', 'upload_list'
 * content: If the widget is an HTML block, this is the content.
 */

$widget = array(
	'id'        => $widget_id,
	'name'      => $widget_name,
	'type'      => $widget_type,
	'content'   => '',
);

/**
 * Options array. Create an array within the $options
 * array for each widget option.
 *
 * display: Display name
 * value: Value
 * description: Description
 * type: 'text','select','radio','checkbox','timeframe','special','file_size','textarea'
 * width: Width of field
 * maxlength:
 * options: array of options for select or radio, separated by vertical bar "|", or for special, "list:..."
 */

$options = array();

// New Option
/*
$options[] = array(
    'id'            => 'my_unique_option_id',
    'name'          => 'Option Name',
    'value'         => 'default_value_here',
    'description'   => 'My option description.',
    'type'          => 'text',
    'width'         => '200',
    'maxlength'     => '',
    'options'       => '',
);
*/


/**
 * Hooks array.
 * trigger:
 * specific_trigger:
 * type: 1 = PHP Include, 2 = email, 3 = MySQL Query, 4 = Function name
 * data:    PHP: path to file.
 *          Email: E-mail array.
 *          MySQL Query: Array of commands to run.
 *          Function: Array of function names to run.
 * when: 1 = before action, 2 = after action
 */

$hooks = array();

// New Hook
/*
$hooks[] = array(
    'trigger'           => '',
    'specific_trigger'  => '',
    'type'              => '',
    'data'              => '',
    'when'              => '',
);
*/

