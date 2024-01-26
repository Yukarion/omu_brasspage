<template>
  <div class="top">
    <Header :leaveTop="leaveTop" :moveTop="moveTop" :isTop="true" id="text-white" class="contents_header"/>
    <div class="image_header"><img src="../assets/topics_header.png"></div>
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
.image_header img {
	display: block;
	width: 100%;
	height: auto;
  object-fit: cover;
}
.contents_header{
  position:absolute;
  padding: 2%;
}

#text-white a {
  color: white;
}



</style>
