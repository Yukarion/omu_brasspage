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
  created(){
    const apikey = 'AIzaSyADlM2uDjO7Lm0Nq9brtdhzEeGtoG1vNko';
    const playlistid = 'UUvrAz5r2EVMbWNOEDoH0k8A';
    const maxresults = '1';
    const url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults='+maxresults +'&playlistId='+playlistid+'&key='+apikey;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, false);
    xhr.send();
    if(xhr.readyState === 4 && xhr.status === 200) {
      var json = JSON.parse(xhr.responseText || null);
      console.log(json);
      console.log(this.link);
      var videoid = "";
      videoid = json.items[0].snippet.resourceId.videoId;
      this.link = this.link + videoid;
      console.log(this.link);
      this.load = true;
    };
  },
};
</script>

<style>
</style>
