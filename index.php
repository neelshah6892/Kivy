<!DOCTYPE html>
<html>
<head>
<title>Recon</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>2A</h1>

<form method="POST" action="2a.php" enctype="multipart/form-data">
<div class="form-group">
<label>Upload Excel File</label>
<input type="file" name="file" class="form-control">
<input type="file" name="file" class="form-control">
<input type="file" name="file" class="form-control">
</div>
<div class="container">
<h1>INWARD</h1>

<form method="POST" action="excelUpload.php" enctype="multipart/form-data">
<div class="form-group">
<label>Upload Excel File</label>
<input type="file" name="file" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="Submit" class="btn btn-success">Upload</button>
</div>
</form>
</div>
</body>
</html>