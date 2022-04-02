<template>
  <div class="top">
    <Header :leaveTop="leaveTop" :moveTop="moveTop" :isTop="true" id="text-white"/>
    <div class="name">
      <h1>Osaka Metropolitan University <br /> Brass Band</h1>
      <h5>大阪公立大学吹奏楽部</h5>
    </div>
    
    <Topics />
  </div>
</template>

<script>

import Header from "@/components/Header.vue";
import Topics from "@/components/Topics.vue";

export default {
  name: "Top",
  components: {
    Header,
    Topics,
  },
  props: {
    leaveTop: Function,
    moveTop: Function
  },
};

</script>

<style>
.top {
  background-image: url(../assets/topics_header.jpg);
}

#text-white a {
  color: white;
}

</style>
