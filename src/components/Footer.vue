<template>
  <div id="footer" class="container">
    <div class="row">
      <div id="access_top" class="col col-sm-3">
        <router-link to="/top">
          <!--
            <img alt="nmu_brass ico" src="../assets/_nmu_brass_ico.png" />
            -->
          Osaka Metropolitan University <br /> Brass Band <br />
          大阪公立大学吹奏楽部
        </router-link>
      </div>
      <div id="menu" class="col col-md-auto">
        <router-link to="/greeting">ご挨拶</router-link>
        <router-link to="/news">お知らせ</router-link>
        <router-link to="/about">活動紹介</router-link>
        <router-link to="/advertise">部員募集</router-link>
        <br />
        <router-link to="/request">演奏会のご依頼</router-link>
        <router-link to="/archive">過去の演奏会</router-link>
        <a href="" target="_blank" rel="noopener">部員ポータル</a>
        <router-link to="/link">リンク</router-link>
      </div>
    </div>
  </div>
</template>

<style>
#footer {
  background-color:#E82121;
}
#footer a {
  color:#FFFFFF;
}
#access_top {
  font-size: 14px;
  text-align: left;
  text-indent: -0em;
}
</style>
