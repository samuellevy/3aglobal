@extends('layouts.public')

@section('title', 'Unidades')
@section('name', 'Unidades')
@section('description', 'A 3AWW é uma agência local no mundo todo. Somos mundialmente conhecida pela expertise em PR, atendendo clientes dentro e fora do Brasil.')
@section('image', url('assets/images/seo/units.jpg'))

@section('main')
    <section class="banner-global">
    	<h2>global</h2>
    </section>

    <section class="mapa main-content content-white">
    	<div class="container">
    		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    			<ul class="lista-paises">
    				<li data-country="brasil">
    					<span>Brasil</span>
    				</li>
    				<li data-country="eua">
    					<span>Estados Unidos</span>
    				</li>
                    <li data-country="mexico">
    					<span>México</span>
    				</li>
                    <li data-country="espanha">
    					<span>Espanha</span>
    				</li>
                    <li data-country="alemanha">
                        <span>Alemanha</span>
                    </li>
                    <li data-country="argentina">
                        <span>Argentina</span>
                    </li>
                    <li data-country="chile">
                        <span>Chile</span>
                    </li>
                    <li data-country="chipre">
                        <span>Chipre</span>
                    </li>
                    <li data-country="colombia">
                        <span>Colômbia</span>
                    </li>
                    <li data-country="emirados">
                        <span>Emirados Árabes</span>
                    </li>
                    <li data-country="grecia">
                        <span>Grécia</span>
                    </li>
                    <li data-country="india">
                        <span>Índia</span>
                    </li>
                    <li data-country="italia">
                        <span>Itália</span>
                    </li>
                    <li data-country="marrocos">
                        <span>Marrocos</span>
                    </li>
                    <li data-country="mocambique">
                        <span>Moçambique</span>
                    </li>
                    <li data-country="panama">
                        <span>Panamá</span>
                    </li>
                    <li data-country="polonia">
                        <span>Polônia</span>
                    </li>
                    <li data-country="portugal">
                        <span>Portugal</span>
                    </li>
                    <li data-country="reino-unido">
                        <span>Reino Unido</span>
                    </li>
    				<li data-country="romenia">
    					<span>Romênia</span>
    				</li>
                    <li data-country="russia">
                        <span>Rússia</span>
                    </li>
    				<li data-country="suecia">
    					<span>Suécia</span>
    				</li>
                    <li data-country="suica">
                        <span>Suíça</span>
                    </li>
    			</ul>
    		</div>
    	</div>

		@include('public.map-partial')
    </section>

    <section class="mapa-mobile main-content content-white-2">
    	<div class="container">
    		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    			<dl class="accordion">

				<dt><a href="">Brasil<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<span class="unidade-item">
						<span class="cidade">Rio de Janeiro</span>
						<span class="endereco">Rua São Bento, 09</span>
						<span class="endereco">13º, 14º e cob, Centro</span>
						<span class="endereco">20090-010</span>
						<span class="telefone"><span class="ddd">+55 21</span> 2271.1700</span>
					</span>
					<span class="unidade-item">
						<span class="cidade">São Paulo</span>
						<span class="endereco">Rua dos Pinheiros, 1060</span>
						<span class="endereco">5º andar, Pinheiros</span>
						<span class="endereco">05422-002</span>
						<span class="telefone"><span class="ddd">+55 11</span> 2160.8220</span>
					</span>
					<span class="unidade-item">
						<span class="cidade">Belo Horizonte</span>
						<span class="endereco">Av. Olegario Maciel, 1755</span>
						<span class="endereco">Loja 1, Lourdes</span>
						<span class="endereco">30180-111</span>
						<span class="telefone"><span class="ddd">+55 31</span> 2516.1818</span>
					</span>
					<span class="unidade-item">
						<span class="cidade">Goiânia</span>
						<span class="endereco">Av. Dep. Jamel Cecílio, 2496</span>
						<span class="endereco">Sala 86A, Jardim Goiás</span>
						<span class="endereco">274810-100</span>
						<span class="telefone"><span class="ddd">+55 62</span> 3624.9340</span>
					</span>
				</dd>

				<dt><a href="">Estados Unidos<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<span class="unidade-item">
						<span class="cidade">Miami</span>
						<span class="endereco">2937 SW 27th Avenue</span>
						<span class="endereco">Suite 207 - Florida/USA</span>
						<span class="endereco">33133</span>
						<span class="telefone"><span class="ddd">+1 786</span> 329.7153</span>
					</span>
				</dd>

				<dt><a href="">México<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Espanha<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Alemanha<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

                <dt><a href="">Argentina<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

                <dt><a href="">Chile<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Chipre<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Colômbia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Emirados Árabes<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Grécia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Índia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Itália<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Marrocos<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Moçambique<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Panamá<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Polônia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Portugal<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Reino Unido<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Romênia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Rússia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Suécia<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>

				<dt><a href="">Suíça<i class="fa fa-chevron-right" aria-hidden="true"></i></a></dt>
				<dd>
					<a href="mailto:3a@3aworldwide.com.br" class="button-email" tabindex="0">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
				</dd>
				</dl>
    		</div>
    	</div>
    </section>
@stop
