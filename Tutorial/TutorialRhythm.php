<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial -- Rhythm 節奏</title>
    <!-- CSS --> 
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
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
    <style type="text/css">
	h1{ margin-top:41px;}
	</style>
  </head>

  <body>
    <div id="wrap">
     <?php require('../Navbar.php'); ?>
      <div class="container">
        <div class="page-header">
          <h1> Rhythm 節奏</h1>
        </div>
        <p class="lead">
           節奏是指音樂在時間上的組織，是節拍(metre)、重音(accent)、休止(rest)等相互關係的結合。節奏是音樂風格的基本要素，也是辨別風格的標誌。某些樂曲，例如舞曲、進行曲、爵士樂等，其節奏都是也比較鮮明。<br/>
           
    <div id="accordion">
    
    <h3>1. 圓舞曲(Waltz)</h3>
    <div>
        <p class="text">
            又名"華爾茲"。一種三拍子的舞曲，其音樂輕快活潑，旋律流暢，伴奏部分是每小節一拍的重音明顯(通常是強拍的低音與弱拍的和弦交替)。18世紀後期起流行於奧地利和德國的民間，既可在舞會中作伴舞之用，亦在音樂會上演奏。從速度區分，有較慢、中等、較快三種。<br/><br/>
            <img src="TeachingMaterial/pp_07-crop.png">
            <img src="TeachingMaterial/pp_07-crop1.png"><br/>
            <img src="TeachingMaterial/pp_08-crop.png"> 
         </p>
    </div>
    
    <h3>2. 小步舞曲(Minuet)</h3>
    <div>
        <p class="text">
           源於法國的一種三拍子的舞曲，17世紀由民間傅入官廷，很快便傅遍歐洲，盛行於18世紀。以其中庸的速度和優雅的風格為特色。早期的小步舞曲大都是從第一拍開始的，但到了古典時期則變成了從第三拍開始。用於舞蹈場所的小步舞曲，其速度一般都是比較慢的，重音多落於第二拍上，而作為單獨演奏的舞曲，其速度通常都會較快。 <br/><br/>
           <img src="TeachingMaterial/pp_09-crop.png">
           <img src="TeachingMaterial/pp_09-crop1.png">
           <img src="TeachingMaterial/pp_09-crop2.png">
        </p>
    </div>
    
    <h3>3. 吉格舞曲(Gigue)</h3>
    <div>
        <p class="text">
           一種源於英國的活潑舞曲。其特有的節奏為 ♩ ♪ ♩ ♪ ，常見的拍號是 6/8 和 12/8。在巴羅克時期的組曲中，吉格舞曲通常是作為最後的一個樂章。<br/>
           <img src="TeachingMaterial/pp_10-crop.png">
           <img src="TeachingMaterial/pp_10-crop1.png"> 
        </p>
    </div>
    
        <h3>4. 進行曲(March)</h3>
    <div>
        <p class="text">
           為使行軍或游行的步伐一致，伴隨著隊列行進時所奏(唱)的一種樂曲。最常見的是軍隊進行曲和婚禮進行曲。進行曲一般是二拍子(2/4)或四拍子(4/4)，以樂句的結構整齊、重拍明顯並多帶附點音符為特點。<br/>
           <img src="TeachingMaterial/pp_11-crop.png">
        </p>
    </div>
 
    </div>
        </p>
      </div>
  </body>
</html>
