<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Tutorial -- Style and period 風格和時期</title>
    
     <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="css/NavBar.css">
     <style type="text/css">
	     h1{ margin-top:41px;}
         #music {width:150pt;}
		 .bigTable td{
			 padding-top:0.75em;
			 padding-bottom:1.5em;
		 }
		 .bigTable li{
			 padding-bottom:1.5em;
		 }
     </style>
   <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
   <script src="js/bootstrap.min.js"></script>
     
   </head>

  <body>
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">
     <?php require('../Navbar.php'); ?>
      <div class="container">
        <div class="page-header">
          <h1> The style and period 風格和時期</h1>
        </div>

        <p class="lead">
            <table class="table table-condensed table-bordered bigTable" >

  <thead>
    <th width="101" scope="row"><p>&nbsp;</p></th>
    <th width="222" scope="col"><p>The Baroque Period</p><p>巴洛克時期</p></td>
    <th width="222" scope="col"><p>The Classical Period</p><p> 古典時期</p></td>
    <th width="222" scope="col"><p>The Romantic Period</p><p> 浪漫時期</p></td>
    <th width="221" scope="col"><p>The Twentieth Century </p><p>廿十世紀</p></td>
  </thead>
  
  <tr>
    <th scope="row"><p>Example <br/> 例子 </p></th>
    <td><audio controls id="music"><source src="TeachingMaterial/BaroquePeriod.mp3" type="audio/mp3"/></td>   
    <td><audio controls id="music"><source src="TeachingMaterial/ClassicalPeriod.mp3" type="audio/mp3"></td>
    <td><audio controls id="music"><source src="TeachingMaterial/RomanicPeriod.mp3" type="audio/mp3"></td>
    <td><audio controls id="music"><source src="TeachingMaterial/TwentiethCentury.mp3" type="audio/mp3"></td>
  </tr>  
  
  <tr>
    <th scope="row"><p>Tempo <br/> 速度 </p></th>
    <td><ul>
        <li>Stays the same in the piece <br/> 速度平穩，在同一樂段中只用一種速度
        </li>
      <li>No accelerando or ritardando, apart  possibly from a slowing down at the end <br/> 除結尾有漸慢外, 其他部份無漸快和漸慢 </li>
    </ul></td>
    <td><ul>
      <li>Remain unchanged <br/> 拍子平穩 </li>
      <li>Rare accelerando or ritardando <br/> 較少漸快和漸慢 </li>
      <li>Little use of rubato <br/> 有機會用到彈性速度 </li>
    </ul></td>
    <td><ul>
      <li>Rubato <br/> 彈性速度 </li>
      <li>Change frequently  with accelerandi or ritardandi <br/> 常用漸快和漸慢，而樂曲速度經常改變 </li>
      <li>use of the  fermata (pause) <br/> 運用延長記號 </li>
    </ul></td>
    <td><ul>
      <li>The pulse of the tempo of a movement may  change frequently <br/> 樂曲速度經常改變 </li>
    </ul></td>
  </tr>

  <tr>
    <th scope="row"><p>Rhythm <br/> 節奏 </p></th>
    <td><ul>
      <li>Follow the pattern of the beginning of  the movement <br/> 從開始至結尾都很穩定，而且拍子清楚, 具有推動力 </li>
      <li>在快板樂章中, 運用連續的8或16分音符 </li>
      <li>有時會見到赫米奧拉節奏 (hemiola rhythm)</li>
      <li>在同一個樂章中，通常只用同一種的節奏音型 </li>
    </ul></td>
    <td><ul>
      <li>節拍清楚明確 <br/> (例如在三拍子中，強、中、弱的拍子是很容易聽到的) </li>
      <br/><br/>
      <li>在同一樂段中會有較多的節奏變化 </li>
    </ul></td>
    <td><ul>
      <li>Often change <br/> 在同一樂段中拍子有時會改 </li><br/>
      <li>用節奏音型來表現音樂形象 </li>
    </ul></td>
    <td><ul>
      <li>Unusual rhythms with syncopation  common <br/> 運用切分音 </li>
      <li>Polyrhythm <br/> 複節奏</li>
      <li>Irregular  phrase, 3,5,7 bars <br/>
         不規則樂句，3,5,7 小節等</li>
      <li>Ostinato <br/> 固定音型</li>
      <li>The time-signature may change  frequently<br/>拍子節奏經常改變</li>
      <li>五拍子、七拍子等不常用的拍號經常出現，有時甚至沒有拍號及小節線</li>
    </ul></td>
  </tr>

  <tr>
    <th scope="row">Melody <br/> 旋律</th>
    <td><ul>
      <li>Long  phrase of the melody, narrow <br/> 樂句較長,&nbsp;音域較窄 </li>
      <br/>
      <li>One  melodic idea <br/> 一種樂思 </li>
      <br/>
      <li>Many kinds of ornaments, such as mordents,  trills, etc <br/> 多種類型裝飾音，例如波音、顫音 </li>
      <br/>
      <li>經常有模進 (Sequence) 的應用 </li>
    </ul></td>
    <td><ul>
      <li>Fairly short phrase and often divided&nbsp;into sub-phrases <br/> 樂句通常較短，並分成短句 </li>
      <li>Phrase tend to have a sense of balance and proportion <br/> 樂句的長度有規則，比較均衡 </li>
      <li>Motive <br/> 動機句 </li>
      <li>Perfect cadence at the end of a piece <br/> 有明確的終止式 </li>
      <li>Used the ornaments but less than baroque music, but often use mordents, trills, <br/> 裝飾音運用比巴羅克時期少，但波音、顫音仍然常見 </li>
      <li>appoggiatura often in melody lines <br/> 旋律中經常出現倚音 </li>
      <li>在同一樂章中，主題一般都有很清楚的對比 </li>
    </ul></td>
    <td><ul>
      <li>Short and long  phrase, wide <br/> 樂句有長有短, 音域較闊 </li>
      <br/>
      <li>Ornaments&nbsp;are  used, but not as often as in baroque and classical music <br/> 運用裝飾音,但較巴洛克和古典音樂少 </li>
      <br/>
      <li>Songlike  melodies <br/> 旋律唱歌化 </li>
    </ul></td>
    <td><ul>
      <li>It may use leaps to  create jagged shapes&nbsp; 經常有大跳進行 </li>
      <br/>
      <li>Wide range of  note&nbsp; <br/>音域很廣 </li>
      <br/>
      <li>Many accidentals&nbsp;  <br/>多臨時記號 </li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Tonality/ Key <br/> 調性 </p></th>
    <td><ul>
      <li>Rare modulations, usually closely  related to each other <br/> 運用近關係的調，調性主要以大調小調為主 </li>
    </ul></td>
    <td><ul>
      <li>Closely related to each other, rare modulations <br/> 運用近關係的調，調性主要以大調小調為主 </li>
    </ul></td>
    <td><ul>
      <li>主要以大調小調為主，間中也有民族調式的應用 </li>
      <br/>
      <li>經常轉調，調性轉變很廣 </li>
    </ul></td>
    <td><ul>
      <li>Change frequently and unexpectedly <br/> 經常轉變調性和調式 </li>
      <li>以無調性 (Atonal),&nbsp;二重調性&nbsp;(Bitonal),&nbsp;多調性&nbsp;(Polytonality)為主 </li>
      <li>Unusual types of scale are often  employed<br/> 用多種調式&nbsp;(mode) </li>
      <li>It may use Major and minor <br/> 有運用大調小調 </li>
    </ul></td>
  </tr>

 <tr>
    <th scope="row"><p>Harmony <br/>和聲 </p></th>
    <td><ul>
      <li>Based on the triads <br/> 以三和弦為主 </li>
      <li>Rare pedal <br/> 少用鋼琴踏板 </li>
      <li>少用變音 (chromatic notes)，變音只為感情需要 </li>
      <li>終止式通常是帶有裝飾音。早期的調式終止(modal candence)，更加是高度地裝飾(highly ornamented)</li>
      <li>樂句結尾往往有持續音&nbsp;( pedal point )&nbsp;或用固定低音&nbsp;( ground bass ) </li>
   <li>音域較窄 </li>
    </ul></td>
    <td><ul>
      <li>Based on the triads and usually used dominant 7th, <br/> 以三和弦為主，&nbsp;但七和弦也很常見 </li>
      <li>little broken chords <br/> 用分解和弦為伴奏 </li>
      <li>Rare Chromatic, complex chords are simpler than Baroque  Period) <br/> 變音少用,&nbsp;複雜和弦(較巴洛克時期簡單) </li>
      <li>Pedal is used only sparingly Pedal <br/> 鋼琴腳踏使用亦不多，只為裝飾作用 但亦常見 </li>
      <li>Alberti bass , or call broken chords <br/> 阿爾貝蒂低音 又稱分解和弦</li>
    </ul></td>
    <td><ul>
      <li>Rich  as pedal <br/> 和聲豐富,  經常使用鋼琴踏板 </li>
      <br/>
      <li>Complicated  harmony is common, which often use of chromatic notes <br/> 大量使用變音和聲 </li>
      <br/>
      <li>有強烈的不協和音(dissonance)的應用 </li>
      <br/>
      <li>音域很闊 </li>
    </ul></td>
    <td><ul>
      <li>Chords are often complex and sometimes  very dissonant <br/> 大量使用不協和音, 和弦較為複雜 </li>
      <br/>
      <li>Usually us pedal <br/> 經常使用鋼琴腳踏 </li>
      <br/>
      <li>有非三度重疊的和弦及音塊 (Note  clusters)的出現 </li>
      <br/>
      <li>音域闊，使用極端的音域 </li>
    </ul></td>
  </tr>

  <tr>
    <th scope="row"><p>Texture <br/> 織體 </p></th>
    <td><ul>
      <li>Homophonic <br/> 主調織體 </li>
      <li>Imitative&nbsp;Polyphonic <br/> 在複調織體中，通常見到模仿的對位。 </li>
    </ul></td>
    <td><ul>
      <li>主調homophonic織體為主，但複調(polyphonic)織體仍存在 </li>
      <li>織體一般比巴洛克時期輕、清晰及簡單 </li>
      <li>早期常用分解和弦 (broken chords 又稱為 Alberti bass) 的伴奏 </li>
    </ul></td>
    <td><ul>
      <li>Basically  homophonic rather than polyphonic <br/> 主調織體為主, 後期有較多複調織體. 織體較為厚及較多層次 </li>
    </ul></td>
    <td><ul>
      <li>Homophonic or contrapuntal <br/> 主調織體 / 複調對位化織體 </li>
      <br/>
      <li>Used the pointillism <br/> 亦運用點描法 </li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Dynamic <br/> 力度 </p></th>
    <td><ul>
      <li>Rare crescendo, diminuendo <br/> 甚少運用漸強漸弱 </li>
      <li>Terraced dynamics <br/>台階式強弱 </li>
      <li>極少使用漸強 (crescendo)及漸弱 (diminuendo)的奏法 </li>
    </ul></td>
    <td><ul>
      <li>Often change, though rarely very violently <br/> 有強弱的變化及對比 </li>
      <li>Crescendo ,diminuendi and sforzando are often found <br/> 有漸強、漸弱、特強力度的用法 </li>
    </ul></td>
    <td><ul>
      <li>Change frequently and often  very greatly <br/> 強弱對比的變化很大 </li>
      <li>Crescendo and diminuendo are  much used <br/> 經常使用漸強、漸弱 </li>
      <li>力度的幅度很大 <br/> ( <strong>ppp – fff </strong>) </li>
    </ul></td>
    <td><ul>
      <li>Change frequently and often very  greatly <br/> 強弱對比的變化很大 </li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Articulation <br/> 發音法 </p></th>
    <td><ul>
      <li>Legato&nbsp;and  Mezzo-staccato <br/> 連奏及半連跳奏法 </li>
      <li>為要模仿古鍵琴 (Harpsichord) 的效果，有時會有觸鍵介於連奏與斷奏的彈法 </li>
    </ul></td>
    <td><ul>
      <li>Legato and Staccato are frequently used <br/> 經常使用連奏及斷奏 </li>
      <li>間中會有保持Tenuto <br/> 的奏法 </li>
    </ul></td>
    <td><ul>
      <li>Staccato and  legato are often used, along with tenuto and accent <br/> 經常使用斷奏及連奏，保持音及重音的奏法常見。 </li>
    </ul></td>
    <td><ul>
      <li>Legato, Staccato, Tenuto,  Glissando&nbsp;&nbsp; <br/> 使用連奏, 斷奏,&nbsp;保持,&nbsp;滑音 </li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Character and Mood <br/> 特性及情調 </p></th>
    <td><ul>
      <li>Same mood in one piece <br/> 整首樂曲用同一種情調氣氛 </li>
    </ul></td>
    <td><ul>
      <li>It will change it in this period <br/> 同一樂章曲中的情調氣氛會改變 </li>
      <li>音樂的情調，一般是愉快及優雅 </li>
      <li>注重曲式，強調對比與平衡、中庸與控制 </li>
    </ul></td>
    <td><ul>
      <li>Expressive, singing  style <br/> 表達思想感情為主 </li>
      <li>More technical virtuosity  appear <br/> 有較多需要有技術精湛的樂曲出現 </li>
      <li>有戲劇性的對比，在同一樂章中，有改變氣氛和情調的可能 </li>
      <li>亦有異國情調的描寫  (Exoticism)</li>
    </ul></td>
    <td><ul>
      <li>It may change often during the course  of a movement, and even from bar to bar <br/> 同一樂曲章中的風格和氣氛會經常改變 </li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Form <br/> 曲式 </p></th>
    <td><ul>
      <li>Binary form <br/> 二段體 </li>
      <li>Ternary form&nbsp; <br/> 三段體 </li>
      <li>Sonata&nbsp; <br/> 奏鳴曲 </li>
      <li>Fugue&nbsp; <br/> 賦格曲 </li>
      <li>Variation&nbsp; <br/> 變奏曲 </li>
      <li>Dance - Gavotta <br/> 舞曲 - 嘉禾舞曲 </li>
      <li>Prelude and fugue <br/> 前奏曲與賦格曲 </li>
    </ul></td>
    <td><ul>
      <li>Sonata form ( The commonest form) <br/> 奏鳴曲 (最常見的曲式) </li>
      <li>Rondo form <br/> 回旋曲 </li>
      <li>Binary form, Ternary form <br/> 二段體, 三段體 </li>
      <li>Theme and Variation <br/> 主題變奏曲 </li>
      <li>Binary <br/> 二段體 </li>
      <li>Ternary <br/> 三段體 </li>
      <li>Minuet <br/> 小步舞曲 </li>
      <li>Trio <br/> 三重奏 </li>
    </ul></td>
    <td><ul>
      <li>Sonata <br/> 奏鳴曲 </li>
      <li>Short descriptive pieces <br/> 短敍述曲 </li>
      <li>character pieces and  miniatures <br/> 風格小品 </li>
      <li>Dance - Waltz, Mazurka and  Polonaise <br/> 舞曲 – 圓舞曲、馬祖卡及波洛奈滋 </li>
    </ul></td>
    <td><ul>
      <li>Varied <br/> 多種曲式類別</li>
      <br/>
      <li>Traditional music  draws on popular music, such as jazz, blue scale <br/> 傳統曲加入現代音樂, 例如爵士樂, 藍調</li>
    </ul></td>
  </tr>
  
  <tr>
    <th scope="row"><p>Composers <br/> 演奏者</p></th>
    <td><ul>
      <li>Corelli(1653-1713) <br/> 柯里尼 </li>
      <li>Purcell(1659-1695)  <br/>浦賽爾 </li>
      <li>Vivaldi(1678-1741)  <br/>韋華第 </li>
      <li>J.S. Bach(1685-1750)  <br/>巴哈 </li>
      <li>D. Scarlatti(1685-1757)  <br/>斯卡拉蒂 </li>
      <li>Handel(1685-1759) <br/> 韓德爾 </li>
    </ul></td>
    <td><ul>
      <li>Haydn(1732-1809)  <br/> 海頓 </li>
      <br/>
      <li>Mozart(1756-1791) <br/> 莫札特 </li>
      <br/>
      <li>Beethoven(1770-1827) <br/> 貝多芬 </li>
    </ul></td>
    <td><ul>
      <li>Schubert  (1797-1828) <br/> 舒伯特 </li>
      <li>Schumann(1810-1856) <br/> 舒曼 </li>
      <li>Chopin(1810-1849) <br/> 蕭邦 </li>
      <li>Brahms(1833-1897) <br/> 布拉姆斯 </li>
      <li>Tchaikovsky(1840-1893) <br/> 柴可夫斯基 </li>
      <li>Mendelssohn(1809-1847) <br/> 孟德爾遜 </li>
      <li>Liszt (1811-1886) <br/> 李斯特</li>
    </ul></td>
    <td><ul>
      <li>Debussy  (1862-1918) <br/> 德布西 </li>
      <li>Holst,  Gustav (1874-1934) <br/> 霍爾斯特 </li>
      <li>Schoenberg (1874-1951) <br/> 荀伯格 </li>
      <li>Ravel (1875-1937) <br/> 拉戚爾 </li>
      <li>Bartok (1881-1945) <br/> 巴托 </li>
      <li>Stravinsky (1882-1971 ) <br/> 史達拉文斯基 </li>
      <li>Prokofiev (1891-1953) <br/> 浦羅哥菲夫 </li>
    </ul></td>
  </tr>
</table>
        </p>
      </div>
  </body>
</html>
