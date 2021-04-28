<template>
    <div class="bg-gray-100 pt-6 font-nunito"> <!--parent div-->
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-center bg-white shadow-md w-full rounded-xl">
                <div class="px-10 py-16 ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Navigating the Pasabuy application</h1>
                </div> 
                <!---Sub section 1-->
                    <div class="flex">
                        <h1 class="text-2xl">How do I post a shopping offer?</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen">
                                <li>1. On your Home Page, click on the Post a shopping offer or order request tab.</li>
                                <li>2. A Create Post window will pop up on the screen.</li>
                                <li>3. Select Shopping Offer.</li>
                                <li>4. Enter your Delivery Area, preferred schedule, the capacity of your shopping items, your shopping place, what mode of transportation you will be using, and what method will you use to receive payments from customers.</li>
                                <li>5. Input message or caption for your shopping offer post.</li>
                                <li>6. Click Post.</li>

                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I post an order request?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen1">
                                <li>1. On your Home Page, click on the Post a shopping offer or order request tab.</li>
                                <li>2. A Create Post window will pop up on the screen.</li>
                                <li>3. Select Order Request.</li>
                                <li>4. Enter your Delivery Area, preferred schedule, your shopping place, and what method will you use to send your payment to the rider/shopper.</li>
                                <li>5. Select your shopping list or create a new shopping list.</li>
                                <li>6. Input message or caption for your order request post.</li>
                                <li>7. Click Post.</li>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <h1 class="text-2xl">I saw a shopping offer on my feed, how do I send a request to pasabuy to that user?</h1>
                        <button @click="isOpen2=!isOpen2" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen2">
                                <li>1. On the desired shopping offer post, click Send Request button below.</li>
                                <li>2. A pop-up window will appear.</li>
                                <li>3. Input your delivery address, your preferred schedule, the shopping place, the desired mode of payment, and select your shopping list.</li>
                                <li>4.Type your message for the shopper and click the Send button.</li>
                                <li>5. Your request will be received by the user through their inbox.</li>
                                <li>6. They can either accept or decline the request you sent.</li>
                                <li>7. You can have further conversations with the user on the message tab.</li>

                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                        <h1 class="text-2xl">I saw an order request post on my feed, how do I send an offer to that user?</h1>
                        <button @click="isOpen3=!isOpen3" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen3">
                                <li>1. On the desired shopping offer post, click Send Offer button below.</li>
                                <li>2. A pop-up window will appear.</li>
                                <li>3. Click the Send button to inform the user that you want to accept their offer.</li>
                                <li>4. Your offer will be received by the user through their inbox.</li>
                                <li>5. They can either accept or decline the offer you sent.</li>
                                <li>6. You can have further conversations with the user on the message tab.</li>
                            </div>
                    </div>

            </div>
        </div>
    </div>
</template>

<style>
    #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
   
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
</style>


<script>
import CreateAccount from './helpCreateAcc'
import NavigatingPasabuy from './helpNavAcc'
import ManagingYourProfile from './helpManageProfile'
import ExpandingYourConnection from './helpExpandCon'
import $ from 'jquery'

export default {
    data(){  
        return{
            component: "CreateAccount",
            component2: "NavigatingPasabuy",
            component3: "ManagingYourProfile",
            component4: "ExpandingYourConnection",
            isOpen: false,
            isOpen1: false,
            isOpen2: false,
            isOpen3: false,
            show: false,
        }
    },

    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },

  methods:{
    toggle(){
      if(this.component != CreateAccount)
        this.component = CreateAccount;
    },
    toggle2(){
      if(this.component != NavigatingPasabuy)
        this.component = NavigatingPasabuy;
    },
    toggle3(){
       if(this.component != ManagingYourProfile)
        this.component = ManagingYourProfile;
    },
    toggle4(){
      if(this.component != ExpandingYourConnection)
        this.component = ExpandingYourConnection;
    },
    isActive_function(el){
     if(el=='btn1'){
      this.activeBtn= 0;
    } else {
        this.activeBtn= el;
        }
    },
    selectButton(){
      $(".notSelected").toggleClass("isSelected");
    }
  }


}
</script>