@extends('layouts.public')

@section('title', e($post->title) . ' &lsaquo; Blog')
@section('name', e($post->title))
@section('description', e($post->description))
@section('image', e($post->image->url('231x169')))

@section('main')

<section class="banner-blog-interna">
    <h2>{{ $post->category->name }}</h2>
</section>

<div class="content-blog main-content content-white">
	<div class="container">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<h2>{{ $post->title }}</h2>
			{!! $post->content !!}
		</div>
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<div class="line-social">
				<span class="share">share:</span>
				<div class="fb-share-button" data-href="{{ url('blog/' . $post->category->slug . '/' . $post->slug) }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartilhar</a></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('blog/' . $post->category->slug . '/' . $post->slug) }}" data-lang="pt">Tweet</a>
			</div>
		</div>
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<a href="{{ url('blog') }}" class="button-noticias">Veja todas as notícias</a>
		</div>
	</div>
</div>

@stop
