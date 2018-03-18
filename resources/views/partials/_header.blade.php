<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} |</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

	 <!-- Favicon-->
	 <link rel="icon" href="favicon.ico" type="image/x-icon">

	 <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
 
	 <!-- Bootstrap Core Css --> 
	 <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
 
	 <!-- Waves Effect Css -->
	 <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
 
	 <!-- Animation Css -->
	 <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
 
	 <link href="{{asset('plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">

	 
	 <!-- Morris Chart Css-->
	 <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

	 <link href="{{asset('plugins/dropzone/dropzone.css')}}" rel="stylesheet">

	 <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
 
	 <!-- Custom Css -->
	 <link href="{{asset('css/style.css')}}" rel="stylesheet">
 
	 <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	 <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />

	 {!! Charts::styles() !!}


</head>