<template>
  <div class="container-lg header">
    <div class="row">
      <div id="access-top" class="col col-sm-3">
        <router-link to="/" @click="moveTop()" v-if="isTop">
          <img id="brass-logo" alt="omu_brass ico" src="../assets/omu_brass_logo_red.png" />
        </router-link>
      </div>
      <div id="header-menu" class="col col-sm-9">
            <router-link class="header-item" to="/greeting" @click="leaveTop()">ご挨拶</router-link>
            <router-link class="header-item" to="/about" @click="leaveTop()">活動紹介</router-link>
            <router-link class="header-item" to="/advertise" @click="leaveTop()">部員募集</router-link>
            <router-link class="header-item" to="/request" @click="leaveTop()">演奏会のご依頼</router-link>
            <router-link class="header-item" to="/archive" @click="leaveTop()">過去の演奏会</router-link>
            <a href="" class="header-item" target="_blank" rel="noopener" @click="leaveTop()">部員ポータル</a>
            <router-link class="header-item" to="/link" @click="leaveTop()">リンク</router-link>
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
#access-top {
}

#header-menu {
  padding: 3%;
}

.header-item {
  white-space: nowrap;
}

#header-menu a {
  color: #2c3e50;
  padding: 5px;
}

#brass-logo {
  width: 100%;
}
</style>