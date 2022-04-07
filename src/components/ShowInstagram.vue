<template>
  <div class="instagram">
    <div class="container">
      <div v-if="load" class="row">
        <div v-for="(post, name, index) in post_data" :key="index" :class="index" class="col-4">
          <a :href="post.permalink" target="_blank" rel="noopener" >
            <img :src="post.thumbnail_url" :alt="post.caption" v-if="post.media_type=='VIDEO'"/>
            <img :src="post.media_url" :alt="post.caption" v-else/>
          </a>
        </div>
      </div>
      <div v-else>
        Now loading...
      </div>
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
      const url = 'https://instagram.omu-wind.com/';
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
  .container {
    margin: 0;
  }
  .row {
  width: 100%;
  }
  .col-4 {
  margin: 1%;
  display: block;
  position: relative;
  max-width: 30%;
  }
  .col-4::before {
  content: "";
  display: block;
  padding-top: 100%;
  }
  .col-4 img{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  object-fit: cover;
  }

  @media screen and (max-width: 767px) {
  .col-4 {
  max-width: 40%;
  }
  }

</style>
