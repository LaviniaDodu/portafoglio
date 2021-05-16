@extends('layouts.app')

@section('content')

<div class="containe">
    <div class="row text-center">
        <div class="col-12">
            <h1>Ecco la situazine</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive-sm">
                <table class="table table-sm tabella-profilo table-success table-striped border-primary shadow-lg">
                    <thead class="table-dark text-center shadow-lg">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tittolo</th>
                            
                            <th scope="col">Progetto</th>
                            <th scope="col">Modifica</th>
                            <th scope="col">Elimina</th>
                            
                        </tr>
                    </thead>
                    <tbody class="text-center shadow-lg">
                        @foreach ($projects as $project)
                        
                        
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>
                                <a href="{{ route('project.show', $project) }}" class="text-decoration-none fw-bold text-main">
                                    {{substr($project->title, 0, 15)}} ...
                                </a>
                            </td>
                            
                            <td>{{substr($project->body, 0, 20)}} ...</td>
                            <td>
                                
                                <a href="{{ route('project.edit', $project)}}" class="text-decoration-none">
                                    <button class="btn btn-warning">
                                        Modifica
                                    </button>
                                </a>
                                
                            </td>
                            <td>
                                <form action="{{ route('project.delete', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Elimina</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection