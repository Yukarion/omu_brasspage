<template>
  <div class="container header">
    <div class="row">
      <div class="col col-sm-3 access_top">
        <router-link to="/" @click="moveTop()" v-if="isTop">
          <img class="brass_logo" alt="nmu_brass ico" src="../assets/omu_brass_logo_red.png" />
        </router-link>
      </div>
      <div class="col col-md-auto menu">
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
    moveTop: Function,
    isNotTop: Boolean,
  },
   data() {
    return {
      isTop: this.isNotTop
    }
  },
};
</script>

<style>
.access_top {
  font-size: 14px;
  text-align: left;
  text-indent: -0.7em;
}

.menu {
  padding: 30px;
}

.menu a {
  font-weight: bold;
  color: #2c3e50;
}

.menu a.router-link-exact-active {
  color: #42b983;
}

.brass_logo {
  height: 143px;
  width: 301px;
}
</style>
