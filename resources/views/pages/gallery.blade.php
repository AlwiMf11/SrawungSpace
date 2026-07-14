@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

    <section class="sw-page-header text-center text-white py-5">
        <div class="container">
            <h1 class="fw-bold mb-2">Galeri SrawungSpace</h1>
            <p class="mb-0">Crita lan kenangan saka kagiyatan-kagiyatan kita.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-3">
                @for ($i = 1; $i <= 9; $i++)
                <div class="col-6 col-md-4">
                    <div class="sw-gallery-item"></div>
                </div>
                @endfor
            </div>
            <p class="text-center text-secondary mt-4 mb-0">
                Foto-foto kagiyatan bakal terus diundhakake, minangka tandha lan crita saka saben acara srawung bareng.
            </p>
        </div>
    </section>

@endsection
