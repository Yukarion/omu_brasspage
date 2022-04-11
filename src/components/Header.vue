<template>
  <div class="container-lg header">
    <div class="row">
      <div class="col-3 access-top">
        <router-link to="/" @click="moveTop()" v-if="isTop">
          <img id="brass-logo" alt="omu_brass ico" src="../assets/omu_brass_logo_red.png" />
        </router-link>
      </div>
      <div class="col-9 menu">
        <div id="header-items">
          <div class="items-lap">
            <router-link class="item" to="/greeting" @click="leaveTop()">ご挨拶</router-link>
            <router-link class="item" to="/about" @click="leaveTop()">活動紹介</router-link>
            <router-link class="item" to="/advertise" @click="leaveTop()">部員募集</router-link>
          </div>
          <div class="items-lap">
            <router-link class="item" to="/request" @click="leaveTop()">ご依頼</router-link>
            <router-link class="item" to="/archive" @click="leaveTop()">過去の演奏会</router-link>
            <a href="" class="item" target="_blank" rel="noopener" @click="leaveTop()">部員ポータル</a>
          </div>
        </div>
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

.header {
  width: 100%;
  max-width: 100%;
  font-size: calc(1rem - 2 * (1920px - 100vw) / 1560);
  font-family:'GOTHIC';
}

.access-top {
  margin: 0.5rem 0rem;
}

.menu {
  position: relative;
}

.item {
  white-space: nowrap;
}

#header-items{
  position: absolute;
  top: 50%;
  right: 3%;
  transform: translateY(-50%);
  text-align: end;
}

#header-items a {
  color: #2c3e50;
  padding: 1rem 0.5rem;
}

#brass-logo {
  width: 100%;
}

</style>
