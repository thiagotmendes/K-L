  <?php /*Template Name: Home*/ ?>
    <?php get_header() ?>
    <main>
      <section class="banner">
        <div class="container">
          <?php echo do_shortcode('[rev_slider alias="home"]') ?>
        </div>
      </section>
      <section class="conteudo inner">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="box-produto">
                <h2 class="titulo-box">Serviços</h2>
                <?php
                  $arg = array(
                    'post_type'       => 'page',
                    'posts_per_page'  => 10,
                    'orderby'         => 'menu_order',
                    'order'           => 'ASC',
                    'post_parent'     => 14
                  );
                  $menu_lateral = new wp_query($arg);
                  if($menu_lateral->have_posts()):
                    echo "<ul class='produtos-home'>";
                      while($menu_lateral->have_posts()): $menu_lateral->the_post();
                        $titulo_menu = get_the_title();
                        if ($titulo_corrente == $titulo_menu) {
                          $activate = "activate";
                        } else {
                          $activate = "";
                        }
                        echo "<li class='produtos-home'>";
                        ?>
                          <a href="<?php the_permalink() ?>" class="hvr-sweep-to-right "><?php the_title(); ?></a>
                        <?php
                        echo "</li>";
                      endwhile;
                    echo "</ul>";
                  else:
                    echo "Nenhuma pagina encontrada";
                  endif;
                  wp_reset_query();
                  ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-historia">
                <h2 class="titulo-box">Quem Somos</h2>
                <p class="texto-historia">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="texto-historia">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-historia" href="<?php echo esc_url( home_url( 'empresa' ) ); ?>" role="button">Saiba Mais</a>
              </div>
            </div>
            <div class="col-md-5">
              <div class="box-obras">
                <h2 class="titulo-box-obra">Obra em Destaque</h2>
                <a href="<?php echo esc_url( home_url( 'obras' ) ); ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/images/obra.jpg" alt="" class="img-responsive img-obra-home"/>
                </a>
                <p class="titulo-obra-home">
                  Titulo da Obra
                </p>
                <a href="<?php echo esc_url( home_url( 'obras' ) ); ?>" class="obras-todas">Ver Todas</a>
                <a class="btn btn-obra" href="<?php echo esc_url( home_url( 'obras' ) ); ?>" role="button">Saiba Mais <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="servico inner">
        <div class="container">
          <h2 class="titulo-box">Produtos</h2>

          <div class="item-servico">
            <?php
            $arg = array(
              'post_type'       => 'page',
              'posts_per_page'  => 10,
              'post_parent'     => 12
            );
            $menu_lateral = new wp_query($arg);
            if($menu_lateral->have_posts()):
              while($menu_lateral->have_posts()): $menu_lateral->the_post();
              ?>
              <div>
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                </a>
              </div>
              <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer() ?>
