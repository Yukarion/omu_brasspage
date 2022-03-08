<template>
  <Header v-if="isNotTop" :leaveTop="leaveTop" :moveTop="moveTop"/>
  <router-view :leaveTop="leaveTop" :moveTop="moveTop" />
  <Footer :leaveTop="leaveTop" :moveTop="moveTop"/>
</template>

<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
export default {
  data() {
    return {
      isNotTop: false
    }
  },
  methods: {
    moveTop() {
      this.isNotTop = false;
    },
    leaveTop() {
      this.isNotTop = true;
    }
  },
  components: {
    Header,
    Footer,
  },
};
</script>

<style>
#app {
  font-family:'ROCK','GOTHIC';
  text-align: center;
  color:black;
}

@font-face {
  font-family:'ROCK';
  src:url('./assets/fonts/ROCK.TTF');
}

@font-face {
  font-family:'GOTHIC';
  src:url('./assets/fonts/MSGOTHIC.TTF');
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

#header {
  padding: 10px;
  font-weight: bold;
  color: #2c3e50;
}

.selector-for-some-widget {
  box-sizing: content-box;
}
</style>
