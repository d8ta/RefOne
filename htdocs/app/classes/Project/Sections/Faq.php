<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class Faq extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'faq';
	protected static $_label = 'Faq Sektion';

	/**
	 * @inheritdocIR
	 */
	public static function getAcfSubfields()
	{
		return [
		];
	}
}