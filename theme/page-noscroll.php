<?php
/**
 * Template Name: page-noscroll
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
//get_header();
/* Start the Loop */
while ( have_posts() ) :
the_post();
?>
<html>
<head>
<title><?php the_title(); ?></title>
<style type="text/css">
 /* --- テーブル全体のスタイル指定 --------------- */
.tableArea {
  margin         : auto;             /* 自動位置   */
  border-collapse: collapse;         /* 境界線結合 */
  border-spacing : 0;                /* 罫線間余白 */
  font-size      : 9pt;              /* 文字サイズ */
  background     : #ffffff;          /* テーブル全体の背景色 */
}
 /* --- ヘッダーのスタイル指定 ------------------- */
.tableArea th {
  text-align    : center;            /* 文字位置  */
  padding       : 5px;               /* 余白      */
  border        : 1px #666666 solid; /* 罫線      */
  background    : #cccccc;           /* 背景色    */
}
 /* --- 明細のスタイル指定 ----------------------- */
.tableArea td {
  text-align    : center;            /* 文字位置  */
  padding       : 5px;               /* 余白      */
  border        : 1px #666666 solid; /* 罫線      */
  cursor        : pointer;           /* カーソル  */
  font-size: xx-large;

}
 /* --- セルにカーソルが乗ったとき --------------- */
.tableArea td:hover {
  background    : #ff7f50;           /* 背景色    */
  color         : #ffffff;           /* 文字色    */
}
.txt{
    display: inline-block;
    width: 100%;
    padding: 0.5em;
    border: 1px solid #999;
    box-sizing: border-box;
    margin: 0.5em 0;
    font-size: xx-large;

}

</style>
<script type="text/javascript">
function tableClick(argEnv){
 // ===================================================
 //  ○ クリック時の位置と値の取得 ○
 //
 //  tableのクリック位置と値を取得するサンプルです
 //  （行と列はTRなども含んだ、0からの値です）
 // ====================================================
  var wOut = '';
 
  // --- クリックされたエレメントを取得 ------------
  var wElement = (argEnv.srcElement || argEnv.target);
 
  // --- TDのみ対象とする --------------------------
  if (wElement.tagName.toUpperCase() == 'TD'){
    //alert(JSON.stringify(wElement.children[0].value));
    //console.log(JSON.stringify(wElement.children[0].value));
 
    // --- 結果表示 ------------------------------
    if ('speechSynthesis' in window) {
    // 発言を設定
    const uttr = new SpeechSynthesisUtterance()
    uttr.text = wElement.children[0].value  // 最初の要素（input）のValueを設定
    // 発言を再生
    window.speechSynthesis.speak(uttr)

  } else {
    alert('大変申し訳ありません。このブラウザは音声合成に対応していません。')
  }
 
  }
}
</script>
</head>
<body>
<?php the_content(); ?>
<!-- 

<table class="tableArea" id="makeImg"
onclick="tableClick(event)" width="100%" height="100%"
>
<tr>
<td width="50%" height="50%">
  <input type="text" class="txt" value="YES" placeholder="読み上げたいテキストを入力してください" />
</td>
<td>
  <input type="text" class="txt" value="いいえ" placeholder="読み上げたいテキストを入力してください" />
</td>
</tr>
<tr>
<td>
  <input type="text" class="txt" value="つかれました" placeholder="読み上げたいテキストを入力してください" />
</td>
<td>
  <input type="text" class="txt" value="みなさんびじんですね" placeholder="読み上げたいテキストを入力してください" />
</td>
</tr>
</table>
-->

<?php

endwhile; // End of the loop.

//get_footer();
?>
</body>

</html>
