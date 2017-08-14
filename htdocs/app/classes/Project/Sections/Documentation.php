<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Documentation extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'documentation';
	protected static $_label = 'Dokumentation Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createRepeater('boxes', 'Boxes', ["min" => 2, "max" => 2])
				->addSubfields([
					FieldHelper::createText('headline', 'Überschrift')->setRequired(),
					FieldHelper::createWYSIWYG('text', 'Text')->setRequired(),
					FieldHelper::createPageLink('btnurl', 'Button Link'),
					FieldHelper::createText('btntext', 'Button Text')->setRequired(),
				])
		];
	}
}