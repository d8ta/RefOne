<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Video extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'video';
	protected static $_label = 'Video Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createText('url', 'Videourl')->setRequired(),
		];
	}
}