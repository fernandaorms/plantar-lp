
<?php
$GLOBALS['js_path'] = './assets/js/';
$GLOBALS['css_path'] = './assets/css/';

$GLOBALS['images_path'] = './assets/images/';
$GLOBALS['icons_path'] = $GLOBALS['images_path'] . 'icons/';

$GLOBALS['custom_path'] = './custom/';

include($GLOBALS['custom_path'] . 'layout.php');
include($GLOBALS['custom_path'] . 'content.php');
?>

<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='Aprenda a cultivar de forma eficiente com dicas personalizadas do ChatGPT e artigos científicos. Transforme seu espaço com técnicas modernas e cursos exclusivos. Comece agora!'>
        <title>Descubra o Poder de Cultivar com Ciência e Tecnologia | Cultivo Inteligente</title>

        <link rel='icon' href='<?php echo($GLOBALS['icons_path']);?>favicon.svg' type='image/svg+xml'>

        <link rel='stylesheet' href='<?php echo($GLOBALS['css_path']);?>style.css'>
        <script src='<?php echo($GLOBALS['js_path']);?>main.js'></script>
    </head>

    <body>
        <header>
            <div class='container'>
                <div class='wrapper'>
                    <div id='nav-icon' onclick='toogleMenu(this)'>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class='logo'>
                        <?php button($GLOBALS['home_button']['link'], null, null, $GLOBALS['brand']['icon']); ?>
                    </div>

                    <?php menu($GLOBALS['nav_menu'], 'nav-menu'); ?>

                    <div class='button cta light'>
                        <?php button($GLOBALS['cta_button']['link'], 'span', $GLOBALS['cta_button']['text']); ?>
                    </div>
                </div>

                <div class='nav responsiveness'>
                    <div class='menu-container'>
                        <?php menu($GLOBALS['nav_menu'], 'nav-menu'); ?>

                        <div class='button cta light'>
                            <?php button($GLOBALS['cta_button']['link'], 'span', $GLOBALS['cta_button']['text']); ?>
                        </div>
                    </div>
                </div>

                <div class='nav-v2 responsiveness'>
                    <div class='container'>
                        <?php menu($GLOBALS['nav_menu'], 'nav-menu'); ?>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class='hero' style='background-image: url(<?php echo($GLOBALS['hero']['style']['background_image']); ?>)'>
                <div class='container'>
                    <div class='intro'>
                        <div class='subtitle'>
                            <?php heading($GLOBALS['hero']['subtitle']['heading'], $GLOBALS['hero']['subtitle']['title']); ?>
                        </div>

                        <div class='title'>
                            <?php heading($GLOBALS['hero']['title']['heading'], $GLOBALS['hero']['title']['title']); ?>
                        </div>
                    </div>

                    <div class='button cta'>
                        <?php button($GLOBALS['cta_button']['link'], 'span', $GLOBALS['cta_button']['text'], $GLOBALS['cta_button']['icon']); ?>
                    </div>
                </div>
            </section>

            <?php if($GLOBALS['about']['active']) { ?>
                <section id='sobre' class='about fade-section'>
                    <div class='container'>
                        <div class='wrapper'>
                            <div class='video'>
                                <iframe width='560' height='315' src='<?php echo($GLOBALS['about']['video']['url']); ?>' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php if($GLOBALS['how_it_works']['active']) { ?>
                <section id='como-funciona' class='how-it-works fade-section'>
                    <div class='container'>
                        <div class='top'>
                            <div class='intro'>
                                <div class='title'>
                                    <?php heading($GLOBALS['how_it_works']['title']['heading'], $GLOBALS['how_it_works']['title']['title']); ?>
                                </div>

                                <div class='subtitle'>
                                    <?php heading($GLOBALS['how_it_works']['subtitle']['heading'], $GLOBALS['how_it_works']['subtitle']['title']); ?>
                                </div>
                            </div>

                            <div class='button cta'>
                                <?php button($GLOBALS['cta_button']['link'], 'span', $GLOBALS['cta_button']['text'], $GLOBALS['cta_button']['icon']); ?>
                            </div>
                        </div>

                        <div class='bottom'>
                            <div class='cards'>
                                <?php foreach($GLOBALS['how_it_works']['cards'] as $line)  { ?>
                                    <div class='line' style='grid-template-columns: repeat(<?php echo(min(count($line), 3)); ?>, 1fr);'>
                                        <?php foreach($line as $card) { ?>
                                            <div class='card'>
                                                <div class='icon'>
                                                    <?php image($card['icon']); ?>
                                                </div>

                                                <div class='title'>
                                                    <?php heading('span', $card['title']); ?>
                                                </div>

                                                <div class='content'>
                                                    <?php echo($card['content']); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php if($GLOBALS['benefits']['active']) { ?>
                <section id='beneficios' class='benefits fade-section'>
                    <div class='container'>
                        <div class='intro'>
                            <div class='title'>
                                <?php heading($GLOBALS['benefits']['title']['heading'], $GLOBALS['benefits']['title']['title']); ?>
                            </div>

                            <div class='subtitle'>
                                <?php heading($GLOBALS['benefits']['subtitle']['heading'], $GLOBALS['benefits']['subtitle']['title']); ?>
                            </div>
                        </div>

                        <div class='bottom'>
                            <div class='left'>
                                <div class='cards'>
                                    <?php foreach($GLOBALS['benefits']['cards']['left'] as $card) { ?>
                                        <div class='card'>
                                            <div class='icon'>
                                                <?php image($card['icon']); ?>
                                            </div>

                                            <div class='title'>
                                                <?php heading('span', $card['title']); ?>
                                            </div>

                                            <div class='content'>
                                                <?php echo($card['content']); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class='middle'>
                                <div class='image'>
                                    <?php image($GLOBALS['benefits']['image']); ?>
                                </div>
                            </div>

                            <div class='right'>
                                <div class='cards'>
                                    <?php foreach($GLOBALS['benefits']['cards']['right'] as $card) { ?>
                                        <div class='card'>
                                            <div class='icon'>
                                                <?php image($card['icon']); ?>
                                            </div>

                                            <div class='title'>
                                                <?php heading('span', $card['title']); ?>
                                            </div>

                                            <div class='content'>
                                                <?php echo($card['content']); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php if($GLOBALS['testimonials']['active']) { ?>
                <section id='depoimentos' class='testimonials fade-section'>
                    <div class='container'>
                        <div class='intro'>
                            <div class='title'>
                                <?php heading($GLOBALS['testimonials']['title']['heading'], $GLOBALS['testimonials']['title']['title']); ?>
                            </div>

                            <div class='subtitle'>
                                <?php heading($GLOBALS['testimonials']['subtitle']['heading'], $GLOBALS['testimonials']['subtitle']['title']); ?>
                            </div>
                        </div>

                        <div class='reviews'>
                            <?php foreach($GLOBALS['testimonials']['reviews'] as $review) { ?>
                                <div class='review'>
                                    <div class='profile' style='background-image: url(<?php echo($review['profile']['url']); ?>);'></div>

                                    <div class='middle'>
                                        <div class='quote'>
                                            <?php image($GLOBALS['testimonials']['quotes']); ?>
                                        </div>

                                        <div class='content'>
                                            <?php echo($review['content']); ?>
                                        </div>
                                    </div>

                                    <div class='author'>
                                        <?php heading('span', $review['author']); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php if($GLOBALS['cta']['active']) { ?>
                <section id='cta' class='cta'>
                    <div class='container'>
                        <div class='wrapper'>
                            <div class='intro'>
                                <div class='title'>
                                    <?php heading($GLOBALS['cta']['title']['heading'], $GLOBALS['cta']['title']['title']); ?>
                                </div>

                                <div class='subtitle'>
                                    <?php heading($GLOBALS['cta']['subtitle']['heading'], $GLOBALS['cta']['subtitle']['title']); ?>
                                </div>
                            </div>

                            <div class='button cta'>
                                <?php button($GLOBALS['cta_button']['link'], 'span', $GLOBALS['cta_button']['text'], $GLOBALS['cta_button']['icon']); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
        </main>

        <footer>
            <div class='container'>
                <div class='top'>
                    <div class='logo'>
                        <?php button($GLOBALS['home_button']['link'], null, null, $GLOBALS['brand']['icon']); ?>
                    </div>

                    <div class='social-medias'>
                        <?php foreach($GLOBALS['social_medias'] as $social_media) { ?>
                            <div class='social-media'>
                                <?php button($social_media['link'], null, null, $social_media['icon']); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class='bottom'>
                    <div class='left'>
                        <div class='copyright'>
                            <?php heading('span', $GLOBALS['footer']['copyright']); ?>
                        </div>

                        <div class='powered-by'>
                            <?php heading('span', $GLOBALS['footer']['powered_by']['prefix'], 'prefix'); ?>
                            
                            <?php button($GLOBALS['footer']['powered_by']['link'], 'span', $GLOBALS['footer']['powered_by']['title'], null, 'developer', '_blank'); ?>
                        </div>
                    </div>
                    
                    <div class='right'>
                        <?php menu($GLOBALS['nav_menu'], 'nav-menu'); ?>
                    </div>
                </div>
            </div>
        </footer>
        
        <script>
            document.addEventListener('DOMContentLoaded', onLoad);
        </script>
    </body>
</html>