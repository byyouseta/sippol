@extends('weblayouts.app')
@section('pre-content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Buku Panduan Aplikasi SIPPOL</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Publikasi</li>
                    <li>Panduan SIPPOL</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="file_dokumen/1631083139_5pqa7D.pdf"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
