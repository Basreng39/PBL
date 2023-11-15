{{-- @dd($kamar) --}}

@extends('dashboard.master')

@section('content')
<div class="container position-relative">


    <div class="col-md-12">
        {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="fs-4 p-3 pt-5 pb-2">KAMAR</div>
            </div>
        </div> --}}
        <div class="mx-3 row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
          <div class="m-2 col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"></strong>
            <h3 class="mb-3 ">Data Kamar</h3>
            <a href="/kamar/tambah" class="btn btn-outline-primary btn-sm col-lg-1 col-md-2 col-sm-3"><i class="fa fa-plus" aria-hidden="true"></i> Kamar</a>
          </div>
          {{-- <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

          </div> --}}
        </div>
    </div>


    <h5 class="ms-auto">Total Kamar {{ $total }}</h5>

    <div class="row">
        @foreach ($kamar as $k)
            <div class="col-md-2">

                <ul class="nav nav-tabs nav-primary" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#{{ $k->id }}" role="tab" aria-selected="false">
                            <div class=" align-items-center">
                                <div class="tab-icon">
                                    <i class="fa fa-3x fa-bed" aria-hidden="true"></i><br>
                                </div>
                                <div class="text-center tab-title text-danger">
                                    {{ $k->nama_kamar }} {{ $k->id }}
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        @endforeach

    </div>


    {{-- <div class="row row-cols-1  row-cols-md-2 row-group">
        <div class="col-lg-6 col-sm-6 fs-4 ">
            <a href="#Tamah" class="btn btn-outline-primary btn-sm"><i
                    class="bx bx-plus"></i> Kamar</a>
        </div>
    </div>
     --}}
</div>

@endsection
