<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  p-3 space-y-4">
<div class="  w-608  flex-col justify-center self-center mt-24 gap-y-5 hidden 
              2xl:block 
              xl:block 
              lg:block 
              ">
      <p class="text-2xl  font-nunito font-bold flex uppercase ">shopping lists</p>
</div>
  <div class="  flex  justify-center ">
    <div class="w-608 mt-20
     2xl:w-608 2xl:mt-0
              lg:w-608 lg:mt-0
              xl:w-608 xl:mt-0
              md:w-10/12 md:mt-0
              sm:w-11/12 
    p-6 rounded-xl shadow-lg bg-white">
    <button class="bg-gray-200 rounded-2xl w-full text-left 
    text-gray-400
    h-16 pl-2 focus:outline-none">Create new shopping list</button>
    </div>
  </div>
 <div class=" flex flex-col  justify-center self-center  w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl
              2xl:w-608 2xl:mt-0
              lg:w-608 lg:mt-0
              xl:w-608 xl:mt-0
              md:w-10/12 md:mt-0
              sm:w-11/12 
 " >
        <div class=" flex justify-between mb-4">
            <div class="flex flex-col gap-4">
            <span class="flex justify-between gap-x-3"> 
            <p class="font-bold font-nunito">Shopping List # {{list_number+1}}</p>
    
            </span>
            </div>
                <div class="vs:flex-col"> 
                <button @click="editVisible=!editVisible" class="ml-16 text-sm font-bold  focus:outline-none">
                  <span class="material-icons">
                  more_vert
                </span></button>
           </div>
         </div>
            <div v-if="editVisible" class=" self-end mb-10 mr-4 items-center p-2 shadow-2xl rounded-xl absolute bg-white ">
                <div class="flex cursor-pointer  space-x-2 items-center">
                  <span class="material-icons text-gray-400">
                  mode
                </span>
                <p class="select-none">Edit list</p>
                </div>
                <div class="flex cursor-pointer  items-center space-x-2">
                  <span class="material-icons text-gray-400">
                    delete
                  </span>
                  <p class="select-none">Delete</p>
                </div>
            </div>
        <div class="bg-gray-300  py-1 px-3 rounded-2xl"> 
        <ul id="example-1" class="list-disc text-sm list-inside grid grid-cols-2 p-5">
       <li v-for="item in items" :key="item.list" class="font-bold">
        {{ item.list }}
       </li>
        </ul>
        </div>
        
      </div>   
      <div class="text-center">
      <p class="text-gray-500 text-sm">
        Privacy Policy-Cookies Policy-Terms and Conditions
        Return and Refund Policy-PasaBuy   2021
    </p>
      </div>
       </div>

</template>
<script>
import Nav from '../views/Navbar.vue'
export default {
  name: 'shopping-list',
  components: {
    Nav,
    
  },
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
  data(){
    return{
        editVisible: false,
        list_number:0,
       items: [
        { list: 'Pork' },
        { list: 'flour(1kg)' },
        { list: 'Brown Sugar' },
    ],
}
},
methods:{
    update_order(){
  if(this.selected!="Confirmed"){
      alert(this.selected+'?');
  }
  
    document.getElementById("select_option").style="hidden";
    },
    
    isActive_function(el){
     if(el=='btn1'){
      this.  activeBtn= 0;
    }
    else {
        this.  activeBtn= el;
        }
    },
    toggleeditShopList(){
      this.editVisible = !this.editVisible 
    },
    editlistener(){
      this.editVisible = false;
    },
}
}
</script>
