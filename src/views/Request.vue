<template>
  <div class="request">
    <HeroImage fileName="request_header.png" title="演奏のご依頼" />
    <div class="large-wrapper">
      <div class="wrapper">
        <div class="contents-top">
          <h1>ご依頼について</h1>
          <p>
            当部では学内外を問わず依頼演奏を承っております。<br />
            お客様のご要望に合わせて様々な形態を用意して、<br />
            より多くの方に私たちの演奏をきいていただく思っております。<br />
            ご予算・編成・演奏時間・曲目などにつきましては<span
              >柔軟に対応させていただきます。</span
            >
          </p>
        </div>
        <div class="bullet-points-box">
          <p>
            ・依頼演奏に際しての運搬用トラックなどはこちらで<span
              >準備いたします。</span
            ><br />
            ・全ての依頼にお応えできるとは限りませんので<span
              >ご了承ください。</span
            ><br />
            ・依頼を受けやすい月は2月、3月、4月、8月、9月です。<br />
            ・料金に関しては、なるべく配慮いたしますので<span
              >ご相談ください。</span
            ><br />
            ・謝礼金は演奏会にかかる費用に充てさせていただきます。<br />
            ・お問い合わせには以下の受付フォームで<span
              >お願いいたします。</span
            >
          </p>
        </div>

        <table class="table_Rq">
          <tr>
            <td width="32%">必要事項</td>
            <td width="68%">
              日程、費用、ご依頼内容、団体名、<span>会場の所在地、</span
              ><span>会場の最寄り駅</span><br />
              連絡先（お名前、電話番号又はメールアドレス）<br />
            </td>
          </tr>
          <tr>
            <td>依頼演奏実績</td>
            <td>
              式典でのファンファーレ、入場行進用音楽、<span
                >豪華外国客船の歓迎演奏、</span
              >
              ホテルやデパートのロビー演奏、試合の応援、小学校の<span
                >芸術鑑賞会での演奏</span
              >
              <span>お祭り、</span>老人ホームでの演奏ステージ<br />
            </td>
          </tr>

          <tr>
            <td>曲目例</td>
            <td id="exception_1">
              <table class="table_in_tb">
                <tr>
                  <td width="30%">式典</td>
                  <td width="70%">ファンファーレ、得賞歌など</td>
                </tr>
                <tr>
                  <td>行進曲</td>
                  <td>
                    マーチ「ベストフレンド」、ラデッキー行進曲、星条旗よ永遠なれなど
                  </td>
                </tr>
                <tr>
                  <td id="exception_2">ポップス</td>
                  <td id="exception_2">
                    ルパン三世のテーマ、学園天国、あー夏休み、いい旅立ち、
                    <span>笑ってたいんだ、</span
                    >君の瞳に恋してる、<span>銀河鉄道999、</span>ドラゴンソウル、楽器紹介など
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>お問い合わせ先</td>
            <td>
              <span class="style_2">メール</span>：<a
                href="mailto:opubrass.sns@gmail.com"
                >opubrass.sns@gmail.com</a
              ><br />
              <span class="style_2">Twitter</span>：<a
                href="https://twitter.com/omu_wind"
                >@omu_wind</a
              ><br />
              <span class="style_2">Instagram</span>：<a
                href="https://www.instagram.com/omuwind/?hl=ja"
                >omu_wind</a
              ><br />
              ※TwitterまたはInstagramのDMがおすすめです
            </td>
          </tr>
        </table>
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

<style lang="scss">
$large-content-width: 1090px;
$medium-content-width: 768px;
$small-content-width: 576px;
$surface-color: #ffffff;
$text-color: #484848;
$brand-color: #c34242;

@mixin media-query($width) {
  @media (max-width: $width) {
    @content;
  }
}

.bullet-points-box {
  margin: 2rem auto;
  border: solid 1px $text-color;
  padding: 1rem 0;

  p {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    margin: 3rem;
    text-align: left;
    @include media-query($small-content-width) {
      margin: 1rem;
    }
  }
}
table.table_Rq {
  text-align: left;
  width: 100%;
}
table.table_Rq td {
  margin: auto;
  border-width: 1px 0px;
  padding: 1rem 3vw;
}
#exception_1 {
  padding: 0%;
}
#exception_2 {
  border-style: none;
}

table.table_in_tb {
  text-align: left;
  width: 100%;
  margin: 0;
  padding-right: 0%;
}
table.table_in_tb td {
  margin: 0;
  border-style: none;
  border-bottom: 1px solid #333;
  padding-right: 0%;
}
span {
  display: inline-block;
}
span.style_1 {
  display: inline-block;
  width: 6rem;
}
</style>
