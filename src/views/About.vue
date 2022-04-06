<template>
  <div class="about">
    <div class="image_header"><img src="../assets/about_header.png"></div>
    <h1>部活動の流れ</h1>
    <div class="contents_top">
      <p>通常授業日（簡単に言うと平日の部活動）の流れを紹介します。<br>
      ※時期によって時間や練習内容の変動があります。
      </p>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <h2 class="head-border"><div class="icon"><img src="../assets/icon_about_1630.png"></div>始令・音出し</h2>
        <div class="col-sm-12 col-md-8">
          <p class="side_txt">部長による出欠確認と合奏予定の連絡から部活が始まります。
          始礼から合奏までの時間は音出しという扱いですが、基礎練習・曲練習・パート練習など、時間の使い方は自由です。
          指令の時点で集まっている部員は半分ほどで、授業を終えていない公立大生や移動中の他大生もいることから、自由度のある時間として設けています。</p>
        </div>
        <div class="col-sm-12 col-md-4">
          <figure class="side_img"><img src="../assets/about_flow_1.png"></figure>
        </div>
      </div>
      <div class="row align-items-center">
        <h2 class="head-border_2"><div class="icon"><img src="../assets/icon_about_1730.png"></div>合奏</h2>
        <div class="col-sm-12 col-md-8">
          <p class="side_txt">１曲あたり30~60分の合奏練習をします。
            当部には正指揮者と言われる3回生の指揮者と、副指揮者と言われる２回生の指揮者がいます。
            彼らの指導のもと合奏は進められますが、合奏中に奏者から意見をもらいながら曲の調整をする場面も多々見られます。
            全員で声を出し合って曲を作り上げていくのは、公立大吹奏楽部の特徴と言えるでしょう。
            </p>
        </div>
        <div class="col-sm-12 col-md-4">
          <figure class="side_img"><img src="../assets/about_flow_2.png"></figure>
          <figure class="side_img"><img src="../assets/about_flow_3.png"></figure>
        </div>
      </div>
      <div class="row align-items-end">
        <div class="row align-items-center">
          <h2 class="head-border_2"><div class="icon"><img src="../assets/icon_about_1900.png"></div>終礼</h2>
          <div class="col-sm-12 col-md-8">
            <p class="side_txt">部長をはじめ各役職から諸連絡をして、部活が終わります。
            居残り練習をしたり、仲の良いもの同士で帰ったり、パートで食事に行ったりなど、終礼後の過ごし方は様々です。
            もちろん、居残り練習を強制するような雰囲気はありません。</p>
          </div>
          <div class="col-sm-12 col-md-4">
            <figure class="side_img"><img src="../assets/about_flow_1.png"></figure>
          </div>
        </div>
      </div>
    </div>
    <h1>てすと</h1>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
          <figure class="side_img"><img src="../assets/about_flow_1.png"></figure>
        </div>
        <div class="col-sm-12 col-md-6">
        <p class="side_txt">部長による出欠確認と合奏予定の連絡から部活が始まります。
        始礼から合奏までの時間は音出しという扱いですが、基礎練習・曲練習・パート練習など、時間の使い方は自由です。
        指令の時点で集まっている部員は半分ほどで、授業を終えていない公立大生や移動中の他大生もいることから、自由度のある時間として設けています。</p>
        </div>
        <div class="border"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
          <figure class="side_img"><img src="../assets/about_flow_1.png"></figure>
        </div>
        <div class="col-sm-12 col-md-6">
        <p class="side_txt">部長による出欠確認と合奏予定の連絡から部活が始まります。
        始礼から合奏までの時間は音出しという扱いですが、基礎練習・曲練習・パート練習など、時間の使い方は自由です。
        指令の時点で集まっている部員は半分ほどで、授業を終えていない公立大生や移動中の他大生もいることから、自由度のある時間として設けています。</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

.about {
  font-family :
	'Yu Mincho', /* Windows用 */
	serif;
}
img {
  image-rendering: -webkit-optimize-contrast;
}
.image_header img {
	display: block;
	width: 100%;
	height: auto;
  object-fit: cover;
}


h2 {
  font-size: 1.2rem;
}

.icon{
  padding-right: 1%;
}
.icon img {
  width: 3.4rem;
  height: auto;
}

.side_img {
  width: 100%;
}
.side_img img{
  width: 100%;
  height: auto;
}
.container{
  width: 70%;
}
p.side_txt {
  width: 100%;
  text-align: left;
  font-size: 0.8rem;
  line-height: 200%;
  padding-left: 20%;
  
}

.head-border {
  display: flex;
  align-items: center;
}

.head-border:before,
.head-border:after {
  content: "";
  height: 1px;
  flex-grow: 0.8;
  background-color: #666;
}

.head-border:before {
  margin-right: 1rem;
  padding-right: 0rem;
  opacity: 0;
}

.head-border:after {
  margin-left: 1rem;
  padding-left: 70%;
}

.head-border_2 {
  display: flex;
  align-items: center;
}

.head-border_2:before,
.head-border_2:after {
  content: "";
  height: 1px;
  flex-grow: 0.8;
  background-color: #666;
}

.head-border_2:before {
  margin-right: 1rem;
  padding-right: 0rem;
  opacity: 0;
}

.head-border_2:after {
  margin-left: 1rem;
  padding-left: 79%;
}
.border{
  border: #666;
  margin: 3% auto;
}

@media screen and (max-width: 1090px){
  .container{
    width: 80%;
  }
  p.side_txt {
    padding-left: 10%;
  }
  .head-border:before {
    margin-right: 1rem;
    padding-right: 0rem;
  }

  .head-border:after {
    margin-left: 0.5rem;
    padding-left: 70%;
  }
  .icon{
    padding-right: 1rem;
  }
  

}

@media screen and (max-width: 768px){
  h2 {
  font-size: 1.1rem;
  }
  .container{
    width: 80%;
  }
  p.side_txt {
    width: 90%;
    padding: 0%;
    margin: auto;
  }
  .side_img img{
    width: 80%;
    height: auto;
  }
  .head-border:before {
    margin-right: 1rem;
    padding-right: 0rem;
  }

  .head-border:after {
    margin-left: 0.5rem;
    padding-left: 60%;
  }
  .icon{
    padding-right: 1rem;
  }
  .icon img {
    width: 3rem;
    height: auto;
  }
  .head-border_2:after {
    margin-left: 1rem;
    padding-left: 75%;
  }
}

@media screen and (max-width: 576px){
  .container{
    width: 90%;
  }
  h2 {
    font-size: 1.1rem;
  }
  p.side_txt {
    width: 94%;
  }

  .head-border:after {
    margin-left: 0.5rem;
    padding-left: 50%;
  }
  .icon{
    padding-right: 1rem;
  }
  .head-border_2:after {
    margin-left: 1rem;
    padding-left: 68%;
  }

}
</style>
