<template>
  <div class="greeting">
    <div class="image_header"><img src="../assets/greeting_header.png"></div>

    <div class="title">
      <h1>Osaka Metropolitan University Brass Band</h1>
    </div>
    <div class="sub_title">
      <h2>大阪公立大学吹奏楽部</h2>
    </div>
    <div class="contents">
      <div class="txt_1">
        <p>本日も大阪府立大学吹奏楽部のホームページをご覧いただき、誠にありがとうございます。
        大阪公立大学吹奏楽部は、年2回の演奏会（サマーコンサート、定期演奏会）を中心に活動を行っているほか、学校などへのレッスン、大学や地域のイベントでの依頼演奏など、毎年多くの場面で演奏の機会を頂いております。<br>
        また、阪神国公立大学吹奏楽連盟に所属している周辺の国公立大学の吹奏楽団や、当部OB・OGの方々とも吹奏楽を通じた交流を行っております。<br>
        これらの当部の活動に対し、絶えずご協力やご支援を頂戴している全ての方々に心より御礼申し上げます。今後とも大阪公立大学吹奏楽部に対するご支援とご協力をお願い申し上げます。<br>
      </p>
      </div>
    </div>
  </div>
</template>


<style scoped>
h1 {
  margin-top: 5%;
  font-size: 2rem;
}
h2 {
  margin-bottom: 8%;
  font-size: 1.5rem;
}
.image_header {
	margin-right: calc(50% - 50vw);
	margin-left: calc(50% - 50vw);
}
.image_header img {
	display: block;
	width: 100%;
	height: auto;
  object-fit: cover
}
.contents {
  margin: 5% auto;
  width: 83%;
  max-width: 900px; 
  font-family :
	'Yu Mincho', /* Windows用 */
	serif;
  font-size: 0.9rem;
}
.txt_1 {
  text-align: left;
}
</style>