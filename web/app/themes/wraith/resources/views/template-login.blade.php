{{--
  Template Name: Login
--}}

@php
	$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
  $logo = get_field('logo', 'option');
  $logo_retina = get_field('logo_retina', 'option');
  $icon = get_field('icon', 'option');
  $icon_retina = get_field('icon_retina', 'option');
@endphp

@extends('layouts.login')

@section('content')
  <div class="h-screen flex flex-wrap relative">
    <div class="w-full lg:w-1/2 xl:w-2/5 p-2 relative">
      <div class="w-full h-full flex flex-col justify-between rounded-xl bg-white">
        <div class="mb-2 lg:mb-0 p-2">
          <a href="{{ get_bloginfo('url') }}" class="border-none">
            @if( $icon )
              <img src="{!! $icon['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $icon_retina ? ' srcset="' . $icon['url'] . ' 1x, ' . $icon_retina['url'] . ' 2x"' : null !!} width="48" height="48" class="opacity-100 transition hover:opacity-75">
            @elseif( $logo )
              <img src="{!! $logo['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $logo_retina ? ' srcset="' . $logo['url'] . ' 1x, ' . $logo_retina['url'] . ' 2x"' : null !!} width="auto" height="48" class="opacity-100 transition hover:opacity-75">
            @else
              <h1 class="text-primary font-bold text-xl">{{ get_bloginfo('name', 'display') }}</h1>
            @endif
          </a>
        </div>
        <div class="w-full md:px-2 lg:px-4 xl:px-8">
          @if( $login === 'failed' )
            {!! '<div class="alert alert-danger">The login details you entered are incorrect. Please try again.</div>' !!}
          @elseif( $login === 'empty' )
            {!! '<div class="alert alert-danger">Please enter both your username and password to login.</div>' !!}
          @elseif( $login === 'false' )
            {!! '<div class="alert alert-info">You are now logged out.</div>' !!}
          @elseif( $login === 'media' )
            {!! '<div class="alert alert-info">Cant login? <a href="/contact/" target="_blank">Request access to the media centre.</a></div>' !!}
          @elseif( is_user_logged_in() )
            {!! '<div class="alert alert-info">You are already logged in. <a href="' . wp_logout_url() . '">Log out?</a></div>' !!}
          @endif
          <div class="bg-white z-depth-1 p-a-1">
            @include('partials.form-login')
          </div>
        </div>
        <div class="w-full p-2 flex flex-wrap justify-between items-center">
          <div class="flex flex-wrap items-center">
            <a href="https://www.internetconsultancy.pro/" target="_blank" class="border-none">
              <?xml version="1.0" encoding="utf-8"?>
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve" width="52" height="52" class="transition hover:opacity-75" style="color: #1F80C4; fill: currentColor;">
              <g>
                <path d="M75.2,86c-0.4,0.7-1.1,1.1-2.2,1.4C72,87.8,72,88.6,72,88.9c0,0.7-0.4,0.7-0.7,1.1c-0.7,0.4-0.4,0.7-0.4,1.1
                  c0,0.7,0,0.4,0.7,0.4s1.1-0.7,1.4-1.1c0.4-0.7,1.1-1.1,1.4-2.2s1.4-1.8,1.4-2.5C75.9,84.9,75.2,85.3,75.2,86z"/>
                <path d="M5.6,31.8c-0.2,0.5-0.4,0.9-0.5,1.3C5.2,32.7,5.4,32.3,5.6,31.8z"/>
                <path d="M81,14.7c0,0.4,0.4,0.7,0.4,1.1c-0.7,0-0.7,0-1.1,0.4c-0.4,0.4,0,1.1-1.1,0.7c0,0.7,1.1,1.8,1.1,2.5
                  c0.4,0.4,0.4,0.7,0.7,1.1c0.4,0.4,1.1,0,1.1,0.7c-0.7,0.4,0,1.8,0,2.9c-0.7,0-1.4,1.1-1.8,0c2.9,0,0-2.9-0.7-4s-1.4-4-3.2-4
                  c0,0.7,0.4,1.1,0.4,1.8c0,0.7,0.4,0.7,0.7,1.4c0.4,0.4,0.4,1.1,0.7,1.4c0.4,0.4,0.7,0.4,0.7,1.1c-0.4-0.4-1.1-0.4-1.4-0.7
                  c-0.4-0.4-0.7-0.7-1.1-1.1c-0.4-0.4-0.7-0.4-1.4-0.7c-0.4-0.4-1.1-0.7-1.4-0.4l0.7,0.7c0.4,0.4,0.7,0.4,0.7,0.7
                  c0.7,0.7-0.4,1.4-0.4,0.4c-0.4,0-0.7,0-1.1,0c-0.4,0-0.7,0.4-1.1,0.4c0-0.4,0-0.4,0-0.7c-1.1,0-1.1,0.7-1.8,1.1
                  c-0.4,0.4-1.4,0.4-1.1,1.1c-0.7,0.7-0.7-0.4-1.4-0.7l0.4-0.4c0-0.7-1.1-1.4-1.8-0.7c0.7,0.7,0.4,0.7,0.7,1.4c0,0.4,0.4,1.1,0.4,1.4
                  c-0.7-0.4-1.1,0-1.4,0.4c-0.7,0.7-0.4,0.4,0,1.4c-0.4,0-1.8-0.7-1.8-0.7c-0.7,0.4,0.7,0.7,0.7,1.4c-1.1,0-1.4-0.7-2.2-1.4
                  c0,0-0.4,0-0.4-0.4s0.4-0.4,0-0.7c-0.4-0.4-0.7-0.4-1.1-0.4c-0.7-0.7,0-0.7,0.7-0.4c0.7,0.4,1.1,0.7,1.4,1.1
                  c1.4,0.7,2.5-0.7,1.8-1.8c-0.7-1.1-1.8-1.8-3.2-1.8c-0.4,0-3.2-1.1-2.5-1.8c-1.4-1.4-4.3-0.7-6.1,0c-0.7,0.4-1.8,1.1-2.5,1.8
                  c-0.7,0.7-0.7,1.8-1.1,2.5c-0.4,0.7-0.4,1.1-0.7,1.8c-0.4,0.7-0.4,0.7-1.1,1.4c-0.4,0.4-0.7,1.1-1.4,1.4c-0.4,0.4-1.4,0.7-1.8,1.1
                  c-0.4,0.7-0.7,3.2,0,4c0.7,1.4,2.2,0,2.9-0.4c0-0.4,0-0.7,0.4-0.7c0.4,0.4,0.4,1.4,0.4,1.8c0,0.7,0.4,1.1,0.7,1.4
                  c0,0.4,0,1.8,1.1,1.4c0.7-0.4,0.4-1.1,1.1-0.7c0.4-0.4,0-0.7,0.4-1.1c0-0.4,0.4-0.4,0.4-0.7c0-0.4,0-0.7,0-1.1
                  c0-0.7,0.7-0.7,1.1-1.4c0.4-0.7-0.7-0.7-0.7-1.4c-0.4-0.4,0-1.4,0-1.8c0.4-0.4,0.7-1.1,1.1-1.4c0.4-0.7,0.7-0.7,0.7-1.4
                  c0-0.7-0.4-1.1,0.7-1.1c0.4,0,1.4,0,1.4,0.7c-0.7,0.7-1.1,1.4-1.8,2.2c-0.7,0.7,0,0.7,0,1.4c0,0.7-0.4,0.7-0.4,1.4
                  c0,0.4,0.7,0.7,1.1,0.7c0.7,0.4,1.1,0,1.8-0.4h1.4c0.7,0,1.1-0.4,1.4,0.4c-0.7,0.4-1.4,0.7-2.2,0.7s-1.8-0.4-1.8,0.7
                  c0,0.7,1.4,1.8,0.4,2.2c-0.7-1.1-1.1,0-1.4,0.7c0,0.7,0.7,1.4-0.4,2.2c-0.7,0.4-1.1-0.4-1.8-0.4c-0.7,0-1.4,1.1-2.2,1.1v-0.4
                  c-0.4,0.4-0.7,0.4-1.1,0c0,0,0,0,0.4-0.4c-0.7-0.7-1.4,0.4-1.8,0c-1.1-1.1,0.4-1.1,0.4-1.8c-0.7,0,0-1.1-0.4-1.4
                  c-0.7,0.4-1.4,0.7-1.8,1.4c0,0.7-0.4,1.8,0,2.5c-0.5,0.2-1.1,0.3-1.5,0.5c-0.1-0.1-0.1-0.2-0.3-0.2c-0.4,0-0.7,0-0.7-0.7
                  s-0.4-1.1-0.7-1.1c-0.4,0-0.4-0.7-0.7-1.1c0-0.4-0.7-0.4-0.7-0.7c0.4,0-0.4-0.4,0-0.4c0.4-0.4,0.4-0.7,0.7-1.1c0-0.4-0.4-0.4-0.7,0
                  c-0.4,0-0.4,0-0.4,0s0.7-0.7,0.7-1.1c0-0.4-0.7,0-1.1,0s-1.1,0.4-1.1,0.7c-0.4,0.4,0,0.7,0,0.7l-0.4,0.7c0,0,0.4,0,0.4,0.4
                  s0,0.4,0.4,0.4c0.4-0.4,0.4,0.4,0,0.7c-0.4,0.4,0,0.4,0.4,0.4c0.4,0,0.7-0.4,0.7,0c-0.4,0.4,0.4,0.4,0.4,0.7c0.4,0.4,0,0.4-0.7,0.7
                  c-0.7,0.4-0.4,0.4,0,0.7c0.4,0,0,0.4-0.7,0.7c-0.7,0.4-0.4,0.4,0.4,0.4c0.4,0,0.7,0.4,0.4,0.4c-0.4,0-0.4-0.4-1.1,0.7
                  c-0.7,0.7,0,0.7,0.4,0.4h0.4c0.4,0,0.4,0,0.4-0.4c0-0.4,0.7,0,1.1,0h1.4c0,0,0,0,0,0c-0.1,0.1-0.2,0.2-0.4,0.4
                  c-0.4,0.4-0.4,0.7-0.7,0.7c-0.4,0.4-0.7,0.4-1.1,0.4s0,0.4-0.4,0.4c0,0-0.4,0-0.7,0c-0.4,0-0.7-0.4-1.1,0c0.4,0.4,0.4,0.7,0.4,1.1
                  c-0.4,0-2.9-0.4-2.2,0.7c0.4,0.4,1.1,0.4,1.8,0.7c0.4,0.4,0.4,1.1,0.4,1.4c0,0.4,0.4,1.4,0,1.8c-0.4,0.4-1.8,0-2.2,0
                  c-1.1,0-3.2,0-3.2,1.4c0,0.7,0.4,1.1,0.4,1.8c0,0.4-0.7,1.1,0,1.4c-1.1,1.8,1.1,1.4,2.2,1.8c0.4,0.4,0.4,0.4,0.7,0.4h0.7h0.7
                  l0.7-0.4c0.4-0.4,0.4-0.4,0.7-0.7c0.4-0.4,0.4-0.4,0.7-0.7c-0.4-0.7-0.7-0.7,0-1.8c0.4-0.7,1.1-0.7,1.4-1.1c0.4-0.7,0-1.8,0.7-2.2
                  c0.7-0.4,1.4,0.7,2.2,0.4c0-0.4,1.8-1.4,2.5-1.1c0.4,0.4,0.4,1.1,0.7,1.4c0.4,0.4,0.7,0.4,1.1,0.7c0.1,0.1,0.2,0.1,0.2,0.2
                  c-0.2,0-0.5,0.2-0.9,0.2c-0.7,0,0,0.4,0,1.1s0.4,1.1,0.7,0.7C50,51.1,50,50,50,49.6c0,0,0,0,0,0c0.6,0.5,1.2,0.9,1.8,1.5
                  c0.4,0.4,0.7,0.4,0.7,1.1c0,0.2,0,0.3,0,0.4c0,0,0,0.1,0,0.1c-0.1,0.4-0.1,0.6,0.4,0.9c0.1-0.2,0.2-0.3,0.2-0.5
                  c0.2,0.1,0.4,0.1,0.5,0.1c0.4,0,0,0.4,0.7,0.4c0.4,0,0.4,0,0-0.4c-0.4,0,0-0.4,0.4-0.7c-0.4-0.7-1.1-0.4-1.1,0c-0.1,0-0.1,0-0.2,0
                  c0.1-0.3,0.2-0.5,0.2-0.7c0-0.4-0.4-0.7,0.4-0.7l0.7,0.4c0-0.4-0.4-0.7-0.7-1.1c-0.4-0.4-1.1-0.4-1.1-0.7c-1.1-0.4-1.8-0.7-2.5-1.8
                  l0,0c0,0,0,0,0,0c0-0.2,0-0.2-0.1-0.1c-0.3-0.3-0.6-0.7-0.3-1.4c0-0.4,0.4-1.1,0.7,0l0.7,0.7c0.4,0.4,0.7,0.4,1.1,0.4
                  c0.7,0.4,1.4,0.7,1.8,1.1c0.7,0.7,0.4,1.4,0.7,2.2c0.4,0.7,1.1,1.1,1.4,1.8c0,0,0,0-0.4,0c0,0.4,0.7,1.1,1.4,1.4
                  c1.1,0.4,0-0.4,0.4-0.4c0.4-0.4,0.4,0,0.7-0.4l-0.4-0.4H59c0-0.7-2.5-2.2-0.7-2.9c0.7-0.4,1.4,0,1.8,0c0.7,0,1.1-0.4,1.8-0.4
                  c-0.4,0.4,0,0.4-1.1,0.4c-0.4,0-0.7,0-1.1,0.4c0,0.4,0.4,0.7,0.4,1.1l0.4,0.4c0,0.4-0.4,0.4,0,0.7c0.4,0.7,1.8,0.7,1.8,1.4h1.1
                  c0.4-0.4,0-0.7,0.7-0.4c0.4,0,0.4,0.4,0.7,0.4h1.1c0.7-0.4,1.1-1.1,1.4,0c0,0.2-0.2,0.5-0.2,0.7c-0.1,0-0.1,0-0.2,0
                  c-0.4,0-0.4,0.4,0,0.7c0.2,0,0.3,0,0.4-0.1c0.1,0.3,0.2,0.5-0.1,0.8c0,1.4-0.7,2.5-2.2,2.5c-0.7,0-1.4,0-1.8,0s-0.4,0.4-1.1,0
                  c-0.4,0-0.7-0.4-1.1-0.4c-0.7,0-1.1,0-1.8-0.4c0,0,0-0.4-0.4-0.4h-0.4c-0.4,0-0.7,0.4-0.7-0.4c-0.7,0-2.9,0.7-1.8,1.4
                  c0.4,1.4-3.2,0-4-0.4c0,0,0-0.4-0.4-0.7c0,0-0.4,0-0.7,0c-0.4,0-0.7,0-1.4-0.4c-0.7,0-1.4-0.4-2.2-1.1c0,0,0.4-0.4,0.7-0.7
                  c2.2-2.9-4.7-1.4-5.8-1.4C41,54,40.3,55,38.8,55c-0.7,0-1.4,0-2.2,0s-1.1-0.4-1.4,0.4c-0.7,1.1-1.8,1.4-2.2,2.9
                  c-0.4,1.4,0,2.2-1.4,2.9c-1.1,0.4-1.8,1.4-2.5,2.5c-0.4,0.4-0.7,0.7-1.1,1.4c-0.4,0.7,0,1.1,0.4,1.8v1.8c0,0.7-0.4,1.4-0.4,1.8
                  c0,1.4,1.1,2.2,2.2,3.2c0.7,0.7,0.4,0.7,0.7,1.4c0,0.7,1.1,1.1,1.4,1.4c1.1,0.4,2.5,1.4,3.6,1.4c0.7,0,1.1-0.4,1.8-0.4
                  c0.7,0.4,1.1,0.7,1.8,0.4c1.4-0.4,2.5-1.4,4-1.1c1.4,0.4,0.7,2.2,2.5,1.4c2.9-1.1,0.4,2.5,1.1,3.6c0.4,0.4,0.7,0.7,1.1,1.1
                  c0.7,0.7,1.4,1.4,1.4,2.2v1.1c0,0,0.4,0.4,0.4,0.7c0.4,1.1,0.4,0.4-0.4,0.7c-0.7,0.7-1.4,2.5-0.7,3.2c0.4,0.7,1.1,1.1,1.1,1.4
                  c0.4,0.7,0.4,1.1,0.7,1.4c0.4,0.4,1.1,0.7,1.1,1.1c0.4,1.1,0.4,1.4,1.8,1.1c1.4-0.4,2.9-0.4,4.3-1.1c1.1-0.7,3.2-1.1,4-2.5
                  c0,0-0.4,0-0.4-0.4c0.4-0.4,1.4-0.4,1.8-0.7c0.4-0.4,0-1.4,0.4-1.8c0.4-0.4,1.1-0.4,1.4-0.7c0.4-0.4,1.1-0.7,1.4-1.1
                  c1.4-0.7,1.8-1.4,1.4-3.2c-0.4-1.4-0.4-2.2,0.7-3.6c0.7-1.1,2.2-1.8,2.9-2.9c0.7-1.1,1.4-1.1,2.5-2.2c0.7-1.1,1.8-2.5,2.5-3.6
                  c0-0.4,0.7-1.4,0.4-1.4c-0.4,0-1.8,0.7-1.8,0.7c-0.4,0-1.4,0.4-1.8,0.4c-0.7,0-0.7-0.4-1.1-1.1c-0.7-1.1-1.8-1.4-2.2-2.5
                  c-0.4-1.4-1.4-1.8-1.8-3.2c0-0.7-0.4-1.1-0.7-1.4c-0.4-0.4-0.4-1.1-0.7-1.4c-0.4-0.7-1.1-2.9,0.4-2.2c0.7,0.4,1.1,1.4,1.4,2.2
                  c0.4,0.4,0.7,0.4,1.1,1.1c0.4,0.4,0,1.1,0,1.8c0.4,0.7,0.7,0.7,1.1,1.1c0.4,0.4,0.4,1.1,0.7,1.4c0.7,1.1,0.4,2.5,1.1,3.2
                  c1.1-0.7,2.5-0.7,3.6-1.4c0.4-0.4,1.1-0.4,1.4-0.7s0.7-0.7,1.1-1.1c1.1-0.7,5-4,3.2-5c-0.4,0-0.4-0.4-0.7,0
                  c-0.4-0.4-0.4-1.1-0.7-1.8c-0.4,0.4-0.4,0.7-0.7,1.1c-0.4,0.7-0.4,0.4-1.1,0.7c-0.7,0-0.7,0.4-1.1,0c-0.4-0.4,0-1.1-0.4-1.4
                  c0,0.4-0.4,0.4-0.4,0.7c0-1.1-0.7-1.4-1.1-2.5c-0.4-1.1,0.4-1.8,1.4-1.1c0.7,0.7,0.7,1.1,1.4,1.8c1.1,0.7,1.4,0,2.5,0
                  c0.4,1.4,1.1,0.7,2.2,1.1c1.1,0.4,1.8,0,2.5-0.4c0,0.7,0.4,1.1,1.1,1.4c0.4,0,0.7,0,0.7,0.4c0.4,0.4-0.4,0.4-0.7,0.4
                  c0,0.7,1.1,1.1,1.4,0c0,1.4,0,2.5,0.4,4v1.8c0,0.4,0.4,1.1,0.4,1.8c1.1-0.7,1.4-3.6,2.2-5c0.4-0.7,1.1-1.4,1.4-2.2
                  c0.4-0.4,1.1-2.2,1.4-2.2c0,0.7,0,2.9,0.4,3.2H95v1.1c1.4-2,2.4-3.9,3-5.9c0.6-3.1,0.9-6.3,0.9-9.6c0-15-6.7-28.4-17.3-37.3v1
                  C81.7,13.6,81,14.3,81,14.7z M72.3,49.3c-0.4,0-0.4,0-0.7,0h-0.4h-0.4c-0.4,0-1.1-0.4-1.4-0.4c0,0,0,0-0.4,0l-0.4-0.7
                  c0,0,0,0.4-0.4,0c0,0,0-0.4-0.4-0.4s-0.4,0-0.7,0c-0.4,0-0.4,0-0.7,0c-0.4,0-0.4,0-0.7,0c-0.4,0,0,0.4-0.4,0.4s-0.4,0-0.7,0
                  c-0.4,0-0.7,0-0.7,0l-0.7-0.4c-0.4,0-0.4-0.4-0.4-0.7c0-0.4,0-0.4,0-0.7V46c0,0,0.4,0,0.4-0.4c0.4-0.4,0-0.7,0-1.1
                  c0-0.4,0-0.7,0.4-0.4c0,0,0,0.4,0.4,0.4v-0.4c0-0.4,0-0.4,0.4-0.7c0.4-0.4,0.4-0.4,0.4-0.7c0,0,0.4-0.4,0.7-0.4v0.4h0.4h0.7
                  c0,0.4-0.4,0.4-0.4,0.4s0,0,0,0.4c0.4,0,0.4-0.4,0.7,0.4c0,0.4,0,0.4,0.4,0.4c0.4,0,0.4-0.4,0.7-0.4c0.4-0.4,0.4,0,0.7,0l0.4-0.4
                  c0,0-0.4,0-0.7,0c-0.4,0-0.4,0-0.7-0.4l-0.7-0.4c0.4-0.4,0.7-0.4,1.1-0.4s0.7-0.4,1.1-0.7c0.4,0,0.4-0.4,0.7-0.4h0.7l-0.7,0.7
                  c0,0,0.4,0,0.4,0.4c0,0,0,0-0.4,0v0.4c0,0.4,0,0-0.4,0.4c0,0,0,0-0.4,0.4c0,0,0.4,0.4,0.7,0.4c0,0.4,0.4,0.4,0.4,0.4
                  c0.4,0,0.4,0,0.7,0.4c0.4,0,0.4,0.4,0.4,0.4c0.4,0,0.7,0,0.7,0.4c0,0,0.4,0.4,0.4,0.7C73.1,48.2,73.1,48.9,72.3,49.3z M80.6,52.9
                  c-0.4,0-0.4,0-0.7,0c-0.4,0-0.4,0-0.7,0c-0.4,0-0.4-0.4-0.7-0.4c0,0,0,0-0.4,0s-0.7-1.4-0.4-1.8c0,0,0,0,0.4,0.4
                  c0-0.4-0.4-1.4,0.4-1.1c0-0.4-0.4-0.4-0.7-0.7c-0.4-0.4-0.4-0.4-0.4-0.7c-0.4-0.4-0.7-1.1-1.1-1.4v-0.4l-0.4-0.4c0-0.4,0-0.7,0-1.1
                  s0.4-0.4,0.7-0.7c0.4-0.4,0.4-0.4,0.4-0.7c0.4-0.4,0.4-0.4,0.7-0.4c0.4,0,0.4,0.4,0.7,0.4c0-0.4,0.4-0.4,0.7,0V45
                  c-0.4,0.4-0.7-0.4-1.1,0.4c0,0.4,0.4,1.1-0.4,0.7v0.4c0.7,0.4,0.4,0.7,0.7,1.1c0,0.4,0.4,0,0.7,0.4c0.4,0.4,0,0.4,0,0.7
                  c0,0.4,0,0.4,0.4,0.7V50c0,0.4,0,0.4,0.4,0.7l0.4,0.4c0,0,0,0-0.4,0c0,0.4,0.4,0.4,0.4,0.4s0.4,0.4,0.4,0.7c0.7,0,0.7,0.7,0.7,0.7
                  C81,52.9,81,52.9,80.6,52.9z"/>
                <path d="M70.5,19.4c-0.4,0.4-0.4,0.7,0,0.7h0.7c0,0,0.4,0,0.4-0.4C71.3,19.7,70.5,19.7,70.5,19.4z"/>
                <path d="M70.2,14.3c-0.4,0.4,0,0.4,0,0.4v0.4c-0.4,0,0,0.4,0,0.4c0,0.4,0.4,0.4,0.4,0.4c0,0.4,0,0.4-0.4,0.4v0.4
                  c0,0.4,0.4,0.7,0.4,0.4c0-0.4,0.7,0,0.7,0.4c0,0,0,0.7,0.4,0.7s0.7,0.4,1.1,0.7c0.4,0,0.7,0,0.7-0.4s-0.4-0.4-0.7-0.4
                  c-0.4,0-0.7-0.7-0.7-0.7c0-0.4-0.4-0.4-0.4-0.7c0,0-0.4-1.1,0-1.4c0-0.4,0-0.7,0-1.1c0-0.4,0-0.4,0.4-0.4c0.4,0,0,0,0.4-0.4
                  c0-0.4,0.4-0.7,0.7-0.7c0.4-0.4,0.7-0.4,0.7-0.4c0.4,0,0.4-0.4,0-0.7c-0.4-0.4-0.4-0.4-0.7-0.4c-0.4,0-0.4,0-0.4,0.4
                  c0,0,0,0-0.4,0.4s-0.4,0-0.7,0c-0.4,0-0.7,0.4-1.1,0.4s0,0.4,0,0.4s0,0-0.4,0.2c-0.1,0-0.3,0-0.3,0.1c0,0,0,0.4,0.4,0.7V14.3z"/>
                <path d="M5.6,31.8c0.4-0.9,0.9-1.8,1.6-2v0.4c0.7,0,0.7-1.1,1.1-1.8c0-0.4,0-0.7,0.4-1.1s0.7-0.4,0.7-0.7
                  c0.4-0.7,0.4-1.8,0.7-2.2c0.4-0.7,0.7-1.4,1.4-1.4v1.1c0,0.4,0.4,0.7,0.4,1.4c0,1.1-0.7,1.1-1.4,1.4v0.7c-0.7,0-1.1,0.4-1.1,1.1
                  c0.4,0,0.4-0.4,0.7-0.4c0,0.4,0,0.7-0.4,1.1c0.4,0.4,1.1,1.1,1.4,1.1c0-0.4-0.7-1.1,0-1.4c0.4-0.4,0.7,1.1,1.1,0.4
                  c0.7-0.7-1.1-2.5,0-2.9c0,1.1,0.7,0.4,1.1,0c0-0.4,1.1-1.1,1.1-1.4c0-0.7-0.7-0.7-0.4-1.4c0-0.7,0.4-1.1,0.7-1.8
                  c0-0.7-0.4-1.1-0.4-1.8c0-0.7,0.4-1.1,0.4-1.4c-0.4,0-1.1,0.4-1.4,0.7h-0.4C9.8,23.1,7.4,27.3,5.6,31.8z"/>
                <path d="M21.5,89.6c0.4-0.4,0-1.4,0-1.8c0-0.7-0.7-1.1-0.7-1.8c0.4,0,0.4-0.4,0.4-0.7c0-0.4,0.4-0.4,0.4-0.7
                  c1.4-2.2,0.4-3.2-0.4-3.2c-0.4,0-0.7-0.4-1.1-0.7c-0.4-0.4-0.4-0.4-0.7-0.7c-0.4-0.4-0.4-0.4-0.7-0.4c-0.4,0-0.7-0.4-0.7-0.4h-0.4
                  c0,0,0,0-0.4,0c-0.4-0.4-0.4-0.7-0.7-0.7c-0.4-0.4-0.7-0.4-1.1-0.4c-0.4,0-0.4-0.4-0.7-0.4L14,77.4V77v-0.4
                  c-0.4-0.4-0.7-1.1-1.1-1.4c-0.4-0.4-1.1-1.1-1.8-1.4c-0.7-0.4-1.4-0.7-1.8-1.8c-0.4-0.7-1.1-1.4-1.8-1.8c-0.4-0.4-0.7-0.4-1.4-0.7
                  c-0.4-0.4-0.7-1.1-1.1-1.1c-0.1,0.1-0.2,0.2-0.3,0.2C8,76.7,13.4,83.7,20.3,89c0,0,0,0,0.1,0.1c0.1,0.1,0.2,0.1,0.3,0.2
                  c0.1,0,0.1,0,0.2,0C21.2,89.3,21.2,89.3,21.5,89.6z"/>
                <path d="M39.2,35.6c-0.4-0.4-0.7-0.4-1.4,0c-0.7,0.4,0,0.4,0,0.7c-0.4,0.4-0.4,0.4-0.7,0.4c-0.4,0,0,0,0,0.4
                  s0,0.4,0.4,0.4c0.4,0.4-0.4,0.7-0.7,1.1c-0.4,0.4,0,0.7,0.4,0.7s0.7,0,1.4-0.4c0,0,0.4,0,0.7-0.4c0.4,0,0.4-0.4,0.7-0.7
                  c0-0.7-0.4-0.7,0-1.1C39.9,36.3,39.2,35.9,39.2,35.6z"/>
                <path d="M30.9,25.9H32c0,0.7,0,1.1,0.7,0.4c0.7-0.4,1.1-0.4,1.4-0.7c0.4,0,0.7-0.7,0.7-1.1c0.4-0.4,0-0.4,0-0.7
                  c-0.4,0-0.4-0.4,0-0.7c0-0.4-0.4,0-0.4,0c0-0.4-0.7,0.4-0.7,0.4h-0.4c0,0-0.4,0.4-0.4,0c0-0.4-0.4-0.4-0.4,0c0,0.4-0.4,0.4-0.4,0
                  c0-0.4-0.4,0-0.4,0.4c0.4,0.4-0.7,0.4-0.7,0c0-0.4,0-0.4-0.4-0.7c-0.4-0.4-1.1,0.4-1.1,0.7c-0.4,0.4,0.7,0,0.7,0.4
                  s-0.4,0.4-0.7,0.4c0,0.4,0.7,0.4,1.1,0.4s0,0.4-0.4,0.7C30.2,25.9,30.5,25.9,30.9,25.9z"/>
                <path d="M14,18.7c0.4,0,0.7-0.4,0.7-0.7c0.4-0.7,1.1-1.1,1.4-1.8c0.4-0.7,1.1-1.1,1.8-1.4c0.4-0.4,1.4-1.4,2.2-1.4v0.4
                  c0,0,0,0-0.4,0.4h0.7c0,0.7-0.7,0.4-1.1,0.4c-0.4,0.4-0.7,0.7-1.1,1.1c0.7,0,1.4-0.7,2.2-0.4c0.7,0.4,0,1.4,0,1.8
                  c-0.4,0.7-0.7,1.1-0.7,1.8c0,0.4-0.4,0.7,0,1.1c0.4,0.4,0.7-0.4,1.1-0.4c0.7,1.1-0.7,0.7-1.1,0.7c-0.4,0.4-1.1,1.1-1.1,1.8
                  c0.4,0,1.1-0.4,1.4-0.7c0,1.1-1.4,1.1-1.8,2.2c-0.4,1.1-0.4,2.2-0.7,2.9c-0.4,1.1-0.4,1.8-0.4,2.9c0,0.4,0,1.1,0.4,1.1
                  c0.4,0,1.1-0.4,1.1-0.4v1.1c1.4,0.7,2.2-1.4,2.5-2.5s1.1-2.5,1.8-2.9c1.1-0.7,2.5-0.7,3.2-1.4c1.1-1.1,1.4-1.8,2.9-2.5
                  c0-0.7,1.8-1.4,2.9-2.5c-0.4,0-0.7,0-1.1,0c0-0.4,0.4-1.1,0-1.4c0.7,0,0.4,0.7,0.7,1.1c0.7,0.4,1.1-0.4,1.1-0.7
                  c0.4-0.7,0-0.7-0.4-1.1c-0.4-0.4-1.1-0.7-0.4-1.1c0.4,0.7,0,1.1,1.1,1.1c0,0,0.4-0.4,0.4-0.7c0-0.4-0.4,0-0.4-0.4
                  c0-0.4-0.7-0.7,0-0.7c0,0.7,0.4,0.7,1.1,0.4c0.4-0.4,0.4-0.7,0.7-1.1c0.4-0.7,1.4-2.2,0-2.2c0-0.7,0.7-1.1,1.1-1.4
                  c0.4,0.4,0,1.1,0.4,1.8c0.4-0.7,0.7-2.2,0.4-2.5c0-1.1,1.4-2.2,2.2-2.5c0.7-0.7,2.2-1.1,2.5-1.8c-1.8-1.4-5,2.2-5.8,1.4
                  C36.3,6.8,37,6.4,37.8,6c-1.1-0.7-3.2,1.4-4.3,0.4c1.4-0.7,3.6-0.7,5-1.4c-0.7-0.7-3.2-0.4-4.3-0.4C32.7,5,31.6,5.7,30.5,6v0.7
                  c0.7,0.4-1.1,1.1-0.4,0c-0.4,0-1.4,1.1-1.4,0.4c-0.7,0-1.3,0.3-2,0.6c0-0.1-0.1-0.3,0.2-0.3c0,0,0,0-0.4,0
                  c-5,2.9-9.7,6.8-13.3,11.2H14z"/>
                <path d="M2.4,55.8c0.7,0.4,0.4,1.4,0.7,2.2c0,0.4,0.4,1.8,0.7,1.8c1.1-1.1-0.4-2.9-0.4-4c0-1.4,0.7-2.2,0.7-3.6
                  c0-0.7,0-1.4,0-2.2c0.4-0.7,0.7-0.7,1.1-1.1c-0.4-0.7-0.7-0.7-0.7-1.4c0-0.7,0.7-1.1,1.4-1.4c0.4,0,0.4-0.4,0.7-0.4
                  c0,0.4-0.4,0.7-0.4,1.1c0.7,0,2.2-1.8,2.5-2.5c-0.4,0-0.7,0.4-0.7,0.7c-0.7-0.7,0-2.2-0.4-2.5c-0.7-0.4-1.4,1.1-1.8,1.4
                  c0-1.4,1.1-2.2,2.2-2.5c0.7,0,1.1-0.4,1.4-0.7c0.4-0.4,0.7-0.7,1.4-0.7c0.7,1.4-1.4,2.5-1.8,3.6c0.7,0.4,1.1-0.4,1.4,0
                  s0,1.4,0.7,1.1c0.4-0.4,0.4-1.4,0.4-1.8c0-0.7,0.4-1.1-0.7-1.1c0-1.1,0.7-1.8,0.7-2.5s-0.7-1.8-1.1-2.2c-0.7-1.1-0.7-1.1-0.4-2.5
                  c0-1.1,0-1.8,0.4-2.9c-1.4-0.4-1.4,1.4-1.8,2.2c-0.4-0.4,0-1.4,0-1.8s-0.4-0.4-0.4-0.7c0-0.4,0-0.7,0-1.1c-1.1,0.4-1.1,2.2-1.8,2.9
                  c0,0.4-0.4,0.4-0.4,0.7c-0.4,0.4,0,0.4,0,1.1s0,1.4-0.4,1.8c-0.4,0.7-0.7,0.7-0.7,1.4c0,0.7-0.4,1.4-0.4,1.8
                  c-0.4,0.7-0.7,1.1-0.7,0c0-0.7,0-1.4,0.4-1.8c0.4-1.1,0-1.1,0-2.2c0-0.7,0-1.8,0.4-2.5c0-0.1,0.1-0.2,0.1-0.3
                  c-1.9,5.3-3,11.1-3,17.2C2.1,52.2,2.1,54,2.4,55.8z"/>
                <path d="M52.5,7.5c0.4,0,0.7,0.4,1.4,0.4c0.7,0,1.1,0,1.1-0.4c0.4-0.4,0.4-0.4,0.4-0.7c0-0.4-1.1-0.4-1.4-0.4
                  s-0.4,0-0.7,0.4c-0.4,0-0.4-0.4-0.7-0.4c-0.4,0-0.4,0.4-0.7,0.4C51.4,6.8,51.8,7.1,52.5,7.5z"/>
                <path d="M50.4,7.1c-0.4,0-0.4,0.4-0.4,0s0-0.4-0.7-0.4c-0.7,0-0.7,0.7-0.4,0.7c0,0.4,0.7,1.1,1.1,1.4
                  c0,0.7,0.7,1.4,1.1,1.4s0.7,0.7,1.1,0.7c0.4,0,0.4-1.1,0.4-1.4c0-0.7,0-0.7,0.4-1.1c0.2,0,0.2-0.1,0.3-0.2c0,0.1-0.1,0.3-0.3,0.5
                  c0.4,1.1,0.7,0.7,0.7,0.7C54,9.3,54,10,54,10c0.4,0,0.4,0,0.4-0.7c0-0.4-0.4-0.4-0.4-0.4c-0.4,0-0.4,0-0.4-0.4c0-0.4,0-0.4,0-0.4
                  s0-0.4-0.4-0.4c-0.3,0-0.6,0.3-0.5,0.3c-0.3-0.1-0.6-0.7-1-1.1c-0.4-0.4-0.4,0.7-0.4,0.4c0-0.4,0-0.4-0.4-0.4s-0.4,0-0.4,0.4
                  c0.4,0.4,0.4,0.7,0.4,0.7s-0.7,0-0.4-0.4C50.7,7.5,50.7,7.5,50.4,7.1z M52.9,8.2C52.9,8.2,52.9,8.2,52.9,8.2
                  C52.9,8.2,52.9,8.2,52.9,8.2C52.9,8.2,52.9,8.2,52.9,8.2C52.9,8.2,52.9,8.2,52.9,8.2z M50.7,8.6c0-0.4,0.7,0,0.7,0.4
                  c-0.3,0-0.6-0.1-0.8-0.1C50.7,8.8,50.7,8.7,50.7,8.6z"/>
              </g>
              </svg>
            </a>
            <p class="mb-0 text-grey-darker ml-1">
              Creative Digital Marketing
            </p>
          </div>
          <div class="flex flex-wrap items-center">
            <a class="p-0-5 mx-0-25" href="https://www.facebook.com/ICAALUK" target="_blank" class="text-primary hover:text-primary-dark"><i class="fab fa-facebook-f"></i></a>
            <a class="p-0-5 mx-0-25" href="https://www.facebook.com/ICAALUK" target="_blank" class="text-primary hover:text-primary-dark"><i class="fab fa-twitter"></i></a>
            <a class="p-0-5 mx-0-25" href="https://www.facebook.com/ICAALUK" target="_blank" class="text-primary hover:text-primary-dark"><i class="fab fa-instagram"></i></a>
            <a class="p-0-5 mx-0-25" href="https://www.facebook.com/ICAALUK" target="_blank" class="text-primary hover:text-primary-dark"><i class="fab fa-youtube"></i></a>
            <a class="p-0-5 mx-0-25" href="https://www.facebook.com/ICAALUK" target="_blank" class="text-primary hover:text-primary-dark"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 xl:w-3/5"></div>
  </div>
@endsection