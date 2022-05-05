@extends('layouts.main')
    @section('container')
        <div class="content-berita" style="margin-top: 1cm; display:flex; flex-direction:column; margin-bottom:2cm;">
            <h2 style="text-align: center; margin-bottom:2cm;">Berita</h2>
            @foreach ($post as $item)                        
            <article class="kumpulan-berita" style="flex:1; display: flex; flex-direction:row; justify-content:space-between; margin-bottom:1cm;">                
                    <div class="card-berita1">
                        <h3>
                            <a href="/informasi/{{ $item->slug }}">{{ $item->title }}</a>
                        </h3>
                        <span>{{ $item->excerpt }}</span>
                    </div>
            </article>
            @endforeach
        </div>
    @endsection