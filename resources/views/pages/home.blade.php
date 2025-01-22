@extends('layout.app') {{-- Lie cette page au layout principal --}}

@section('title', 'Page d’accueil') {{-- Spécifie un titre personnalisé --}}

@section('header')
    <h2>Bienvenue sur notre site !</h2>
@endsection

@section('nav')
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/about">À propos</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
@endsection

@section('content')
    <h3>Contenu de la Page d’Accueil</h3>
    <p>Ceci est le contenu de la page d'accueil, conçu avec Laravel Blade.</p>
@endsection
