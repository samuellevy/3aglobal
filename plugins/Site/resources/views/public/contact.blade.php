@extends('layouts.public')

@section('title', 'Contato')
@section('name', 'Contato')
@section('description', 'Atendemos todo o Brasil. A 3AWW é uma agência especializada em marketing, inbound Marketing, SEO, criação de sites, e outros serviços.')
@section('image', url('assets/images/seo/contact.jpg'))

@section('main')
    <section class="banner-contato">
    	<div class="container">
    		<div class="row">
    			<div class="content">
    				<div class="content-3a wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
    					<img src="assets/images/contato/logo-big.png" alt="" class="img-responsive">
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="contato main-content content-white">
    	<div class="container">
    		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    			<form action="{{ url('contato') }}" method="post" class="js-ajax contact-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    				<div class="line-form line-1">
    					<div class="label-text">
    					   <span class="number">3</span>A Worldwide
    					</div>
    					<div class="trigger-select">
    						<a href="#" class="3a trigger-cidade">
    							cidade <i class="fa fa-caret-down" aria-hidden="true"></i>
    						</a>
    					</div>
    					<div class="field-select">
    						<select class="selectpicker cidadades-select" name="unit_id">
                                <option value="">Internacional</option>
                                @foreach ($units as $unit)
    							<option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
    						</select>
    					</div>
    				</div>
    				<div class="line-form line-2">
    					<div class="label-dpto">
    						Assunto
    					</div>
    					<div class="trigger-select">
    						<a href="#" class="dpto-link">
    							selecione <i class="fa fa-caret-down" aria-hidden="true"></i>
    						</a>
    					</div>
    					<div class="field-select">
    						<select class="selectpicker dpto-select" name="subject_id" required="">
                                @foreach ($subjects as $subject)
    							<option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
    						</select>
    					</div>
    				</div>
    				<div class="line-form textarea line-3">
    					<div class="trigger-select">
    						<a href="#" class="trigger-textarea">
    							sobre
    							<span class="line-animate"></span>
    						</a>
    					</div>
    					<textarea name="message" required=""></textarea>
    				</div>
    				<div class="line-form line-4">
    					<div class="label-dpto atenciosamente">
    						Atenciosamente,
    					</div>
    					<!--<div class="trigger-field">
    						<a href="#" class="trigger-nome">
    							@nome
    						</a>
    						<div class="input-field">
    							<input type="text" class="campo-texto name" name="name" required="">
    						</div>
    					</div>-->
    					<!--<div class="label-virgula">
    						,
    					</div>-->
    					<div class="trigger-field">
    						<a href="#" class="trigger-email">
    							e-mail
    						</a>
    						<div class="input-field">
    							<input type="email" class="campo-texto email" name="email" required="">
    						</div>
    					</div>
    				</div>
    				<div class="line-form">
    					<button type="submit" class="enviar-form">Enviar mensagem</button>
    				</div>
    				<div class="line-form">
    					<p class="mensagem-sucesso">Mensagem enviada com sucesso!</p>
    				</div>
    			</form>
    		</div>
    	</div>
    </section>

    <section class="climatempo clima-contato dark-content">
        <div class="menu-cidades menu-cidades-contato">
            <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="lista-cidades-contato">
                        <li>
                            <span>Rio de Janeiro</span>
                        </li>
                        <li>
                            <span>São Paulo</span>
                        </li>
                        <li>
                            <span>Belo Horizonte</span>
                        </li>
                        <li>
                            <span>Goiânia</span>
                        </li>
                        <li>
                            <span>Miami</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="items-cidade-contato">
            <div class="cidade rio-de-janeiro">
                <div class="container">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <span class="uf">
                            <span class="text-form">RJ</span>
                            <svg viewBox="25 0 100 70" class="sigla-svg">
                                <g>
                                  <defs>
                                    <clipPath id="letter-r-mask">
                                      <path d="M64.5,59.7l-9.1-17.5c-0.7,0.1-1.4,0.1-2.1,0.1c-1.8,0-2.9-0.1-4.6-0.1v17.6H36.1V6.5
                                        c4.5-0.5,9.5-0.9,15.8-0.9c16.7,0,23.3,8,23.3,17.8c0,6.4-3.4,12.1-9.2,15.5l12.6,20.7H64.5z M53.4,16.8c-1.9,0-3.1,0.1-4.8,0.4
                                        v14.8c1.6,0.1,2.5,0.2,4,0.2c5.9,0,9.7-2.9,9.7-8.3C62.3,19.4,58.7,16.8,53.4,16.8z"/>
                                    </clipPath>
                                  </defs>
                                  <line class="letter letter--r" clip-path="url(#letter-r-mask)" x1="41.5" y1="59.7" x2="41.5" y2="4.3"/>
                                  <path class="letter letter--r" clip-path="url(#letter-r-mask)" fill="none" d="M42,9.8C79.5,6,77.6,41.9,41.8,38.4"/>
                                  <line class="letter letter--r" clip-path="url(#letter-r-mask)" x1="57.5" y1="37.4" x2="75.3" y2="67.3"/>
                                </g>
                                <g>
                                  <defs>
                                    <clipPath id="letter-j-mask">
                                      <path d="M116.4,41.2c0,11.8-5,19.4-19.2,19.4c-5.7,0-10-1.2-14.6-3.8l1.6-4.4l2.2-6c2.9,1.8,6.9,2.9,10.4,2.9
                                        c5.1,0,7.2-3.1,7.2-9.1V6h12.4V41.2z"/>
                                    </clipPath>
                                  </defs>
                                  <path class="letter letter--j" clip-path="url(#letter-j-mask)" fill="none" d="M110.3,4.3c0,0,0,19.5,0,39.2s-27.8,9-27.8,9"/>
                                </g>
                            </svg>
                        </span>
                        <div class="info">
                            <div class="info-container">
                                <span class="endereco">Rua São Bento, 9, 13º, 14º e Cob - Centro</span>
                                <span class="tel-email">
                                    <span class="tel-left">
                                        <span class="tel"><span class="ddd">+55 21</span> 2271.1700</span>
                                    </span>
                                    <span class="email-right">
                                        <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <canvas width="315" height="315" class="newClock clock-contact" data-timezone="America/Sao_Paulo"></canvas>
                        <div data-local="rj" class="weather js-weather"></div>
                    </div>
                </div>
            </div>
            <div class="cidade sao-paulo">
                <div class="container">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <span class="uf">
                            <span class="text-form">SP</span>
                            <svg viewBox="25 0 100 70" class="sigla-svg">
                                <g>
                                    <defs>
                                        <clipPath id="letter-p-mask">
                                            <path d="M97.4,43.3c-1.7,0-2.9-0.1-4.5-0.1v15.6H80.8V6.9C86.1,6.3,91,6.1,95.3,6.1c15.1,0,23.3,8.1,23.3,18.7
                                                C118.6,35.5,111.3,43.3,97.4,43.3z M97.4,17.4c-1.6,0-2.6,0.1-4.5,0.3v14.9c1.7,0.1,2.5,0.1,3.6,0.1c6.4,0,9.6-2.8,9.6-7.9
                                                C106.2,20.7,103.4,17.4,97.4,17.4z"/>
                                        </clipPath>
                                    </defs>

                                    <path class="letter letter--p" clip-path="url(#letter-p-mask)" fill="none" d="M87.5,10.2c37.5-3.8,35.6,32.1-0.2,28.6"/>
                                    <line class="letter letter--p" clip-path="url(#letter-p-mask)" x1="86.5" y1="62.3" x2="86.5" y2="5"/>c
                                </g>
                                <g>
                                    <defs>
                                        <clipPath id="letter-s-mask">
                                        <path d="M53.6,59.7c-5.9,0-13.1-2.4-17.6-5.4l3.4-11c4.2,3.1,9.7,5.1,14.6,5.1c4.3,0,5.9-2,5.9-4.6
                                            c0-2.7-1.4-4.6-9.4-7.8c-9.2-3.7-12.4-9.1-12.4-15.4c0-7.6,6.2-15.1,18.4-15.1c5.7,0,11.6,2,14.6,4.1l-3.1,10.9
                                            c-3-2.1-7.9-4.3-11.6-4.3c-4.4,0-6.2,2.1-6.2,4.2c0,3.4,2.6,4.6,9.2,7.4c9.8,4.1,12.7,8.9,12.7,15.6
                                            C72.3,51.7,66.2,59.7,53.6,59.7z"/>
                                        </clipPath>
                                    </defs>
                                    <path class="letter letter--s" fill="none" clip-path="url(#letter-s-mask)" d="M72.3,16.1c0,0-27.9-13.3-28.5,1.5S69.4,31,66.9,45.9s-32.3,3.6-32.3,3.6"/>
                                </g>
                            </svg>
                        </span>

                        <div class="info">
                            <div class="info-container">
                                <span class="endereco">Rua dos Pinheiros, 1060, 5º andar, Pinheiros</span>
                                <span class="tel-email">
                                    <span class="tel-left">
                                        <span class="tel"><span class="ddd">+55 11</span> 2160.8220</span>
                                    </span>
                                    <span class="email-right">
                                        <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <canvas width="315" height="315" class="newClock clock-contact" data-timezone="America/Sao_Paulo"></canvas>
                        <div data-local="sp" class="weather js-weather"></div>
                    </div>
                </div>
            </div>
            <div class="cidade belo-horizonte">
                <div class="container">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <span class="uf">
                            <span class="text-form">BH</span>
                            <svg viewBox="25 0 110 70" class="sigla-svg bh-svg">
                                <g>
                                    <defs>
                                        <clipPath id="letter-b-mask">
                                        <path d="M52.5,59.7c-4.6,0-10.6-0.4-15.8-1.1V6.8c3.8-0.6,10.5-1.2,14.8-1.2c15.4,0,23.2,6.9,23.2,14.2
                                            c0,5.6-3.1,9.3-9.1,11.8c7.2,2.2,10.6,6.4,10.6,12.4C76.2,52.4,68.4,59.7,52.5,59.7z M54.1,16.3c-2.2,0-3.8,0.2-5.6,0.5v11.1
                                            c1.4,0.1,2.3,0.2,4.6,0.2c5.9,0,8.9-2.2,8.9-6C62,18.9,59.3,16.3,54.1,16.3z M53.2,36.4c-1.9,0-3.4,0.1-4.6,0.2V49
                                            c1.7,0.1,2.7,0.2,5.1,0.2c6.2,0,9.2-2.4,9.2-6.4C62.9,38.8,59.7,36.4,53.2,36.4z"/>
                                        </clipPath>
                                    </defs>
                                    <path class="letter letter--b" clip-path="url(#letter-b-mask)" fill="none" d="M42.6,60c0-2.8,0.1-42.4,0-45.1C82.6,9,65,29.8,50.4,32.5c13-5.3,43,21.7-8,23.5"/>
                                </g>
                                <g>
                                    <defs>
                                        <clipPath id="letter-h-mask">
                                            <path d="M118.1,59.2V37.9H97.7v21.3H85.4v-53h12.3v20.8h20.4V6.1h12.3v53H118.1z"/>
                                        </clipPath>
                                    </defs>
                                    <line class="letter letter--h" x1="91.8" y1="5.6" x2="91.8" y2="58.1"/>
                                    <line class="letter letter--h" x1="91" y1="32.7" x2="125.6" y2="32.7"/>
                                    <line class="letter letter--h" x1="124.4" y1="5.5" x2="124.4" y2="58"/>
                                </g>
                            </svg>
                        </span>
                        <div class="info">
                            <div class="info-container">
                                <span class="endereco">Av. Olegario Maciel, 1755, Loja 1 - Lourdes</span>
                                <span class="tel-email">
                                    <span class="tel-left">
                                        <span class="tel"><span class="ddd">+55 31</span> 2516.1818﻿</span>
                                    </span>
                                    <span class="email-right">
                                        <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <canvas width="315" height="315" class="newClock clock-contact" data-timezone="America/Sao_Paulo"></canvas>
                        <div data-local="bh" class="weather js-weather"></div>
                    </div>
                </div>
            </div>
            <div class="cidade goiania">
                <div class="container">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <span class="uf">
                           <span class="text-form">GO</span>
                           <svg viewBox="25 0 120 70" class="sigla-svg goiania-svg">
                                <g>
                                    <defs>
                                        <clipPath id="letter-g-mask">
                                        <path d="M83.3,29.3v24.8c-5.7,3.3-11.8,5.2-19.7,5.2c-15.2,0-27.3-10.9-27.3-26.8c0-15.9,12.2-26.9,27.9-26.9
                                            c6.8,0,12.3,1.8,17.4,4.5l-5,9.7C73,18,69,17,65,17c-10.3,0-15.9,6.4-15.9,15.6c0,9.9,6.7,16.1,15.2,16.1c3.8,0,5.7-0.4,7.7-1.4
                                            v-7.7H61.6V29.3H83.3z"/>
                                        </clipPath>
                                    </defs>
                                    <path class="letter letter--g" clip-path="url(#letter-g-mask)" fill="none" d="M82.8,17.1C73.5,9,40.1,5.9,42,34.1s35.8,17.1,35.8,17.1l-0.4-17.1H59.8"/>
                                </g>
                                <g>
                                    <defs>
                                        <clipPath id="letter-o-mask">
                                        <path d="M117.6,59.4c-16.1,0-26.4-11.5-26.4-26.8c0-15.3,10.8-26.9,26.9-26.9c16,0,26.4,11.5,26.4,26.9
                                            C144.5,47.8,133.6,59.4,117.6,59.4z M117.8,16.5c-8.2,0-13.7,6.7-13.7,16.1c0,9.3,5.5,16.1,13.7,16.1c8.2,0,13.7-6.8,13.7-16.1
                                            C131.6,23.2,126,16.5,117.8,16.5z"/>
                                        </clipPath>
                                    </defs>

                                    <path class="letter letter--o" clip-path="url(#letter-o-mask)" fill="none" d="M117.8,10.9c0,0-21.1-1.9-21.1,20.9c0,11.4,4.1,23.5,21.1,23.5S140,36.3,140,32.5
                                        c-1.3-21.7-22.8-21.7-22.8-21.7"/>
                                </g>
                            </svg>
                        </span>
                        <div class="info">
                            <div class="info-container">
                                <span class="endereco">Av. Dep. Jamel Cecílio, 2496, Sala 86A - Jardim Goiás</span>
                                <span class="tel-email">
                                    <span class="tel-left">
                                        <span class="tel"><span class="ddd">+55 62</span> 3624.9340</span>
                                    </span>
                                    <span class="email-right">
                                        <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <canvas width="315" height="315" class="newClock clock-contact" data-timezone="America/Sao_Paulo"></canvas>
                        <div data-local="go" class="weather js-weather"></div>
                    </div>
                </div>
            </div>
            <div class="cidade miami">
                <div class="container">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <span class="uf">
                            <span class="text-form">MIA</span>
                            <svg viewBox="25 0 150 70" class="sigla-svg miami-svg">
                                <g>
                                    <defs>
                                        <clipPath id="letter-m-mask">
                                        <path d="M80,59.5l-0.7-26.2L64.6,52h-1.3L48.4,33.3l-0.5,26.2H36l2.5-53.6l1.7-0.1l24.1,30.5L87.8,5.7l1.7,0.1
                                            L92,59.5H80z"/>
                                        </clipPath>
                                    </defs>
                                    <polyline class="letter letter--m" clip-path="url(#letter-m-mask)" fill="none" points="40.8,61.8 43.5,17.5 64,45.2 85.5,17.5 86.7,63.3   "/>
                                </g>
                                <g>
                                    <defs>
                                        <clipPath id="letter-i-mask">
                                            <path d="M103.3,59.5V6.2h12.4v53.3H103.3z"/>
                                        </clipPath>
                                    </defs>
                                    <line class="letter letter--i" clip-path="url(#letter-i-mask)" fill="none" x1="108.2" y1="3.5" x2="109.5" y2="62.5"/>
                                </g>
                                <g>
                                    <defs>
                                        <clipPath id="letter-a-mask">
                                        <path d="M160.1,59.5l-4-9.7h-18.4l-4,9.7h-12.6l25.1-53.7h1.7l25.1,53.7H160.1z M146.9,27.6l-5.3,12.8h10.5
                                            L146.9,27.6z"/>
                                        </clipPath>
                                    </defs>
                                    <polyline class="letter letter--a" clip-path="url(#letter-a-mask)" fill="none" points="126.5,62.3 147,14.8 169,62.3  "/>
                                    <line class="letter letter--a" clip-path="url(#letter-a-mask)" fill="none" x1="135.7" y1="45" x2="159" y2="45"/>
                                </g>
                            </svg>
                        </span>
                        <div class="info">
                            <div class="info-container">
                                <span class="endereco">2937 SW 27th Avenue, Suite 207 - Florida/USA</span>
                                <span class="tel-email">
                                    <span class="tel-left">
                                        <span class="tel"><span class="ddd">+1 786</span> 329.7153</span>
                                    </span>
                                    <span class="email-right">
                                        <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <canvas width="315" height="315" class="newClock clock-contact" data-timezone="America/Sao_Paulo"></canvas>
                        <!-- <div data-timezone="America/New_York" class="clock js-clock"></div> -->
                        <div data-local="mia" class="weather js-weather"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop
