<template>
  <div class="instagram">
    <div v-if="load">
      <div v-for="(post, name, index) in post_data" :key="index" :class="index">
        <a :href="post.permalink" target="_blank" rel="noopener">
          <img :src="post.thumbnail_url" :alt="post.caption" v-if="post.media_type=='VIDEO'"/>
          <img :src="post.media_url" :alt="post.caption" v-else/>
        </a>
      </div>
    </div>
    <div v-else>
      Now loading...
    </div>
  </div>
</template>

<script>
export default {
  name: "ShowInstagram",
  data() {
    return {
      load: false,
      post_data: null,
    }
  },
  async mounted(){
    try {
      console.log("hoge")
      const url = 'https://instagram.opu-brass.com/';
      const response = await fetch(url, {mode: 'cors'});
      if(response.ok) {
        const res = await response.json();
        this.post_data = res.media.data;
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
