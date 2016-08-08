<?php /* template name: home */ ?>
<?php get_header(); ?>
  <main>
    <section class="banner-home">
      <?php echo do_shortcode('[rev_slider alias="home"]') ?>
    </section>
    <section class="servicos inner">
      <div class="container">
        <h1 class="titulo-site titulo-center text-uppercase">Sua Agência de Inbound Marketing</h1>
        <p align="center">
          Imagine sua empresa atraindo mais clientes potenciais e convertendo-os em clientes fiéis. <br />
          O Inbound Marketing é a estratégia e planejamento voltado para resultados com objetivos de <br />
          atrair o seu cliente ideal e encantá-lo por meio de ações integradas e conteúdo de qualidade.
        </p>
        <br />
        <p align="center" class="img-inbound-top">
          <a href="<?php echo esc_url( home_url( 'inbound-marketing' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/images/img-inbound.png" alt="" class="img-fluid" />
          </a>
        </p>
        <br />
        <h4 class="titulo-site titulo-center mini-titulo">Vamos falar de resultados e vendas?</h4>
        <p align="center"><a href="<?php echo esc_url( home_url( 'inbound-marketing' ) ); ?>" class="btn btn-primary btn-maior">SAIBA MAIS SOBRE INBOUND MARKETING</a></p>
        <p align="center">
          <a href="http://marketplace.resultadosdigitais.com.br/parceiros/3282-4media" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/images/selo-parceiro-pequeno.png" alt="Certificado Resultados Digitais" height="70" />
          </a>
          <a href="http://marketplace.resultadosdigitais.com.br/parceiros/3282-4media" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/images/cms-files-2-1466586933certificado-inbound-mkt-branco.png" alt="Certificado Resultados Digitais" height="60" />
          </a>
          <a href="http://marketplace.resultadosdigitais.com.br/parceiros/3282-4media" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/images/cms-files-2-1467379197-certificado-rd-station-branco.png" alt="Certificado Resultados Digitais" height="60"  />
          </a>
        </p>
      </div>
    </section>
    <section class="inbound inner">
      <div class="container">
        <h2 class="titulo-site titulo-center text-uppercase">Serviços</h2>
        <p align="center">
          Uma agência de comunicação digital focada em resultado. Conheça nossos serviços!
        </p>
        <div class="row inner-serv">
          <div class="col-md-3">
            <p align="center">
              <a href="<?php echo esc_url( home_url( 'inbound-marketing' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/bol1.png" alt="" />
              </a>
            </p>
            <h5 class="titulo-site titulo-center">Inbound Marketing</h5>
            <p align="center" class="paragrafo-serv">
              Transforme Leads em Vendas. Atrair, Converter, Fechar e Encantar.
              O melhor caminho para transformar leads em clientes e aumentar as vendas da sua empresa.
            </p>
            <p align="center"><a href="<?php echo esc_url( home_url( 'inbound-marketing' ) ); ?>" class="btn btn-primary">Saiba Mais</a></p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <a href="<?php echo esc_url( home_url( 'marketing-digital' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/bol2.png" alt="" />
              </a>
            </p>
            <h5 class="titulo-site titulo-center">Marketing Digital</h5>
            <p align="center" class="paragrafo-serv">
              Email Marketing, Mídias Sociais, e mais. Desenvolvemos ações completas
              de Marketing Digital para aumentar a presença da sua marca na web!
            </p>
            <p align="center"><a href="<?php echo esc_url( home_url( 'marketing-digital' ) ); ?>" class="btn btn-primary">Saiba Mais</a></p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <a href="<?php echo esc_url( home_url( 'criacao-de-sites' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/bol3.png" alt="" />
              </a>
            </p>
            <h5 class="titulo-site titulo-center">Criação de Sites</h5>
            <p align="center" class="paragrafo-serv">
              Criamos layouts exclusivos e personalizados, sempre voltados
              para o design responsivo, essencial para tornar o site flexível em todas as plataformas.
            </p>
            <p align="center"><a href="<?php echo esc_url( home_url( 'criacao-de-sites' ) ); ?>" class="btn btn-primary">Saiba Mais</a></p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <a href="<?php echo esc_url( home_url( 'seo-e-cro-otimizacao-de-sites' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/bol4.png" alt="" />
              </a>
            </p>
            <h5 class="titulo-site titulo-center">SEO e CRO</h5>
            <p align="center" class="paragrafo-serv">
              Esteja entre as melhores posições no Google e aumente as visitas e as conversões no seu site!
              Melhore o posicionamento não pago (orgânico) do seu site.
            </p>
            <p align="center"><a href="<?php echo esc_url( home_url( 'seo-e-cro-otimizacao-de-sites' ) ); ?>" class="btn btn-primary">Saiba Mais</a></p>
          </div>
        </div>
      </div>
    </section>
    <section class="servicos clientes inner">
      <div class="container">
        <h2 class="titulo-site titulo-center text-uppercase">Clientes</h2>
        <p align="center">
        Criatividade, ousadia e inteligência que ajudam a construir histórias de sucesso. <br />
        É com aquele "algo a mais" em cada projeto que conquistamos relacionamentos duradouros e únicos com os nossos clientes!
        </p>
        <div class="clientes-slider">
          <?php
            $arg_cliente = array(
              'page_id' => 834,
            );
            $clientes_home = new wp_query($arg_cliente);
            if($clientes_home->have_posts()):
              while ($clientes_home->have_posts()): $clientes_home->the_post();
                remove_filter( 'the_content', 'wpautop' );
                the_content();
              endwhile;
            endif;
          ?>
        </div>

        <p align="center">
          <p align="center"><a href="<?php echo esc_url( home_url( 'clientes' ) ); ?>" class="btn btn-primary">Conheça nossos clientes</a></p>
        </p>
      </div>
    </section>

    <section class="materiais inner">
      <div class="container">
        <h2 class="titulo-materiais titulo-center text-uppercase"><span>Nossos</span> Materiais</h2>
        <p align="center">
          Confira e baixe aqui nossos materiais gratuitos!
        </p>
        <div class="row">
          <div class="col-md-4">
            <a href="http://materiais.4media.com.br/ebook-como-captar-mais-alunos-com-o-marketing-educacional">
              <img src="<?php echo get_template_directory_uri() ?>/images/Home-Materiais.jpg" alt="" class="pull-xs-left" />
            </a>
          </div>
          <div class="col-md-4 text-center">
            <a href="http://materiais.4media.com.br/por-que-ter-um-site-responsivo">
              <center><img src="<?php echo get_template_directory_uri() ?>/images/book1.jpg" alt="" class="" /></center>
            </a>
          </div>
          <div class="col-md-4">
            <a href="http://materiais.4media.com.br/10-dicas-incriveis-para-conquistar-clientes-e-aumentar-suas-vendas">
              <img src="<?php echo get_template_directory_uri() ?>/images/book2.jpg" alt="" class="pull-xs-right" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="blog inner">
      <div class="container">
        <h2 class="titulo-site titulo-center text-uppercase">Blog</h2>
        <div class="row">
          <?php
          $args = array(
            'post_type'       => 'post',
            'posts_per_page'  => 3
          );
          $blog_home = new wp_query($args);
          if ($blog_home->have_posts()):
            $time = 0.8;
            while ($blog_home->have_posts()): $blog_home->the_post();
            ?>
            <div class="col-md-4">
              <div class="bloco-noticia-home">
                <div class="img-home-noticia">
                  <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail( 'high', array( 'class' => 'img-fluid' ) ); ?>
                  </a>
                </div>
                <div class="desc-block">
                  <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                  <p>
                    <?php the_excerpt_limit(28) ?>
                  </p>
                  <a href="<?php the_permalink() ?>" type="button" class="btn btn-primary">Saiba Mais</a>
                </div>
              </div>
            </div>
            <?php
              $time = $time + 0.8;
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
