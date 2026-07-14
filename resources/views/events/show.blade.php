@extends('layouts.app')

@section('title', $event->title)

@section('content')

    <section class="sw-page-header text-center text-white py-5">
        <div class="container">
            <h1 class="fw-bold mb-2">{{ $event->title }}</h1>
            <p class="mb-0">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }} &bull; {{ $event->location }}</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sw-card-img sw-card-img-lg mb-4"></div>

                    <div class="mb-4">
                        <span class="badge bg-warning text-dark mb-2">
                            {{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }}
                        </span>
                        <h3 class="fw-semibold sw-heading">Babagan Acara</h3>
                        <p class="text-secondary">{{ $event->description }}</p>
                    </div>

                    <div class="d-flex flex-wrap gap-4 mb-4">
                        <div>
                            <p class="mb-0 fw-semibold">Papan</p>
                            <p class="text-secondary">{{ $event->location }}</p>
                        </div>
                        <div>
                            <p class="mb-0 fw-semibold">Tanggal</p>
                            <p class="text-secondary">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }}</p>
                        </div>
                    </div>

                    <a href="{{ route('events.index') }}" class="btn sw-btn-outline">&larr; Bali menyang Dhaftar Acara</a>
                    <a href="{{ route('contact') }}" class="btn btn-warning fw-semibold ms-2">Takon Info Lengkap</a>
                </div>
            </div>
        </div>
    </section>

@endsection
