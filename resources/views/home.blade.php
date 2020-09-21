@extends("layout")

@section("title", "Home")

@section("content")
    <div class="container-fluid">
        <h1 class="h2 mt-3">ULTIMOS 10 POSTS</h1>
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="text-fluid">Titulo</th>
                    <th scope="col" style="text-fluid"></th>
                    <th scope="col" style="text-fluid"></th>
                    <th scope="col" style="text-fluid"></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse($posts as $post)
                <tr>
                    <td>@php echo $i++ @endphp</td>
                    <td>{{$post->titulo}}</td>
                    <td><a href="{{route('post.show', ['id'=>$post->id])}}" class="btn btn-success">Ver</a></td>
                    <td><a href="{{route('post.edit', ['id'=>$post->id])}}" class="btn btn-primary">Editar</a></td>
                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                </tr>
                @empty
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection