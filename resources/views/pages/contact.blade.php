@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

    <section class="sw-page-header text-center text-white py-5">
        <div class="container">
            <h1 class="fw-bold mb-2">Hubungi Kita</h1>
            <p class="mb-0">Kepengin gabung utawa takon-takon? Mangga hubungi SrawungSpace.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5">
                    <h3 class="fw-semibold sw-heading mb-3">Sumangga Sedulur</h3>
                    <p class="text-secondary mb-4">
                        Kita mbukak lawang kanggo sedulur kabeh sing kepengin srawung bareng, tuku informasi
                        acara, utawa gabung dadi bagean saka komunitas SrawungSpace.
                    </p>
                    <ul class="list-unstyled text-secondary">
                        <li class="mb-2"><strong>Alamat:</strong> Omah Kreatif SrawungSpace, Jawa Tengah</li>
                        <li class="mb-2"><strong>Telpon / WhatsApp:</strong> 0812-3456-7890</li>
                        <li class="mb-2"><strong>Email:</strong> halo@srawungspace.id</li>
                        <li class="mb-2"><strong>Instagram:</strong> @srawungspace</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="sw-contact-card p-4 p-md-5">
                        <h5 class="fw-semibold mb-3">Kirim Pesen</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Jeneng</label>
                                <input type="text" class="form-control" placeholder="Jeneng sampeyan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="email@sampeyan.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesen</label>
                                <textarea class="form-control" rows="4" placeholder="Tulis pesen utawa pitakonan sampeyan..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning fw-semibold w-100">Kirim Pesen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
