@extends('layouts.admin')

@section('title')
<title>Sửa</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Thể loại','key'=> 'Sửa'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('genres.update',['id'=>$gr->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input class="form-control" name="name" value="{{ $gr->name }}" placeholder="Nhập tên bài hát">
                </div>
                <div class="form-group">
                    <label>Đường dẫn ảnh</label>
                    <input type="file" class="form-control-file" name="imgpath" value="{{ $gr->img_path }}" placeholder="Nhập đường dẫn ảnh">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
 
 