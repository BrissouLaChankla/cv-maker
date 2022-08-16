<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>{{ $mailData['name'] }} veut rentrer en contact avec toi !</h2>
    <h4>C'est pour un.e {{$mailData['subject']}}</h4>
    <br>
      "{!! nl2br(e($mailData['msg'])) !!}""
<br>
    <p>Répondre : <a href="mailto:{{$mailData['mail']}}">{{$mailData['mail']}}</a></p>
  </body>
</html>