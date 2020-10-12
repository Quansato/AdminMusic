@extends('layouts.admin')

@section('title')
<title>Thêm mới</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Thể loại','key'=> 'Thêm mới'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('genres.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input class="form-control" name="name" placeholder="Nhập tên thể loại">
                </div>
                <div class="form-group">
                    <label>Đường dẫn ảnh</label>
                    <input type="file" class="form-control-file" name="imgpath" placeholder="Nhập đường dẫn ảnh">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
 
 