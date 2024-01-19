<template>
  <div class="hero-image-container">
    <div class="hero-image">
      <!-- 画像 -->
      <div class="text-overlay">
        <h1>{{ title }}</h1>
      </div>
      <div class="image-overlay mask"></div>
      <img
        :src="`src/assets/${fileName}`"
        alt="Hero Image"
        class="image-overlay"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: {
    fileName: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
  },
};
</script>

<style lang="scss">
$large-content-width: 1090px;
$medium-content-width: 768px;
$small-content-width: 576px;
@mixin media-query($width) {
  @media (max-width: $width) {
    @content;
  }
}
.hero-image-container {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}

.hero-image {
  position: relative;
  overflow: hidden;
  width: 100%;
}

.image-overlay {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.mask {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.137); /* 黒い透明なマスクのスタイル */
}

.text-overlay {
  position: absolute;
  width: 100%;
  z-index: 1;
  top: 50%;
  left: 80%;
  transform: translate(-50%, -50%);
  text-align: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  @include media-query($small-content-width) {
    left: 50%;
  }
  h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: white;
    font-family: "Zen Old Mincho", "Yu Mincho", "Arvo", "Noto Sans JP",
      sans-serif, serif;
    @include media-query($small-content-width) {
      font-size: 2rem;
    }
  }
}
</style>
