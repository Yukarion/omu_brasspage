<template>
  <Header />
  <div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/top">Top</router-link>
  </div>
  <router-view />
  <Footer />
</template>

<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
export default {
  components: {
    Header,
    Footer,
  },
};
</script>

<style>
#app {
  font-family: 'MS-GOTHIC';
  text-align: center;
  color:black
}
@font-face {
  font-family:'MS-GOTHIC','ROCK';
  src: url('./assets/fonts/MSGOTHIC.TTF'),url('./assets/fonts/ROCK.TTF')
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

#header a {
  padding: 10px;
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

</style>
