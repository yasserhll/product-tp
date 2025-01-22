@extends('layout.app')

@section('title', 'À propos de nous')

@section('header')
    <h2>À propos de notre entreprise</h2>
@endsection

@section('nav')
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/about">À propos</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
@endsection

@section('content')
    <h3>Qui sommes-nous ?</h3>
    <p>Nous sommes une entreprise spécialisée dans le développement web avec Laravel.</p>
@endsection
