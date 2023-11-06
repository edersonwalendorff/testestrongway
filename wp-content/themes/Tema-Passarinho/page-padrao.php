<?php
    //Template Name: Padrão-tema
?>

<?php 

get_header(); 

    $title = get_the_title();
    if($title != 'home'){


?>

</section>

<?php 
}    
    the_content();

    get_footer();
    
?>