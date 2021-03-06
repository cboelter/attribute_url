<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage AttributeUrl
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     Christopher Boelter <christopher@boelter.eu>
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * Table tl_metamodel_attribute
 */

$GLOBALS['TL_DCA']['tl_metamodel_attribute']['metapalettes']['url extends _simpleattribute_'] = array
(
    '+display' => array('trim_title')
);

$GLOBALS['TL_DCA']['tl_metamodel_attribute']['fields']['trim_title'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_attribute']['trim_title'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'clr')
);
