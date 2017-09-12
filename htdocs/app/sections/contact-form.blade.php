<?php
/**
 * @var \Project\Sections\ContactLocations $block
 */
$headline = $block->getHeadline();
$intro = $block->getText();
$closer = $block->getCloser();
$iconleft = $block->getIconleft();
$iconright = $block->getIconright();
$logo = Project\Application::getInstance()->getConfig('media.logo');


$_ajaxHelper = A365\Wordpress\Helpers\Ajax::getInstance();
$keyHoneyPot = \Project\Ajax\Actions\ContactForm::KEY_HONEYPOT;

$formHelper = Project\Helpers\FormHelper::getInstance();
?>

<section class="section section--padding section--dark">
    <div class="section__content">
        <div class="contact">
            <div class="contact__headline h1-dark">{{$headline}}</div>
            <div class="contact__text text-base-dark">{!!$intro!!}</div>
            <div class="contact__iconboxes">
                <div class="contact__iconboxes__box">
                    <div class="contact__iconboxes__box__icon">
                        <i class="icon icon-{{$iconleft}}"></i>
                    </div>
                    <div class="contact-label">TEL.</div>
                    <div class="contact__iconboxes__box__text text-base-dark">
                        <a href="tel:+436622255333">+43 662 2255-333</a>
                    </div>
                </div>
                <div class="contact__iconboxes__box">
                    <div class="contact__iconboxes__box__icon">
                        <i class="icon icon-{{$iconright}}"></i>
                    </div>
                    <div class="contact-label">E-MAIL</div>
                    <div class="contact__iconboxes__box__text text-base-dark">
                        <a href="mailto:vertrieb@hobex.at" target="_top">vertrieb@hobex.at</a>
                    </div>
                </div>
            </div>
            <div class="contact-label">ODER PER</div>
            <div class="contact__iconboxes__box__text text-base-dark">{!!$closer!!}</div>
        </div>
        <div class="contact-form__content">
            <form class="form js-ajax-form js-validate" action="{!!$_ajaxHelper->getUrl('contact-form')!!}"
                  method="POST" data-name='Kontaktformular'>
                <div class="form__fields">
                    <?php
                    echo $formHelper->getFormField("company", __('Company'));
                    echo $formHelper->getFormField("name", __('Name*'));
                    echo $formHelper->getFormField("email", __('E-Mail*'), ["type" => "email"]);
                    echo $formHelper->getFormField("phone", __('Phone'));
                    echo $formHelper->getFormField("message", __('Message'), ["type" => "textarea", "size" => "full"]);
                    echo $formHelper->getHoneyField();
                    ?>
                    <input type="hidden" name="form[lang]" value="<?php echo get_locale(); ?>">
                    <div class="form__fields__row form__fields__row--full">
                        <div class="form__info">
                            * <?php echo __('Required'); ?>
                          </div>
                    </div>
                    <div class="form__fields__table">

                        <button class="btn form__fields__table__btn" type="submit">
                            <?php echo __('Send Form'); ?>
                       </button>
                    </div>
                </div>
                <div class="form__success">
                    <div class="text-base-dark"><?php echo __('Thank you for your request.'); ?></div>
                    <div class="text-base-dark"><?php echo __('We will contact you by the next working day.'); ?></div>
                </div>
            </form>
        </div>
    </div>
</section>
