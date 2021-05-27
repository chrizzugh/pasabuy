<template>
<Navbar/>
<div class="flex flex-col bg-gray-100 pt-122 font-nunito h-scrren pb-6 bg-gray-bgcolor">

    <div
            class="flex flex-col items-center justify-center pt-6"
          >
            <div
              class="flex flex-col h-auto bg-white rounded-lg vs:w-full ssm:w-full w-608"
            >
              <div
                class="flex items-center justify-between px-2 py-4 pt-4"
              >
                <div class="flex items-center space-x-4 focus:outline-none">
                  <p
                    @click="$router.push('edit-profile')"
                    class="text-base italic leading-none text-gray-900"
                  >
                    <span class="font-bold">Asta Staria</span> shared this post
                  </p>
                </div>
              </div>
              <hr class="w-full">
              
        <!--user post-->
        <div  class="flex">
          <div  class="h-auto p-6 space-x-4 bg-white shadow vs:p-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 rounded-xl">
            <div class="flex flex-col items-start justify-start">

              <!--section 1-->
                <div class="flex flex-row justify-between flex-grow w-full">
                  <div class="inline-flex">
                    <img class="rounded-full x-v:absolute w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" src="img/yami.jpg"/>
                    <div class="flex flex-col items-start w-full px-4 vs:px-1 se:px-2 ssm:px-2">
                      <div class="flex mt-1 space-x-4 ssm:space-x-0 se:space-x-0 vs:space-x-1 sm:space-x-2">
                        <h5 class="text-base font-bold leading-none text-gray-900 x-v:pl-10 vsv:text-xs ssm:text-sm vs:text-sm lvs:text-sm">{{user_info.firstname}} {{user_info.lastname}}
                          <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                            verified
                          </span>
                          <label class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted a shopping offer</label>
                        </h5>
                      </div>
                      <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2 x-v:ml-10">
                        <span class="text-sm leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">{{datePosted}}</span>
                      </div>
                    </div>
                  </div>
            </div>
            <!--end-->

            <!--section 2-->
            <div class="inline-flex items-center justify-start px-2 py-1 mt-4 space-x-2 bg-gray-100 rounded-full">
              <span class="text-red-600 rounded-full material-icons">
                remove_circle_outline
              </span>
              <p class="items-center text-sm font-bold leading-none text-red-600 vs:text-xs ssm:text-xs lvs:text-sm">
               {{delivery_info.status}}</p>
            </div>
            <!--end-->

            <!--section 3-->
            <div class="flex items-center justify-start w-full mt-4 space-x-4 ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0">
              <div class="flex-col items-start w-full">
                <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              delivery_dining  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.delivery_area}}</p>
            </div>
            <div class="flex py-2 space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              alarm  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.schedule}}</p>
            </div>
            <div class="flex space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_bag  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.capacity}}</p>
            </div>
          </div>
          <div class="flex-col w-full ssm:py-2 vs:py-3">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_cart  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.shopping_place}}</p>
            </div>
            <div class="flex py-2 space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              directions_car  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.public_transit}}</p>
            </div>
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              payments  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex items-start justify-start flex-grow-0 w-full p-4 mt-4 bg-gray-100 ssm:mt-2 vs:mt-2 rounded-xl">
          <p class="w-full h-auto text-sm leading-loose text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm vs:min-w-0 vs:px-2">{{delivery_info.comment}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div class="relative flex w-full pr-8 mt-4 space-x-6 justify-evenly vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 ssm:pr-0 vs:pr-0">
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ssm:md-18 xsm:md-18 vs:md-18">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Send Request</p>
          </button>
          <router-link to="/messages">
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Chat</p>
          </button>
          </router-link>
          <div>
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 x-v:pr-1 ssm:pr-0 material-icons md-24 x-v:md-16">
           share
           </span>
            <p class="text-base font-bold leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">Share</p>
          </button>
          </div>
        </div>
        <!--end-->
      </div>
    </div>
  </div>
  <!--end of user post-->

</div>
</div>

</div>

</template>

<script>
import Navbar from './Navbar'
export default {
    data(){
        return{
        delivery_info:{
        delivery_area: 'Naga City',
        shopping_place: 'SM City Legazpi',
        schedule: '2021-04-28 13:12:01',
        public_transit: 'Public Transit',
        capacity: '2 Big Plastic Bag',
        payment_method: 'Cash on Delivery',
        comment: "Hi! If there's anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!",
        status: 'No Longer Accepting Requests'
      },
       datePosted: '3 hours ago',
       user_info:{
        firstname: 'Jane',
        lastname: 'Doe'
      },
        }

    },
components:{
    Navbar
}
}
</script>

<style scoped>

</style>