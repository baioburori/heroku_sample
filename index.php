<html>
<head>
<script>
var execute = function(){
  var interval = 1000;
  var exportUser = 1;
  var importUser = 0;
    var exportWin = window.open("https://calendar.google.com/calendar/b/" + exportUser + "/exporticalzip");
    setTimeout(function(){
      var importWin = window.open("https://calendar.google.com/calendar/b/" + importUser + "/r/settings/export");
      exportWin.close();
    },interval);
}

</script>
</head>
<body>
  <h1>Export Import</h1>
  <button onclick="execute()">実行</button>
</body>
</html>
