<?php
/**
 * @var \Project\Sections\ContactLocations $block
 */
$headline = $block->getHeadline();
$intro = $block->getText();
$closer = $block->getCloser();
$iconleft = $block->getIconleft();
$iconright = $block->getIconright();
$textleft = $block->getTextleft();
$textright = $block->getTextright();
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
                    <div class="contact__iconboxes__box__text text-base-dark">{!!$textleft!!}</div>
                </div>
                <div class="contact__iconboxes__box">
                    <div class="contact__iconboxes__box__icon">
                        <i class="icon icon-{{$iconright}}"></i>
                    </div>
                    <div class="contact-label">E-MAIL</div>
                    <div class="contact__iconboxes__box__text text-base-dark">{!!$textright!!}</div>
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
                    echo $formHelper->getFormField("firstname", __('Name*'));
                    echo $formHelper->getFormField("email", __('E-Mailadresse*'), ["type" => "email"]);
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
                    <h3 class="h3"><?php echo __('Thank you for your message.'); ?></h3>
                </div>
            </form>
        </div>
    </div>
</section>
