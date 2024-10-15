<!DOCTYPE html>
<html>
<head>
  <title>Unggah File Dokumen</title>
  <style>

  </style>
</head>
<body>
  <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
    <label for="file">Pilih File:</label>
    <input type="file" name="file" id="file" accept=".pdf,.docx,.xlsx">
    <input type="submit" value="Unggah">
  </form>
  <div id="status"></div>

  <script src="https://code.jquery.com/jquery-1.14.0.min.js"></script>
  <script src="upload.js"></script>
</body>
</html>