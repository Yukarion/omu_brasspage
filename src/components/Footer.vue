<template>
  <div id="footer">
    <div class="container-lg footer-in">
      <div class="row">
        <div class="col-3 access-top">
          <router-link to="/" @click="moveTop()">
            <img id="brass-logo" alt="omu_brass ico" src="../assets/omu_brass_logo_white.png" />
          </router-link>
        </div>
        <div class="col-9 menu">
          <div id="footer-items">
            <div class="items-lap">
              <router-link class="item" to="/greeting" @click="leaveTop()">ご挨拶</router-link>
              <router-link class="item" to="/about" @click="leaveTop()">活動紹介</router-link>
              <router-link class="item" to="/advertise" @click="leaveTop()">部員募集</router-link>
              <router-link class="item" to="/request" @click="leaveTop()">演奏会のご依頼</router-link>
            </div>
            <div class="items-lap">
              <router-link class="item" to="/archive" @click="leaveTop()">過去の演奏会</router-link>
              <a href="" class="item" target="_blank" rel="noopener" @click="leaveTop()">部員ポータル</a>
              <router-link class="item" to="/link" @click="leaveTop()">リンク</router-link>
            </div>
          </div>
        </div>
        <hr id="vertical-line">
        <div id="copyright-lap">
          <div id="copyright">
            Copyright @ 2022 Osaka Metropolitan University Brass Band All Right Reserved.
          </div>
        </div>
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
  width: 100%;
  font-size: calc(1rem - 2 * (1920px - 100vw) / 1560);
}

#footer a {
  color:#FFFFFF;
}

.footer-in {
  max-width: 75%;
}

#footer-items {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  width: 100%;
  height: 3rem;
  text-align: end;
}

#footer-items a {
  margin: auto calc(3vw - 0.8rem);
}

.items-lap {
  margin: auto;
  padding: calc(0.5rem - 4px) 0rem;
}

#vertical-line{
  background-color: #FFFFFF;
  color: #FFFFFF;
  height: 3px;
  margin: 0px;
}

#copyright-lap{
  text-align: end;
  width: 100%;
}

#copyright{
  transform: scale(0.7) translateX(25%);
  color: #FFFFFF;
}

</style>
