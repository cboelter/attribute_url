<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage AttributeUrl
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

namespace MetaModels\Helper\Url;

use DcGeneral\DataDefinition\ContainerInterface;
use MetaModels\Helper\ContaoController;

/**
 * This is the MetaModelAttribute class for handling urls.
 *
 * @package    MetaModels
 * @subpackage AttributeUrl
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 */
class Url
{
	protected static $objInstance = null;

	protected function __construct()
	{
	}

	public static function getInstance()
	{
		if (!is_object(self::$objInstance))
		{
			self::$objInstance = new self();
		}

		return self::$objInstance;
	}

	/**
	 * Return the page picker wizard
	 *
	 * @param \DcGeneral\DataDefinition\ContainerInterface $dc
	 *
	 * @return string
	 */
	public function singlePagePicker(ContainerInterface $dc)
	{
		$strField = 'ctrl_' . $dc->inputName;
		return ' ' . ContaoController::getInstance()->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer" onclick="Backend.pickPage(\'' . $strField . '\')"');
	}

	/**
	 * Return the page picker wizard
	 *
	 * @param \DcGeneral\DataDefinition\ContainerInterface $dc
	 *
	 * @return string
	 */
	public function multiPagePicker(ContainerInterface $dc)
	{
		$strField = 'ctrl_' . $dc->inputName . '_1';
		return ' ' . ContaoController::getInstance()->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer" onclick="Backend.pickPage(\'' . $strField . '\')"');
	}

}