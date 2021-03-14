@extends('layout.master')

@section('content')
<h2>แก้ไขรายการ Post #{{ $result->id }}</h2>
<form method="POST" action="{{ route('update', $result->id) }}">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label>หัวข้อ</label>
        <input name="title" placeholder="ระบุหัวห้อ" type="text" value="{{ $result->title }}" class="form-control">
    </div>
    <div class="form-group">
        <label>ลิงค์เชื่อมโยง</label>
        <input name="url" placeholder="ระบุลิงค์เชื่อมโยง" type="text" value="{{ $result->url }}" class="form-control">
    </div>
    <div class="form-group">
        <label>Terget</label>
        <select id="target" name="target" class="custom-select">
            <option value="_blank" @if($result->target == "_blank") @endif>_blank</option>
            <option value="_self" @if($result->target == "_self") @endif>_self</option>
            <option value="_parent" @if($result->target == "_parent") @endif>_parent</option>
            <option value="_top" @if($result->target == "_top") @endif>_top</option>
        </select>
    </div>
    <div class="form-group">
        <label>รายละเอียด</label>
        <textarea id="summernote" name="detail" cols="40" rows="5" class="form-control" placeholder="ระบุรายละเอียด">{{ $result->detail }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
@endsection
