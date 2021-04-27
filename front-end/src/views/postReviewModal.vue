<template>
 <div v-on:click.self="close" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
   <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-448 ssm:w-full vs:w-full" >

       <div class="flex flex-row w-full justify-end se:space-x-11 ssm:space-x-8 vs:space-x-16 space-x-28 items-center py-4">
       <h1 class="text-gray-900  leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
         Create a Review
       </h1>
       <button @click.prevent="close" class="mt-2 pr-4 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
         Close
         </button>
      </div>
      <hr>

      <!--post 1-->
     <div class="flex flex-col p-6">
       <div class="flex flex-grow  w-full">
         <div class="flex flex-col justify-center items-center w-full">
           <img class="w-14 h-14 ssm:w-10 ssm:h-10 rounded-full" src="img/asta.jpeg"/>
           <div class="flex flex-col justify-center items-center py-3">
             <div class="">
               <span class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{account_infos.firstName}} {{account_infos.lastName}}</span>
               <!--check icon here-->
             </div>
             <div class="flex ssm:flex-col ssm:space-x-0 ssm:py-0 ssm:space-y-1">
               <div class="flex-col justify-center items-center">
                   <div @click="getStarValue" class="stars justify-center items-center">
                       <input v-model="rate" type="radio" id="five" name="rate" value="5">
                       <label for="five"></label> 
                       <input v-model="rate" type="radio" id="four" name="rate" value="4">
                       <label for="four"></label>
                       <input v-model="rate" type="radio" id="three" name="rate" value="3">
                       <label for="three"></label>
                       <input v-model="rate" type="radio" id="two" name="rate" value="2">
                       <label for="two"></label>
                       <input v-model="rate" type="radio" id="one" name="rate" value="1">
                       <label for="one"></label>
                   </div>
                        <div class="w-full justify-center items-center flex">
                     <span class="">{{value}}/{{maxStarRate}}</span>
                   </div>
                </div>
             </div>
           </div>
         </div>
     </div>
     <div class="flex items-start justify-start ">
       <textarea v-model="feedback" class="text-sm ssm:text-xs vs:text-xs focus:outline-none lvs:text-sm leading-normal text-gray-900 w-full px-6 py-4 bg-gray-100 rounded-xl h-auto w-full ssm:w-full vs:w-full sm:w-full" placeholder="Write a comment" style="resize:none;"></textarea>
   </div>
   </div>    
<!--end-->
<!--Post button-->
                    <div class="justify-center flex mt-3 pb-3 px-2 ">
                        <button @click="submit" class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full ssm:h-8 vs:w-full h-10">
                            <p class="text-base ssm:text-sm vs:text-sm font-bold leading-normal text-center text-white">Post</p>
                        </button>
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
        value: '0',
        visitorUser: 'Asta Staria',
        maxStarRate: '5',
        rate: '',
        feedback: '',
        revieweeEmail: '',
        reviewerEmail: '',
        revieweeID: '',
        reviewerID: '',
      }
    },
    computed:{
      userPersonal() {
        return store.getters.getPersonal;
      },
        account_infos(){
          return store.getters.getUserInfo
        },
    },
    methods: {
        close(){
            this.$emit('closeReviewModal')
        },
        getStarValue(){
          this.value=document.querySelector('input[name="rate"]:checked').value
        },
        submit () {
          this.$emit('closeReviewModal')
            var info = {
                revieweeID:this.account_infos.indexUserInformation,
                reviewerID:this.userPersonal.indexUserInformation,
                revieweeEmail:this.account_infos.email,
                reviewerEmail:this.userPersonal.email,
                rate:this.value,
                feedback:this.feedback,
            }
            api.post('/api/userReviews', info).then(()=>{
              this.dispatches()
              VueSimpleAlert.alert("Offer post created successfully", "Sucess","success")
                this.$parent.$emit('closeReviewModal')
            //this.user = res.data;
            //VueSimpleAlert.alert(res.data.message,"Success","success")
            //store.dispatch('getPosts')//this will get the updated version of posts state from the states
            //window.location.reload();
            }).catch((errors) => {
                console.log(errors)
            })
            //this.toggle=false;
        },
        async dispatches() {
          await store.dispatch("getAllReviews");
        }
    }
}
</script>

<style scoped>

.stars input{
  display: none;
  padding: 0;
  margin: 0;
  padding-bottom: 0;
}

.stars label{
 float: right;
 padding: 0;
 margin: 0 5px;
 padding-bottom: 0;
content: url('/img/star_rate.svg');
}


.stars input:checked ~ label{
  content: url('/img/star_rating.svg');
}

.stars:not(:checked) > label:hover,
.stars:not(:checked) > label:hover ~ label{
  content: url('/img/star_rating.svg');
}

.stars input:checked >label:hover,
.stars input:checked >label:hover ~label{
  text-shadow: black;
}


</style>