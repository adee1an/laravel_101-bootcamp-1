@extends('layout.master')

@section('content')
<h2>ข้อมูลรายการ Post</h2>
<a href="{{ route('create') }}">+ สร้างรายการใหม่</a>
<table class="table">
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
                <form method="POST" action="{{ route('destroy', $value->id) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <a class="btn btn-info btn-sm" href="{{ route('edit', $value->id) }}"><i class="fas fa-pen-square"></i> แก้ไขข้อมูล</a>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('ท่านต้องการลบรายการ '+{{ $value->id }}+' นี้ใช่หรือไม่ ?');"><i class="fas fa-trash-alt"></i> ยกเลิก</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>
    {{ $lists->links() }}
</p>
@endsection
