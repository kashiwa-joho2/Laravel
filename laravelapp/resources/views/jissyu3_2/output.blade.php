<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    @foreach($data as $item)
    @___(16)___(___(17)___)
    <p>データ一覧</p>
    @___(18)___
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    @___(19)___(___(20)___)
    <p>ここまで出力</p>
    @___(21)___
    @___(22)___
 </body>
</html>
