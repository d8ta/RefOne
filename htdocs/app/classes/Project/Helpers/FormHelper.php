<?php
namespace Project\Helpers;

class FormHelper extends \A365\Core\Abstracts\Helper
{


	public function getFormField($name, $placeholder, $params = array()) {

		$input = '<input class="form-control" type="text" placeholder="' . $placeholder . '" name="form[' . $name . ']" required>';

		if (array_key_exists("type", $params)) {
			$input = '<input class="form-control" type="' . $params["type"] . '" name="form[' . $name . ']" required>';

			if ($params["type"] == "textarea") {
				$input = '<textarea class="form-control" placeholder="' . $placeholder . '" name="form[' . $name . ']" required></textarea>';
			}
			if ($params["type"] == "email") {
				$input = '<input class="form-control" placeholder="' . $placeholder . '" name="form[' . $name . ']" required></input>';
			}
		}

		$form_field_row = "form__fields__row";
		if (array_key_exists("size", $params)) {
			$form_field_row .= " form__fields__row--" . $params["size"];
		}


		$ret = '<div class="' . $form_field_row . '">
							<label class="form__fields__row__label"></label>
							<div class="form__fields__row__input">
								' . $input . '
							</div>
						</div>';
		return $ret;
	}

	public function getHoneyField() {
		$keyHoneyPot   = \Project\Ajax\Actions\ContactForm::KEY_HONEYPOT;
		$ret = '<div class="form__fields__row form__fields__row--honey">
							<label class="form__fields__row__label">' . __('Text') . '</label>
							<div class="form__fields__row__input">
								<input class="form-control" type="text" name="form[' . $keyHoneyPot . ']">
							</div>
						</div>';
		return $ret;
	}
}
