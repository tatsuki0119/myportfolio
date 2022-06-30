<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='webプログラマー"樹"の個人サイトです'>
    <title>TATSUKI'sROOM｜フリーランスでWEB制作を行っています。</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <!-- header -->
    <header>
      <!-- sp-header -->
      <div id="sp-header">
        <h1 id="logo" class="top-page-img">
          <a href="https://tatsuki100.com/">
            <img src="img/logo.png" alt="TATSUKI'sROOM">
          </a>
        </h1>
        <nav id="menu" class="top">
          <ul>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="works.html">Works</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </nav>
        <ul class="sns-btn top">
          <li>
            <a href="https://www.instagram.com/tatsuki_100/" target="_blank">
              <img src="img/instagram.png" alt="インスタグラムのロゴです">
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/profile.php?id=100023449245094" target="_blank">
              <img src="img/facebook.png" alt="フェイスブックのロゴです">
            </a>
          </li>
        </ul>
      </div>
      <!-- pc-header -->
      <div id="pc-header">
        <h1 id="logo" class="top-page-img">
          <a href="https://tatsuki100.com/">
            <img src="img/logo.png" alt="TATSUKI'sROOM">
          </a>
        </h1>
        <nav>
          <ul>
            <div class="pc-sns-btn">
              <li class="a5">
                <a href="https://www.facebook.com/profile.php?id=100023449245094" target="_blank">
                  <img src="img/facebook.png" alt="フェイスブックのロゴです">
                </a>
              </li>
              <li class="a4">
                <a href="https://www.instagram.com/tatsuki_100/" target="_blank">
                  <img src="img/instagram.png" alt="インスタグラムのロゴです">
                </a>
              </li>
            </div>
            <li class="a3">
              <a href="contact.html">Contact</a>
            </li>
            <li class="a2">
              <a href="works.html">Works</a>
            </li>
            <li class="a1">
              <a href="about.html">About</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- main -->
    <main id="main">
    <!-- mainVisual -->
      <section id="top">
        <div id="sp-mainVisual">
          <img src="img/sp-mainvisual.png" alt="TATSUKIのメイン画像です">
        </div>
        <div id="pc-mainVisual">
          <img src="img/pc-mainvisual.png" alt="TATSUKIのメイン画像です">
        </div>
        <p id="policy" class="animate">
          新潟県を拠点にしているフリーのwebディレクターです。お客様のお客様を大切に想いながら、笑いとワクワクをテーマに「ありがとう」を増やすお手伝いをさせて頂きます。<br>
          <?php echo date('l'); ?>
        </p>
      </section>

      <!-- service -->
      <h2 class="ttl animate">Service</h2>
      <section id="service">
        <section class="animate">
          <h3 class="ttl">ディレクション</h3>
          <p class="ttl">DIRECTION</p>
          <p class="icon">
            <img src="img/direction.png" alt="direction">
          </p>
          <p class="text">
            お客様の要望をお聞かせ頂き、現状の問題点と得たい成果を洗い出し、効果的なご提案を致します。web制作ではデザインを開始する前にどれだけ構想を明確に出来ているかという事前準備が重要です。何の為に？誰の為に？何故その方法を取るのか？全てに説明が付けられるまで構想を練ります。お客様のお客様を大切に想います。
          </p>
        </section>
        <section class="animate">
          <h3 class="ttl">デザイン</h3>
          <p class="ttl">DESIGN</p>
          <p class="icon">
            <img src="img/design.png" alt="design">
          </p>
          <p class="text">
            完成した構想をもとに、デザインの制作を致します。「ただなんとなくオシャレに」「ただかっこよく」だけではなく、見る人や使う人を想い、画面の向こう側にいる人がどんな気持ちになるかを常に考え、ユーザーに寄り添ったデザインをご提案致します。人間心理や色彩心理に則り、確実に目標を達成できるデザインをご提案させて頂きます。
          </p>
        </section>
        <section class="last animate">
          <h3 class="ttl">コーディング</h3>
          <p class="ttl">CODING</p>
          <p class="icon">
            <img src="img/coding.png" alt="coding">
          </p>
          <p class="text">
            デザインの意図を理解し、届けたいメッセージによって動きや効果を適切に設定します。近年の爆発的なスマートフォンの普及に伴い、モバイルファーストで制作することが大切だと認識しております。レスポンシブ対応、ワードプレスを使用した更新性の高いサイト、JavaScriptを使用した動きのある華やかなサイトなど、様々なサイトのコーディングを行なっております。
          </p>
        </section>
      </section>

      <!-- works -->
      <h2 class="ttl animate">Works</h2>
      <section id="works">
        <ul>
          <li class="animate">
            <a href="/works/pages01.html">
              <img src="img/works01.png" alt="人材育成コンサルLPのプレビューです">
            </a>
          </li>
          <li class="animate">
            <a href="/works/pages02.html">
              <img src="img/works02.png" alt="資産形成コンサルLPのプレビューです">
            </a>
          </li>
          <li class="animate">
            <a href="/works/pages03.html">
              <img src="img/works03.png" alt="アプリリリースLPのプレビューです">
            </a>
          </li>
          <li class="animate">
            <a href="/works/pages04.html">
              <img src="img/works04.png" alt="美容サロンHPのプレビューです">
            </a>
          </li>
          <li class="animate">
            <a href="/works/pages05.html">
              <img src="img/works05.png" alt="HTMLメールマガジンのプレビューです">
            </a>
          </li>
          <li class="animate">
            <a href="/works/pages06.html">
              <img src="img/works06.png" alt="ECサイトのプレビューです">
            </a>
          </li>
        </ul>
      </section>
      <div id="btn" class="animate">
        <button class="work">
          <a href="works.html">ReadMore</a>
        </button>
      </div>
        
      <!-- tatsuki -->
      <section id="about">
        <h2 class="ttl animate">TATSUKI</h2>
        <p id="story" class="animate">
          新潟でフリーのweb制作をしております。2017年より独立し営業代行や代理店事業等を経験。2021年よりフリーでweb制作を開始。
        </p>
        <div id="pc-about">
          <p id="myIcon"  class="animate">
            <img src="img/favicon.png" alt="NFTアイコンです">
          </p>
          <dl  class="animate">
            <dt>名称：</dt>
            <dd>TATSUKI</dd>
            <dt>所在地：</dt>
            <dd>新潟県</dd>
            <dt>お問合せ：</dt>
            <dd>
              <a href="mailto:mail@tatsuki100.com">mail@tatsuki100.com</a>
            </dd>
            <dt>事業内容：</dt>
            <dd>web制作におけるディレクション、デザイン、コーディング、レスポンシブ対応、CMS導入等</dd>
            <dt>特技：</dt>
            <dd>SNSマーケティング、コピーライティング、行動心理学、群集心理学を4年間現場で学び続けてきた経験を元にした、根拠のある効果的なディレクション及びデザインのご提案</dd>
            <dt>興味：</dt>
            <dd>NFT/WEB3.0/暗号資産</dd>
          </dl>
        </div>
        <div id="myname"  class="animate">
          <h3>圓山樹　MaruyamaTatsuki</h3>
          <p>Instagram：tatsuki_100<br>Facebook：tatsuki_0119</p>
        </div>
        <div id="btn" class="animate">
          <button class="about">
            <a href="about.html">ReadMore</a>
          </button>
        <div>
      </section>
    
      <!-- top-return -->
      <sevtion id="to-top">
        <a href="#"><img src="img/top.png" alt=""></a>
      </sevtion>
    </main>

    <!-- footer -->
    <footer id="footer">
      <p class="copyright">
        <small>©︎TATSUKI All rights reserved.</small>
      </p>
    </footer>

    <script src="js/main.js"></script>
  </body>

</html>