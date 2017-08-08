<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class WelcomeSlider extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'welcome-slider';
	protected static $_label = 'Grosses Startseiten Bild';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [

					FieldHelper::createImageCrop('background', 'Hintergrund', ["crop_type" => "hard", 'target_size' => 'custom', 'force_crop' => 'no', 'save_format' => 'url', "width" => 1600, "height" => 650])->setRequired(),
					FieldHelper::createText('firstline', 'erste Textzeile')->setRequired(),
					FieldHelper::createText('secondline', 'zweite Textzeile')->setRequired(),
					FieldHelper::createText('thirdline', 'dritte Textzeile')->setRequired(),
					FieldHelper::createText('forthline', 'dritte Textzeile')->setRequired(),
			
		];
	}
}