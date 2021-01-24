@extends('layouts.app')
@section('content')
    <a href="{{ route('list.get') }}" class="btn btn-primary">Get</a>
    <a href="{{ route('list.post') }}" class="btn btn-primary">Post</a>
    <a href="{{ route('list.put') }}" class="btn btn-primary">put</a>
    <a href="{{ route('list.patch') }}" class="btn btn-primary">Patch</a>
    <a href="{{ route('list.delete') }}" class="btn btn-primary">delete</a>
@endsection
