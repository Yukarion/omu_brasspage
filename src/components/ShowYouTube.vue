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
      const apikey = 'AIzaSyADlM2uDjO7Lm0Nq9brtdhzEeGtoG1vNko';
      const playlistid = 'UUvrAz5r2EVMbWNOEDoH0k8A';
      const maxresults = '1';
      const url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults='+maxresults +'&playlistId='+playlistid+'&key='+apikey;
      const response = await fetch(url);
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
</style>
