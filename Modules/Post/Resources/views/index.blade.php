@extends('layouts.admin.master')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-pencil-square" aria-hidden="true"></i> Post</h1>
        <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">ข้อมูลราย</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('post.create') }}"><i class="fa fa-plus"></i>สร้างรายการใหม่ </a></p>
            </div>
            <div class="tile-body">
                <table class="table  table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">หัวข้อ</th>
                            <th scope="col">สร้างเมื่อ</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $index => $value)
                        <tr>
                            <th scope="row">{{ $lists->firstItem() + $index }}</th>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td width="1" class="text-nowrap">
                                <form method="POST" action="{{ route('post.destroy', $value->id) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-info btn-sm" href="{{ route('post.edit', $value->id) }}"><i class="fas fa-pen-square"></i> แก้ไขข้อมูล</a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('ท่านต้องการลบรายการ '+{{ $value->id }}+' นี้ใช่หรือไม่ ?');"><i class="fas fa-trash-alt"></i> ยกเลิก</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tile-footer">
                {{ $lists->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
