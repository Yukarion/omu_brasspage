<template>
  <div class="youtube">
    <div class v-if="load">
      <iframe class="embed-responsive-item" :src="link" title="YouTube video player" allow=" fullscreen"></iframe>
    </div>
    <div v-else>
      Now loading...
    </div>
  </div>
</template>

<script>
export default {
  name: "ShowYouTube",
  data() {
    return {
      load: false,
      link: "https://www.youtube.com/embed/"
    }
  },
  async mounted(){
    try {
      const url = 'https://youtube.omu-wind.com/';
      const response = await fetch(url, {mode: 'cors'});
      if(response.ok) {
        const json = await response.json();
        const videoid = json.items[0].snippet.resourceId.videoId;
        this.link = this.link + videoid;
        this.load = true;
      }else{
        throw new Error("response is not OK. response is :" + response.status);
      }
    } catch (e) {
      console.log("error: " + e)
    }
  },
};
</script>

<style>

  .embed-responsive-item {
    width: 70%;
    height: 45vw;
    padding-bottom: 3%;
  }
  @media screen and (max-width: 767px) {
    .embed-responsive-item {
      width: 80%;
      height: 45vw;
    }
  }
  @media screen and (max-width: 532px) {
    .embed-responsive-item {
      width: 80%;
      height: 45vw;
    }
  }
</style>
