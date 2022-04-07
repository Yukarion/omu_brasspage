<template>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-4">
        <h6>twitter</h6>
        <ShowTwitter /> 
      </div>
      <div class="col-md-8">
        <h6>Instagram</h6>
        <ShowInstagram />
      </div>
    </div>
  </div>
  <h6>Youtube</h6>
  <ShowYouTube />
</template>

<script>
import ShowInstagram from "@/components/ShowInstagram.vue";
import ShowTwitter from "@/components/ShowTwitter.vue";
import ShowYouTube from "@/components/ShowYouTube.vue";
export default {
  data() {
    return {
    }
  },
  methods: {
  },
  components: {
    ShowInstagram,
    ShowYouTube,
    ShowTwitter,
  },
};
</script>

<style>
  h1{
    padding: 3%;
  }
  h6{
    font-size: 1rem;
    color: #c34242;
    padding: 2%;
  }

  .container {
    margin: auto;
    max-width: 1500px;
    padding: 0% 5%;
  }
</style>
