@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-bordered card-preview shadow-sm mt-3">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Berita</h6>
                                </div>
                            </div>
                            {{-- <div class="data">
                                <div class="data-group">
                                    <div class="amount">{{ $document2020s }}</div>
                                </div>
                                <div class="info">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('document2020.penjualan.index') }}"
                                            class="text-dark">Penjualan</a>
                                        <span
                                            class="badge badge-dim bg-primary d-flex justify-content-center align-items-center w-15 shadow-sm">{{ $penjualan2020s }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between my-1">
                                        <a href="{{ route('document2020.penghapusan.index') }}"
                                            class="text-secondary">Penghapusan</a>
                                        <span
                                            class="badge badge-dim bg-danger d-flex justify-content-center align-items-center w-15 shadow-sm">{{ $penghapusan2020s }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('document2020.sewa.index') }}" class="text-secondary">Sewa</a>
                                        <span
                                            class="badge badge-dim bg-warning d-flex justify-content-center align-items-center w-15 shadow-sm">{{ $sewa2020s }}</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
