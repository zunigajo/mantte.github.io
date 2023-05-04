<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Subir archivo a GitHub</title>
  </head>
  <body>
    <h1>Subir archivo a GitHub</h1>
    <form enctype="multipart/form-data" method="post" action="https://github.com/repos/:owner/:repo/releases/:release_id/assets?name=:filename&access_token=:token">
      <label for="file">Selecciona un archivo:</label>
      <input type="file" id="file" name="file"><br><br>
      <input type="submit" value="Subir archivo">
    </form>
 {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="file"] {
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

  </body>
</html>
