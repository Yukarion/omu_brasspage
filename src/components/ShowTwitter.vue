<template>
  <div class="twitter-wrapper">
    <a class="twitter-timeline" data-width="500" data-height="500" href="https://twitter.com/omu_wind?ref_src=twsrc%5Etfw">Tweets by omu_wind</a> 
  </div>
  
</template>


<script>
export default {
  mounted() {
      let scriptEl = document.createElement('script')
      scriptEl.setAttribute('src', 'https://platform.twitter.com/widgets.js')
      document.getElementsByTagName('body')[0].appendChild(scriptEl)
    }
};
</script>

<style>
.twitter-wrapper{
  width: 100%;
  margin: auto;
  text-align: center;
  display: flex;
  justify-content: center;
}
</style>
