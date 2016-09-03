@extends('layout.main')
@section('title', '| Homepage')
 @section('content')
         <div class="row">
            <div class="col-md-12">
              <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p>Thank you so much for visisting my blog! Please read more about my popular posts!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular posts</a></p>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            @foreach($posts as $post)
               <div class="post">
                   <h3>{{$post->title}}</h3>
                   <p>{{substr($post->body, 0, 20)}}{{strlen($post->body)>20 ? "...": ""}}</p>
                   <a href="#" class="btn btn-primary">Read More...</a>
                </div>
                 <hr>
           @endforeach
     </div>
          <div class="col-md-3 col-md-offset-1">
            <h2>Sibebar</h2>
        </div>
    </div>
@endsection
