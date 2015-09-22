@extends ('layouts.master')

@section('title', 'TWTec')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Welcome Home</h1>
    <p class="lead">A Jesus SG creation</p>
    <hr>

    <a href="{{ route('posts.index') }}" class="btn btn-success">View Tasks</a>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Task</a>
@stop
