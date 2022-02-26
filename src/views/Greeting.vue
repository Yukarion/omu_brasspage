<template>
  <div class="greeting">
    <h2>ご挨拶</h2>
  </div>
  <div class="jumbotron">
    <h1>ごあいさつ</h1>
  </div>

  <div class="image"><img src="../assets/greeting_header_2.png"></div>

  <div class="title">
    <h2>Osaka Metropolitan University Brass Band</h2>
  </div>
  <div class="sub_title">
    <h3>大阪公立大学吹奏楽部</h3>
  </div>
  <div class="contents">
    <p>本日も大阪府立大学吹奏楽部のホームページをご覧いただき、誠にありがとうございます。<br>
      大阪公立大学吹奏楽部は、年2回の演奏会（サマーコンサート、定期演奏会）を中心に活動を行っているほか、<br>学校などへのレッスン、大学や地域のイベントでの依頼演奏など、毎年多くの場面で演奏の機会を頂いております。<br>
      また、阪神国公立大学吹奏楽連盟に所属している周辺の国公立大学の吹奏楽団や、当部OB・OGの方々とも<br>吹奏楽を通じた交流を行っております。
      これらの当部の活動に対し、絶えずご協力やご支援を頂戴している<br>全ての方々に心より御礼申し上げます。今後とも大阪公立大学吹奏楽部に対するご支援とご協力をお願い申し上げます。<br>
    </p>
  </div>
</template>


<style scoped>
  .jumbotron { background:url("../assets/greeting_header_2.png") 
  center no-repeat; 
  padding-top: calc(200 / 1000 * 100%);
  background-size: cover;
  width: 100%;
	height: auto;
  margin-right: calc(50% - 50vw);
	margin-left: calc(50% - 50vw);
  }
.jumbotron h1,
.jumbotron .h1 {
  color: white;
  font-size: 72px;
  transform: translate(-30px,10px);
}
.image {
	margin-right: calc(50% - 50vw);
	margin-left: calc(50% - 50vw);
}

.image img {
	display: block;
	width: 100%;
	height: auto;
  object-fit: cover
}

</style>