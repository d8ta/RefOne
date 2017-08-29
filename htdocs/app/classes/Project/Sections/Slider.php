<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Slider extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'slider';
	protected static $_label = 'Slider Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createImageCrop('background', 'Hintergrund', ["crop_type" => "hard", 'target_size' => 'custom', 'force_crop' => 'no', 'save_format' => 'url', "width" => 1600, "height" => 600])->setRequired(),
			FieldHelper::createRepeater('slides', 'Slides', ["min" => 1, "max" => 3])
				->addSubfields([
					FieldHelper::createText('headline', 'Überschrift')->setRequired(),
					FieldHelper::createText('text', 'Text')->setRequired(),
			])
		];
	}
}