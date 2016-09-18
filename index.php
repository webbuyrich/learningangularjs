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
                        <li class="active"><a href="index.php">Javascript</a></li>
                        <li ><a href="ch02.php">CH02</a></li>
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
                                    &lt;?php <br>
                                       for($x = 1; $x <= 3; $x++){
                                           for($y = 1; $y <= 3; $y++){
                                               echo ($x . " X ". $y ." = ".($x*$y)."&lt;br &gt;");
                                           }
                                       }<br>
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

                      <!-- FOR IN LOOPS -->
                      <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="foreachloopheading">
                           <h4 class="panel-title">
                             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#foreach" aria-expanded="true" aria-controls="whileloop">
                               Foreach Loops
                             </a>
                           </h4>
                         </div>
                         <div id="foreach" class="panel-collapse collapse" role="tabpanel" aria-labelledby="foreachloopheading">
                           <div class="panel-body">
                              <div>
                                  <pre>
                                     &lt;?php<br>
                                        $days = array("Monday","Tuesday", "Wednesday", "Thursday", "Friday");
                                        foreach ($days as $day){
                                           echo "It is ". $day. "&lt;br&gt;";
                                        }<br>
                                     ?&gt;   
                                  </pre>
                              </div>
                              <br>
                              <div>
                                  Result:<br/>
                                  <?php 
                                    
                                     $days = array("Monday","Tuesday", "Wednesday", "Thursday", "Friday");
                                     foreach ($days as $day){
                                        echo "It is ". $day. "<br>";
                                     }
                                  ?>
                                  
                              </div>
                           </div>
                         </div>
                       </div><!-- FOR IN LOOPS -->
                </div><!-- ACCORDION LIST -->
            </div>

            <div class=" container row">
                <h2>Functions</h2><hr>
                <!-- ACCORDION LIST -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    
                    <!-- SIMPLE FUNCTION -->
                    <div class="panel panel-default">
                       <div class="panel-heading" role="tab" id="simplefunctionheading">
                         <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#simplefunction" aria-expanded="true" aria-controls="whileloop">
                             Simple Function
                           </a>
                         </h4>
                       </div>
                       <div id="simplefunction" class="panel-collapse collapse" role="tabpanel" aria-labelledby="simplefunctionheading">
                         <div class="panel-body">
                            <div>
                                <pre>
                                    &lt;?php<br>
                                        function greeting(){
                                            echo "Hello World!";
                                        }
                                        myFunction();<br>
                                    ?&gt;
                                </pre>
                            </div>
                            <br>
                            <div>
                                Result:<br/>
                                <?php 
                                    function myFunction(){
                                        echo "Hello World!";
                                    }
                                    myFunction();
                                ?>
                            </div>
                         </div>
                       </div>
                     </div><!-- SIMPLE FUNCTION -->  

                     <!-- PASSING VARIABLES FUNCTION -->
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="variablefunctionh">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#variablefunction" aria-expanded="true" aria-controls="whileloop">
                              Passing Variables Function
                            </a>
                          </h4>
                        </div>
                        <div id="variablefunction" class="panel-collapse collapse" role="tabpanel" aria-labelledby="variablefunctionh">
                          <div class="panel-body">
                             <div>
                                 <pre>
                                     &lt;?php<br>
                                          function greeting($name, $city){
                                             echo "Hello " . $name . ".&lt;br&gt;";
                                             echo "How is the weather in " . $city ."?";
                                          }<br>
                                         $name = "Richard";
                                         greeting($name, "Houston");  <br>
                                     ?&gt;
                                 </pre>
                             </div>
                             <br>
                             <div>
                                 Result:<br/>
                                 <?php 
                                     function greeting($name, $city){
                                        echo "Hello " . $name . ".<br>";
                                        echo "How is the weather in " . $city ."?";

                                     }
                                    $name = "Richard";
                                    greeting($name, "Houston");    
                                 ?>
                             </div>
                          </div>
                        </div>
                      </div><!-- PASSING VARIABLES FUNCTION -->  

                      <!-- RETURNING VALUES FUNCTION -->
                      <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="returnvalueh">
                           <h4 class="panel-title">
                             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#returnvalue" aria-expanded="true" aria-controls="whileloop">
                               Returning Valuables Function
                             </a>
                           </h4>
                         </div>
                         <div id="returnvalue" class="panel-collapse collapse" role="tabpanel" aria-labelledby="returnvalueh">
                           <div class="panel-body">
                              <div>
                                  <pre>
                                      &lt;?php<br>
                                            function formatGreeting($name, $city){
                                              $retStr = '';
                                              $retStr .= "Hello " . $name . ".";
                                              $retStr .= "How is the weather in " . $city ."?";
                                              return $retStr;
                                            }
                                           $greeting = formatGreeting("Richard", "Houston");
                                           echo $greeting;<br>
                                      ?&gt;
                                  </pre>
                              </div>
                              <br>
                              <div>
                                  Result:<br/>
                                  <?php 
                                      function formatGreeting($name, $city){
                                        $retStr = '';
                                        $retStr .= "Hello " . $name . ".<br>";
                                        $retStr .= "How is the weather in " . $city ."?";
                                        return $retStr;
                                      }
                                     $greeting = formatGreeting("Richard", "Houston");
                                     echo $greeting;    
                                  ?>
                              </div>
                           </div>
                         </div>
                       </div><!-- RETURNING VALUES FUNCTION -->  

                </div><!-- ACCORDION LIST -->
            </div>
            
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/less.js"></script>
    </body>

</html>