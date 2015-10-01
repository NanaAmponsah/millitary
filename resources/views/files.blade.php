@extends('layout.base_layout')
@section('content')



  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Documents</h1>

      @if($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li class="error_message">{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
      @endif
      <div class="page-header-actions">
        <form>
          <div class="input-search input-search-dark">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="" placeholder="Search...">
          </div>
        </form>
      </div>
    </div>
    <div class="page-content">

      <div class="projects-wrap">
        <ul class="blocks blocks-100 blocks-xlg-5 blocks-md-4 blocks-sm-3 blocks-xs-2">
          @foreach($files as $file )
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                <img class="caption-figure" src="{{ asset('assets/photos/placeholder.png') }}">
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                    <div type="button" class="btn btn-icon btn-pure btn-default"><a href="{{ url('/files',$file->id) }}"> <i class="icon wb-trash" aria-hidden="true"></i></a></div>
                  </div>
                  <div type="button" class="btn btn-outline btn-default project-button"><a href="{{ url($file->filename) }}">Download</a></div>
                </figcaption>
              </figure>
              <div class="time pull-right" style="margin:10px;">{{ $file->created_at }}</div>
              <div style="margin:10px;">{{ $file->document_title }}</div>
            </div>
          </li>
            @endforeach
        </ul>
      </div>

      <nav>
        <ul class="pagination pagination-no-border">
          <li class="disabled">
            <a href="javascript:void(0)" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
          <li><a href="javascript:void(0)">2</a></li>

          <li>
            <a href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!--add project form -->
  <button class="site-action btn-raised btn btn-success btn-floating" data-target="#addProjectForm"
          data-toggle="modal" type="button">
    <i class="icon wb-plus" aria-hidden="true"></i>
  </button>
  {!! Form::open(array('url'=>url('files'),'method'=>'POST','class'=>'modal-content', 'files'=>true)) !!}

  <div class="modal fade" id="addProjectForm" aria-hidden="true" aria-labelledby="addProjectForm"
       role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Add New Document</h4>
        </div>
        <div class="modal-body">


            <div class="form-group">
              {!! Form::label('doc_name','Document Name:',array('class'=>'control-label margin-bottom-15')) !!}
              {!! Form::text('doc_name','',array('class'=>'form-control','placeholder'=>'File name')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('upload','Upload File:',array('class'=>'control-label margin-bottom-15')) !!}
              {!! Form::file('doc_upload','',array('class'=>'form-control','multiple'=>'multiple','required')) !!}
            </div>

        </div>
        <div class="modal-footer text-left">
          <button class="btn btn-primary">Create</button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>

      </div>
    </div>
  </div>
  {!! Form::close() !!}
@endsection