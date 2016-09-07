@extends('layout.main')
@section('title', '| Blog')
 @section('content')
       <div class="row">
         <div class="col-md-8 col-md-offset-2">
           <h1>Blog</h1>
         </div>
       </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
               <div class="post">
                   <h3>{{$post->title}}</h3>
                   <p>{{substr($post->body, 0, 20)}}{{strlen($post->body)>20 ? "...": ""}}</p>
                   <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
                </div>
                 <hr>
           @endforeach
     </div>
          <div class="col-md-12">
            {!! $posts->links()!!}
        </div>
    </div>
@endsection
