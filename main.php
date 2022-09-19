<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
     
        <div class="about_me">
        	<div class="myImg">
                    <?php  echo '<img src="img/avabw.png">'; ?>                    
            </div>
            <h1>  <?php  echo $p  ?> </h1>
        </div>
                          

            <div class="data">
            
                <div class="fullname">
                	<p> Меня зовут 
                   		<?php echo $name, ' ', $surname . '<br>'; 
                        echo 'город', ' ', $city; ?>                                      
                    	<br>Мне
                    	<?php  echo $age;   ?>          
                    	лет 
                
                		<br><br>Я будущий пентестер
                    	<br>А это моя практическая работа по модулю 8<br><br>
                    </p>
                </div>
               
            </div>


            <div class="knowledge">           
                    <div> 
                    	<?php  include 'knowledge.inc.php'; ?>
                    	<?php   echo $a, ' ', $b, ' ', $c; ?> <br><br>
                                       
                    	<?php
                        	$a = 6;
                        	$b = 7;
                        	$c = $a * $b;
                        	echo $c;
                    	?>   <br><br>                
                     	<?php
                        	echo $d;
                    	?> 
                    	<br><br>
                    	<?php
                        	echo $t, $s;
                    	?> 
                    	<br><br>
                    	<?php
                        	
                        	echo "Количество совпадающих сиволов самой длинной общей подстроки $n($perc %)\n";
                    	?> 
                    </div>
            </div>


            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>