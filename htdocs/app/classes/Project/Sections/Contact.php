<?php
namespace Project\Sections;

use A365\Wordpress\Helpers\Acf\FieldHelper;

class ContactForm extends \A365\Wordpress\Block\AcfBlock {

	protected $_template = 'contact-form';
	protected static $_label = 'Kontaktformular';

	/**
	 * @inheritdoc
	 */
	public static function getAcfSubfields()
	{
		return [
			FieldHelper::createText('headline', 'Überschrift')->setRequired(),
			FieldHelper::createWYSIWYG('text', 'Einleitung')->setRequired(),
			FieldHelper::createWYSIWYG('closer', 'Ende')->setRequired(),
			FieldHelper::createText('iconleft', 'Iconname links'),
			FieldHelper::createText('iconright', 'Iconname rechts'),
			FieldHelper::createWYSIWYG('textleft', 'Text links')->setRequired(),
			FieldHelper::createWYSIWYG('textright', 'Text rechts')->setRequired(),
		];
	}
}