<template>
  <div class="top">
    <div class="box_header">
      <Header :leaveTop="leaveTop" :moveTop="moveTop" :isTop="true" id="text-white" class="contents_header"/>
      <div class="image_header"><img src="../assets/topics_header.png"></div>
    </div>
    <div class="name">
      <h1>Topics</h1>
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

.box_header {
  position: relative;
}

#text-white a {
  color: white;
}



</style>
