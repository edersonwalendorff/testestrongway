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

get_footer();

?>