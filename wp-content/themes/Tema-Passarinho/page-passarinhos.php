<?php
//Template Name: Passarinhos
?>

<?php

get_header();

$title = get_the_title();
if ($title != 'home') {


?>

    </section>


<?php
}
    the_content();
?>

<?php
$args = array(
    'post_type' => 'passaros',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<ol style="margin-bottom: 50px;">';

    while ($query->have_posts()) : $query->the_post();
        echo '<li style="list-style: none;">';
        echo '<div style="text-align: center; padding: 15px 0;">'; // Centraliza o conteúdo
        the_post_thumbnail('thumbnail'); // Exibe a miniatura do post
        echo '<h2><a href="' . get_permalink() . '" style="text-decoration: none; color: #130a4e;">' . get_the_title() . '</a></h2>'; // Torna o título um link para a página individual
        echo '</div>';
        echo '</li>';
    endwhile;

    echo '</ol>';

    wp_reset_postdata();
else :
    echo 'Não foram encontrados posts.';
endif;
?>


<?php

get_footer();

?>