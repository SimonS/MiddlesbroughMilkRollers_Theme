<?php

register_sidebar(array(
    'name'=>'sidebar-1',
    'before_widget'=>'<h2>',
    'after_widget'=>'</div>',
    'before_title'=>'',
    'after_title'=>'</h2><div class="widget" id="%1$s">'
));

register_nav_menu('main', 'Main navigation menu');
