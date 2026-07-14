@extends('layouts.app')

@section('title', 'Ngarep')

@section('content')

    <section class="sw-hero d-flex align-items-center">
        <div class="container text-center text-white py-5">
            <h1 class="display-4 fw-bold mb-3">Srawung Bareng, Guyub Rukun</h1>
            <p class="lead mb-4">SrawungSpace iku papan kanggo kumpul bareng konco, nguri-uri budaya Jawa, sinau lan nyawiji, sarta ngraketake paseduluran.</p>
            <a href="{{ route('events.index') }}" class="btn btn-warning btn-lg fw-semibold px-4">Delengen Acara</a>
            <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg px-4 ms-2">Babagan Kita</a>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3 sw-heading">Sugeng Rawuh ing SrawungSpace</h2>
            <p class="mx-auto col-lg-8 text-secondary">
                Ing tengahing jaman sing saya modern, SrawungSpace ngajak sedulur kabeh kanggo tetep srawung,
                ngraketake paseduluran, lan nguri-uri budaya Jawa liwat kagiyatan sing anteng, kreatif, lan
                penuh kekancan. Ing kene, saben wong bisa sinau, crita, lan makarya bebarengan.
            </p>
        </div>
    </section>

    @if($events->count())
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold sw-heading mb-0">Acara Cedhak Iki</h2>
                <a href="{{ route('events.index') }}" class="btn btn-outline-dark btn-sm">Delengen Kabeh</a>
            </div>
            <div class="row g-4">
                @foreach($events as $event)
                <div class="col-md-4">
                    <div class="card h-100 sw-card shadow-sm">
                        <div class="sw-card-img"></div>
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }}</span>
                            <h5 class="card-title fw-semibold">{{ $event->title }}</h5>
                            <p class="card-text text-secondary small">{{ $event->location }}</p>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm sw-btn-outline">Wacan Selengkape</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="py-5 sw-cta text-center text-white">
        <div class="container">
            <h2 class="fw-bold mb-3">Ayo Kumpul Bareng Konco</h2>
            <p class="mb-4">Papan kanggo crita lan karya, mangga gabung karo komunitas SrawungSpace.</p>
            <a href="{{ route('contact') }}" class="btn btn-warning btn-lg fw-semibold px-4">Hubungi Kita</a>
        </div>
    </section>

@endsection
