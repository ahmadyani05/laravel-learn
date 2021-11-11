@extends('layouts.app')
@section('title', 'Blog Posts')

@section('content')
@forelse ($posts as $key => $post)
    @if($loop->even)
    <div>{{ $key }}.{{ $post['title'] }}</div>
    @else
    <div style="background-color: silver">{{ $key }}.{{ $post['title'] }}</div>
    @endif
@empty
No Posts Found!!
@endforelse
@endsection

{{-- @if(count($posts))
    @foreach ($posts as $key => $post)
        <div>{{ $key }}.{{ $post['title'] }}</div> 
    @endforeach
@else
No Posts Found!!
@endif --}}
