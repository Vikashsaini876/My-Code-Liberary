<?php

<script>
jQuery('.sub-menu').hide();
jQuery('li').each(function() {
    jQuery('.menu-item').hover(function() {
        jQuery(this).find('ul.sub-menu').stop().fadeIn('fast')
    }, function() {
       jQuery(this).find('ul.sub-menu').stop().fadeOut('fast')
    });
});
</script>

;?>