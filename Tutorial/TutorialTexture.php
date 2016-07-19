<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial -- Texture 織體</title>
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
          <h1> Texture 織體 </h1>
        </div>
        <p class="lead">
           在音樂作品中，"織體"一詞是指聲部的組合方式。常見的音樂織體有三種: <br/>
           
    <div id="accordion">
    <h3>1. 單聲部織體(Monophonic texture)</h3>
    <div>
        <p class="text">
            以一個單一的旋律聲部(包括同度的"unison"或八度重疊) 作為其陳述方或，其中是沒有和聱式伴奏部分的。<br/><br/>
            <img src="TeachingMaterial/pp_03-crop.png"> 
        </p>
    </div>
    <h3>2. 複調織體(Polyphonic / Contrapuntal texture)</h3>
    <div>
        <p class="text">
           以若干個(兩個或以上)旋律聲部同時結合，各聲部都是具有同等的重要性。可分模仿複調(Imitative polyphony)和非模仿複調兩種(Non-imitative polyphony)。 <br/><br/>
           <strong>a. 模仿複調(Imitative polyphony) </strong><br/>
           樂曲中某一聲部所陳述的主題或其片段在另一聲部中跟隨出現即稱為模仿。<br/>
           <img src="TeachingMaterial/pp_04-crop1.png"> 
           <strong>b. 非模仿複調兩種(Non-imitative polyphony)</strong><br/>
           樂曲中的各個聲部，其旋律各自獨立，形成不同的對比關係。 <br/>
           <img src="TeachingMaterial/pp_04-crop2.png"> 
        </p>
    </div>
        <h3>3. 主調織體(Homophonic texture)</h3>
    <div>
        <p class="text">
           以一個旋律聲部為主，配上陪襯的聲部作為伴奏，因此可以區分為旋律與伴奏的兩個層次。在主調織體的音樂中，伴奏的形式是非常多樣的，除了可以用單純的和弦以相同的節奏襯托外，還可以使用各式各樣的伴奏音型，例如分解和弦、特定的節奏重複等。<br/><br/>
           <strong>a. 和弦式(Chordal style)</strong><br/>
           和弦中所有的聲部主要以相同的節奏同步進行。<br/><br/>
           <em>i. 塊狀和弦(Block chords) </em>
           <img src="TeachingMaterial/pp_05-crop.png">
           <em>ii. 分解和弦音型(Block-chord figuration) </em>
           <img src="TeachingMaterial/pp_05-crop1.png"> 
           <strong>b. 旋律與伴奏(Melody with accompaniment</strong><br/><br/>
           <em>i. 在強拍上配和弦(chords on strong beats) </em>
           <img src="TeachingMaterial/pp_06-crop.png">
           <em>ii. 分解和弦式伴奏(Broken-chord accompaniment) </em>
           <img src="TeachingMaterial/pp_06-crop1.png">
           上例中左手聲部的分解和弦又名"Alberti bass"阿爾貝蒂低音，因意大利作曲家多米尼科，阿爾貝蒂(Domenico Alberti)喜用而得名。是古典時期鍵盤樂器常用的一種伴奏方式。<br/><br/>
           <em>iii. 節奏音型(Rhythmic figuration) </em>
           <img src="TeachingMaterial/pp_06-crop2.png"> 
        </p>
    </div></div>
        </p>
      </div>
  </body>
</html>