<?php
//Template Name: Cadastrar
?>

<?php

get_header();

$title = get_the_title();
if ($title != 'home') {

?>

    </section>
 <h2 style="margin: 45px 0;text-align: center;">Cadastre seu passaro</h2>
<?php
}
if($title == 'cadastrar'){
    echo '
    <style>
    
    .pods-submittable-fields 
    .pods-form-ui-row-name-post-excerpt, 
    .pods-form-ui-row-name-post-author,
    .pods-form-ui-row-name-post-date,
    .pods-form-ui-row-name-post-status, 
    .pods-form-ui-row-name-comment-status, 
    .pods-form-ui-row-name-post-password, 
    .pods-form-ui-row-name-post-name, 
    .pods-form-ui-row-name-menu-order{

        display: none;
    }
    
    .pods-submittable-fields {
        margin: 25px auto;
        position: relative;
        right: -20%;
    }

    .pods-form-front .pods-submit {
        float: left!important;
    }

    p.pods-submit input {
        margin-top: 20px;
        background-color: #1f4494;
        color: white;
        white-space: pre;
        padding-block: 10px;
        padding-inline: 20px;
        border-width: 1px;
        border-color: #101010;
    }
    
    </style>';
}
?>
<?php
the_content();

get_footer();

?>