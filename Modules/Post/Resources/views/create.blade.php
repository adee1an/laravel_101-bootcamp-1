@extends('layout.master')

@section('content')
<h2>สร้างรายการ Post</h2>
<form method="POST" action="{{ route('post.store') }}">
    @csrf
    <div class="form-group">
        <label>หัวข้อ</label>
        <input name="title" placeholder="ระบุหัวห้อ" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>ลิงค์เชื่อมโยง</label>
        <input name="url" placeholder="ระบุลิงค์เชื่อมโยง" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Terget</label>
        <select id="target" name="target" class="custom-select">
            <option value="_blank">_blank</option>
            <option value="_self">_self</option>
            <option value="_parent">_parent</option>
            <option value="_top">_top</option>
        </select>
    </div>
    <div class="form-group">
        <label>รายละเอียด</label>
        <textarea name="detail" id="summernote" cols="40" rows="5" class="form-control" placeholder="ระบุรายละเอียด"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
@endsection
