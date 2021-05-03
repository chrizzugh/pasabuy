<template>
    <div class="border-black ">
        <button @click="isOpen=!isOpen" class=" focus:outline-none h-10 w-10 border-2 rounded-full border-red-700">
        <img class="h-9.7 w-10 rounded-full" src="/img/yami.jpg">
        </button>
      </div>
    <div class="w-full ">  
    <div v-if="isOpen" class="shadow-xl fixed bg-white space-y-2  h-auto w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-4 pr-4 pt-2 mr-16 mt-2">
    <router-link to="/edit-profile"  class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">account_circle</span>Profile</router-link>
    <router-link to="/orders" class="flex flex-row gap-x-2 text-black"><div class="flex items-center space-x-2"> <span class="material-icons text-gray-500">shopping_bag</span><a>Orders</a> <span class="left-24 right-0 absolute items-center w-6 h-6 bg-red-buttons text-white rounded-full flex justify-center"><p>{{active_order}}</p></span></div></router-link>
    <router-link to="/deliver" class="flex flex-row gap-x-2 text-black"><div class="flex items-center space-x-2"><span class="material-icons text-gray-500">delivery_dining</span><a>Deliveries</a><span class="left-28 right-0 absolute items-center w-6 h-6 bg-red-buttons text-white rounded-full flex justify-center"><p>{{active_order}}</p></span></div> </router-link>
    <router-link to="/shopping-list" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">list</span>Shopping Lists</router-link>
    <router-link to="/account-settings" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">manage_accounts</span>Account Setting</router-link>
    <router-link to="/" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500 ">logout</span>Log out</router-link>
     <p class="text-gray-500 text-sm">
        Privacy Policy-Cookies Policy-Terms and Conditions<br>
        Return and Refund Policy-PasaBuy   2021
    </p>
    </div>
   
    </div>
</template>

<script>
export default {
    data(){
        return{
            active_order:2,
            active_delivery:2,
            isOpen:false
        }
    },
     components:{
    
  }
}
</script>
