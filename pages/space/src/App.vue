<template>
  <div id="app">
    <el-row type="flex">
      <el-col :span="24">
        <NavBar />
      <el-col>
    </el-row>
    <div class="line"></div>
    <el-row type="flex" class="remain">
      <el-col :span="24">
        <router-view></router-view>
      </el-col>
    </el-row>

  </div>
</template>

<script>
import NavBar from 'components/NavBar'
export default {
  name: 'app',
  components: {
    NavBar
  }
}
</script>

<style>
html, body{
    height: 100%;
    margin: 0px;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  height: 100%;
  display:flex;
  flex-direction:column;
}
.line {
  height: 5vh;
}
.remain {
  flex: 1;
}
</style>
