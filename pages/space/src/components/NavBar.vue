<template>
  <div>
    <el-menu default-active="1" class="el-menu-demo" mode="horizontal" @select="handleSelect" :router="true">
      <el-menu-item index="/">主页</el-menu-item>
      <el-submenu index="recongize">
        <template slot="title">人物识别</template>
        <el-menu-item index="/recongize/new">新建图片集</el-menu-item>
        <el-menu-item index="/recongize/update">更新图片集</el-menu-item>
        <el-menu-item index="/recongize/uploaded">已上传图片</el-menu-item>
      </el-submenu>
      <el-menu-item index="setting">设置</el-menu-item>
    </el-menu>
  </div>
</template>

<script>
  import router from 'router/index'
  export default {
    methods: {
      handleSelect(key, keyPath) {
      }
    }
  }
</script>
<style scoped>
</style>
