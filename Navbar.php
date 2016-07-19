<?php if(!isset($_SESSION))session_start(); ?>
 <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand">Music Learning Platform</a>
         
                <div class="nav-collapse">
                    <ul class="nav">
                         <li><a  href="
                         		<?php
									  if  ($_SESSION["type"] == 'admin') 
                                         echo '/FYP/AdminHome.php';   
                                 	  if  ($_SESSION["type"] == 'pianoschool') 
                                      	 echo '/FYP/PianoSchoolHome.php';   
                                   	  if  ($_SESSION["type"] == 'student') 
                                     	 echo '/FYP/StudentHome.php';   
								?>
                         	">Home</a></li>
                         <li class="dropdown">
                         	<a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            	Tutorial
                                <b class="caret"></b>
                             </a>
                            
                            <ul class="dropdown-menu">
                            	<li><a href="/FYP/Tutorial/TutorialForm.php">Form 曲式</a></li>
                                <li><a href="/FYP/Tutorial/TutorialMusicalTerms.php">Musical Terms 音樂詞彙</a></li>
                                <li><a href="/FYP/Tutorial/TutorialOrnaments.php">Ornaments 裝飾音</a></li>
                                <li><a href="/FYP/Tutorial/TutorialStyleAndPeriod.php">Style and period 風格和時期</a></li>
                                <li><a href="/FYP/Tutorial/TutorialRhythm.php">Rhythm 節奏</a></li>
                                <li><a href="/FYP/Tutorial/TutorialTexture.php">Texture 織體</a></li>
                            </ul>
                         </li>
                       
                         <li class="dropdown">
                         	<a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            	Exercise
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="/FYP/Exercise/ExerciseForm.php">Form 曲式</a></li>
                                <li><a href="/FYP/Exercise/ExerciseMusicalTerms.php">Musical Terms 音樂詞彙</a></li>
                                <li><a href="/FYP/Exercise/ExerciseOrnaments.php">Ornaments 裝飾音</a></li>
                                <li><a href="/FYP/Exercise/ExerciseStyleAndPeriod.php">Style and period 風格和時期</a></li>
                                <li><a href="/FYP/Exercise/ExerciseRhythm.php">Rhythm 節奏</a></li>
                                <li><a href="/FYP/Exercise/ExerciseTexture.php">Texture 織體</a></li>
                            </ul>
                         </li>
                         <?php if  ($_SESSION["type"] == 'student'){?>
                         <li><a href="/FYP/Game/showGame.php">Pre-exam</a></li>
						 <?php }?>
                    </ul>
                    <p class="navbar-text pull-right"><a href="/FYP/DoLogout.php">Logout</a></p>
                </div>
            </div>
        </div>
    </div> 