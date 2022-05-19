<template>
  <div class="portal">
    <div class="image_header"><img src="../assets/portal_header.png"></div>
    <div class="portal_lap">
      <div v-if="!passed" class="login">
        <div class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal">部員専用ページ</h1>
          <form>
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" v-model="userID">
              <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" v-model="password">
              <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" @click="submit()">Sign In</button>
          </form>
        </div>
      </div>
      <div v-else class="link container-md">
        <h1 class="h3 mb-3 fw-normal">資料用ドライブ</h1>
        <div class="googleDrive drive">
          <a class="h3 row" href="hoge">
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
  data() {
    return {
      userID: "hoge",
      password: "hoge",
      passed: false
    }
  },
  methods: {
    async submit(){
      try {
        const url = 'http://login.omu-wind.com/';
        /*
        どっちも同一のエラー ( error: TypeError: Failed to fetch) で死ぬ エラーもまともに出さないゴミカス言語滅べや

        json版 かなりわからん
        const form_data = {userID: this.userID, password: this.password};
        const json_form = JSON.stringify(form_data);
        console.log(json_form);
        const response = await fetch(url, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: json_form });
        */
        // %%%%%%%%%%%%%%%%%%%
        // FormData版 なにもわからん
        let body = new FormData();
        body.append("useriD", this.userID);
        body.append("password", this.password);
        const response = await fetch(url, { method: 'POST', body: body });
        console.log(body);

        // %%%%%%%%%%%%%%%%%%%
        if(response.ok) {
          const json = await response.json();
          if(json.userID){
            this.ID_passed = true;
            if(json.password){
              this.pass_passed = true;
              this.passed = true;
            }else{
              this.pass_passed = false;
              this.passed = false;
            }
          }else{
            this.ID_passed = false;
          }
        }else{
          throw new Error("response is not OK. response is :" + response.status);
        }
      } catch (e) {
        console.log("error: " + e)
      }
    }
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

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
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
