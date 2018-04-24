<!DOCTYPE html>
<html>
<head>
	<title>form update mahasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="{{route('mahasiswaModel.update',$data->id)}}" method="POST">
	@csrf
	{{method_field('PATCH')}}

  <div class="form-group">
    <label for="exampleInputEmail1">nama mahasiswa</label>
    <input value="{{$data->namaMhs}}" name="namaMhs" class="form-control"  placeholder="nama mahasiswa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">nim mahasiswa</label>
    <input value="{{$data->nimMhs}}" name="nimMhs" class="form-control"  placeholder="nim mahasiswa">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">no telp</label>
    <input value="{{$data->noTelpMhs}}" name="noTelpMhs" class="form-control"  placeholder="no telp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">fakultas</label>
    <input value="{{$data->fakultasMhs}}" name="fakultasMhs" class="form-control"  placeholder="fakultas">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>