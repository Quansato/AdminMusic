@extends('layouts.admin')

@section('title')
<title>Quản lí nhạc</title>
@endsection

@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name'=>'Bài hát','key'=> 'Danh sách'])
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('songs.create') }}" class="btn btn-success float-right m-2">Thêm bài hát</a>
        </div>
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên bài hát</th>
                <th scope="col">Thời lượng</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Âm nhạc</th>
                <th scope="col">Lượt nghe</th>
                <th scope="col">Lượt tải</th>
                <th scope="col">Giá</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach($songs as $song)
              <tr>
                <th scope="row">{{$song->id}}</th>
                <td>{{$song->name}}</td>
                <td>{{$song->time}}</td>
                <td>{{$song->genres->name}}</td>
                <td>
                  <img src="{{$song->img_path}}" alt="" width="50" height="50">
                </td>
                <td>
                  <audio controls>
                    <source src="{{$song->song_path}}" type="audio/mpeg">
                  </audio>
                </td>
                <td></td>
                <td></td>
                <td>{{$song->cost}}$</td>
                <td>
                  <a href="{{ route('songs.edit',['id'=>$song->id]) }}" class="btn btn-default">Sửa</a>
                  <a href="{{ route('songs.delete',['id'=>$song->id]) }}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- paginggg -->
        <div class="col-md-12">
          {{ $songs->links() }}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection