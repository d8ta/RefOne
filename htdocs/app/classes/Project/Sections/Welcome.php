<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Welcome extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'welcome';
	protected static $_label = 'Grosses Startseiten Bild';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
				FieldHelper::createImageCrop('background', 'Hintergrund', ["crop_type" => "hard", 'target_size' => 'custom', 'force_crop' => 'no', 'save_format' => 'url', "width" => 490, "height" => 45])->setRequired(),
				FieldHelper::createText('firstline', 'erste Textzeile'),
				FieldHelper::createText('secondline', 'zweite Textzeile'),
				FieldHelper::createText('thirdline', 'dritte Textzeile'),
				FieldHelper::createText('forthline', 'dritte Textzeile'),
		];
	}
}