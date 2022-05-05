@extends('layouts.main')
  @section('container')
    <div class="container" style="display: flex; flex-direction:column; justify-content:center; align-items:center; margin-top: 1cm;">
      <div class="row">
        <div class="col" style="justify-items: center">
          <div class="card" style="width: 40rem; border:none; justify-content:center; align-items:center">
            <img src="img/guru/kepsek.jpg" style="width: 10rem; border-radius: 100%;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">SAMBUTAN KEPALA SEKOLAH</h5>
              <p class="card-text" style="text-indent: 20px; text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quaerat ut accusantium exercitationem reprehenderit ipsa recusandae velit, repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum , repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum.</p>
              <p class="card-text" style="text-indent: 20px; text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quaerat ut accusantium exercitationem reprehenderit ipsa recusandae velit, repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum , repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum. Lorem ipsum dolor sit amet.</p>
              <p class="card-text" style="text-indent: 20px; text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quaerat ut accusantium exercitationem reprehenderit ipsa recusandae velit, repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum , repellendus vero vel odio quidem unde. Sunt similique sequi ipsa eos, expedita rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nostrum reprehenderit facere cum quos? Doloremque!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($post as $item)
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><a href="/informasi/{{ $item->slug }}">{{ $item->title }}</a></h5>
              <p class="card-text">{{ $item->excerpt }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  @endsection