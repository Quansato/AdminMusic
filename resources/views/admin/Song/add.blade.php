@extends('layouts.admin')

@section('title')
<title>Thêm mới</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('admins/song/add/add.css') }}"></script>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Bài hát','key'=> 'Thêm mới'])
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('songs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên bài hát</label>
                            <input class="form-control" name="name" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label>Thời lượng</label>
                            <input class="form-control" name="time" placeholder="Nhập thời lượng bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Thể loại</label>
                            <select class="form-control" name="id_genres">
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn ảnh</label>
                            <input type="file" class="form-control-file" name="imgpath" placeholder="Nhập đường dẫn ảnh">
                        </div>

                        <div class="form-group">
                            <label>Đường dẫn bài hát</label>
                            <input type="file" class="form-control-file" name="songpath" placeholder="Nhập đường dẫn bài hát">
                        </div>

                        <div class="form-group">
                            <label>Chọn ca sĩ</label>
                            <select class="form-control tags-select" multiple="multiple" name="id_artist[]">
                                {!! $htmlOption2 !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input class="form-control" name="cost" placeholder="Nhập giá">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ asset('admins/song/add/add.js') }}"></script>

@endsection