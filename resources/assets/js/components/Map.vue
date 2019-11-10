<template>
<div class="container mapComponent">
<div class="class back">

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                        <div class="container-fluid">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                  <maps-google></maps-google>
                                                  </div>
                                                    
                                                </div>
                                                
                                                <div class="row">
                                                  <div class="col-sm-4">
                                                    Level 1: .col-sm-9
                                                  </div>
                                                  <div class="col-sm-4">
                                                    Level 1: .col-sm-9
                                                </div>
                                                <div class="col-sm-4">
                                                        Level 1: .col-sm-9
                                                </div>


                                                </div>
                                              </div>


                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                    </div>







</div>
              

</div>


</template>

<script>
export default {
    
    mounted(){
        console.log('Map component is mounted')
    }
}
</script>



<style lang="scss" scoped>

</style>