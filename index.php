<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>PHP Badwords</h1>

  <form action="result" method="GET">
    <label for="paragraph">Inserisci il Paragrafo</label> <br />
    <textarea name="paragraph" id="paragraph" cols="50" rows="4" required></textarea> <br /><br />

    <label for="badword">Parola da censurare</label> <br />
    <input type="text" name="badword" id="badword" required> <br />
    
    <input type="submit" value="Invia">
  </form>
  
</body>
</html>