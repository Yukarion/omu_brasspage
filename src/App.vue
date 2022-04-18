<template>
  <Header v-if="!isTop" :leaveTop="leaveTop" :moveTop="moveTop" :isNotTop="true"/>
  <router-view :leaveTop="leaveTop" :moveTop="moveTop" />
  <Footer :leaveTop="leaveTop" :moveTop="moveTop"/>
</template>

<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
export default {
  data() {
    return {
      isTop: true
    }
  },
  methods: {
    moveTop() {
      this.isTop = true;
    },
    leaveTop() {
      this.isTop = false;
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
  font-family:
    'Yu Mincho', /* Windows用 */
    serif;
  text-align: center;
  color:black;
}

h1, h2, h3, h4, h5, h6 {
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

.row{
  --bs-gutter-x: 0;
}

a {
  text-decoration:none;
}

img {
  image-rendering: -webkit-optimize-contrast;
}

</style>
