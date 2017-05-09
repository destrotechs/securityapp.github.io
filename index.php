
<html>
    <head><title>secure</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css"/>
    <!-- Optional theme -->
    <script src="index.js" try="script/javascript"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="set">

        </div>
    <div class="row">
        <div class="col-md-6">
    <div id="appdiv1">
      <img src="images/user.png" id="img1"/>
      <div id="viewer"></div>
        <center><span class="glyphicon glyphicon-cloud"></span><br>
            <input class="btn btn-danger btn-lg" type="button"id="btn1" name="button2" value="Alert"/>
            <input class="btn btn-danger btn-lg" type="button" id="log" name="button3" value="Login"/><br><br><br>
            <input class="btn btn-danger btn-lg" type="button" name="button2" value="dedicated trustees"/><br><br>
            <input class="btn btn-success btn-sm" type="button" id="settings" name="button2" value="Add settings"/>
             <input class="btn btn-success btn-sm" type="button" id="settingview" name="button" value="see my info"/>
        </center>
    </div>
    </div>
    <div class="col-md-6">
    <div id="appdiv2">
      <img src="images/loudspeaker.jpg" id="loudspeaker"/>
      <audio src="audio/ambulancea_huNm5Px8.mp3" preload="auto" id="audio1"></audio>
      <center><div id="caller"></div>
        <span class="glyphicon glyphicon-user"></span><br>
            <input class="btn btn-danger btn-lg" type="button" id="seecaller"name="button2" value="see caller"/><br><br>
             <input class="btn btn-success btn-lg" type="button" id="refresh"name="button2" value="refresh"/>
        </center>
    </div>
    </div>
    </div>
        <div id="popup">
        <form action="index.php" method="POST">
            <input type="text" id="user" name="user" placeholder="well known name" class="form-control" /><br>
            <input type="text" id="phone" name="phone" placeholder="phone number" class="form-control"/><br>
            <input type="submit" id="save" name="submit" class="btn bt-success" value="save"/>
            <input type="button" id="close" name="save" class="btn bt-success" value="close" style="float:right"/>
        </form>
        </div>
        <div id="popup2">
        <form action="index.php" method="POST">
            <input type="text" id="user" name="user" placeholder="well known name" class="form-control" /><br>
            <input type="text" id="phone" name="phone" placeholder="phone number" class="form-control"/><br>
            <input type="submit" id="login" name="login" class="btn bt-success" value="login"/>
            <input type="button" id="close2" name="save" class="btn bt-success" value="close" style="float:right"/>
        </form>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
           var user=$("#user");
            var phone=("#phone");
          $("#loudspeaker").fadeOut(300);
          $("#loudspeaker").fadeIn(300);
          $("#btn1").on("click",function(){
            var rand=Math.random()*30;
            var whole=Math.floor(rand);
        $("#seecaller").on("click",function(){
            $("#caller").append(whole);
        });
          $("#audio1").play();
         });
         $("#settings").on("click",function(){
            $("#popup").show();
         });
                
         $("#close").on("click",function(){
            $("#popup").hide();
         });
         $("#save").on("click",function(){
             var newusr={
                    username:$(user).val(),
                    phone:$(phone).val(),
             };
             //alert(newusr);
            $.ajax({
              type:'POST',
               url:'insert.php',
                data:newusr,
                success:function(data){
                $("#viewer").append(data);
            }
        });
         });
         $("#settingview").on("click",function(){
             $.ajax({
                 method:'POST',
                 //data:'data',
                 url:'process_view_settings.php',
                 success:function(data){
                    $("#viewer").html(data);
                 }
             });
         });
          $("#log").on("click",function(){
            //alert("clicked");
            $("#popup2").show();
         });
        $("#close2").on("click",function(){
            $("#popup2").hide();
         });
         $("#login").on("click",function(){
             var newusr={
                    username:$(user).val(),
                    phone:$(phone).val(),
             };
             $.ajax({
                method:'POST',
                data:'newusr',
                url:'process_login.php',
                success:function(data){
                    alert("logged in");
                }
             });
         });
    });
    </script>
    </body>
</html>