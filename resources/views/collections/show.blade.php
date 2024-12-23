@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
        <div class="col-1">
            <div class="card">
                <img src="{{ Storage::url($collection->image) }}" style="width:100%; height: 100%;" class="w-full h-full object-cover transform transition-all hover:scale-110" alt="{{ $collection->name }}">
                <div class="containers">
                    <h5>{{ $collection->name }}</h5>
                    <h5>{{ $collection->nama_pelukis }}</h5>
                    <p>{{ Str::words($collection->description, 10) }}...</p>
                    <br>
                    <div class="flex justify-between" style="color: white">
                        <span>Tahun: {{ $collection->year }}</span>
                        <span>Status: {{ $collection->status }}</span>
                    </div>

                    <div class="flex justify-between mt-2" style="color: white">
                        <span>Tipe: {{ $collection->tipe_lukisan }}</span>
                        <span>Kondisi: {{ $collection->condition }}</span>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection
