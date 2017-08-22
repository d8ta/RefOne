<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Products extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'products';
	protected static $_label = 'Produkte Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createText('title', 'Sektionstitel')->setRequired(),
			FieldHelper::createRepeater('boxes', 'Boxes', ["min" => 1, "max" => 4])
				->addSubfields([
					FieldHelper::createText('icon', 'Iconname'),
					FieldHelper::createText('headline', 'Überschrift')->setRequired(),
					FieldHelper::createWYSIWYG('text', 'Text')->setRequired(),
					FieldHelper::createPageLink('btnurl', 'Button Link'),
					FieldHelper::createText('btntext', 'Button Text')->setRequired(),
				])
		];
	}
}