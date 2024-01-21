<template>
  <div class="greeting">
    <HeroImage fileName="greeting_header.png" title="ごあいさつ" />
    <div class="large-wrapper">
      <div class="wrapper">
        <h1>Osaka Metropolitan University<span>Wind Orchestra</span></h1>
        <h2>大阪公立大学吹奏楽部</h2>
        <p>
          本日も大阪公立大学吹奏楽部のホームページをご覧いただき、誠にありがとうございます。
          大阪公立大学吹奏楽部は、年2回の演奏会（サマーコンサート、定期演奏会）を中心に活動を行っているほか、学校などへのレッスン、大学や地域のイベントでの依頼演奏など、毎年多くの場面で演奏の機会を頂いております。<br />
          また、阪神国公立大学吹奏楽連盟に所属している周辺の国公立大学の吹奏楽団や、当部OB・OGの方々とも吹奏楽を通じた交流を行っております。<br />
          これらの当部の活動に対し、絶えずご協力やご支援を頂戴している全ての方々に心より御礼申し上げます。今後とも大阪公立大学吹奏楽部に対するご支援とご協力をお願い申し上げます。<br />
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import HeroImage from "@/components/HeroImage.vue";

export default {
  components: {
    HeroImage,
  },
};
</script>

