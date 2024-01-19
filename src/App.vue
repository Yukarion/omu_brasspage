<template>
  <Header v-if="!isTop" :leaveTop="leaveTop" :moveTop="moveTop" :isNotTop="true"/>
  <router-view :leaveTop="leaveTop" :moveTop="moveTop" />
  <Footer :leaveTop="leaveTop" :moveTop="moveTop"/>
</template>

<script >
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

<style lang="scss">

@use 'sass:math';
@import url('https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Noto+Sans+JP:wght@400;600&family=Zen+Old+Mincho:wght@400;600&display=swap');
html {
  font-size: calc(12px + 10 * (100vw - 375px) / 1545);
}

$h1-font-size: 1rem * math.div(8, 4);
$h2-font-size: 1rem * math.div(8, 6);
$h3-font-size: 1rem * math.div(8, 7);
$base-font-size: 1rem * math.div(8, 8);
$small-font-size: 1rem * math.div(8, 9);

$surface-color: #ffffff;
$text-color: #484848;
$brand-color: #c34242;

$large-content-width: 1090px;
$medium-content-width: 768px;
$small-content-width: 576px;
$wrapper-padding: 20px;

body {
  margin: 0;
  padding: 0;
  overflow-y: scroll;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  hyphens: auto;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 600;
  text-align: left;
  hyphens: none;
  color: $text-color;
  font-family:'Arvo','Noto Sans JP', 
  sans-serif,'Yu Mincho', /* Windows用 */
  serif;
}

h1 {
  font-size: $h1-font-size;
  margin-top: 1rem;
  margin-bottom: 1rem;
}

h2 {
  font-size: $h2-font-size;
  margin-top: 1rem;
  margin-bottom: 1rem;
}

h3 {
  font-size: $h3-font-size;
  margin-top: 0rem;
  margin-bottom: 0rem;
}

h4,
h5,
h6 {
  font-size: $base-font-size;
  margin-top: 0.5rem;
  margin-bottom: 0rem;
}

a {
  color: $brand-color;
  text-decoration: none;

  &:hover {
    @media (hover: hover) {
      text-decoration: underline;
      opacity: 0.8;
    }
  }
}

p {
  color: $text-color;
  word-break: break-word;
  overflow-wrap: normal;
  margin: 0%;
}




@mixin media-query($width) {
  @media (max-width: $width) {
      @content;
  }
}



#app {
  font-family:
    'Yu Mincho', /* Windows用 */
    'Zen Old Mincho',
    'Noto Sans JP',
    serif;
  animation-name: fadeInAnime;
  animation-duration: 2s;
  animation-fill-mode: forwards;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -ms-overflow-style: none;
  transition: all 0.4s ease-in-out;
}

@keyframes fadeInAnime {
  from {
      opacity: 0;
  }

  to {
      opacity: 1;
  }
}

.pointer {
  cursor: pointer;
}
::-webkit-scrollbar {
  width: 16px;
  background-color: gray;
  visibility: hidden;
}

::-webkit-scrollbar-thumb {
  opacity: 0.8;
  border-radius: 10px;
  box-shadow: inset 0 0 10px 10px gray;
  border: solid 3px transparent;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: $text-color;
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

.contents-top{
  text-align: center;
  padding: 1rem 0rem;
}

.large-wrapper {
  position: relative;
  margin-right: auto;
  margin-left: auto;
  display: flex;
  padding: 2rem;
  justify-content: center;
  padding-left: $wrapper-padding;
  padding-right: $wrapper-padding;
  @include media-query($small-content-width) {
    padding-left: 0;
    padding-right: 0;
  }
}

.wrapper{
  width: 70%;
  padding: 2rem;
  @include media-query($large-content-width) {
    width: 70%;
  }
  
  @include media-query($medium-content-width) {
    width: 80%;
  }
  
  @include media-query($small-content-width) {
    width: 90%;
  }
}

</style>
