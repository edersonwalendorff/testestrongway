    <!-- footer -->
    <footer>
        <!-- conteudo_footer -->
        <section class="conteudo_footer">
            <!-- conteudo_footer--menu-footer -->
            <div class="conteudo_footer--menu-footer">
                <ul>
                    <li>
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/StrongWay/passarinhos/">Passarinhos</a>
                    </li>
                    <li>
                        <a href="/StrongWay/cadastrar/">Cadastrar passarinhos</a>
                    </li>
                </ul>
            </div>
            <!-- conteudo_footer--menu-footer -->
            <div class="conteudo_foote--rede-sociais">
                <h5>Siga-nos nas redes sociais</h5>
                <ul>
                    <li>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </section>
        <h4>todos os direitos reservados</h4>
        <!-- conteudo_footer -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.menu-mobile i.fas.fa-bars').click(function() {
                    $('ul.menu-mobile--links').toggle();
                });
            });
        </script>
    </footer>
    <!-- footer -->
    <?php wp_footer(); ?>

    </body>

    </html>