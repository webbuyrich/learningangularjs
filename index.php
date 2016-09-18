<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learning AngularJS</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet/less" href="css/style.less">
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Learning AngularJS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Loops</a></li>
                    
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
        <!-- NAVIGATION BAR -->

        <div class="container">
            <div class="starter-template">
                <h1>Learning Angular JS</h1>
                <p class="lead">Welcome to Learning AngularJS. Over the course of this book <br >you will get a chance to delve into the basics of building AngularJS applications. Endjoy!</p>
            </div>
            <div class=" container row">
                <h2>Loops</h2><hr>
                <!-- ACCORDION LIST -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- WHILE LOOPS -->
                    <div class="panel panel-default">
                       <div class="panel-heading" role="tab" id="whileloopheading">
                         <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#whileloop" aria-expanded="true" aria-controls="whileloop">
                             While Loops
                           </a>
                         </h4>
                       </div>
                       <div id="whileloop" class="panel-collapse collapse" role="tabpanel" aria-labelledby="whileloopheading">
                         <div class="panel-body">
                            <div>
                                <pre>
                                    &lt;?php<br>
                                        $i = 1;
                                            while($i < 5){
                                            echo "Iteration " . $i . ' &lt;br /&gt;';
                                            $i++;
                                        }<br>
                                    ?&gt;
                                </pre>
                            </div>
                            <br>
                            <div>
                                Result:<br/>
                                <?php 
                                    $i = 1;
                                    while($i < 5){
                                        echo "Iteration " . $i . '<br />';
                                        $i++;
                                    }
                                ?>
                            </div>
                         </div>
                       </div>
                     </div><!-- WHILE LOOPS -->

                     <!-- DO WHILE LOOPS -->
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="forloopheading">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#forloop" aria-expanded="true" aria-controls="whileloop">
                              For Loops
                            </a>
                          </h4>
                        </div>
                        <div id="forloop" class="panel-collapse collapse" role="tabpanel" aria-labelledby="forloopheading">
                          <div class="panel-body">
                             <div>
                                 <pre>
                                    &lt;?php 
                                       for($x = 1; $x <= 3; $x++){
                                           for($y = 1; $y <= 3; $y++){
                                               echo ($x . " X ". $y ." = ".($x*$y)."&lt;br &gt;");
                                           }
                                       }
                                    ?&gt;   
                                 </pre>
                             </div>
                             <br>
                             <div>
                                 Result:<br/>
                                 <?php 
                                    for($x = 1; $x <= 3; $x++){
                                        for($y = 1; $y <= 3; $y++){
                                            echo ($x . " X ". $y ." = ".($x*$y)."<br>");
                                        }
                                    }
                                 ?>
                                 
                             </div>
                          </div>
                        </div>
                      </div><!-- DO WHILE LOOPS -->
                </div><!-- ACCORDION LIST -->
            </div>
            
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
    </body>

</html>