<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html> -->

<!DOCTYPE html>
 <html>
 <head>
     <script src={{asset("bootstrap/js/jquery-3.2.0.min.js")}}></script>
           
                <script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
 <link rel='stylesheet' href="{{asset('css/main.css') }}">
 <link href="css/bootstrap.min.css" rel="stylesheet">
      </head>
      <body class="container-fluid">
         
 @include('menu')
        
         <button type="button" onclick="change()" class="btn btn-default">Change background</button>
         <header> </header>
         <div class="row">
          
           <div class="col-sm-2"></div>
           <div class="col-sm-8">
               <section class='main_section'>
         <article class="main_section">
             @yield('content')
         </article>
               </section>

          </div>
           <div class="col-sm-2"></div>
           
             </div>
         
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script>
         var zmienna=0;
function change(){
//    $("button").click(function(){
      
        if (zmienna ===0)
        {
             $('body').css('background', 'url("../nr2.jpeg") no-repeat fixed')
             $('body').css('background-size', 'cover')
             zmienna=1;
        }
        else
        {
             $('body').css('background', 'url("../image1.jpeg") no-repeat fixed')
             $('body').css('background-size', 'cover')
             zmienna =0;
         }
 //   });
 };
</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
       
      </body>
      
           
    
 </html>
