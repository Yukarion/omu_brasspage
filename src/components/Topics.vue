<template>
  <div class="large-wrapper">
    <div class="wrapper">
      <h1>Topics</h1>
      <div class="row">
        <div class="col-md-4" id="twitter">
          <h2>Twitter</h2>
          <ShowTwitter />
        </div>
        <div class="col-md-8" id="instagram">
          <h2>Instagram</h2>
          <ShowInstagram />
        </div>
      </div>
      <h2>Youtube</h2>
      <ShowYouTube />
    </div>
  </div>
</template>

<script>
import ShowInstagram from "@/components/ShowInstagram.vue";
import ShowTwitter from "@/components/ShowTwitter.vue";
import ShowYouTube from "@/components/ShowYouTube.vue";
export default {
  data() {
    return {};
  },
  methods: {},
  components: {
    ShowInstagram,
    ShowYouTube,
    ShowTwitter,
  },
};
</script>

<style lang="scss">
$large-content-width: 1090px;
$medium-content-width: 768px;
$small-content-width: 576px;
$surface-color: #ffffff;
$text-color: #484848;
$brand-color: #c34242;

h1 {
  text-align: center;
}

h2 {
  text-align: center;
  color: $brand-color;
}

@media screen and (max-width: 576px) {
  .container {
    margin: auto;
    max-width: 1500px;
    padding: 0% 5%;
  }
  #twitter {
    width: 75%;
  }
  #instagram {
    padding: 0%;
  }
}
</style>
