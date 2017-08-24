<?php
$menuHelper = \A365\Wordpress\Helpers\MenuHelper::getInstance();
$items      = $menuHelper->getMenuItems('primary');
$level = 1;
?>
{{-- Navigation --}}
<nav class="navigation navigation--sidebar">
    @include("components.sidebar.navigation-inner")
</nav>