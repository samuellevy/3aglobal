<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?= $this->Html->charset() ?>
        <title>3AWorldwide Brasil</title>
        <!-- Open Graph -->

        <!-- Schema -->

        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Theme color -->
        <meta name="theme-color" content="#3864BA">

        <!-- Favicon -->
        <?= $this->Html->meta('icon', 'Site.images/favicon-16x16.png', ['sizes'=>'16x16']); ?>
        <?= $this->Html->meta('icon', 'Site.images/favicon-32x32.png', ['sizes'=>'32x32']); ?>
        <?= $this->Html->meta('icon', 'Site.images/favicon-48x48.png', ['sizes'=>'48x48']); ?>
        <?= $this->Html->meta('icon', 'Site.images/favicon-192x192.png', ['sizes'=>'192x192']); ?>

        <!-- CSS -->
        <?= $this->Html->css('Site.public.css'); ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <div class="logo-top">
            <a href="{{ url('/') }}">
                <?= $this->Html->image('Site.logo-3a-topo.png', ['class'=>'img-responsive', 'alt'=>'Logo da 3AWorldwide']);?>
            </a>
        </div>
        <div class="logo-top-mobile">
            <a href="{{ url('/') }}">
            <?= $this->Html->image('Site.logo-3a-topo-mobile.png', ['class'=>'img-responsive', 'alt'=>'Logo da 3AWorldwide']);?>
            </a>
        </div>
        <div class="menu">
            <ul class="idioma">
                <li class="idioma-ativo">
                    <a href="">PT</a>
                </li>
                <li>
                    <a href="">EN</a>
                </li>
                <li>
                    <a href="">ES</a>
                </li>
            </ul>
            <a href="#" class="menu-button" data-effect="st-effect-7" title="Abrir menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <a href="#" class="close-menu" title="Fechar menu"></a>
        </div>

        <div class="st-container">
            <div class="container-menu">
                    <div class="menu-items">
                        <ul class="idioma">
                            <li class="idioma-item idioma-ativo">
                                <a href="">PT</a>
                            </li>
                            <li class="idioma-item">
                                <a href="">EN</a>
                            </li>
                            <li class="idioma-item">
                                <a href="">ES</a>
                            </li>
                        </ul>
                        <ul class="links">
                            <li>
                                <a href="{{ url('sobre') }}">sobre</a>
                            </li>
                            <li class="line-number">
                                <a href="{{ url('3a-way-of-work') }}"><span class="number-link">3</span>a way of work</a>
                            </li>
                            <li>
                                <a href="{{ url('clientes') }}">clientes</a>
                            </li>
                            <li>
                                <a href="{{ url('unidades') }}">global</a>
                            </li>
                            <li>
                                <a href="{{ url('snapshots') }}">snapshots</a>
                            </li>
                            <li>
                                <a href="{{ url('quem-faz') }}">quem faz</a>
                            </li>
                            <li>
                                <a href="{{ url('blog') }}">blog</a>
                            </li>
                            <li class="link-contato">
                                <a href="{{ url('contato') }}">contato</a>
                            </li>
                        </ul>
                        <!--<ul class="social">
                            <li>
                                <a href="https://www.facebook.com/3AWWbr/" target="_blank" rel="noopener" arial-label="Facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/GrupoUnlike" target="_blank" rel="noopener" arial-label="YouTube">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/3aww-brasil" target="_blank" rel="noopener" arial-label="LinkedIn">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/3awwbr" target="_blank" rel="noopener" arial-label="Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            <div class="l-wrapper">

                <footer>
                    <div class="container">
                        <!--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/3AWWbr/" target="_blank" rel="noopener" arial-label="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/user/GrupoUnlike" target="_blank" rel="noopener" arial-label="YouTube">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/3aww-brasil" target="_blank" rel="noopener" arial-label="LinkedIn">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/3awwbr" target="_blank" rel="noopener" arial-label="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-footer">
                                <span class="copyright">Copyright © <span class="number">2017</span> - <span class="number">3</span>a worldwide</span>
                                <ul class="idioma">
                                    <li class="idioma-ativo">
                                        <a href="">PT</a>
                                    </li>
                                    <li>
                                        <a href="">EN</a>
                                    </li>
                                    <li>
                                        <a href="">ES</a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 line-footer-up">
                            <div class="brands-footer">
                                <span>brands</span>
                                <span>beyond borders</span>
                            </div>
                            <div class="links-group">
                                <a href="{{ url('sobre') }}">Sobre</a>
                                <a href="{{ url('3a-way-of-work') }}">3A Way of Work</a>
                            </div>
                            <div class="links-group">
                                <a href="{{ url('clientes') }}">Clientes</a>
                                <a href="{{ url('global') }}">Global</a>
                            </div>
                            <div class="links-group">
                                <a href="{{ url('snapshots') }}">Snapshots</a>
                                <a href="{{ url('quem-faz') }}">Quem faz</a>
                            </div>
                            <div class="links-group">
                                <a href="{{ url('blog') }}">Blog</a>
                                <a href="{{ url('contato') }}">Contato</a>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/3AWWbr/" target="_blank" rel="noopener" aria-label="Facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/GrupoUnlike" target="_blank" rel="noopener" aria-label="YouTube">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/3aww-brasil" target="_blank" rel="noopener" aria-label="LinkedIn">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/3awwbr" target="_blank" rel="noopener" aria-label="Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 line-footer-down">
                            <span class="copyright">Copyright © <span class="number">2017</span> - <span class="number">3</span>a worldwide</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Deferred JavaScript -->
        <script src="{{ url('assets/js/public.js') }}"></script>
    </body>
</html>
