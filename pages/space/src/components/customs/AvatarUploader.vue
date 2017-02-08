<template>
  <div class="avatar">
    <div class="mask center" v-on:click="handleClick">
      <div>点击上传</div>
      <div>新头像</div>
    </div>
    <input type="file" id="fileSelect" ref="avatarSelect" v-on:change="handleChange" name="avatar">
    <img src="../../assets/normal.jpeg" ref="avatarImg"></img>
  </div>
</template>
<script>
  export default {
    methods: {
      handleClick() {
        var input = this.$refs.avatarSelect;
        input.click();
      },
      handleChange(e) {
        var inputFile = e.target.files[0];
        var that = this;
        if (!inputFile) {
          return false;
        }
        if(!/image\/\w+/.test(inputFile.type)) {
          alert("need image file");
          return false;
        }
        var reader = new FileReader();
        reader.readAsDataURL(inputFile);
        reader.onload = function(e){
            that.$refs.avatarImg.src = this.result;
        }
        window.test = this;
      }
    }
  }
</script>
<style scoped>
.avatar {
  border-radius: 50%;
  width: 100px;
  height: 100px;
}
.avatar img {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 50%;
  width: 100px;
  height: 100px;
  z-index: -10;
}
.avatar input {
  display: none;
}
.mask {
  border-radius: 50%;
  width: 100px;
  height: 100px;
  z-index: 10;
  color: white;
  opacity: 0;
  font-weight: bold;
  flex-wrap: wrap;
}
.mask:hover {
  background-color: black;
  opacity: 0.8;
}
.mask {
  display: block;
}
.center {
  flex-direction: column;
  display: flex;
  align-items: center;
  justify-content: center;
  align-content: center;
}
</style>
