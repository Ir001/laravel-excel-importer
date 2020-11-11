<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card mt-5">
            <div class="card-header">
                Import Database
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success border-left-success">
                        {{session('success')}}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger border-left-danger" role="alert">
                        <ul class="pl-4 my-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Table</label>
                        <select name="table" class="form-control">
                            <option value="provinces">Provinces</option>
                            <option value="bps_provinces">Provinces BPS</option>
                            <option value="dagri_provinces">Provinces Dagri</option>
                            <option value="regencies">Regencies</option>
                            <option value="bps_regencies">Regencies BPS</option>
                            <option value="dagri_regencies">Regencies Dagri</option>
                            <option value="districts">Districts</option>
                            <option value="bps_districts">Districts BPS</option>
                            <option value="dagri_districts">Districts Dagri</option>
                            <option value="villages">Villages</option>
                            <option value="bps_villages">Villages BPS</option>
                            <option value="dagri_villages">Villages Dagri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File Excel</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">
                            Import
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>
