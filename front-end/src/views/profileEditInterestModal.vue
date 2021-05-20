<template>
 <div v-on:click.self="close" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
   <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-538 ssm:w-full vs:w-full" >

      <div class="flex flex-row w-full justify-end se:space-x-11 ssm:space-x-8 vs:space-x-16 space-x-42 items-center py-4">
        <h1 class="text-gray-900  leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
          Edit Interest
        </h1>
        <button @click.prevent="close" class="mt-2 pr-4 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
          Close
         </button>
      </div>
      
        <div class="flex flex-col px-4">
          <div class="flex flex-col pb-8">
            <div class="flex pl-4 pb-1.5">
              <p class="text-sm font-bold tracking-wide leading-none text-gray-500 uppercase">Add Interest</p>
            </div>
            <div class="flex w-full flex-row justify-between space-x-3 items-center">
                <select id="Interest" v-model="tempInterest" class="mr-3 flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-3 pl-4 bg-gray-100 rounded-xl h-auto w-full vs:w-full ssm:w-full" placeholder="">
                  <option selected disabled>What do you activities like?</option>
                  <option
                    v-for="listinterest in listinterests"
                    v-bind:key="listinterest.indexInterest "
                    v-bind:value="listinterest.interests"
                  >
                  {{ listinterest.interests }}
                  </option>
                </select>
                <!-- <input @keyup="add" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-5 pl-4 bg-gray-100 rounded-xl vs:h-10 ssm:h-8 h-12 w-full vs:w-full ssm:w-full" placeholder="What do you activities like?"> -->
                <button v-if="tempInterest == ''" :style="{opacity: 0.5}" @click="addInterest" class="focus:outline-none" disabled>
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
                <button v-if="tempInterest != ''" @click="addInterest" class="focus:outline-none">
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
            </div>
          </div>

          <div class="flex flex-col pb-6">
          <div class="flex pl-4">
              <p class="text-base font-bold leading-none text-gray-900 uppercase">Your Interests</p>
          </div>
          <div class="flex w-full h-48 overflow-y-auto">
            <div class="flex-1 space-y-4 items-start justify-start w-full item-start">
              <div v-for="interest in interests" :key="interest" class="inline-flex space-x-2 items-center justify-start px-4 py-2 bg-gray-100 rounded-full mr-3">
                <p class="text-sm leading-loose text-center text-gray-900">{{ interest }}</p>
                <button @click="deleteInterest(interest)" class="focus:outline-none">
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
import api from '../api'
import VueSimpleAlert from 'vue-simple-alert'
import store from "../store/index"

//import store from '../store/index'
export default {

    data(){
      return{
        userindex: null,
        useremail: null,
        userskills: null,
        uservisitedPlace: null,
        listinterests: [],
        tempInterest: '',
        interests: [],
      }
    },
    methods: {
        close(){
            this.$emit('closeEditInterestModal')
        },
        loadinterest(){
          api.get("api/listInterest").then((data) => {this.listinterests = data.data; console.log("interests",this.listinterests)});
        },
        addInterest(){
          // console.log(e)
          if(!this.interests.includes(this.tempInterest)){
          this.interests.push(this.tempInterest)
          this.tempInterest = ''
          }
          else{
            alert("You already have this Interest");
          }
        },
        submit(){
          this.$emit('closeEditInterestModal')
            
            var info = {
                email:this.userPersonal.email,
                interests:this.interests
            }
            api.post('/api/postInterest', info).then(()=>{
               store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Interests update successfully", "Sucess","success")
                this.$emit('closeEditInterestModal')
            //this.user = res.data;
            //VueSimpleAlert.alert(res.data.message,"Success","success")
            //store.dispatch('getPosts')//this will get the updated version of posts state from the states
            //window.location.reload();
            }).catch((errors) => {
                console.log(errors)
            })
        },
        update(){
            this.$emit('closeEditInterestModal')
            console.log("interests",this.interests)
            if(this.interests==''){
              this.interests = null
            }
            var info = {
              indexUserAbout:this.userindex,
              email:this.userPersonal.email,
              skills:this.userskills,
              interests:this.interests,
              visitedPlace:this.uservisitedPlace,
            }

            api.post('/api/updateInterest', info).then(()=>{
              store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Interests updated successfully", "Sucess","success")
                this.$emit('closeEditInterestModal')
            }).catch((errors) => {
                console.log(errors)
            })
        },
        deleteInterest(interest){
          this.interests = this.interests.filter((item) => {
            return interest !== item
          })
        },
    },
    computed: {
    userPersonal(){
      return store.getters.getPersonal
    },
    userAbouts(){
      return store.getters.getAllUserAbout.filter((userAbout) => {return (userAbout.email ==  this.userPersonal.email)})
    },
    },
    created(){
    this.loadinterest();
    let arr = [];

    this.userAbouts.forEach((value, index) => {
    arr.push(value);
    console.log("interests",value);
    console.log(index);
    if(value!=null){
      this.userindex = value.indexUserAbout;
      this.useremail = value.email;
      this.userskills = value.skills;
      this.uservisitedPlace = value.visitedPlace;
      console.log("Mabuhay: ",this.userindex, this.useremail, this.userskills, this.uservisitedPlace);
      
      if(value.interests!=null)
        this.interests = (value.interests).split(',');
      console.log("Interests",this.interests);
    }
    });
    // this.interests = this.interestED
    //api.get("api/user").then((data) => {this.user_email = data.data.email; console.log("email",this.user_email)});
  },
}
</script>

<style scoped>
</style>