@extends('layouts.app')

@section('title', 'Babagan Kita')

@section('content')

    <section class="sw-page-header text-center text-white py-5">
        <div class="container">
            <h1 class="fw-bold mb-2">Babagan SrawungSpace</h1>
            <p class="mb-0">Papan kanggo crita lan karya, dibangun kanthi paseduluran.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="sw-card-img sw-card-img-lg"></div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold sw-heading mb-3">Sinten Kita</h2>
                    <p class="text-secondary">
                        SrawungSpace miwiti saka gagasan prasaja: kepengin ngumpulake sedulur-sedulur sing kepengin
                        srawung bareng, ngraketake paseduluran, lan nguri-uri budaya Jawa ing tengahing jaman modern.
                        Kita percaya yen budaya bakal tetep lestari yen dirumat kanthi guyub rukun lan katresnan
                        antar sedulur.
                    </p>
                    <p class="text-secondary">
                        Ing SrawungSpace, saben wong diajak sinau lan nyawiji, ora mung nyawang saka jaba,
                        nanging melu makarya, crita, lan tuwuh bebarengan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold sw-heading mb-5">Sing Dadi Pegangan Kita</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="sw-value-card p-4 h-100">
                        <h5 class="fw-semibold mb-2">Guyub Rukun</h5>
                        <p class="text-secondary small mb-0">Sedulur kabeh diajak kumpul kanthi tentrem lan seneng ati, tanpa mbedak-mbedakake.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sw-value-card p-4 h-100">
                        <h5 class="fw-semibold mb-2">Nguri-uri Budaya</h5>
                        <p class="text-secondary small mb-0">Ngrumat lan nglestarekake budaya Jawa supaya tetep urip ing atine generasi anyar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sw-value-card p-4 h-100">
                        <h5 class="fw-semibold mb-2">Paseduluran</h5>
                        <p class="text-secondary small mb-0">Ngraketake paseduluran antar sedulur liwat kagiyatan sing tulus lan akrab.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
