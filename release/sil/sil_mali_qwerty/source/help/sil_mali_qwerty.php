<?php
  $pagename = 'Clavier du Mali (Qwerty) Keyboard Help';
  $pagetitle = 'Clavier du Mali (Qwerty) Keyboard Help';
  $pagestyle = <<<END
        table.display { font-size: 0.8em; border-collapse:	collapse; }
        table.display tr td { padding: 2px 8px; }
        table.display tr th { padding: 2px 8px; background: #f3e5de }
        #osk { font-size: 18pt; margin-top: 4px }
        #osk h3 { width: 25.38em; margin: 12px 0 0 0; background: #ad4a28; font-size: 18pt; border: solid 1px #ad4a28 }
        #osk h3 span { font-size: 12pt; margin: 4px; color: white }
        #osk_caption { font-size: 10pt; padding: 4px; border: 0; margin-bottom: 8px }
        .body_text h1 {font: 36pt Tahoma;text-align: left;margin: 16px 0 24px 0;color: #000000 }
        .body_text h2 {font: 30pt Tahoma;text-align: left;margin: 16px 0 24px 0;color: #000000 }
        .body_text h3 {font: Bold 20pt Tahoma;text-align: left;margin: 16px 0 16px 0;color:black }
        .body_text h4 {font: Bold 14pt Tahoma;text-align: left;margin: 24px 0 8px 0;color: #000000 }
        .body_text h5 {font: Bold 12pt Tahoma;text-align: left;margin: 16px 0 8px 0;color: #000000 }
        .body_text p {font-size: 10pt;text-align: left;margin: 0 0 8px 0;color:#000000 }
        .body_text table {font-size: 10pt;text-align: left;margin: 8px 8px 8px 8px;color:#000000 }
        .body_text p.question {text-align: left;margin: 24px 0 8px 32px;font: Bold 12pt Tahoma;font-style: italic;font-weight: bold;color:#A94827 }
        .body_text p.answer {text-align: left;margin: 0 0 8px 32px;font-weight: normal;color:#000000 }
        .body_text li {margin-bottom: 8pt;font-size: 10pt;}
        .key {float: left;display: block;position: relative;overflow: hidden;height: 35px;margin: 2px 0px 0px 2px;border: solid 1px grey;}
        #K_SPACE {width: 234px;}
        #K_BKSLASH {width: 42px;}
        #K_oE2 {display:none;}
        #K_SHIFTL {width: 80px;}
        .plain {background-repeat: no-repeat;width: 34px;}
        .special {background-repeat: no-repeat;background: #c0c0c0;}
        .keycap {font: bold 7pt Arial;position: absolute;left: 6px;top: 6px;}
        .key .keycap {display: block;}
        .special .keycap {display: block;}
        .keytext {font:12pt "Charis SIL";position: absolute;display: block;right: 5px;bottom: 4px;color: blue;}
        .highlightExample table { border-collapse: collapse; }
        .highlightExample {color: blue; font-weight: bold; white-space: nowrap }
        .highlightKeys {color: blue; font-weight: bold;}
        #keymanExample {clear: both; color: #000080; border: 1px solid #8080ff; background-color: #e0e0ff; margin-top: 15px; font-size: 10pt }
        #keymanExample h3 { color: white; display: block; margin: 0; padding: 2px 5px; background: #8080ff }
        #keymanExample div { padding: 10px 5px; }
        #keymanExample td { padding: 10px 5px; }
        #keymanExample th { padding: 2px 5px; text-align: left; }
        .highlightKeys .key-print { display: none }
        .highlightKeys img { vertical-align: baseline; margin: 0 2px 0 0; background-image: url('keys2.gif'); height: 15px; width: 15px; }
        .key-grp { margin: 0 4px; }
        .key-shift { width: 41px !important; margin-right: 0px !important; background-position: 0 -45px; }
        .key-ctrl { width: 33px !important; margin-right: 0px !important; background-position: -41px -45px; }
        .key-alt { width: 32px !important; margin-right: 0px !important; background-position: -74px -45px; }
        .key-32 { width: 37px !important; }
        .key-33 { background-position: -37px 0px; }
        .key-34 { background-position: -52px 0px; }
        .key-35 { background-position: -67px 0px; }
        .key-36 { background-position: -82px 0px; }
        .key-37 { background-position: -97px 0px; }
        .key-38 { background-position: -112px 0px; }
        .key-39 { background-position: -127px 0px; }
        .key-40 { background-position: -142px 0px; }
        .key-41 { background-position: -157px 0px; }
        .key-42 { background-position: -172px 0px; }
        .key-43 { background-position: -187px 0px; }
        .key-44 { background-position: -202px 0px; }
        .key-45 { background-position: -217px 0px; }
        .key-46 { background-position: -232px 0px; }
        .key-47 { background-position: -247px 0px; }
        .key-48 { background-position: -262px 0px; }
        .key-49 { background-position: -277px 0px; }
        .key-50 { background-position: -292px 0px; }
        .key-51 { background-position: -307px 0px; }
        .key-52 { background-position: -322px 0px; }
        .key-53 { background-position: -337px 0px; }
        .key-54 { background-position: -352px 0px; }
        .key-55 { background-position: -367px 0px; }
        .key-56 { background-position: -382px 0px; }
        .key-57 { background-position: -397px 0px; }
        .key-58 { background-position: -412px 0px; }
        .key-59 { background-position: -427px 0px; }
        .key-60 { background-position: -442px 0px; }
        .key-61 { background-position: -457px 0px; }
        .key-62 { background-position: -472px 0px; }
        .key-63 { background-position: -487px 0px; }
        .key-64 { background-position: 0px -15px; }
        .key-65 { background-position: -15px -15px; }
        .key-66 { background-position: -30px -15px; }
        .key-67 { background-position: -45px -15px; }
        .key-68 { background-position: -60px -15px; }
        .key-69 { background-position: -75px -15px; }
        .key-70 { background-position: -90px -15px; }
        .key-71 { background-position: -105px -15px; }
        .key-72 { background-position: -120px -15px; }
        .key-73 { background-position: -135px -15px; }
        .key-74 { background-position: -150px -15px; }
        .key-75 { background-position: -165px -15px; }
        .key-76 { background-position: -180px -15px; }
        .key-77 { background-position: -195px -15px; }
        .key-78 { background-position: -210px -15px; }
        .key-79 { background-position: -225px -15px; }
        .key-80 { background-position: -240px -15px; }
        .key-81 { background-position: -255px -15px; }
        .key-82 { background-position: -270px -15px; }
        .key-83 { background-position: -285px -15px; }
        .key-84 { background-position: -300px -15px; }
        .key-85 { background-position: -315px -15px; }
        .key-86 { background-position: -330px -15px; }
        .key-87 { background-position: -345px -15px; }
        .key-88 { background-position: -360px -15px; }
        .key-89 { background-position: -375px -15px; }
        .key-90 { background-position: -390px -15px; }
        .key-91 { background-position: -405px -15px; }
        .key-92 { background-position: -420px -15px; }
        .key-93 { background-position: -435px -15px; }
        .key-94 { background-position: -450px -15px; }
        .key-95 { background-position: -465px -15px; }
        .key-96 { background-position: 0px -30px; }
        .key-97 { background-position: -15px -30px; }
        .key-98 { background-position: -30px -30px; }
        .key-99 { background-position: -45px -30px; }
        .key-100 { background-position: -60px -30px; }
        .key-101 { background-position: -75px -30px; }
        .key-102 { background-position: -90px -30px; }
        .key-103 { background-position: -105px -30px; }
        .key-104 { background-position: -120px -30px; }
        .key-105 { background-position: -135px -30px; }
        .key-106 { background-position: -150px -30px; }
        .key-107 { background-position: -165px -30px; }
        .key-108 { background-position: -180px -30px; }
        .key-109 { background-position: -195px -30px; }
        .key-110 { background-position: -210px -30px; }
        .key-111 { background-position: -225px -30px; }
        .key-112 { background-position: -240px -30px; }
        .key-113 { background-position: -255px -30px; }
        .key-114 { background-position: -270px -30px; }
        .key-115 { background-position: -285px -30px; }
        .key-116 { background-position: -300px -30px; }
        .key-117 { background-position: -315px -30px; }
        .key-118 { background-position: -330px -30px; }
        .key-119 { background-position: -345px -30px; }
        .key-120 { background-position: -360px -30px; }
        .key-121 { background-position: -375px -30px; }
        .key-122 { background-position: -390px -30px; }
        .key-123 { background-position: -405px -30px; }
        .key-124 { background-position: -420px -30px; }
        .key-125 { background-position: -435px -30px; }
        .key-126 { background-position: -450px -30px; }
        .lang2,.languageExample {font-family:"Charis SIL"; color:blue}
        .lang2 {font-size:150%}
END;
  require_once('header.php');
?>

<div id='Overview'>
<h2>Overview</h2>

<p>Ce clavier est adapté pour les caractères spéciaux nécessaires pour les langues maliennes. 
	This keyboard is suitable for the special characters needed for Malian languages.</p>

<p>This keyboard includes an On Screen Keyboard view, which displays best on a QWERTY US layout. This keyboard also has a mobile phone layout. However, not all of the "Other Important Symbols" are supported.</p>

<p>This keyboard outputs mostly precomposed (NFC) Unicode characters. However, please be aware that it is not completely NFC. Also, not all of the NFC characters will be on the mobile longpress keys. If they are not available as precomposed characters, you may have to type the vowel followed by the diacritic (which is on a special diacritic key next to the spacebar).</p>
</div>

<div id='UsingKeyboard'>
                
<h3 style="clear:left">Unshifted</h3>
                        <div class="key plain" id="K_BKQUOTE">
                            <div class="keycap">`</div>
                            <div class="keytext">ʼ</div>
                        </div>
                        <div class="key plain" id="K_1">
                            <div class="keycap">1</div>
                            <div class="keytext">1</div>
                        </div>
                        <div class="key plain" id="K_2">
                            <div class="keycap">2</div>
                            <div class="keytext">2</div>
                        </div>
                        <div class="key plain" id="K_3">
                            <div class="keycap">3</div>
                            <div class="keytext">3</div>
                        </div>
                        <div class="key plain" id="K_4">
                            <div class="keycap">4</div>
                            <div class="keytext">4</div>
                        </div>
                        <div class="key plain" id="K_5">
                            <div class="keycap">5</div>
                            <div class="keytext">5</div>
                        </div>
                        <div class="key plain" id="K_6">
                            <div class="keycap">6</div>
                            <div class="keytext">6</div>
                        </div>
                        <div class="key plain" id="K_7">
                            <div class="keycap">7</div>
                            <div class="keytext">7</div>
                        </div>
                        <div class="key plain" id="K_8">
                            <div class="keycap">8</div>
                            <div class="keytext">8</div>
                        </div>
                        <div class="key plain" id="K_9">
                            <div class="keycap">9</div>
                            <div class="keytext">9</div>
                        </div>
                        <div class="key plain" id="K_0">
                            <div class="keycap">0</div>
                            <div class="keytext">0</div>
                        </div>
                        <div class="key plain" id="K_HYPHEN">
                            <div class="keycap">-</div>
                            <div class="keytext">-</div>
                        </div>
                        <div class="key plain" id="K_EQUAL">
                            <div class="keycap">=</div>
                            <div class="keytext">=</div>
                        </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
                        <div class="key plain" id="K_Q">
                            <div class="keycap">q</div>
                            <div class="keytext">q</div>
                        </div>
                        <div class="key plain" id="K_W">
                            <div class="keycap">w</div>
                            <div class="keytext">w</div>
                        </div>
                        <div class="key plain" id="K_E">
                            <div class="keycap">e</div>
                            <div class="keytext">e</div>
                        </div>
                        <div class="key plain" id="K_R">
                            <div class="keycap">r</div>
                            <div class="keytext">r</div>
                        </div>
                        <div class="key plain" id="K_T">
                            <div class="keycap">t</div>
                            <div class="keytext">t</div>
                        </div>
                        <div class="key plain" id="K_Y">
                            <div class="keycap">y</div>
                            <div class="keytext">y</div>
                        </div>
                        <div class="key plain" id="K_U">
                            <div class="keycap">u</div>
                            <div class="keytext">u</div>
                        </div>
                        <div class="key plain" id="K_I">
                            <div class="keycap">i</div>
                            <div class="keytext">i</div>
                        </div>
                        <div class="key plain" id="K_O">
                            <div class="keycap">o</div>
                            <div class="keytext">o</div>
                        </div>
                        <div class="key plain" id="K_P">
                            <div class="keycap">p</div>
                            <div class="keytext">p</div>
                        </div>
                        <div class="key plain" id="K_LBRKT">
                            <div class="keycap">[</div>
                            <div class="keytext">ɲ</div>
                        </div>
                        <div class="key plain" id="K_RBRKT">
                            <div class="keycap">]</div>
                            <div class="keytext">ŋ</div>
                        </div>
                        <div class="key plain" id="K_BKSLASH">
                            <div class="keycap">\</div>
                            <div class="keytext">\</div>
                        </div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
                        <div class="key plain" id="K_A">
                            <div class="keycap">a</div>
                            <div class="keytext">a</div>
                        </div>
                        <div class="key plain" id="K_S">
                            <div class="keycap">s</div>
                            <div class="keytext">s</div>
                        </div>
                        <div class="key plain" id="K_D">
                            <div class="keycap">d</div>
                            <div class="keytext">d</div>
                        </div>
                        <div class="key plain" id="K_F">
                            <div class="keycap">f</div>
                            <div class="keytext">f</div>
                        </div>
                        <div class="key plain" id="K_G">
                            <div class="keycap">g</div>
                            <div class="keytext">g</div>
                        </div>
                        <div class="key plain" id="K_H">
                            <div class="keycap">h</div>
                            <div class="keytext">h</div>
                        </div>
                        <div class="key plain" id="K_J">
                            <div class="keycap">j</div>
                            <div class="keytext">j</div>
                        </div>
                        <div class="key plain" id="K_K">
                            <div class="keycap">k</div>
                            <div class="keytext">k</div>
                        </div>
                        <div class="key plain" id="K_L">
                            <div class="keycap">l</div>
                            <div class="keytext">l</div>
                        </div>
                        <div class="key plain" id="K_COLON">
                            <div class="keycap">;</div>
                            <div class="keytext">ɛ</div>
                        </div>
                        <div class="key plain" id="K_QUOTE">
                            <div class="keycap">'</div>
                            <div class="keytext">ɔ</div>
                        </div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: 80px;
        ">
<div class="keycap">Shift</div>
</div>
                        <div class="key plain" id="K_Z">
                            <div class="keycap">z</div>
                            <div class="keytext">z</div>
                        </div>
                        <div class="key plain" id="K_X">
                            <div class="keycap">x</div>
                            <div class="keytext">x</div>
                        </div>
                        <div class="key plain" id="K_C">
                            <div class="keycap">c</div>
                            <div class="keytext">c</div>
                        </div>
                        <div class="key plain" id="K_V">
                            <div class="keycap">v</div>
                            <div class="keytext">v</div>
                        </div>
                        <div class="key plain" id="K_B">
                            <div class="keycap">b</div>
                            <div class="keytext">b</div>
                        </div>
                        <div class="key plain" id="K_N">
                            <div class="keycap">n</div>
                            <div class="keytext">n</div>
                        </div>
                        <div class="key plain" id="K_M">
                            <div class="keycap">m</div>
                            <div class="keytext">m</div>
                        </div>
                        <div class="key plain" id="K_COMMA">
                            <div class="keycap">,</div>
                            <div class="keytext">,</div>
                        </div>
                        <div class="key plain" id="K_PERIOD">
                            <div class="keycap">.</div>
                            <div class="keytext">.</div>
                        </div>
                        <div class="key plain" id="K_SLASH">
                            <div class="keycap">/</div>
                            <div class="keytext">/</div>
                        </div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>

</div><br style="clear: left"><br/><h3 style="clear:left">Shift</h3>
                        <div class="key plain" id="K_BKQUOTE">
                            <div class="keycap">~</div>
                            <div class="keytext">;</div>
                        </div>
                        <div class="key plain" id="K_1">
                            <div class="keycap">!</div>
                            <div class="keytext">!</div>
                        </div>
                        <div class="key plain" id="K_2">
                            <div class="keycap">@</div>
                            <div class="keytext">@</div>
                        </div>
                        <div class="key plain" id="K_3">
                            <div class="keycap">#</div>
                            <div class="keytext">#</div>
                        </div>
                        <div class="key plain" id="K_4">
                            <div class="keycap">$</div>
                            <div class="keytext">$</div>
                        </div>
                        <div class="key plain" id="K_5">
                            <div class="keycap">%</div>
                            <div class="keytext">%</div>
                        </div>
                        <div class="key plain" id="K_6">
                            <div class="keycap">^</div>
                            <div class="keytext">^</div>
                        </div>
                        <div class="key plain" id="K_7">
                            <div class="keycap">&amp;</div>
                            <div class="keytext">&amp;</div>
                        </div>
                        <div class="key plain" id="K_8">
                            <div class="keycap">*</div>
                            <div class="keytext">*</div>
                        </div>
                        <div class="key plain" id="K_9">
                            <div class="keycap">(</div>
                            <div class="keytext">(</div>
                        </div>
                        <div class="key plain" id="K_0">
                            <div class="keycap">)</div>
                            <div class="keytext">)</div>
                        </div>
                        <div class="key plain" id="K_HYPHEN">
                            <div class="keycap">_</div>
                            <div class="keytext">_</div>
                        </div>
                        <div class="key plain" id="K_EQUAL">
                            <div class="keycap">+</div>
                            <div class="keytext">+</div>
                        </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-backspace.gif');
          ">
<div class="keycap">Backspace</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 52px;
        
          background-image: url('key-tab.gif');
          ">
<div class="keycap">Tab</div>
</div>
                        <div class="key plain" id="K_Q">
                            <div class="keycap">Q</div>
                            <div class="keytext">Q</div>
                        </div>
                        <div class="key plain" id="K_W">
                            <div class="keycap">W</div>
                            <div class="keytext">W</div>
                        </div>
                        <div class="key plain" id="K_E">
                            <div class="keycap">E</div>
                            <div class="keytext">E</div>
                        </div>
                        <div class="key plain" id="K_R">
                            <div class="keycap">R</div>
                            <div class="keytext">R</div>
                        </div>
                        <div class="key plain" id="K_T">
                            <div class="keycap">T</div>
                            <div class="keytext">T</div>
                        </div>
                        <div class="key plain" id="K_Y">
                            <div class="keycap">Y</div>
                            <div class="keytext">Y</div>
                        </div>
                        <div class="key plain" id="K_U">
                            <div class="keycap">U</div>
                            <div class="keytext">U</div>
                        </div>
                        <div class="key plain" id="K_I">
                            <div class="keycap">I</div>
                            <div class="keytext">I</div>
                        </div>
                        <div class="key plain" id="K_O">
                            <div class="keycap">O</div>
                            <div class="keytext">O</div>
                        </div>
                        <div class="key plain" id="K_P">
                            <div class="keycap">P</div>
                            <div class="keytext">P</div>
                        </div>
                        <div class="key plain" id="K_LBRKT">
                            <div class="keycap">{</div>
                            <div class="keytext">Ɲ</div>
                        </div>
                        <div class="key plain" id="K_RBRKT">
                            <div class="keycap">}</div>
                            <div class="keytext">Ŋ</div>
                        </div>
                        <div class="key plain" id="K_BKSLASH">
                            <div class="keycap">¦</div>
                            <div class="keytext">|</div>
                        </div><br style="clear: left">
<div class="key special" id="" style="
        width: 62px;
        
          background-image: url('key-capslock.gif');
          ">
<div class="keycap">Caps Lock</div>
</div>
                        <div class="key plain" id="K_A">
                            <div class="keycap">A</div>
                            <div class="keytext">A</div>
                        </div>
                        <div class="key plain" id="K_S">
                            <div class="keycap">S</div>
                            <div class="keytext">S</div>
                        </div>
                        <div class="key plain" id="K_D">
                            <div class="keycap">D</div>
                            <div class="keytext">D</div>
                        </div>
                        <div class="key plain" id="K_F">
                            <div class="keycap">F</div>
                            <div class="keytext">F</div>
                        </div>
                        <div class="key plain" id="K_G">
                            <div class="keycap">G</div>
                            <div class="keytext">G</div>
                        </div>
                        <div class="key plain" id="K_H">
                            <div class="keycap">H</div>
                            <div class="keytext">H</div>
                        </div>
                        <div class="key plain" id="K_J">
                            <div class="keycap">J</div>
                            <div class="keytext">J</div>
                        </div>
                        <div class="key plain" id="K_K">
                            <div class="keycap">K</div>
                            <div class="keytext">K</div>
                        </div>
                        <div class="key plain" id="K_L">
                            <div class="keycap">L</div>
                            <div class="keytext">L</div>
                        </div>
                        <div class="key plain" id="K_COLON">
                            <div class="keycap">:</div>
                            <div class="keytext">:</div>
                        </div>
                        <div class="key plain" id="K_QUOTE">
                            <div class="keycap">"</div>
                            <div class="keytext">&#34;</div>
                        </div>
<div class="key special" id="" style="
        width: 70px;
        
          background-image: url('key-enter.gif');
          ">
<div class="keycap">Enter</div>
</div><br style="clear: left"><div class="key special" id="K_SHIFTL" style="
        width: 80px;
        ">
<div class="keycap">Shift</div>
</div>
                        <div class="key plain" id="K_Z">
                            <div class="keycap">Z</div>
                            <div class="keytext">Z</div>
                        </div>
                        <div class="key plain" id="K_X">
                            <div class="keycap">X</div>
                            <div class="keytext">X</div>
                        </div>
                        <div class="key plain" id="K_C">
                            <div class="keycap">C</div>
                            <div class="keytext">C</div>
                        </div>
                        <div class="key plain" id="K_V">
                            <div class="keycap">V</div>
                            <div class="keytext">V</div>
                        </div>
                        <div class="key plain" id="K_B">
                            <div class="keycap">B</div>
                            <div class="keytext">B</div>
                        </div>
                        <div class="key plain" id="K_N">
                            <div class="keycap">N</div>
                            <div class="keytext">N</div>
                        </div>
                        <div class="key plain" id="K_M">
                            <div class="keycap">M</div>
                            <div class="keytext">M</div>
                        </div>
                        <div class="key plain" id="K_COMMA">
                            <div class="keycap">&lt;</div>
                            <div class="keytext">‹</div>
                        </div>
                        <div class="key plain" id="K_PERIOD">
                            <div class="keycap">&gt;</div>
                            <div class="keytext">›</div>
                        </div>
                        <div class="key plain" id="K_SLASH">
                            <div class="keycap">?</div>
                            <div class="keytext">?</div>
                        </div>
<div class="key special" id="" style="
        width: 90px;
        
          background-image: url('key-shiftr.gif');
          ">
<div class="keycap">Shift</div>
</div><br style="clear: left"><div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrll.gif');
          ">
<div class="keycap">L Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altl.gif');
          ">
<div class="keycap">L ALt</div>
</div>
<div class="key plain" id="K_SPACE">
<div class="keycap"> </div>
</div>
<div class="key special" id="" style="
        width: 50px;
        
          background-image: url('key-altr.gif');
          ">
<div class="keycap">R ALt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
        width: 60px;
        
          background-image: url('key-ctrlr.gif');
          ">
<div class="keycap">R Ctrl</div>
</div><br style="clear: left" /><br />

<h2>Comment composer les caractères spéciaux (How to compose special characters)</h2>
<h3>Des lettres (Letters)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>ɓ</span></td><td>,b</td><td>0253</td>
		<td><span class='lang2'>Ɓ</span></td><td>,B</td><td>0181</td>
	</tr>
	<tr>
		<td><span class='lang2'>ç</span></td><td>,c</td><td>00E7</td>
		<td><span class='lang2'>Ç</span></td><td>,C</td><td>00C7</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɗ</span></td><td>,d</td><td>0257</td>
		<td><span class='lang2'>Ɗ</span></td><td>,D</td><td>018A</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɛ</span></td><td>,e</td><td>025B</td>
		<td><span class='lang2'>Ɛ</span></td><td>,E</td><td>0190</td>
	</tr>
	<tr>
		<td><span class='lang2'>ǝ</span></td><td>,a</td><td>01DD</td>
		<td><span class='lang2'>Ǝ</span></td><td>,A</td><td>018E</td>
	</tr>
	<tr>
		<td><span class='lang2'>ə</span></td><td>v%</td><td>0259</td>
		<td><span class='lang2'>Ə</span></td><td>V%</td><td>018F</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɣ</span></td><td>,g</td><td>0263</td>
		<td><span class='lang2'>Ɣ</span></td><td>,G</td><td>0194</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɩ</span></td><td>,i</td><td>0261</td>
		<td><span class='lang2'>Ɩ</span></td><td>,I</td><td>0196</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɲ</span></td><td>,j</td><td>0272</td>
		<td><span class='lang2'>Ɲ</span></td><td>,J</td><td>019D</td>
	</tr>
	<tr>
		<td><span class='lang2'>ŋ</span></td><td>,n</td><td>014B</td>
		<td><span class='lang2'>Ŋ</span></td><td>,N</td><td>014A</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɔ</span></td><td>,o</td><td>0254</td>
		<td><span class='lang2'>Ɔ</span></td><td>,O</td><td>0186</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʋ</span></td><td>,u</td><td>028B</td>
		<td><span class='lang2'>Ʋ</span></td><td>,U</td><td>01B2</td>
	</tr>
	<tr>
		<td><span class='lang2'>ƴ</span></td><td>,y</td><td>01B4</td>
		<td><span class='lang2'>Ƴ</span></td><td>,Y</td><td>01B3</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʒ</span></td><td>,z</td><td>0292</td>
		<td><span class='lang2'>Ʒ</span></td><td>,Z</td><td>01B7</td>
	</tr>
</tbody>
</table>

<h3>Lettres supplémentaires (Additional Letters)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>ʼ</span><sup><a href="#fn2" id="ref2">2</a></sup></td><td>,l ou ,k</td><td>02BC</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʔ</span></td><td>,h</td><td>0294</td>
	</tr>
	<tr>
		<td><span class='lang2'>æ</span></td><td>,T</td><td>00E6</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɑ</span></td><td>,X</td><td>0251</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɡ</span></td><td>,x</td><td>0261</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɨ</span></td><td>,?</td><td>0268</td>
	</tr>
	<tr>
		<td><span class='lang2'>œ</span></td><td>,f</td><td>0153</td>
	</tr>
	<tr>
		<td><span class='lang2'>ʃ</span></td><td>,S</td><td>0283</td>
	</tr>
</tbody>
</table>




<h3>Diacritiques (Diacritics)</h3>
	<p>Appuyez soit sur une voyelle, soit sur une nasal<sup><a href="#fn1" id="ref1">1</a></sup>, ensuite la touche suivante.</p>
	<p>Press either a vowel or a nasal, then the accent key.</p>
<table class="grid">
<thead>
	<tr>
		<th>Diacritic</th><th>Caractères (Character)</th><th>Taper (Type)</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>aguï</td><td><span class='lang2'>◌́, ɛ́, á</span></td><td>/</td>
	</tr>
	<tr>
		<td>grave</td><td><span class='lang2'>◌̀, M̀, ǝ̀</span></td><td>\</td>

	</tr>
	<tr>
		<td>macron</td><td><span class='lang2'>◌̄, ɔ̄, ā</span></td><td>=</td>

	</tr>
	<tr>
		<td>circonflexe</td><td><span class='lang2'>◌̂, ŋ̂, î</span></td><td>^</td>

	</tr>
	<tr>
		<td>diérèses</td><td><span class='lang2'>◌̈, ä, ʋ̈</span></td><td>%</td>

	</tr>
	<tr>
		<td>caron</td><td><span class='lang2'>◌̌, š, ž</span></td><td>&</td>

	</tr>
	<tr>
		<td>tilde</td><td><span class='lang2'>◌̃, ñ́, ã́</span></td><td>#</td>

	</tr>
	<tr>
		<td>point en bas</td><td><span class='lang2'>◌̣, ḍ, Ẓ</span></td><td>$</td>
	</tr>
	<tr>
		<td>macron en bas</td><td><span class='lang2'>◌̠a̠e̠i̠o̠u̠ɛ̠ɔ̠ɩ̠ʋ̠ǝ̠ṉm̠ɲ̠ŋ̠ḏg̠ẖḻs̠ṯw̠x̠ẕ</span></td><td>@</td>
	</tr>
	<tr>
		<td>ligne vertical en bas</td><td><span class='lang2'>◌̩a̩e̩i̩o̩u̩ɛ̩ɔ̩ɩ̩ʋ̩ǝ̩n̩m̩ɲ̩ŋ̩d̩g̩h̩s̩t̩w̩x̩z̩</span></td><td>+</td>
	</tr>
	<tr>
		<td><span class='lang2'>ɑ̆</span></td><td>b%</td><td>0251 0306</td>
	</tr>
	<tr>
		<td><span class='lang2'>Ă</span></td><td>B%</td><td>0102</td>
	</tr>

</tbody>
</table>


<h3>D’autres symboles importantes (Other Important Symbols)</h3>

<table class="grid">
<thead>
	<tr>
		<th>Caractères (Character)</th>
		<th>Taper (Type)</th>
		<th>Codepoint</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><span class='lang2'>€</span></td><td>,F</td><td>20AC</td>
	</tr>
	<tr>
		<td><span class='lang2'>§</span></td><td>,W</td><td>00A7</td>
	</tr>
	<tr>
		<td><span class='lang2'>⇒</span></td><td>,t</td><td>21D2</td>
	</tr>
	<tr>
		<td><span class='lang2'>£</span></td><td>,L</td><td>263A</td>
	</tr>
	<tr>
		<td><span class='lang2'>;</span></td><td>,s</td><td>003B</td>
	</tr>
	<tr>
		<td><span class='lang2'>©</span></td><td>,m</td><td>00A9</td>
	</tr>
	<tr>
		<td><span class='lang2'>✓</span></td><td>,M</td><td>2713</td>
	</tr>
	<tr>
		<td><span class='lang2'>†</span></td><td>,v</td><td>2020</td>
	</tr>
	<tr>
		<td><span class='lang2'>‡</span></td><td>,V</td><td>2021</td>
	</tr>
	<tr>
		<td><span class='lang2'>—</span></td><td>--</td><td>2014</td>
	</tr>
	<tr>
		<td><span class='lang2'>‘</span></td><td>,q</td><td>2018</td>
	</tr>
	<tr>
		<td><span class='lang2'>’</span><sup><a href="#fn3" id="ref3">3</a></sup></td><td>,Q</td><td>2019</td>
	</tr>
	<tr>
		<td><span class='lang2'>“</span></td><td>,p</td><td>201C</td>
	</tr>
	<tr>
		<td><span class='lang2'>”</span></td><td>,P</td><td>201D</td>
	</tr>
	<tr>
		<td><span class='lang2'>‹</span></td><td>&lt;</td><td>2039</td>
	</tr>
	<tr>
		<td><span class='lang2'>›</span></td><td>&gt;</td><td>203A</td>
	</tr>
	<tr>
		<td><span class='lang2'>«</span></td><td>&lt;&lt;</td><td>00AB</td>
	</tr>
	<tr>
		<td><span class='lang2'>»</span></td><td>&gt;&gt;</td><td>00BB</td>
	</tr>
	<tr>
		<td><span class='lang2'>« ‹</span></td><td>&lt;&lt;&lt;</td><td>00AB 00A0 2039</td>
	</tr>
	<tr>
		<td><span class='lang2'>› »</span></td><td>&gt;&gt;&gt;</td><td>203A 00A0 00BB</td>
	</tr>
		<tr>
			<td><span class='lang2'>№</span></td><td>!a</td><td>2116</td>
		</tr>
		<tr>
			<td><span class='lang2'>®</span></td><td>!b</td><td>2116</td>
		</tr>
		<tr>
			<td><span class='lang2'>°</span></td><td>,w</td><td>00B0</td>
		</tr>
		<tr>
			<td><span class='lang2'>Ω</span></td><td>!c</td><td>2126</td>
		</tr>
		<tr>
			<td><span class='lang2'>≠</span></td><td>!d</td><td>2260</td>
		</tr>
		<tr>
			<td><span class='lang2'>±</span></td><td>!e</td><td>00B1</td>
		</tr>
		<tr>
			<td><span class='lang2'>Ø</span></td><td>!f</td><td>00D8</td>
		</tr>
		<tr>
			<td><span class='lang2'>÷</span></td><td>!g</td><td>00F7</td>
		</tr>
		<tr>
			<td><span class='lang2'>∞</span></td><td>!h</td><td>221E</td>
		</tr>
		<tr>
			<td><span class='lang2'>≤</span></td><td>!i</td><td>2264</td>
		</tr>
		<tr>
			<td><span class='lang2'>…</span></td><td>,H</td><td>2026</td>
		</tr>
		<tr>
			<td><span class='lang2'>≥</span></td><td>!j</td><td>2265</td>
		</tr>
		<tr>
			<td><span class='lang2'>£</span></td><td>!l</td><td>00A3</td>
		</tr>
		<tr>
			<td><span class='lang2'>χ</span></td><td>!m</td><td>03C7</td>
		</tr>
		<tr>
			<td><span class='lang2'>ʧ</span></td><td>!n</td><td>02A7</td>
		</tr>
		<tr>
			<td><span class='lang2'>ʤ</span></td><td>!o</td><td>02A4</td>
		</tr>
		<tr>
			<td><span class='lang2'>Χ</span></td><td>!p</td><td>03A7</td>
		</tr>
		<tr>
			<td><span class='lang2'>&lt;</span></td><td>!q</td><td>003C</td>
		</tr>
		<tr>
			<td><span class='lang2'>&gt;</span></td><td>!Q</td><td>003E</td>
		</tr>
		<tr>
			<td><span class='lang2'>¹</span></td><td>!1␣</td><td>00B9</td>
		</tr>
		<tr>
			<td><span class='lang2'>²</span></td><td>!2␣</td><td>00B2</td>
		</tr>
		<tr>
			<td><span class='lang2'>³</span></td><td>!3␣</td><td>00B3</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁴</span></td><td>!4␣</td><td>2074</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁵</span></td><td>!5␣</td><td>2075</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁶</span></td><td>!6␣</td><td>2076</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁷</span></td><td>!7␣</td><td>2077</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁸</span></td><td>!8␣</td><td>2078</td>
		</tr>
		<tr>
			<td><span class='lang2'>⁹</span></td><td>!9␣</td><td>2079</td>
		</tr>
		<tr>
			<td><span class='lang2'></span>⁰</td><td>!0␣</td><td>2070</td>
		</tr>
		<tr>
			<td><span class='lang2'>½</span></td><td>!12</td><td>00BD</td>
		</tr>
		<tr>
			<td><span class='lang2'>¼</span></td><td>!14</td><td>00BC</td>
		</tr>
		<tr>
			<td><span class='lang2'>¾</span></td><td>!34</td><td>00BE</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅓</span></td><td>!13</td><td>2153</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅔</span></td><td>!23<td>2154</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅕</span></td><td>!15</td><td>2155</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅖</span></td><td>!25</td><td>2156</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅗</span></td><td>!35</td><td>2157</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅘</span></td><td>!45</td><td>2158</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅙</span></td><td>!16</td><td>2159</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅚</span></td><td>!56</td><td>215A</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅛</span></td><td>!18</td><td>215B</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅜</span></td><td>!38</td><td>215C</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅝</span></td><td>!58</td><td>215D</td>
		</tr>
		<tr>
			<td><span class='lang2'>⅞</span></td><td>!78</td><td>215E</td>
			</tr>
		<tr>
			<td><span class='lang2'>k͡p</span></td><td>kpp</td><td>006B 0361 0070</td>
		</tr>
		<tr>
			<td><span class='lang2'>g͡b</span></td><td>gbb</td><td>0067 0361 0062</td>
		</tr>
		<tr>
			<td><span class='lang2'>ŋ͡m</span></td><td>,nmm</td><td>014B 0361 006D</td>
		</tr>
		<tr>
			<td> no-break space</td><td>kks</td><td>00A0</td>  
		</tr>
		<tr>
			<td>no-break hyphen</td><td>kkh</td><td>2011</td>  
		</tr>
	</tbody>
</table>

<h2>Fonts</h2>

<p>The <a href="https://software.sil.org/charis/">Charis SIL Mali</a> font family is included with the keyboard package.</p>

<hr></hr>

<sup id="fn1">1. N’importe quelle voyelle ou nasal comme a, e, i, o, u, ɛ, ɔ, ǝ, æ, œ, ɨ ɩ, ʋ  et  n, m, ɲ, ŋ +d, g, h, l, s, t, w, x, z.  Cela marche aussi pour les majuscules A, E, I, O, U, Ɛ, Ɔ, Ǝ, Ɩ, Ʋ  et  N, M, Ɲ, Ŋ + D, G, H, L, S, T, Z.<a href="#ref1" title="Jump back to footnote 1 in the text.">↩</a></sup><br/>
<sup id="fn2">2. Cet Apostrophe ’ est pour les mots contractés. C’est une lettre qui peut être au milieu des mots.<a href="#ref2" title="Jump back to footnote 2 in the text.">↩</a></sup><br/>
<sup id="fn3">3. Les guillemets américains simples ‘ ’ (sur le ‘q ’) sont pour les citations ou les mots français. C’est des marques de ponctuation.<a href="#ref3" title="Jump back to footnote 3 in the text.">↩</a></sup>


