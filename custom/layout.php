<?php
function heading($heading, $title, $css_class=null) {
    ?>
    <<?php echo($heading);?> <?php if(!empty($css_class)) echo('class="' . $css_class . '"'); ?>>
        <?php echo($title); ?>
    </<?php echo($heading);?>>

    <?php
}


function image($image, $css_class=null) {
    ?>

    <img src='<?php echo($image['url']); ?>' alt='<?php echo(!empty($image['alt']) ? $image['alt'] : ''); ?>'>
    
    <?php
}


function menu($menu_items, $css_class=null) {
    ?>

    <div class='menu<?php if(!empty($css_class)) echo(' ' . $css_class); ?>'>
        <ul>
            <?php foreach($menu_items as $item) { ?>
                <li>
                    <?php
                        if(!empty($item['link'])) button($item['link'], 'span', $item['text']);
                        else heading('span', $item['text']);
                    ?>
                </li>
            <?php } ?>
        </ul>
    </div>

    <?php
}


function button($link, $heading, $title, $icon = null, $css_class = null) {
    ?>

    <a href='<?php echo($link['url']); ?>' title='<?php echo($link['title']); ?>' <?php if(!empty($css_class)) echo('class="' . $css_class . '"'); ?>>
        <?php if(!empty($title)) heading($heading, $title); ?>

        <?php if(!empty($icon)) image($icon); ?>
    </a>
<?php }