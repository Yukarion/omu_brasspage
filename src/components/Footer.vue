<template>
  <div id="footer" class="container">
    <div class="row">
      <div id="access-top" class="col-3">
        <router-link to="/" @click="moveTop()">
          <img id="brass-logo" alt="omu_brass ico" src="../assets/omu_brass_logo_white.png" />
        </router-link>
      </div>
      <div id="menu" class="col-9">
        <router-link class="item" to="/greeting" @click="leaveTop()">ご挨拶</router-link>
        <router-link class="item" to="/about" @click="leaveTop()">活動紹介</router-link>
        <router-link class="item" to="/advertise" @click="leaveTop()">部員募集</router-link>
        <router-link class="item" to="/request" @click="leaveTop()">演奏会のご依頼</router-link>
        <br />
        <router-link class="item" to="/archive" @click="leaveTop()">過去の演奏会</router-link>
        <a href="" class="item" target="_blank" rel="noopener" @click="leaveTop()">部員ポータル</a>
        <router-link class="item" to="/link" @click="leaveTop()">リンク</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
  props: {
    leaveTop: Function,
    moveTop: Function
  }
}
</script>

<style>
#footer {
  background-color:#E82121;
}

#footer a {
  color:#FFFFFF;
}

#footer {
  width: 100%
}

</style>