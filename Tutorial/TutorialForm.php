<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial -- Form 曲式</title>
    <!-- CSS --> 
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
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
          <h1> Form 曲式 </h1>
        </div>
        <p class="lead">
           曲式是樂曲的結構和設計。其基本要素是重複(repetition)、變奏(variation)和對比(contrast)。對比通常是指素材、速度、力度或調性等的對比。<br/>
           
    <div id="accordion">
    
    <h3>1. 二段體(Binary form)</h3>
    <div>
        <p class="text">
            <ul>
               <li>由兩個段落組成的曲式。一般稱這兩個段落為"A"和"B"。</li>
               <li>A段一般從主調(tonic key)開始，結束時通常會轉到其他的調。</li>
               <li>如果樂曲是大調，A段通常會結束在屬調(偶然亦會結束在屬和弦或主調)上。</li>
               <li>如果樂曲是小調，A段通常會結束在關係大調(偶然亦可能是屬調和其他的調)上。</li>
               <li>B段一般都會經過其他的調，最後結束在主調上</li>
               <li>A和B兩段樂曲的樂思(musical idea)，一般是相似的，不會有太大的對比。</li>
            </ul>
            <img src="TeachingMaterial/pp_12-crop.png">
            以上是一首進行曲，曲式為二段體，請注意下列幾點:
            <ul>
               <li>第一段(1-9小節)從主調(tonic key: D Major)開始，結束在屬調(dominant: A major)上。</li>
               <li>第二段(10-22小節)是從屬調開始，中間經過其他的調性，最後返回主調。</li>
               <li>第二段開始的音樂(10-11小節)和第一段的開始(1-2小節)是相同的，只是調性不同。第一段為D大調，而第二段為A大調。</li>
               <li>第一段(8-9小節)和第二段的結尾(21-22小節)的音樂也是相同的，只是調性不同。前者結束在屬調上，而後者結束在主調上。</li>
            </ul>

         </p>
    </div>
    
    <h3>2. 三段體(Ternary form)</h3>
    <div>
        <p class="text">
            <ul>
               <li>由三個段落組成的曲式。結構圖為:A<sup>1</sup> - B - A<sup>2</sup></li>
               <li>A<sup>1</sup> 和 A<sup>2</sup> 的音樂基本上是相同的，而B是對比的。</li>
               <li>A<sup>1</sup> 通常以完滿終止(perfect cadence) 結束在主調上，B段一般都會使用與主調不相同的調，而A<sup>2</sup>又會再一次回到主調上。</li>
               <li>A<sup>2</sup> 部分的音樂，可能是 A<sup>1</sup> 的整段重複，亦可能是 A<sup>1</sup> 的某些變化重複。</li>
               <li>B 作為中段，其音樂一般都會和前後兩段的不同，會有較大的對比。例如調性、節奏、速度、力度和發音法等方面的對比。</li>
            </ul>
            <h4>下例是一首簡單的三段體短曲:</h4>
            <img src="TeachingMaterial/pp_13-crop.png">
            <ul>
               <li>A<sup>1</sup> ─ 第1-8小節為第一段</li>
               <li>B ─ 第9-16小節為第二段(中段)</li>
               <li>A<sup>2</sup> ─ 第17-24小節為第三段</li>
            </ul>
            B為中段，其音樂與前後兩段所形成的對比主要是"節奏"。<br/>
      <h4>下例是一首有明顯對比的三段體短曲:</h4>
            <table class="table table-condensed table-bordered ">
               <tr>
                 <th width="194" scope="col">Contrasts 對比</th>
                 <th width="194" scope="col">A1 及 A2</th>
                 <th width="196" scope="col">B (bar 9-12)</th>
              </tr>
              <tr>
                 <th scope="row">Tonality 調性</th>
                 <td>D minor 小調</td>
                 <td>D major 大調</td>
              </tr>
              <tr>
                 <th scope="row">Mood 情緒</th>
                 <td>Sad 悲哀的</td>
                 <td>Cheerful 快樂的</td>
              </tr>
              <tr>
                 <th scope="row">Articulation 發音法</th>
                 <td>Legato 連奏</td>
                 <td>Staccato 斷奏</td>
              </tr>
            </table>
            <img src="TeachingMaterial/pp_14-crop.png">
        </p>
    </div>
    </div>
        </p>
      </div>
  </body>
</html>
