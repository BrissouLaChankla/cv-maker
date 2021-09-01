<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>{{ $name }} veut rentrer en contact avec toi !</h2>
    <h4>C'est pour un.e {{$subject}}</h4>
    <br>
    <p>
     "{{ $msg }}"
      </p>
<br>
    <p>Répondre : <a href="mailto:{{$mail}}">{{$mail}}</a></p>
  </body>
</html>