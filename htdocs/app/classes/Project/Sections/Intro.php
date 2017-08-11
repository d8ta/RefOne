<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Intro extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'intro';
	protected static $_label = 'Intro Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createTrueFalse('dark', 'Dunkler Hintergrund, helle Schrift'),
			FieldHelper::createText('headline', 'Überschrift')->setRequired(),
			FieldHelper::createText('subline', 'Unterüberschrift'),
			FieldHelper::createWYSIWYG('text', 'Text')->setRequired(),
			FieldHelper::createImageCrop('logos', 'Logos', ["crop_type" => "hard", 'target_size' => 'custom', 'force_crop' => 'no', 'save_format' => 'url', "width" => 1600, "height" => 650]),
			FieldHelper::createPageLink('btnurl', 'Button Link'),
			FieldHelper::createText('btntext', 'Button Text'),
		];
	}
}