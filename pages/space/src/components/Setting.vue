<template>
  <div class="remain">
    <el-row class="remain" :gutter="50">
      <el-col :span="5"  class="remain">
        <el-menu default-active="setting" class="remain el-menu-vertical-demo" @open="handleOpen" @close="handleClose" @select="handleSelect">
          <el-submenu index="setting">
            <template slot="title"><i class="el-icon-setting"></i>账户设置</template>
            <el-menu-item index="profile">个人信息</el-menu-item>
            <el-menu-item index="password">修改密码</el-menu-item>
          </el-submenu>
          <el-menu-item index="statistics"><i class="el-icon-menu"></i>统计</el-menu-item>
        </el-menu>
      </el-col>
      <el-col :span="19" class="remain test">
        <router-view></router-view>
      </el-col>
    </el-row>
  </div>
</template>
<script>
  import router from 'router/index'
  export default {
    methods: {
      handleOpen(key, keyPath) {
        // console.log(key, keyPath);
      },
      handleClose(key, keyPath) {
        // console.log(key, keyPath);
      },
      handleSelect(key, keyPath) {
        router.push('/setting/'+key)
      }
    }
  }
</script>
<style scoped>
  .remain {
    height: 100%;
  }
</style>
