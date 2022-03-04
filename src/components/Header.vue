<template>
  <div id="header" class="container">
    <div class="row">
      <div id="access_top" class="col col-sm-3">
        <router-link to="/" @click="moveTop()">
          <!--
            <img alt="nmu_brass ico" src="../assets/_nmu_brass_ico.png" />
            -->
          Osaka Metropolitan University <br /> Brass Band <br />
          大阪公立大学吹奏楽部
        </router-link>
      </div>
      <div id="menu" class="col col-md-auto">
        <router-link to="/greeting" @click="leaveTop()">ご挨拶</router-link>
        <router-link to="/news" @click="leaveTop()">お知らせ</router-link>
        <router-link to="/about" @click="leaveTop()">活動紹介</router-link>
        <router-link to="/advertise" @click="leaveTop()">部員募集</router-link>
        <router-link to="/request" @click="leaveTop()">演奏会のご依頼</router-link>
        <router-link to="/archive" @click="leaveTop()">過去の演奏会</router-link>
        <a href="" target="_blank" rel="noopener" @click="leaveTop()">部員ポータル</a>
        <router-link to="/link" @click="leaveTop()">リンク</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  props: {
    leaveTop: Function,
    moveTop: Function
  }
}
</script>


<style>
#access_top {
  font-size: 14px;
  text-align: left;
  text-indent: -0.7em;
}
#header{
  font-size: 18px;
}
</style>
