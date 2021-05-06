<template>
 <Nav/>
<div class="flex flex-col w-full
ssm:w-max
xsm:w-max
 justify-center   font-nunito ">
<div class="w-608
      2xl:block 2xl:mt-24
      lg:block lg:mt-24  lg:w-6/12
      xl:block xl:mt-24
    
      justify-center self-center  gap-y-5 mt-16 hidden ">
      <p class="text-2xl  font-nunito font-bold uppercase">orders</p>
</div>
<div class="mt-20 self-center px-2 w-full flex flex-col pb-4  
            2xl:flex-row   2xl:mt-0 2xl:self-center 2xl:justify-items-center  2xl:items-center
            lg:flex-row     lg:self-center lg:justify-items-center lg:mt-0
            xl:flex-row     xl:self-center xl:justify-items-center xl:mt-0 
            md:flex-row md:mt-24 md:pl-4 md:items-center
            sm:flex-row
            space-y-3
             2xl:w-608 2xl:px-0
              lg:w-608 lg:px-0
              xl:w-608 xl:px-0
              md:w-10/12 md:px-0
              sm:w-10/12
             ">
    <div class="mt-3 
    2xl:mr-2
    xl:mr-2
    lg:mr-2
    md:mr-2
    ">
    <button @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" type="button"  class="font-bold focus:outline-none text-red-buttons px-3 py-1 shadow  rounded-2xl bg-white w-full h-full"><a> All Orders</a></button>
  </div>
  <div class="flex  items-center justify-between space-x-2">
  <button  @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }"  type="button"    class=" font-bold focus:outline-none text-green-150 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"><a>Complete</a></button>  
  <button   @click=" isActive_function('btn3')" :class="{active: activeBtn === 'btn3' }"  type="button"   class=" font-bold focus:outline-none text-blue-700 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"><a>Confirmed</a></button>
  <button  @click=" isActive_function('btn4')" :class="{active: activeBtn === 'btn4' }"  type="button"    class="font-bold focus:outline-none text-yellow-600 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"><a>Cancelled</a></button>
  </div>
</div>

<div v-for="itemx in transaction" :key="itemx.id" >

<div class="p-5 w-full  flex flex-col space-y-4 items-center 
2xl:p-0
xl:p-0
lg:p-0
">
 <div class="flex flex-col justify-center self-center 
              2xl:w-608 2xl:mb-4
              lg:w-608  xl:mb-4
              xl:w-608  lg:mb-4
              md:w-10/12
              sm:w-10/12
     w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl " >
        <div class=" flex justify-between">
            <div class="flex flex-col gap-4">
            <span class="flex vs:flex-col gap-x-3"> 
            <p class="font-bold font-nunito">Transaction#{{itemx.order_number}}</p>
              <div>
              <p v-if="itemx.selected=='Completed'" class="text-center rounded-md  tracking-wider text-green-150 ring-1 ring-green-150 bg-white text-xs h-min w-18 self-center p-1 font-nunito font-bold">
            {{itemx.selected}}
            </p>
            <p v-else-if="itemx.selected=='Confirmed'" class=" text-center rounded-md tracking-wider text-blue-700 ring-1 ring-blue-700 bg-gray-200 text-xs   h-min w-18 self-center p-1 font-nunito font-bold">
            {{itemx.selected}}
            </p>
            <p v-else class=" text-center  tracking-wider text-yellow-600 rounded-md bg-white ring-1 ring-yellow-600 text-xs  h-min w-18 self-center p-1 font-nunito font-bold">
            {{itemx.selected}}
            </p>
              </div>
            </span>
           
            </div>
            <div class="vs:flex-col vs:space-x-2"> 
             
      <button v-if="itemx.selected=='Confirmed'" class=" font-bold focus:outline-none" @click="toggle_status=!toggle_status,trans_id=itemx.id">Update Status</button>
      <button v-else  class=" font-bold text-gray-400" disabled>Update Status</button>
           
           </div>
         </div>
          <span class="text-gray-500 mt-2">Place on {{itemx.date}},{{itemx.time}}</span>
       <div class="flex  items-start gap-x-8 my-3  flex-col
            2xl:items-center 2xl:flex-row
            xl:items-center  xl:flex-row
            lg:items-center  lg:flex-row
            md:flex-row
           ">
            <p class="uppercase font-bold text-gray-500 ">customer:</p>
            <div class=" flex gap-x-3 items-center space-x-3">
           <img class="w-8 h-8 border rounded-full border-gray-700 shadow-md  " :src="itemx.profile_image"/><!--Profile Pic-->
            <span class="flex flex-col">
              <p class="font-bold">{{itemx.name}}</p> <!--name-->
              <span class="flex gap-x-1">
              <p class="font-bold text-gray-500 text-sm">{{itemx.rate}}</p>
              <p class="material-icons text-sm text-red-700">star</p>
              </span>
            </span>
            <!--chat button-->
              <button class="  flex items-center gap-x-2 focus:outline-none  bg-green-150 rounded-2xl p-2">
                <p class="material-icons text-white text-sm">chat</p>
                <p class=" font-bold text-white text-sm "> Chat Shopper</p>
              </button>
              <!--/chat button-->
            </div>
            
        </div>
        <div v-if="itemx.selected=='Completed'" class=" space-y-2 w-full p-4 ring-2 ring-gray-300 rounded-xl">
              <p class="text-sm select-none">Transaction marked as completed on {{itemx.currentDate}},at {{itemx.currenTime}}</p>
              <span class="flex space-x-2"><p class=" text-gray-400">Would you like to review the shopper?</p><b class="cursor-pointer">Write a review.</b></span>
        </div>
        <div class=" grid grid-cols-2  p-5 gap-y-4 text-sm">
          <div class="flex items-center space-x-2"><span class="material-icons  text-red-buttons ">
          fmd_good
          </span><p>{{itemx.street}},{{itemx.city}}</p></div>
          <div class="flex items-center space-x-2"><span class="material-icons text-red-buttons">
          shopping_cart
          </span><p>{{itemx.store}}</p></div>
          <div class="flex items-center space-x-2"><span class="material-icons text-red-buttons">
          watch_later
          </span><p>{{itemx.date}},{{itemx.time}}</p></div>
          <div class="flex items-center space-x-2"><span class="material-icons text-red-buttons">
         payments
          </span><p>{{itemx.payment}}</p></div>
        </div>  
        <div class="bg-gray-200  py-1 px-3 rounded-2xl">
        <div class="flex text-sm  sm: space-x-2"><p>Shopping List</p><p class=" text-gray-500">{{itemx.items.length}}</p>
        <p v-if="itemx.items.length>1" class="text-gray-500">items</p>
         <p v-else class="text-gray-500">item</p>
        </div>
        <ul id="example-1" class="list-disc text-sm space-y-2 list-inside p-5">
       <li v-for="item in itemx.items" :key="item.list" class="list-disc items-center">
         <label class=" text-md" style="font-size:16px">{{ item.list }}({{item.size}})-{{item.brand}} [{{item.quantity}}unit/s]</label> 
       </li>
        </ul>
        </div>
      </div>
    </div>

</div>
</div>
        <div v-if="toggle_status"   class=" fixed bg-black z-100 h-max w-screen  bg-opacity-75 overflow-y-auto items-center  inset-0   ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Order Status</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_status=false, userNotif=null,updatingTransaction=null, updatingPost=null"> Close</p>
          </div>
         <hr>
          <div class=" ">
            <div class="flex flex-col p-3 space-y-4
            ">
            <span class="flex items-center space-x-2"><input id="complete" type="radio" name="status" value="Completed"/><span>Complete</span></span>
            <span class="flex items-center space-x-2"><input id="cancel" type="radio" name="status" value="Cancelled"/><span>Cancel</span></span>
           
              </div>
            
          </div>
           <div class="flex justify-between mt-4 px-5 text-2xlspace-x-4 items-center">
             <button @click="updateStatus()" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Update</button>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="w-full flex justify-center">
<div class="text-left flex self-center
          2xl:w-608
              lg:w-608
              xl:w-608
              md:w-10/12
              sm:w-10/12
 p-2 ">
 <p class="text-gray-500 text-sm">
        Privacy Policy-Cookies Policy-Terms and Conditions
        Return and Refund Policy-PasaBuy   2021
    </p>
</div>
</div>
</template>
<script>
import Nav from "../views/Navbar.vue";
import store from "../store/index";
import moment from "moment"
import api from "../api"
import VueSimpleAlert from 'vue-simple-alert'

export default {
  name: "Order",
  components: {
    Nav,
  },
  data() {
    return {
      activeBtn: 0,
      toggle_status:false,
      location: "",
      date: "February 26 2021 12:30pm",
      store: "",
      name: "Yamete",
      rate: "4.5",
      payments: "",
      order_number: "12453",
      status: "Completed",
      items: [{ list: "Milk" }, { list: "Milk" }],
      allOrders:[],
      updatingTransaction:null,
      updatingPost:null,
      userNotif:null

    };
  },
  methods: {
    isActive_function(el) {
      if (el == "btn4") {
        this.activeBtn = el;
        this.allOrders = this.orders.filter((x)=>{return x.transactionStatus == "Cancelled" ||  x.transactionStatus == "Declined" })
        console.log("cancelled ", this.allOrders)
      } else if(el =="btn3"){
        this.activeBtn = el;
        this.allOrders = this.orders.filter((x)=>{return x.transactionStatus == "Confirmed"})
        console.log("confirmed ", this.allOrders)
      }else if(el =="btn2"){
        this.activeBtn = el;
        this.allOrders = this.orders.filter((x)=>{return x.transactionStatus == "Completed"})
        console.log("completed ", this.allOrders)
      } else{
        this.activeBtn = 0;
        this.allOrders = this.orders
      }
    },
    timestampSched(datetime) {
      var schedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = schedDate.getTime() - dateToday.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      console.log(dateDiff);
      if (dateDiff < 1 && dateDiff > 0)
        return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    },
    timestamp(datetime){
      return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    toEncrypt(val) {
      return btoa(val);
    },
    updateStatus(){
      var complete = document.getElementById('complete').checked
      var cancel = document.getElementById('cancel').checked
      if(complete){
        api.post('api/updateTransaction',{userNotif:this.userNotif,status:"Completed", ID:this.updatingTransaction, postNumber: this.updatingPost}).then((res)=>{
          store.dispatch('getUserTransactions').then(()=>{
            this.toggle_status=false
            this.updatingTransaction=null
            this.updatingPost=null
            this.allOrders = this.orders
            VueSimpleAlert.alert(res.data.message, "Sucess", "success")
          })
        }).catch((error)=>{
          VueSimpleAlert.alert(error.response.data.error, "Error", "error")

        })
       
      }else if(cancel) {
        
        api.post('api/updateTransaction',{userNotif:this.userNotif,status:"Cancelled", ID:this.updatingTransaction, postNumber: this.updatingPost}).then((res)=>{
          store.dispatch('getUserTransactions').then(()=>{
            this.toggle_status=false
            this.updatingTransaction=null
            this.updatingPost=null
            this.allOrders = this.orders
            VueSimpleAlert.alert(res.data.message, "Sucess", "success")
          })
          
        }).catch((error)=>{
          VueSimpleAlert.alert(error.response.data.error, "Error", "error")

        })
      }
    },
    setDataToSave(email,indexTransactionPost,postNumber){
      this.userNotif = email
      this.updatingTransaction = indexTransactionPost
      this.updatingPost = postNumber
    }
  },
  mounted() {
    this.allOrders = this.orders
    console.log("all orders", this.allOrders);  
  },
  computed: {
    user() {
      return store.getters.getUser;
    },
    orders() {
      return store.getters.getUserTransactions.filter((x) => {
        return (
          (x.post.postIdentity == "request_post" &&
            x.post.email == this.user.email) ||
          (x.post.postIdentity == "offer_post" &&
            x.post.email != this.user.email)
        );
      });
    },
  },
};
</script>
<style scoped>
.active {
  background-color: currentColor;
}
.active a {
  color: white;
}
</style>

