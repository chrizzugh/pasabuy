<template>
    <div class="bg-gray-100 pt-6 font-nunito"> <!--parent div-->
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-center bg-white shadow-md w-full rounded-xl">
                <div class="px-10 py-16 ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Creating an Account</h1>
                </div> 
                <!---Sub section 1-->
                    <div class="flex">
                        <h1 class="text-2xl">How do I create an account in Pasabuy?</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen">
                                <li>1. Go to pasabuy.com and click Sign up.</li>
                                <li>2. Enter your name, email address, mobile phone number, and password.</li>
                                <li>3. Click Next.</li>
                                <li>4. Input the verification code sent to your email address and click Next.</li>
                                <li>5. Add your home address and click Next.</li>
                                <li>6. Upload a valid ID (you can temporarily skip this step you will be automatically logged in to your new account)</li>
                                <li>7. Wait for a few seconds for the verification of your  ID.</li>
                                <li>8. You will be prompted to the Log in page</li>
                                <li>9. Enter your registered email address and your password.</li>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I log in to my Pasabuy account?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen1">
                                <li>1. Go to pasabuy.com and click Log in.</li>
                                <li>2. Enter your registered email address and your password.</li>
                                <li>3. Make sure your password is correct</li>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I verify my Pasabuy account?</h1>
                        <button @click="isOpen2=!isOpen2" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen2">
                                <li>1. Log in to your Pasabuy account.</li>
                                <li>2. Go to your profile.</li>
                                <li>3. Click Edit Profile.</li>
                                <li>4. Scroll down to the Verification Status and click Verify Now.</li>
                                <li>5. Upload the back and front photos of your ID.</li>
                                <li>6. Wait for a few seconds for verification of your ID</li>
                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                        <h1 class="text-2xl">I can’t create an account with my email address.</h1>
                        <button @click="isOpen3=!isOpen3" class="font-bold">
                            <span class="material-icons text-gray-500">ArrowDropDown</span>
                        </button>
                    </div>
                    <div class="w-full">
                            <div v-if="isOpen3">
                                <li>Keep in mind that an email address can only be associated with one (1) Pasabuy account.</li>
                                <li>If you've typed your email address correctly and see a message that an account with your email address already exists, let us know.</li>
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