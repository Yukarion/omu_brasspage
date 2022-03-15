<template>
  <div class="greeting">
    <div class="image"><img src="../assets/greeting_header.png"></div>
    <h2 class="title">Osaka Metropolitan University Brass Band</h2>
    <h3 class="sub_title">大阪公立大学吹奏楽部</h3>
    
    <div class="contents">
      <p>本日も大阪府立大学吹奏楽部のホームページをご覧いただき、誠にありがとうございます。<br>
        大阪公立大学吹奏楽部は、年2回の演奏会（サマーコンサート、定期演奏会）を中心に活動を行っているほか、学校などへのレッスン、大学や地域のイベントでの依頼演奏など、毎年多くの場面で演奏の機会を頂いております。<br>
        また、阪神国公立大学吹奏楽連盟に所属している周辺の国公立大学の吹奏楽団や、当部OB・OGの方々とも吹奏楽を通じた交流を行っております。
        これらの当部の活動に対し、絶えずご協力やご支援を頂戴している全ての方々に心より御礼申し上げます。<br>今後とも大阪公立大学吹奏楽部に対するご支援とご協力をお願い申し上げます。<br>
      </p>
    </div>
  </div>
</template>


<style scoped>
.image {
	margin-right: calc(50% - 50vw);
	margin-left: calc(50% - 50vw);
}

.image img {
	display: block;
	width: 100%;
	height: auto;
  object-fit: cover;
}

.title {
  font-size: max(20px, 3vw);
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

.sub_title {
  font-size: max(16px, 2vw);
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

.contents {
  text-align: left;
  max-width: 900px;
  min-margin: 10%;
  margin: 10% max(5%, calc( 5em + 10 * ( 100vw - 40em ) / (67 - 40) ));
  font-family :
	'Yu Mincho', /* Windows用 */
	serif;
  font-size: max(12px, 1.35vw);
}

/*
@media (min-width: 800px) {
  div.contents {
    margin-top: calc( 5em + 10 * ( 100vw - 40em ) / (67 - 40) );
  }
}
*/


</style>