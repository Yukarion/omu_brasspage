<template>

  <a class="twitter-timeline" data-width="400" data-height="800" href="https://twitter.com/omu_wind?ref_src=twsrc%5Etfw">Tweets by omu_wind</a> 
  
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
</style>
