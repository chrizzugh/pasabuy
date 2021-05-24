<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm ">Education Info</p>
            </div>
           <div>  <label for="sub" id="edt3" @click="toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label></div>
        </div> 
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
        
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500 uppercase">College</p>
       <span>
           <p>{{userEduc.schoolName}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p  class="text-gray-500 uppercase">Highshool</p>
        <span>
          {{userEduc.schoolName}}
        </span>
        </span>
        </div>
        <div v-if="toggle" class=" fixed bg-black z-100 h-max w-screen   bg-opacity-75 overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
            <div class=" bg-white ring-1  ring-gray-300  w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
              p-5
          ">
             <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Education Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
           
         <div class=" ">
            <div id="school" class="flex flex-col  space-y-5
            ">
                <div class="flex flex-col space-y-2" id="schoolInput">
                   <span class="ml-2 uppercase font-bold text-sm text-gray-500">School</span> <input   type="text"  id="college" v-model="college" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                  <div class="flex items-center space-x-3 font-bold">
                    <input type="radio" checked name="satatus_ed" class="text-black"><p>Current</p>
                    <input type="radio" name="satatus_ed"><p>Previous</p>
                  </div>
                 </div> 
    
                
            </div>
             <div @click="addSchool" class="flex items-center space-x-3 font-bold">
                <p class="material-icons font-bold text-3xl text-blue-800 select-none cursor-pointer">
                add_circle
                </p>
                <p class=" font-bold text-md  font-nunito_sans text-blue-800 select-none">Add School</p>
                 </div>
           <div class="flex justify-between items-center mt-4  space-x-4 ">
              <button @click="toggle=false" class="px-3 focus:outline-none h-6 w-full bg-white ring-1 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="focus:outline-none px-5 bg-red-700 text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
    </div>
</template>
<script>
import store from "../store/index"
import api from "../api"
export default {
   
data(){
    return{
        toggle:false,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    
      college:null,
      junior_high:'Legaspi City Science High School',
      senior_high:'Legaspi City Science High School',
      schoolName:null,
      schoolStatus:null,
      educationLevel:null
  
    }
  
},
methods:{
  addSchool(){
    if(this.college !=null)
   { var original =document.getElementById('schoolInput');
     var clone = original.cloneNode(true); // "deep" clone
     original.parentNode.appendChild(clone);}
  },
     save_data(){
        this.college=document.getElementById('college').value;
        this.junior_high=document.getElementById('high_school').value;
        api.post('api/updateEduc', {schoolName:this.schoolName, status:this.schoolStatus, educationLeve:this.educationLevel}).then(res =>{
          console.log(res)
        })
       
     },
},
mounted(){
  this.schoolName=this.userEduc.schoolName
  this.schoolStatus=this.userEduc.schoolStatus
  this.educationLevel=this.userEduc.educationLevel
},
 computed:{
    userEduc(){
      return store.getters.getAuthEducation;
    }
  }
}
</script>
