<template>
  <div class="center">
    <el-form :model="newForm" class="new-form" :rules="rules" ref="newForm">
      <el-row :gutter="20" class="center">
        <el-col :span="6" class="center">
          <el-form-item>
            <AvatarUploader ref="avatarUploader"/>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item prop="chineseName">
            <el-input v-model="newForm.chineseName" placeholder="中文名"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item prop="japaneseName">
            <el-input v-model="newForm.japaneseName" placeholder="日文名"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item prop="englishName">
            <el-input v-model="newForm.englishName" placeholder="英文名"></el-input>
          </el-form-item>
        </el-col>
      </el-row>
      <el-row>
        <el-col :span="24">
          <ImageWallUploader action="//localhost:3000/images" ref="imageWallUploader" />
        </el-col>
      </el-row>


      <el-form-item>
        <el-button type="primary" @click="onSubmit('newForm')">提交</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>
<script>
  import AvatarUploader from '../customs/AvatarUploader'
  import ImageWallUploader from '../customs/ImageWallUploader'
  export default {
    data() {
      return {
        newForm: {
          chineseName: '',
          japaneseName: '',
          englishName: '',
        },
        rules: {
          chineseName: [
           { required: true, message: '请输入中文名', trigger: 'blur' },
          ],
          japaneseName: [
            { required: true, message: '请输入日文名', trigger: 'blur' },
          ],
          englishName: [
            { required: true, message: '请输入英文名', trigger: 'blur' },
          ],
        }
      }
    },
    methods: {
      onSubmit(formName) {
        window.test = this;
        this.$refs[formName].validate((valid) => {
          if (!valid) {
            return false;
          }
          else {
            var formData = new FormData();
            formData.append('englishName', this.newForm.englishName);
            formData.append('japaneseName', this.newForm.japaneseName);
            formData.append('chineseName', this.newForm.chineseName);
            formData.append('fileList', this.$refs.imageWallUploader.serversFileNameList)
            formData.append('avatar', this.$refs.avatarUploader.file)
            this.$http.post('//localhost:3000/lab/recognize/figures', formData).then(response => {
              console.log(response)
            }, response => {
              console.log(response)
            });
          }
        });
      }
    },
    components: {
      AvatarUploader,
      ImageWallUploader
    }
  }
</script>
<style scoped>
  .center {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .new-form {
    width: 85%;
  }
</style>
