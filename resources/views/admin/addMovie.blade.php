@extends('layouts.admin')
@section('content')
<div class="content-wrapper" style="background-color: white">
  <div class="form-container" style="max-width: 500px; margin: 20px auto;">
    <h2 class="text-center mb-7">Thêm phim</h2>
    <form method="POST" action="{{ route('admin.storeMovie') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-2">
        <label for="movieName" class="form-label">Tên phim</label>
        <input type="text" class="form-control" id="movieName" name="movie_name" placeholder="Nhập tên phim" required>
      </div>
      <div class="mb-2">
        <label for="trailer_url" class="form-label">Trailer</label>
        <input type="url" class="form-control" id="trailer_url" name="trailer_url" placeholder="Nhập đường dẫn trailer">
      </div>
      <div class="mb-2">
        <label for="description" class="form-label">Mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Nhập mô tả" required></textarea>
      </div>
      <div class="mb-2">
        <label for="releaseDate" class="form-label">Ngày khởi chiếu</label>
        <input type="date" class="form-control" id="releaseDate" name="release_date" required>
      </div>
      <div class="mb-2">
        <label for="movieImage" class="form-label">Hình ảnh phim</label>
        <input type="file" class="form-control" id="movieImage" name="image_path" accept="image/*" required>
      </div>
      <div class="form-check form-switch mb-2">
        <input class="form-check-input" type="checkbox" id="showing" name="showing">
        <label class="form-check-label" for="showing">Đang chiếu</label>
      </div>
      <div class="form-check form-switch mb-2">
        <input class="form-check-input" type="checkbox" id="showing" name="showing">
        <label class="form-check-label" for="showing">Sắp chiếu</label>
      </div>
      <div class="d-flex justify-content-between">
        <a href="{{ route('admin.listMovie') }}" class="btn btn-secondary text-white">Trở lại</a>
        <button type="submit" class="btn btn-success">Lưu</button>
      </div>
    </form>
  </div>
</div>
@endsection
