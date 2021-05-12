<template>
 <div v-on:click.self="close" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
   <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-538 ssm:w-full vs:w-full" >

       <div class="flex flex-row w-full justify-end se:space-x-11 ssm:space-x-8 vs:space-x-16 space-x-46 items-center py-4">
       <h1 class="text-gray-900  leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
         Edit Skills
       </h1>
       <button @click.prevent="close" class="mt-2 pr-4 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
         Close
         </button>
      </div>
      
        <div class="flex flex-col px-4">

        <div class="flex flex-col pb-8">
          <div class="flex pl-4 pb-1.5">
            <p class="text-sm font-bold tracking-wide leading-none text-gray-500 uppercase">Add skill</p>
          </div>
          <div class="flex w-full flex-row justify-between space-x-3 items-center">
                <select id="Interest" v-model="tempSkill" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-3 pl-4 bg-gray-100 rounded-xl h-auto w-full vs:w-full ssm:w-full" placeholder="What do you activities like?">
                  <option value="Interest" disabled selected>Choose Interest</option>
                  <option
                    v-for="listSkill in listSkills"
                    v-bind:key="listSkill.indexSkills"
                    v-bind:value="listSkill.skills"
                  >
                  {{ listSkill.skills }}
                  </option>
                </select>
                <!-- <input @keyup="add" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-5 pl-4 bg-gray-100 rounded-xl vs:h-10 ssm:h-8 h-12 w-full vs:w-full ssm:w-full" placeholder="What do you activities like?"> -->
                <button v-if="tempSkill == ''" :style="{opacity: 0.5}" @click="addSkill" class="focus:outline-none" disabled>
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
                <button v-if="tempSkill != ''" @click="addSkill" class="focus:outline-none">
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
            </div>
        </div>

        <div class="flex flex-col pb-6">
          <div class="flex pl-4">
              <p class="text-base font-bold leading-none text-gray-900 uppercase">Your Skills</p>
              <!-- <p class="text-base font-bold leading-none text-gray-900 uppercase">{{ userPersonal }}</p> -->
          </div>
          <div class="flex w-full h-48 overflow-y-auto">
            <div class="flex-1 py-1 space-y-4 items-start justify-start w-full h-auto item-start">
              <div v-for="skill in skilled" :key="skill" class="inline-flex space-x-2 items-center justify-start px-4 py-2 bg-gray-100 rounded-full mr-3">
                <p class="text-sm leading-loose text-center text-gray-900">{{ skill }}</p>
                <button @click="deleteSkill(skill)" class="focus:outline-none">
                <span class="material-icons md-14 mt-2">clear</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="flex space-x-4 pb-4 flex-row w-full justify-center items-center">
            <button class="focus:outline-none inline-flex items-center justify-center w-full px-4 py-0.5 border-2 rounded-full border-gray-900">
              <p class="text-base font-bold leading-normal text-center text-gray-900">Cancel</p>
            </button>
            <button v-if="useremail" @click="update" class="focus:outline-none inline-flex items-center justify-center w-full px-4 py-1.5 bg-red-700 rounded-full">
              <p class="text-base font-bold leading-normal text-center text-white">Update</p>
            </button>
            <button v-if="!useremail" @click="submit" class="focus:outline-none inline-flex items-center justify-center w-full px-4 py-1.5 bg-red-700 rounded-full">
              <p class="text-base font-bold leading-normal text-center text-white">Save</p>
            </button>
        </div>
        
        </div>
        
   </div>
   </div>
</template>

<script>
import store from "../store/index";
import VueSimpleAlert from 'vue-simple-alert'
import api from '../api'

export default {

    data(){
      return{
        userindex: null,
        useremail: null,
        userinterests: null,
        uservisitedPlace: null,
        listSkills: [],
        tempSkill: '',
        skilled: [],
        //skill: '',

      }
    },
    computed: {
      userPersonal() {
        return store.getters.getPersonal;
      },
      userAbouts(){
        return store.getters.getAllUserAbout.filter((userAbout) => {return (userAbout.email ==  this.userPersonal.email)})
      },
    },
    methods: {
        close(){
            this.$emit('closeEditSkillsModal')
        },
        loadskills(){
          api.get("api/listSkills").then((data) => {this.listSkills = data.data; console.log("skills",this.listSkills)});
        },
        addSkill(){
          // console.log(e)
          if(!this.skilled.includes(this.tempSkill)){
          this.skilled.push(this.tempSkill)
          this.tempSkill = ''
          }
          else{
            alert("You already have this Skill");
          }
          
        },
        deleteSkill(skill){
          this.skilled = this.skilled.filter((item) => {
            return skill !== item
          })
        },
        submit(){
            this.$emit('closeEditSkillsModal')
            console.log("skilleded",this.skilled)
            if(this.skilled==''){
              this.skilled = null
            }
            var info = {
              indexUserAbout:this.userindex,
              email:this.userPersonal.email,
              skills:this.skilled,
              interests:this.userinterests,
              visitedPlace:this.uservisitedPlace,
            }

            api.post('/api/postSkill', info).then(()=>{
              store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Skills created successfully", "Sucess","success")
                this.$emit('closeEditSkillsModal')
            }).catch((errors) => {
                console.log(errors)
            })
        },
        update(){
            this.$emit('closeEditSkillsModal')
            console.log("skilleded",this.skilled)
            if(this.skilled==''){
              this.skilled = null
            }
            var info = {
              indexUserAbout:this.userindex,
              email:this.userPersonal.email,
              skills:this.skilled,
              interests:this.userinterests,
              visitedPlace:this.uservisitedPlace,
            }

            api.post('/api/updateSkill', info).then(()=>{
              store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Skills update successfully", "Sucess","success")
                this.$emit('closeEditSkillsModal')
            }).catch((errors) => {
                console.log(errors)
            })
        },
        
    },
    created(){
      this.loadskills();
      let arr = [];
      this.userAbouts.forEach((value, index) => {
      arr.push(value);
      console.log("userabout",value);
      console.log(index);

      if(value!=null){
        this.userindex = value.indexUserAbout;
        this.useremail = value.email;
        this.userinterests = value.interests;
        this.uservisitedPlace = value.visitedPlace;
        console.log("Mabuhay: ",this.userindex, this.useremail, this.userinterests, this.uservisitedPlace);
        if(value.skills!=null)
          this.skilled = (value.skills).split(',');
        console.log("Skilled",this.skilled);
      }
      });
    }
}
</script>

<style scoped>
</style>