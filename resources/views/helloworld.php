<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="div1" class="flex-center position-ref full-height">
           <button id="r" >subitdssdsdsdds</button>
        </div>
    <p>
      มาแล้วค๊าบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบ
    </p>
    <button id="r">back</button>
    <script>
    $('#r').click(function(){
       window.location.href="/"
    });
    $('#r').click(function(){
        $.ajax({url: "/helloworld", success: function(result){
            $('#div1').html(result)
  }});
    });
    </script>
</body>
</html>