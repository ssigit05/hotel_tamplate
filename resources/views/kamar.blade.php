@extends('layouts.tamu',['title'=>'Kamar'])
@section('content')
<section class="blog_area">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Kamar</h2>
        </div>
        <div class="row">
            @foreach ($kamar as $item)
            <div class="col-md-3">
                <div class="blog_left_sidebar">
                    <article class="row blog_item justify-content-center">
                       
                        <div class="col-md-12">
                            <div class="blog_post ">
                                
                                
                                    <img src="{{ $item->foto_kamar}}" alt="" class="mt-3">
                                    <div class="blog_details">
                                        <a href="{{ route('guest.kamar.show',['kamar'=>$item->id])}}"><h2>{{ $item->nama_kamar }}</h2></a>
                                        <p>{{ $item->deskripsi_kamar}}</p>
                                    </div>
                                    
                                    <div class="card-footer bawah">
                                        <h4>Rp. {{ $item->harga_kamar}} <small>/ Malam</small></h4>
                                    </div>
                                        
                                    
                            </div>
                        </div>
                </article>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>
@endsection
