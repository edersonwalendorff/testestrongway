<?php get_header(); ?>

</section>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) :
            the_post();

            // Obtém o título do pássaro
            $passaro_titulo = get_the_title();

            // Obtém a região associada ao pássaro
            $passaro_regiao = get_the_terms(get_the_ID(), 'regiao');

            // Obtém a imagem em destaque do pássaro
            $passaro_imagem = get_the_post_thumbnail();

            // Exibe as informações do pássaro
            echo '<h1>' . $passaro_titulo . '</h1>';
            echo '<div class="passaro-regiao">';
            if (!empty($passaro_regiao)) {
                echo '<h3>Região: ' . $passaro_regiao[0]->name . '</h3>'; // Exibe apenas a primeira região (caso haja mais de uma)
            }
            echo '</div>';
            echo '<div class="passaro-imagem">' . $passaro_imagem . '</div>';
            echo '<div class="passaro-conteudo">' . get_the_content() . '</div>';

        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>
