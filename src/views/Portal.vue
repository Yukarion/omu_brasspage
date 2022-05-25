<template>
  <div class="portal">
    <div class="image_header"><img src="../assets/portal_header.png"></div>
    <div class="portal_lap">
      <div class="link container-md">
        <h1 class="h3 mb-3 fw-normal">資料用ドライブ</h1>
        <div class="googleDrive drive">
          <a class="h3 row" href="">
            <div class="image_ico col-3"><img src="../assets/GoogleDrive.png"></div>
            <div class="drive_txt col-9">
              <h1 class="h3 drive_name">大阪公立大学吹奏楽部 共有ドライブ</h1>
              <p class="h6">演奏会写真・録音、引き継ぎ資料、重要書類などをまとめています。</P>
            </div>
          </a>
        </div>
        <div class="oneDrive drive">
          <a class="h3 row" href="https://onedrive.live.com/about/ja-jp/">
            <div class="image_ico col-3"><img src="../assets/OneDrive.png"></div>
            <div class="drive_txt col-9">
              <h1 class="h3 drive_name">旧 大阪府立大学吹奏楽部 共有ドライブ</h1>
              <p class="h6">前身の大阪府立大学吹奏楽部の演奏会写真・録音、引き継ぎ資料、重要書類などをまとめています。</P>
            </div>
          </a>
        </div>
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


<style scoped>
.portal {
  align-items: center;
  padding-bottom: 10%;
}

.portal_lap {
  width: calc(50% + 180px);
  max-width: 95%;
  margin: auto;
}

.googleDrive {
  margin-bottom: 5%;
}

.image_ico img {
  max-width: 90%
}

.drive_txt {
  text-align: left;
  color: black;
}

.drive_name {
  padding-left: 0%;
  text-align: left;
  margin-bottom: 0%;
}

</style>
