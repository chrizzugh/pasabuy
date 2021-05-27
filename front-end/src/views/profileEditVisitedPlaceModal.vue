<template>
 <div v-on:click.self="close" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
   <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-538 ssm:w-full vs:w-full" >

       <div class="flex flex-row w-full justify-end se:space-x-11 ssm:space-x-8 vs:space-x-16 space-x-34 items-center py-4">
       <h1 class="text-gray-900  leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
         Edit Visited Places
       </h1>
       <button @click.prevent="close" class="mt-2 pr-4 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
         Close
         </button>
      </div>
      
        <div class="flex flex-col px-4">

        <div class="flex flex-col pb-8">
          <div class="flex pl-4 pb-1.5">
            <p class="text-sm font-bold tracking-wide leading-none text-gray-500 uppercase">Add Place</p>
          </div>
          <div class="flex w-full flex-row justify-between space-x-3 items-center">
                <select id="visitedPlace" v-model="tempVisitedPlaces" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-3 pl-4 bg-gray-100 rounded-xl h-auto w-full vs:w-full ssm:w-full" placeholder="What do you activities like?">
                  <option value="Interest" selected disabled>Choose Interest</option>
                  <option
                    v-for="listVisitedPlace in listVisitedPlaces"
                    v-bind:key="listVisitedPlace.id"
                    v-bind:value="listVisitedPlace.provDesc"
                  >
                  {{ listVisitedPlace.provDesc }}
                  </option>
                </select>
                <!-- <input @keyup="add" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500  py-5 pl-4 bg-gray-100 rounded-xl vs:h-10 ssm:h-8 h-12 w-full vs:w-full ssm:w-full" placeholder="What do you activities like?"> -->
                <button v-if="tempVisitedPlaces == ''" :style="{opacity: 0.5}" @click="addVisitedPlace" class="focus:outline-none" disabled>
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
                <button v-if="tempVisitedPlaces != ''" @click="addVisitedPlace" class="focus:outline-none">
                  <span class="text-gray-700 material-icons text-3xl">
                  add_circle
                  </span>
                </button>
            </div>
        </div>

        <div class="flex flex-col pb-6">
          <div class="flex pl-4">
              <p class="text-base font-bold leading-none text-gray-900 uppercase">Visited Places</p>
          </div>
          <div class="flex w-full h-48 overflow-y-auto">
            <div class="flex-1 space-y-4 items-start justify-start w-full item-start">
              <div v-for="visitedPlace in visitedPlaces" :key="visitedPlace" class="inline-flex space-x-2 items-center justify-start px-4 py-2 bg-gray-100 rounded-full mr-3">
                <p class="text-sm leading-loose text-center text-gray-900">{{ visitedPlace }}</p>
                <button @click="deleteInterest(visitedPlace)" class="focus:outline-none">
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
export default {

    data(){
      return{
        userindex: null,
        useremail: null,
        userskills: null,
        userinterests: null,
        listVisitedPlaces: [],
        tempVisitedPlaces: '',
        visitedPlaces: [],
      }
    },
    methods: {
        close(){
            this.$emit('closeEditVisitedPlaceModal')
        },
        loadMunicipality(){
          api.get("api/refProvince").then((data) => {this.listVisitedPlaces = data.data; console.log("VisitedPlaces",this.listVisitedPlaces)});
        },
        addVisitedPlace(){
          // console.log(e)
          if(!this.visitedPlaces.includes(this.tempVisitedPlaces)){
          this.visitedPlaces.push(this.tempVisitedPlaces)
          this.tempVisitedPlaces = ''
          }
          else{
            // alert("You already visited this Place");
            VueSimpleAlert.alert("You already have this in your Visited Places List", "Alert", "error")

          }
        },
        submit(){
          this.$emit('closeEditVisitedPlaceModal')
            if(this.visitedPlaces==''){
              this.visitedPlaces = null
            }
            var info = {
              indexUserAbout:this.userindex,
              email:this.userPersonal.email,
              skills:this.userskills,
              interests:this.userinterests,
              visitedPlace:this.visitedPlaces,
            }
            api.post('/api/postVisitedPlace', info).then(()=>{
              store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Visited Places created successfully", "Sucess","success")
                this.$emit('closeEditVisitedPlaceModal')
            //this.user = res.data;
            //VueSimpleAlert.alert(res.data.message,"Success","success")
            //store.dispatch('getPosts')//this will get the updated version of posts state from the states
            //window.location.reload();
            }).catch((errors) => {
                console.log(errors)
            })
        },
        update(){
            this.$emit('closeEditVisitedPlaceModal')
            console.log("skilleded",this.visitedPlaces)
            if(this.visitedPlaces==''){
              this.visitedPlaces = null
            }
            var info = {
              indexUserAbout:this.userindex,
              email:this.userPersonal.email,
              skills:this.userskills,
              interests:this.userinterests,
              visitedPlace:this.visitedPlaces,
            }

            api.post('/api/updateVisitedPlace', info).then(()=>{
              store.dispatch('getAllUserAbout')
              VueSimpleAlert.alert("Visited Places updated successfully", "Sucess","success")
                this.$emit('closeEditInterestModal')
            }).catch((errors) => {
                console.log(errors)
            })
        },
        deleteInterest(visitedPlace){
          this.visitedPlaces = this.visitedPlaces.filter((item) => {
            return visitedPlace !== item
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
      this.loadMunicipality();
      let arr = [];

      this.userAbouts.forEach((value, index) => {
      arr.push(value);
      
      console.log(index);
      this.userindex = value.indexUserAbout;
      this.useremail = value.email;
      this.userskills = value.skills;
      this.userinterests = value.interests;
      console.log("Mabuhay: ",this.userindex, this.useremail, this.userinterests, this.uservisitedPlace);
      if(value.visitedPlace!=null)
        this.visitedPlaces = (value.visitedPlace).split(',');
      });
    }
}
</script>

<style scoped>
</style>