@extends('layouts.tamu',['title'=>'Fasilitas'])

@section('content')
    <div class="container justify-content_center">
        <div class="section_title text-center">
            <h2 class="title_color">Fasilitas</h2>
        </div>
        <div class="section-top-border">
            @foreach ($fasilitas as $item)
            <a href="{{ route('guest.fasilitas.show',['fasilitas'=>$item->id])}}">
                <h3 class="mb-30 title_color">{{ $item->nama_fasilitas_hotel }}</h3>
            </a>
                
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ $item->foto_fasilitas_hotel}}"  class="img-fluid rounded img-thumbnail">
                    </div>
                    <div class="col-md-9 mt-sm-20 left-align-p">
                        <p>{{ $item->deskripsi_fasilitas_hotel}}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
        
    </div>

@endsection




{{--  @section('content')
    <h1 class="text-center my-4">Fasilitas</h1>

    @foreach ($fasilitas as $item)
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="{{ $item->foto_fasilitas_hotel}}" class="img-fluid rounded img-thumbnail" />
        </div>
        <div class="col-md">
            <h2>
                <a href="{{ route('guest.fasilitas.show',['fasilitas'=>$item->id])}}">
             {{ $item->nama_fasilitas_hotel }} 
                </a>
            </h2>
            <p>{{ $item->deskripsi_fasilitas_hotel}}</p>
        </div>
    </div>
    @endforeach
    
@endsection  --}}