<h1>Categoria: {{ $category->name }}</h1>

<p>Quantidade de serviços: {{ $services->count() }}</p>

@foreach ($services as $service)
    <p>{{ $service->name }}</p>
@endforeach
