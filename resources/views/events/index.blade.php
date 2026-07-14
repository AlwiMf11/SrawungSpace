@extends('layouts.app')

@section('title', 'Acara')

@section('content')

    <section class="sw-page-header text-center text-white py-5">
        <div class="container">
            <h1 class="fw-bold mb-2">Acara Sing Bakal Kelakon</h1>
            <p class="mb-0">Ayo srawung bareng, sinau lan nyawiji ing acara-acara SrawungSpace.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            @if($events->count())
                <div class="row g-4">
                    @foreach($events as $event)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 sw-card shadow-sm">
                            <div class="sw-card-img"></div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-warning text-dark mb-2 align-self-start">
                                    {{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }}
                                </span>
                                <h5 class="card-title fw-semibold">{{ $event->title }}</h5>
                                <p class="card-text text-secondary small mb-2">
                                    <i class="bi"></i>{{ $event->location }}
                                </p>
                                <p class="card-text text-secondary small flex-grow-1">
                                    {{ \Illuminate\Support\Str::limit($event->description, 90) }}
                                </p>
                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm sw-btn-outline mt-2">Wacan Selengkape</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center text-secondary py-5">
                    <p class="mb-0">Durung ana acara sing dijadwalake. Mangga bali maneh sesuk.</p>
                </div>
            @endif
        </div>
    </section>

@endsection
