@extends('layouts.app')

@section('content')
ciao
<h1>{{$project->title}}</h1>
{{ $project->slug }}
{{$project->id}}
<img src="{{$project->getCover()}}" class="img-fluid w-25" alt="img">
{{dd($project->title)}}
ciao

@endsection