@extends('layout.master')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Post</h1>
        <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">ข้อมูลรายการ</a></li>
        <li class="breadcrumb-item">สร้างรายการใหม่</li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title">สร้างรายการ Post</h3>
                </div>
                <div class="tile-body">
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
                </div>
                <div class="tile-footer">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
