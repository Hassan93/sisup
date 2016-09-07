@extends('layout.main')
@section('title', '| Edit Post')
@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
  <div class="row">
    {!!Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT'])!!}
      <div class="col-md-8">
        <h1>Edit a Post</h1>
        <hr>
        {{ Form::label('title', 'Post Title:') }}
        {{ Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'6'))}}
        {{ Form::label('slug', 'Slug:', array('class'=>'form-spacing-top')) }}
        {{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'6'))}}
        {{ Form::label('body', 'Post Body:', array('class' =>'form-spacing-top')) }}
        {{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>''))}}

        <div class="col-sm-6" style="margin-top:20px">
          {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' =>'btn btn-danger btn-block' ))!!}
        </div>
        <div class="col-sm-6" style="margin-top:20px">
          {{ Form::submit('Save Changes', array('class'=>'btn btn-success btn-block'))}}
      </div>
    {!!Form::close()!!}
  </div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection
