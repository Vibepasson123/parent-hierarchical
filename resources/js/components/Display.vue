<template>
<div>


<div class=" card card-cascade narrower ">
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
      <button type="button" v-on:click="setNormal()" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-columns mt-0"></i>
      </button>
    </div>
  <a  class="white-text mx-3"><h5>{{Email}}:: <br> Ascendants </h5>   </a>
    <div>
    </div>
  </div>
  <div class="px-4">
    <div class="table-wrapper container">
      <table class="table table-hover mb-0 ">
        <thead>
          <tr>
            <th class="th-lg">
              <a><strong> Email</strong> </a>
            </th>
            <th class="th-lg">
              <a><strong>Relations</strong></a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr   v-for="ascendant  in ascendants.records" :key="ascendant._fields" >
            <td>{{ascendant._fields[1]}}</td>
            <td>{{ascendant._fields[0]}}</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</div>
<div class=" card card-cascade narrower " style="padding-top: 25px;">
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
      <button type="button" v-on:click="setNormal()" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-columns mt-0"></i>
      </button>
    </div>
     <a  class="white-text mx-3"><h5>{{Email}}:: <br> Dscendants </h5>   </a>
    <div>
    </div>
  </div>
  <div class="px-4">
    <div class="table-wrapper container">
      <table class="table table-hover mb-0 ">
        <thead>
          <tr>
            <th class="th-lg">
              <a><strong> Email</strong> </a>
            </th>
            <th class="th-lg">
              <a><strong>Relations</strong></a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr   v-for="descendant  in descendants.records" :key="descendant._fields" >
            <td>{{descendant._fields[1]}}</td>
            <td>{{descendant._fields[0]}}</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</div>
</div>
</template>
<script>
export default {
   props:{
       resultdata: {
           type: Array,
           required: true
       },
        Email: {
            type: String,
            required: true
        },
        setNormal:{
            type:Function,
        },
        ascendants:{
            type:Object,
            required:true,
        },
        descendants:{
            type:Object,
            required:true,
        }
   },
   methods:{
        playSound (sound) {
                if(sound) {
                    var audio = new Audio(sound);
                    audio.play();
                }
            },
       checkNew:function() {

       }
   }
}
</script>

