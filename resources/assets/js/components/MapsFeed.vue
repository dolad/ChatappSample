<template>
<div>
  <div class="container">
    <div class="row">
        
          <div class="col-sm-4 align-item">
              One of three columns
          </div>
          <div class="col-sm-4 align-item">
            One of three columns
          </div>
          <div class="col-sm-4 align-item">
              One of three columns
          </div>
    
  </div>
</div>
</div>
</template>

<script>
export default {
    mounted(){
        console.log('mapfeed mounted succesfully')
    }
}
</script>
<style lang="scss" scoped>
.col-sm-4{
      border: 1px solid;
      height: 300px;
      width: 100%
}
</style>