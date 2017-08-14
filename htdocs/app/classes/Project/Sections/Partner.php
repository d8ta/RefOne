<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Partner extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'Partner';
	protected static $_label = 'Partner Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createText('title', 'Sektionstitel')->setRequired(),
			FieldHelper::createRepeater('partners', 'Partner', ["min" => 1, "max" => 24])
				->addSubfields([
					FieldHelper::createImageCrop('image', 'Hintergrund', ["crop_type" => "hard", 'target_size' => 'custom', 'force_crop' => 'no', 'save_format' => 'url', "width" => 150, "height" => 100])->setRequired(),
				])

		];
	}
}