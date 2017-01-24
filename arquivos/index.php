<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
    <form method="post" action="arquivos/upload.php" enctype="multipart/form-data">
        <table border="1" width="100%">
            <thead>
                <th colspan="2">
                    Sistema de upload
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>Arquivo:</td>
                    <td>
                        <input required type="file" name="arquivo" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input value="ENVIAR" type="submit" />
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>