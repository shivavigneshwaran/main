@extends('layout.app')

@section('title','home page')

@section('content')


@php
    $datas = @json_decode($data);
@endphp




<h3>{{ $datas->name }}</h3>













<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non suscipit a in cum aliquam voluptatibus vero quis cumque unde dolor labore necessitatibus sint ex dolorem voluptas maiores quo commodi, doloribus quaerat quae et obcaecati exercitationem, itaque doloremque. Dolorum eum molestias saepe. Ducimus aspernatur ratione recusandae quas impedit repellendus explicabo. Numquam neque error, sunt officiis autem deserunt corrupti velit. Quos culpa nostrum assumenda fuga nihil iusto quis ea, facilis voluptas reprehenderit molestias unde. Labore fuga harum nemo soluta nihil nam eius necessitatibus sit, earum aliquam eum alias inventore culpa saepe vitae accusantium repellendus temporibus eaque autem praesentium sapiente exercitationem, reiciendis quis.</p>

@endsection

@section('footer')
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">home footer</span>
    </div>
  </nav>

@endsection
