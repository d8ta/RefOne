<?php
$menuHelper = \A365\Wordpress\Helpers\MenuHelper::getInstance();
$items      = $menuHelper->getMenuItems('primary');
$level = 1;
?>
{{-- Navigation --}}
<div class="section site-navigation js-site-navigation">
    @include("components.header.navigation-inner")
</div>