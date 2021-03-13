<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>แสดงข้อมูลรายการ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <h2>สร้างรายการ Post</h2>
        <form method="POST" action="{{ route('store') }}">
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
                <textarea name="detail" cols="40" rows="5" class="form-control" placeholder="ระบุรายละเอียด"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">บันทึก</button>
        </form>
    </div>
</body>

</html>
