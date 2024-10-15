<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah dokumen</h2>
        <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple="multiple" accept=".pdf,.doc,.docx">
            <input type="submit" name="unggah">
        </form>
    </body>
</html>