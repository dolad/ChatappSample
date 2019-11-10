<template>
<div>
    <div class="jumbotron text-center" >
     <google-map :center="{lat: 1.38, lng: 103.8}" :zoom="12" style="width: 100%; height: 100px">
      <ground-overlay source="./overlay.png" :bounds="{
            north: 1.502,
            south: 1.185,
            east: 104.0262,
            west: 103.5998,
        }" :opacity="0.5">
      </ground-overlay>
    </google-map>
      
        
      

  </div>
  <div>
    <maps-feed/>
  </div>
  </div>
</template>

<script>
export default {
   
    
    data(){
      
    },

    mounted(){
      console.log('map mounted')
    }    
}
</script>
<style>
#map{
  width:100%;
  height: auto;
}

</style>