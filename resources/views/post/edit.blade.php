<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>แสดงข้อมูลรายการ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/lang/summernote-th-TH.min.js" integrity="sha512-PrQB8x9RCkqM/BXT6I/rlX2NTCFBNyaCGL7PNtDZDclXSrjC3fLL9N5N/qY3tNkcPEHj14stwkTqEWKOo+KdFQ==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                lang: 'th-TH',
                tabsize: 2,
                height: 250
            });
        });
    </script>
</body>

</html>
