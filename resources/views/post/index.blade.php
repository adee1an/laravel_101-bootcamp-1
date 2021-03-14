<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>แสดงข้อมูลรายการ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                L-Bootcamp
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
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
    </div>
</body>

</html>
