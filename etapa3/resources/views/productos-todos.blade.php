@extends('layout')

@section('title')
Listado completo productos
@endsection

@section('main')

<div class="container text-center">
  <h1>Listado completo de productos</h1>
</div>

<div class="container">


<form action="/productos-todos/search" method="get">
  <input type="text" name="query" placeholder="Buscá algun producto" value="{{ $query }}">
  <button type="submit">Buscar</button>
</form>
</div>
<br>


<div class="container">
  <h4>¡En este momento hay @php echo rand(100,200); @endphp personas viendo esto! ¡Apurate!</h4>
</div>
<br>
  <div class="container">
    <div class="row">
        @foreach ($productos as $producto)
        <a href="/productos/{{ $producto->id }}" class="col-12 col-md-4 col-lg-3 mb-4">
          <div class="card">
          <img src="{{$producto->image_url}}" class="card-img-top" alt="{{ $producto->name }}">
            <img src="/storage/{{$producto->image_url}}" class="card-img-top">
            <div class="card-body">
              <p class="card-text">{{ $producto->name }}</p>
            </div>
          </div>
        </a>
      @endforeach
      @if (isset($productos->links))
        {{ $productos->links() }}
      @endif
    </div>
  </div>




  <br>


    </div>

@endsection
