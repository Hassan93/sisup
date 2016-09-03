@extends('layout.main')

@section('title', '| All Posts')

@section('content')
   <div class ="row">
       <div class="col-md-10">
          <h1>All Posts</h1>
       </div>
       <div class='col-md-2'>
        <a href="{{route('posts.create')}}" class=" btn btn-primary btn-lg btn-block btn-h1-spacing">Create New Post</a>
       </div>
       <div class ="col-md-12">
      <hr>
       </div>
   </div>
   <div class ="row">
     <div class="col-md-12">
        <table class="table">
            <thead>
               <tr>
                 <th>#</th>
                  <th>Title</th>
                  <th>Body</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
               </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->body,0, 20)}}{{strlen($post->body)>20 ? "..." : ""}}</td>
                    <td>{{date('d M Y', strtotime($post->created_at))}}</td>
                    <td>{{date('d M Y', strtotime($post->updated_at))}}</td>
                    <td>
                      <a href="{{route('posts.show', $post->id)}}", class="btn btn-primary glyphicon glyphicon-zoom-in"></a>
                      <a href="{{route('posts.edit', $post->id)}}", class="btn btn-primary glyphicon glyphicon-pencil"></a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <div class="text-center">
          {!! $posts->links()!!} <!--Pagination-->
        </div>
     </div>
   </div>
@stop
