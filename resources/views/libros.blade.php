@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($libros as $libro)
                <div class="card mb-3">
                    <div class="card-header">{{$libro->fecha->format('d M Y')}}</div>

                    <div class="card-body">
                        <h3>{{$libro->titulo}}</h3>
                        <p>Category: {{ $libro->categoria->nombre }}</p>
                        <p>{{ $libro->descripcion }}</p>
                        <div>

                            @foreach ($libro->etiquetas as $tag)
                            <span class="badge rounded-pill bg-success"># {{ $tag->nombre }}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection