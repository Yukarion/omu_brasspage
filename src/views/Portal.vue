<template>
  <div class="portal">
    <div class="image_header"><img src="../assets/portal_header.png" /></div>
    <div class="large-wrapper">
      <div class="wrapper">
        <h1>資料用ドライブ</h1>
          <a
            class="link-wrapper"
            href="https://drive.google.com/drive/folders/1SXHaCE8-s9hsAgtmteepCZVSI--vGQyB"
          >
            <div class="icon-drive">
              <img src="../assets/portal_GoogleDrive.png" />
            </div>
            <div class="text-content">
              <h2>大阪公立大学吹奏楽部 <span>共有ドライブ</span></h2>
              <p>
                演奏会写真・録音、引き継ぎ資料、重要書類などをまとめています。
              </p>
            </div>
          </a>
          <a class="link-wrapper" href="https://onedrive.live.com/about/ja-jp/">
            <div class="icon-drive">
              <img src="../assets/portal_OneDrive.png" />
            </div>
            <div class="text-content">
              <h2>旧 大阪府立大学吹奏楽部 <span>共有ドライブ</span></h2>
              <p>
                前身の大阪府立大学吹奏楽部の演奏会写真・録音、引き継ぎ資料、重要書類などをまとめています。
              </p>
            </div>
          </a>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Portal",
  props: {
    leaveTop: Function,
    moveTop: Function,
  },
};
</script>

<style lang="scss">
$large-content-width: 1090px;
$medium-content-width: 768px;
$small-content-width: 576px;
$wrapper-padding: 20px;

@mixin media-query($width) {
  @media (max-width: $width) {
    @content;
  }
}
.link-wrapper {
  display: flex;
  align-items: center;
  max-width: 70%;
  @include media-query($small-content-width) {
    max-width: 90%;
  }
}

.wrapper{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.icon-drive {
  align-self: stretch;
  display: flex;
  align-items: center;
  img{
    width: 5rem;
    height: 5rem;
  }
}
.text-content {
  margin: auto;
  padding: 1rem;
}
</style>
