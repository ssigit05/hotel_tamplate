@extends('layouts.admin',['title'=>'Kamar'])
@section('content-header')
    <h1 class="m-0"><i class="fas fa-bed"></i>  Kamar </h1>
@endsection

@section('content')
<x-status/>
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-btn-tambah :link="route('kamar.create')"/>
                </div>
                <div class="col">
                    <x-search/>
                </div>
            </div>
            
            
        </div>

        <x-card-body>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kamar</th>
                        <th>Jumlah Kamar</th>
                        <th>Harga Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $data->firstItem();?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ ucwords($item->nama_kamar)}}</td>
                        <td>{{ $item->jum_kamar}}</td>
                        <td>Rp. {{ number_format($item->harga_kamar,0,',','.')}}</td>
                        <td>
                            <a href="{{ route('kamar.fasilitas.index',['kamar'=>$item->id])}}"
                                class="btn btn-xs btn-success mr-1">
                                <i class="fas fa-tv"></i> Fasilitas
                            </a>
                            <x-btn-show :link="route('kamar.show',['kamar'=>$item->id])"/>
                            <x-btn-edit :link="route('kamar.edit',['kamar'=>$item->id])"/>
                            <x-btn-delete :link="route('kamar.destroy',['kamar'=>$item->id])" />
                        </td>
                    </tr>  
                    @endforeach
                    
                </tbody>
            </x-card-body>

        {{--  card-body  --}}
        <div class="card-body pb-0">
            {{ $data->appends(['search' => request()->search])->links('bs4')}}
        </div>
        {{--  card-body  --}}
    </div>
@endsection

@section('modal')
<!-- Modal -->
<x-modal-delete/>
@endsection