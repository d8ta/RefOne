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

<section class="section section--margin section__dark">
    <div class="section__content">
        <div class="contact">
            <h2 class="contact__headline h1-dark">{{$headline}}</h2>
            <div class="contact__text text-base-dark">{!!$intro!!}</div>
            <div class="contact__iconboxes">
                <div class="contact__iconboxes__left">
                    <img class="contact__iconboxes__left__icon" src="assets/iconfont/{{$iconleft}}.svg" alt="{{$iconleft}} Icon"> 
                    <div class="contact__iconboxes__left__text">{{$textleft}}</div>
                </div>
                <div class="contact__iconboxes__right">
                    <img class="contact__iconboxes__right__icon" src="assets/iconfont/{{$iconleft}}.svg" Icon"> 
                    <div class="contact__iconboxes__right__text">{{$textright}}</div>
                </div>
            </div>
            <div class="contact__closer text-base-dark">{!!$closer!!}</div>
        </div>
        <div class="contact-form__content">
            <form class="form js-ajax-form js-validate" action="{!!$_ajaxHelper->getUrl('contact-form')!!}"
                  method="POST" data-name='Kontaktformular'>
                <div class="form__fields">
                    <?php
                    echo $formHelper->getFormField("company", __('Company'));
                    echo $formHelper->getFormField("firstname", __('Name'));
                    echo $formHelper->getFormField("email", __('E-Mail'), ["type" => "email"]);
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
