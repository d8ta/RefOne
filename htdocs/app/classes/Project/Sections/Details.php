<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Details extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'details';
	protected static $_label = 'Details Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createRepeater('box', 'Boxes', ["min" => 6, "max" => 6])
				->addSubfields([
					FieldHelper::createText('icon', 'Iconname'),
					FieldHelper::createText('headline', 'Überschrift')->setRequired(),
					FieldHelper::createWYSIWYG('text', 'Text')->setRequired(),
			])
		];
	}
}
