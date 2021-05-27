<template>
     <div id ="personal_info" class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm " >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Personal Info</p>
            </div>
           <div> 
               <label for="sub" id="edt1" @click="toggle=!toggle, setOldData()" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
           </div>
            
        </div>
        <div id="personal_info" class="text-sm  gap-x-10 pt-8  w-full">
        <form id="myForm" class=" ">
          <div class="flex flex-col items-center gap-y-3 justify-center">
           <div class="w-16 h-16 overflow-hidden rounded-full border-2 border-gray-500"> <img :src="userPersonal.profilePicture" class=" w-full h-full rounded-full ring-2 ring-gray-100" style="object-fit:cover; vertical-align:middle"/></div>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <input id="profile_image" type="file" @change="change_profile" class="hidden">
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
             <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">NAME</p>
        <span>
        <p >{{userPersonal.firstName}} {{userPersonal.middleName}} {{userPersonal.lastName}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2 ">
        <p class="text-gray-500">PHONE NUMBER</p>
        <span>
        <p>{{userPersonal.phoneNumber}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">WORK</p>
        <span>
        <p>{{userPersonal.work}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">GENDER</p>
        <span>
        <p>{{userPersonal.gender}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BIRTHDAY</p>
        <span>
        <p>{{personal.bday}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">Language</p>
        <span>
        <p>{{userPersonal.language}}</p>
        </span>
         </span>
          </div>
       
        </form>
        </div>

        <div v-if="toggle" class=" fixed bg-black z-100 h-max w-screen   bg-opacity-75 overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 2xl:ml-5
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
          <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-9 lg:ml-9 2xl:ml-9">Update Personal Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false, getOldData()"> Close</p>
          </div>
          <p class="text-center text-red-500">{{errors}}</p>
           <div class=" ">
            <div class="flex flex-col px-4  space-y-4
            ">
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Firstname</span> <input id="f_name"   type="text" v-model="userPersonal.firstName" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Middlename</span> <input id="m_name" type="text" v-model="userPersonal.middleName" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Lastname</span> <input id="l_name" type="text" v-model="userPersonal.lastName" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Phone number </span> <input id="p_number" type="text" v-model="userPersonal.phoneNumber" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200" v-on:keypress=isNumber($event) :maxlength="16" v-mask="'+63 ### ### ####'"/>
                </div>
                <div class="flex flex-col">
                  <span class="ml-2 text-gray-500 font-bold  text-sm">Work </span> 
                  
                  
                  <div >
                    <select id="work" v-model="userPersonal.work" @change="addWork" placeholder="Hey"
                    class="flex items-center focus:outline-none justify-start outline-none leading-none text-gray-500  py-3 pl-4 bg-gray-100 rounded-xl h-auto w-full vs:w-full ssm:w-full">
                  <option
                    v-for="wrk in works" :key="wrk.indexWork"
                    v-bind:value="wrk.work"
                  >
                  <!-- {{work.work}} -->
                  {{wrk.work}}
                  </option>
                </select>

                  <div class="flex w-full h-auto overflow-y-auto">
                  <div class="flex-1 py-1 space-y-4 items-start justify-start w-full h-auto item-start">
                    <div v-for="work in workList" :key="work" class="inline-flex space-x-2 items-center justify-start px-4 py-2 bg-gray-100 rounded-full mr-3">
                      <p class="lvs:text-sm vs:text-xs ssm:text-xs text-base leading-loose text-center text-gray-900">{{ work }}</p>
                      <button @click="deleteWork(work)" class="focus:outline-none">
                      <span class="material-icons md-14 mt-2">clear</span>
                      </button>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <span class="ml-2 text-gray-500 font-bold  text-sm">Gender</span>
                <div class=" space-x-4 ml-4 ">
                  <span class="space-x-2">
                  <span><input type="radio" value="Male" id="male" v-model="userPersonal.gender" name="gender" /></span>
                  <label for="male">Male</label>
                  </span>
                  <span class="space-x-2">
                  <span><input type="radio" value="Female" id="female" v-model="userPersonal.gender" name="gender" /></span>
                  <label for="female">Female</label>
                  </span>
              </div>
                 <div class="flex flex-col "><span class="ml-2 text-gray-500 font-bold  text-sm">Birthday</span>  <input  type="date" id="b_date"  v-model="userPersonal.birthDate"   class="focus:outline-none rounded-xl w-full h-10 pl-2 bg-transparent bg-gray-200" 
                  ></div> 
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Language: </span> 
                <div >
                    <select id="language" v-model="userPersonal.language" @change="addLanguage" placeholder="Hey"
                    class="flex items-center focus:outline-none justify-start outline-none leading-none text-gray-500  py-3 pl-4 bg-gray-100 rounded-xl h-auto w-full vs:w-full ssm:w-full">
                  <option
                    v-for="language in languages" :key="language.indexLanguage"
                    v-bind:value="language.languages"
                  >
                  <!-- {{work.work}} -->
                  {{language.languages}}
                  </option>
                </select>

                  <div class="flex w-full h-auto overflow-y-auto">
                  <div class="flex-1 py-1 space-y-4 items-start justify-start w-full h-auto item-start">
                    <div v-for="language in languagesList" :key="language" class="inline-flex space-x-2 items-center justify-start px-4 py-2 bg-gray-100 rounded-full mr-3">
                      <p class="lvs:text-sm vs:text-xs ssm:text-xs text-base leading-loose text-center text-gray-900">{{ language }}</p>
                      <button @click="deleteLanguage(language)" class="focus:outline-none">
                      <span class="material-icons md-14 mt-2">clear</span>
                      </button>
                    </div>
                  </div>
                </div>
                  </div>
                <!-- <input type="text" id="language" v-model="userPersonal.language" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/></div> -->
             
            </div>
           <div class="flex justify-between mt-10 space-x-4 items-center">
              <button @click="toggle=false, getOldData()" class="px-3 h-6 w-full bg-white ring-2 ring-black focus:outline-none   rounded-2xl">Cancel</button>
              <button @click="save_data()" class="px-5 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
          </div>
        </div>
    </div>

    </div>
     </div>
</template>
<script>
import api from "../api";
import Profile from "./ProfileEdit.vue";
import VueSimpleAlert from "vue-simple-alert";
import moment from "moment";
import store from "../store/index";
export default {
  name: "personal",
  component: {
    Profile,
  },
  data() {
    return {
      toggle: false,
      avatar: null,
      disabled: 0,
      hidden: false,
      show: true,
      show2: true,
      edit2: false,
      message: "yeah",
      workList: [],
      languages: [],
      languagesList:[],
      works: [],
      
      search: "",
      personal: {
        firstname: "",
        middlename: "",
        lastname: "",
        phone_number: "",
        work: "",
        gender: "",
        language: "",
        birdate: "",
        bday: "",
        profilePic: null,
      },
      old: {
        firstname: "",
        middlename: "",
        lastname: "",
        phone_number: "",
        work: "",
        gender: "",
        language: "",
        birdate: "",
      },
      errors: null,
    };
  },

  methods: {
    isNumber(e) {
      let char = String.fromCharCode(e.keyCode); // Get the character
      if (/^[0-9]+$/.test(char)) return true;
      // Match with regex
      else e.preventDefault(); // If not match, don't add to input text
    },
    addWork() {

      // var work=d.options[d.selectedIndex].text;
      console.log("work", this.userPersonal.work);
      if (!this.workList.includes(this.userPersonal.work)) {
        this.workList.push(this.userPersonal.work);
        this.userPersonal.work = "";
      } else {
        alert("You already have this Work");
      }

      console.log("workList", this.workList);
    },
    addLanguage() {

      if (!this.languagesList.includes(this.userPersonal.language)) {
        this.languagesList.push(this.userPersonal.language);
        this.userPersonal.language = "";
      } else {
        alert("You already have this Work");
      }

      console.log("languagesList", this.languagesList);
    },
    save_data() {
      var personal = {
        firstname: this.userPersonal.firstName,
        middlename: this.userPersonal.middleName,
        lastname: this.userPersonal.lastName,
        phone_number: this.userPersonal.phoneNumber,
        gender: this.userPersonal.gender,
        workList: this.workList.join(),
        languagesList: this.languagesList.join(),
        birdate: this.userPersonal.birthDate,
      };
      api
        .post("/api/editPersonal", personal)
        .then((res) => {
          this.dispatchThis().then(() => {
            this.setBday();
            VueSimpleAlert.alert(res.data.message, "Success", "success");
            this.toggle = false;
          });
          this.user = res.data;
        })
        .catch((errors) => {
          console.log(errors.response.data);
          if (errors.response.data.firstname == undefined)
            errors.response.data.firstname = " ";
          if (errors.response.data.lastname == undefined)
            errors.response.data.lastname = " ";
          if (errors.response.data.phone_number == undefined)
            errors.response.data.phone_number = " ";
          this.errors =
            errors.response.data.firstname +
            " " +
            errors.response.data.lastname +
            " " +
            errors.response.data.phone_number;
        });
    },

      getLanguages() {
      api.get("/api/getLanguages").then((res) => {
        this.languages = res.data;
        // for (var i=0;i < this.provinces.length;i++){
        //  // this.provinces[i] = JSON.stringify(this.provinces[i].provDesc); 
        //   this.provinces[i].provDesc=this.provinces[i].provDesc.toString();
        //   this.provinces[i].provDesc=(this.provinces[i].provDesc).charAt(0).toUpperCase() + (this.provinces[i].provDesc).slice(1);
        // }
        
        console.log('Languages: ', this.languages);
      });
    },

    getWorks() {
      console.log('works lumabas ka');
      api.get("/api/getWorks").then((res) => {
        this.works = res.data;
        console.log('Works: ', this.works);
      });
      
    },

    deleteWork(work) {
      this.workList = this.workList.filter((item) => {
        return work !== item;
      });
    },
    deleteLanguage(language) {
      this.languagesList = this.languagesList.filter((item) => {
        return language !== item;
      });
    },
    handleInput(value) {
      this.name = value;
      alert(this.name);
    },
    setOldData() {
      this.errors = "";
      this.old.firstname = this.userPersonal.firstName;
      this.old.middlename = this.userPersonal.middleName;
      this.old.lastname = this.userPersonal.lastName;
      this.old.phone_number = this.userPersonal.phoneNumber;
      this.old.work = this.userPersonal.work;
      this.old.gender = this.userPersonal.gender;
      this.old.language = this.userPersonal.language;
      this.old.birdate = this.userPersonal.birthDate;
    },
    getOldData() {
      this.userPersonal.firstName = this.old.firstname;
      this.userPersonal.middleName = this.old.middlename;
      this.userPersonal.lastName = this.old.lastname;
      this.userPersonal.phoneNumber = this.old.phone_number;
      this.userPersonal.work = this.old.work;
      this.workList = (this.old.work).split(',');
      this.userPersonal.gender = this.old.gender;
      this.userPersonal.language = this.old.language;
      this.languagesList = (this.old.language).split(',');
      this.userPersonal.birthDate = this.old.birdate;
    },
    change_profile(e) {
      const file = e.target.files[0];
      this.profile = URL.createObjectURL(file);
      const data = new FormData();
      data.append("photo", file);
      console.log("image", data);
      api
        .post("/api/updateProfilePic", data)
        .then((res) => {
          this.dispatchThis().then(() => {
            VueSimpleAlert.alert(res.data.message, "Success", "success");
          });
        })
        .catch((errors) => {
          VueSimpleAlert.alert("Something went wrong.", "Error", "error");
          console.log(errors.response);
        });
    },
    async dispatchThis() {
      await store.dispatch("getPersonal");
    },
    setBday() {
      //get the user information from the laravel API
      if (this.userPersonal.birthDate == null) {
        this.personal.bday = "";
      } else {
        this.personal.bday = moment(this.userPersonal.birthDate).format(
          "MMMM DD, YYYY"
        );
      }
    },
  },
  mounted() {
    this.setBday();
    this.getWorks();
    this.getLanguages();
    
  },
  computed: {
    userPersonal() {
      return store.getters.getPersonal;
    },
    // filterworks: function(){
    //   return this.workouts.filter((workout) => {
    //     if(this.search != "")
    //       // this.search=null
    //     return workout.work.toLowerCase().match(this.search.toLowerCase())
    //   });
    // }
  },
  created() {
        // console.log("Skilled",this.userPersonal);
    
          this.workList = (this.userPersonal.work).split(',');
          this.languagesList = (this.userPersonal.language).split(',');
  }
};
</script>
