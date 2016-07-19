<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial -- Ornaments 裝飾音</title>
    <!-- CSS --> 
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
    <style type="text/css">
	h1{ margin-top:41px;}
    #music {width:150pt;}
    </style>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <script>
     $(function() {
        $( "#accordion" ).accordion({
            heightStyle: "content", 
			collapsible: true,
			active:false
        });
//	    $("#accordion").click(function () {
//        $("p.text").toggle("slow");
//        }); 
    });
    </script>
  </head>

  <body>

    <div id="wrap">
     <?php require('../Navbar.php'); ?>
           <div class="container">
        <div class="page-header">
          <h1> Ornaments 裝飾音</h1>
        </div>
        <p class="lead">
        <div id="accordion">
              <h3>1. Grace notes 裝飾音</h3>
              <div>
                  <p class="text">
                     <strong>a) Acciaccatura 短倚音 </strong><br/>
                     <img src="TeachingMaterial/123 007_40-crop.png">
                  </p>
                  <p class="text"><font color="#FF0000">Example:</font>
                   　　<img src="TeachingMaterial/AcciaccaturaNotation1.png" width="150" height="71">     　 　　 =     　　 <img src="TeachingMaterial/AcciaccaturaNotation2.png" width="150" height="71"><br/>
                     <audio controls id="music"><source src="TeachingMaterial/AcciaccaturaNotation1.mp3" type="audio/mp3"/></audio>     　　 =     　　 <audio controls id="music"><source src="TeachingMaterial/AcciaccaturaNotation2.mp3" type="audio/mp3"/></audio>
                  <br/><br/><br/><br/><br/>
                     <strong>b) Double appoggiatura 雙倚音</strong><br/>
                     <img src="TeachingMaterial/123 007_40-crop1.png"><br/><br/>
                     <strong>c) Triple appoggiatura 三重倚音 </strong><br/>
                     <img src="TeachingMaterial/123 007_40-crop2.png"><br/><br/>
                     <strong>d) Unaccented appoggiatura 後倚音</strong><br/>
                     <img src="TeachingMaterial/123 007_40-crop3.png"><br/>
                  </p>
          </div>
              
              <h3>2. Appoggiatura 倚音</h3>
          <div>
                 <p class="text">
                    長倚音是由一個音形成的倚音，寫在主要音符的前面，一般相距二度，其間用連線連接起來，長倚音的小音符不帶斜線。長倚音的時值要算在主要音符的時值之内：如果主要音符是單純音符，那麼長倚音的時值要占主要音符時值的二分之一；如果主要音符是附點音符，那麼長倚音的時值要占主要音符的時值的三分之二。
                   <img src="TeachingMaterial/123 007_40-crop4.png"><br/>
                   <font color="#FF0000">Example:</font><br/>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="TeachingMaterial/Appoggiatura1.png" width="150" height="71"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Bold>=</Bold> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <img src="TeachingMaterial/Appoggiatura2.png" width="150" height="71"><br/>
                   <audio controls id="music"><source src="TeachingMaterial/Appoggiatura1.mp3" type="audio/mp3"/></audio> &nbsp;&nbsp;&nbsp;<Bold>=</Bold> &nbsp;&nbsp;&nbsp; <audio controls id="music"><source src="TeachingMaterial/Appoggiatura2.mp3" type="audio/mp3"/>                   
                 </p>
          </div>
              
              <h3>3. Mordent 波音</h3>
          <div>
                 <p class="text">
                    波音是由主要音符開始向上或向下與相鄰的音符之間快速波動的裝飾音。波音記號在記寫在音符的上方，在演奏時其時值要計算在主要音符的時值之内。<br/><br/>
                    根據波動的上下可以分爲上波音和下波音。上波音記號同上。下波音記號是在上波音記號的中間加上一個小豎線來表示。該記號要由主要音快速進入下方相鄰的音然後再回到主要音上。<br/><br/>
                    波音還可以加上臨時變音記號，它表示相鄰的音符是變化音。上波音的變音記號<img src="TeachingMaterial/UpperMordent.png">寫在波音記號上方，下波音的變音記號<img src="TeachingMaterial/LowerMordent.png">寫在波音記號的下方。　<br/><br/>
                    <strong>a) Upper mordent 上波音 </strong><br/>
                    <img src="TeachingMaterial/123 007_40-crop5.png"><br/><br/>
                    <strong>b) Lower mordent 下波音 </strong><br/>
                    <img src="TeachingMaterial/123 007_40-crop6.png"><br/><br/>
                    <font color="#FF0000">Example:</font><br/>
                    <img src="TeachingMaterial/UpperAndLowerModent1.png" width="200" height="151"> &nbsp;&nbsp;&nbsp;<Bold>=</Bold> &nbsp;&nbsp;&nbsp; <img src="TeachingMaterial/UpperAndLowerModent2.png" width="300" height="250"><br/>
                    <audio controls id="music"><source src="TeachingMaterial/UpperAndLowerModent1.mp3" type="audio/mp3"/></audio> &nbsp;&nbsp;&nbsp;<Bold>=</Bold> &nbsp;&nbsp;&nbsp; <audio controls id="music"><source src="TeachingMaterial/UpperAndLowerModent2.mp3" type="audio/mp3"/>
                 </p>
          </div>
    
              <h3>4. Turn 回音</h3>
              <div>
                 <p class="text">
                    回音是由四個或五個音中組成的鏇律音型，以音符的上方音和下方音的回轉來修飾主要音符。<br/><br/>
                    回音用<img src="TeachingMaterial/Ture.png">記號來標記，表示由上方音開始到主要音，再到下方音，最後回到主要音上。五個音的顺回音是由音開始的。<br/><br/>
                    回音記號可以記寫在音符的上方；也可記寫在兩個音符之間；還可以在回音記號的上方或下方加上變音記號表示相鄰的音爲變化音。<br/><br/><br/>
                    <strong>a) The turn placed directly over a note 回音置於音符的正上方<br/></strong>
                    <img src="TeachingMaterial/123 009-crop.png"><br/>
                    <strong>b) The turn placed between notes 回音置於兩音符之間<br/></strong>
                    <img src="TeachingMaterial/123 009-crop1.png"><br/>
                    <font color="#FF0000">Example:</font><br/>
                    <img src="TeachingMaterial/Turn1.png" width="350" height="250">&nbsp;&nbsp;&nbsp;<Bold>=</Bold> &nbsp;&nbsp;&nbsp;<img src="TeachingMaterial/Turn2.png" width="350" height="250"><audio controls id="music"><source src="TeachingMaterial/Turn2.mp3" type="audio/mp3"/></audio>
                 </p>
              </div>
              
              <h3>5. Trill 顫音</h3>
              <div>
                 <p class="text">
                    顫音是由主要音符和它上方相鄰的音快速均勻交替演奏而形成的的一種裝飾音。顫音用記號來標記，如果演奏的時值較長，則用<img src="TeachingMaterial/12.png">或<img src="TeachingMaterial/123.png">記號來標記。顫音記號的上方有變音記號則表示上方相鄰的音符爲變化音。<br/><br/>
                      顫音一般無特殊標記都表示由主要音開始，並結束在主要音符上。但有時也會從其它音開始，爲了更好地、准確地表達作者的意圖，最好是將開始音與結束音用小音符標記出來。<br/><br/>
                      如果在快速的樂曲中，並且主要音符的時值較短，那麼它的效果基本上與波音的效果相同。<br/>
                    <img src="TeachingMaterial/123 009-crop2.png"><br/>
                    <font color="#FF0000">Example:</font>
                    <img src="TeachingMaterial/Trill.jpg" width="90" height="45"> &nbsp; <audio controls id="music"><source src="TeachingMaterial/Trill.mp3" type="audio/mp3"/></audio>
                 </p>
              </div>
              
              <h3>6. Arpeggiation 琶音</h3>
              <div>
                 <p class="text">
                    琶音指一串和弦音從低到高或從高到低依次連續奏出，可視為分解和弦的一種。通常作為一種專門的技巧訓練用於練習曲中，有時作為短小的連接句或經過句出現在樂曲旋律聲部中。
                    <img src="TeachingMaterial/123 009-crop3.png"><br/>
                 </p>
              </div>             
  </body>
</html>
