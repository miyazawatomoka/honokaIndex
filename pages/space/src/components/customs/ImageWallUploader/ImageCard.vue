<template>
  <div class="card">
    <img :src="src">
  </div>
</template>
<script>
export default {
  props: ['src']
}
</script>
<style scoped>
.card {
  width: 358px;
  height: 178px;
  border: 1px solid #bfcbd9;
  border-radius: 4px;
}
.card img {
  width: 358px;
  height: 178px;
}
</style>
