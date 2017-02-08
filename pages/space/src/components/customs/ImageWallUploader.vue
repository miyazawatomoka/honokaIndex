<template>
  <div class="image-wall-uploader">
    <ImageCard v-for="src in imageBlobList" :src="src" class="image-card"/>
    <el-upload
      :action="action"
      type="drag"
      :on-remove="handleRemove"
      :default-file-list="fileList"
      :on-success="handleSuccess"
      :show-upload-list="false"
      :with-credentials="true"
      :multiple="true"
    >
      <i class="el-icon-upload"></i>
      <div class="el-dragger__text">将文件拖到此处，或<em>点击上传</em></div>
      <div class="el-upload__tip" slot="tip">只能上传jpg/png文件，且不超过500kb</div>
    </el-upload>
  </div>
</template>
<script>
import ImageCard from './ImageWallUploader/ImageCard'
export default {
  data() {
    return {
      fileList: [],
      imageBlobList: []
    }
  },
  props: ['action'],
  methods: {
    onSubmit() {
      console.log('submit!');
    },
    handleRemove(file, fileList) {
      console.log(file, fileList);
    },
    handleSuccess(response, file, fileList) {
      this.imageBlobList.push(file.url);
    }
  },
  components: {
    ImageCard
  }
}
</script>
<style scoped>
.image-wall-uploader {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.image-card {
  margin: 2px;
}
</style>
