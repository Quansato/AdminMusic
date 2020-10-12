@extends('layouts.admin')

@section('title')
<title>Thể loại</title>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Thể loại','key'=> 'Thêm mới'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('genres.create') }}" class="btn btn-success float-right m-2">Thêm thể loại</a>
          </div>
          <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
            @foreach($genres as $gr)
              <tr>
                <th scope="row">{{$gr->id}}</th>
                <td>{{$gr->name}}</td>
                <td>
                  <img src="{{$gr->img_path}}" alt="" width="50" height="50">
                </td>
                <td>
                <a href="{{ route('genres.edit',['id'=>$gr->id]) }}" class="btn btn-default">Sửa</a>
                <a href="{{ route('genres.delete',['id'=>$gr->id]) }}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          </div>
          <!-- paginggg -->
          <div class="col-md-12">
          {{ $genres->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
