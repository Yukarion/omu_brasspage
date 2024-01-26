<template>
  <div class="youtube">
    <div class="youtube-wrapper">
      <div class v-if="load">
        <iframe class="embed-responsive-item" :src="link" title="YouTube video player" allow=" fullscreen"></iframe>
      </div>
      <div v-else class="loading">
        Now loading...
      </div>
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
  .youtube{
    width: 100%;
    display: flex;
  }
  .youtube-wrapper{
    width: 100%;
    padding: 0rem;
  }

  .loading{
    text-align: center;
    padding: 1rem 1rem
  }
  .embed-responsive-item {
    width: 100%;
    height: 45vw;
    padding-bottom: 3%;
  }

</style>
