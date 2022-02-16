@extends('layouts.tamu',['title'=>'Home'])
@section('content')
    <x-form-pesan/>

    <h1 class="text-center my-4">Fasilitas</h1>
    
    <div class="row fasilitas">
        @foreach ($fasilitas as $item)
        <div class="col-md-3">
            <a class="card card-light" href="{{ route('guest.fasilitas.show',['fasilitas'=>$item->id])}}">
                <div class="card-header">
                    {{ $item->nama_fasilitas_hotel}}
                </div>
                <div class="card-body p-1">
                    <img src="{{$item->foto_fasilitas_hotel}}" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        @endforeach
        
    </div>

    <h1 class="text-center my-4">Kamar</h1>

    <div class="row kamar">
        @foreach ($kamar as $item)
        <div class="col-md-4">
            <a class="card card-light" href="{{ route('guest.kamar.show',['kamar'=>$item->id])}}">
                <div class="card-header">
                    {{ $item->nama_kamar }}
                </div>
                <div class="card-body p-1">
                    <img src="{{ $item->foto_kamar}}" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    {{$item->harga_kamar}} <small>/ Malam</small>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
@endsection