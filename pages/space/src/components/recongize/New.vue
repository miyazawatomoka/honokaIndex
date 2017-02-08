<template>
  <div class="center">
    <el-form :model="form" class="new-form">
      <el-row :gutter="20" class="center">
        <el-col :span="6" class="center">
          <el-form-item>
            <AvatarUploader />
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item>
            <el-input v-model="form.chinese_name" placeholder="中文名"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item>
            <el-input v-model="form.japanese_name" placeholder="日文名"></el-input>
          </el-form-item>
        </el-col>
        <el-col :span="6">
          <el-form-item>
            <el-input v-model="form.english_name" placeholder="英文名"></el-input>
          </el-form-item>
        </el-col>
      </el-row>
      <el-row>
        <el-col :span="24">
          <ImageWallUploader action="//jsonplaceholder.typicode.com/posts/"/>
        </el-col>
      </el-row>


      <el-form-item>
        <el-button type="primary" @click="onSubmit">提交</el-button>
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
        form: {
          chinese_name: '',
          japanese_name: '',
          english_name: ''
        }
      }
    },
    methods: {
      onSubmit() {
        console.log('submit!');
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
