@extends ('layouts.master')
@section('container')
    <h1>This is home page</h1>
    <hr>
    @foreach($newsData as $news)
        <h1>  {{$news->title}}  </h1>
        <hr>
        <p>
            {{$news->description}}
        </p>
        <img src="{{$news->image}}" alt="image not found">
    @endforeach
@stop
