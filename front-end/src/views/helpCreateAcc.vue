<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="helpCreateAcc" class="flex items-center justify-center w-full px-3 pb-16 mt-12 vs:pr-0">
            <div class="w-full overflow-hidden font-bold divide-y divide-gray-400 rounded-xl divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Creating an Account</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="flex">
                        <button @click="isOpen=!isOpen" class="w-full mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I create an account in Pasabuy?
                        </button>
                        <button @click="isOpen=!isOpen" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-justify text-align-left ">
                            <div v-if="isOpen">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside vs:text-xs pl-9">
                                    <li class="pl-0.5">Go to pasabuy.com and click Sign up.</li>
                                    <li class="pl-0.5">Enter your name, email address, mobile phone number, and password.</li>
                                    <li class="pl-0.5">Click Next.</li>
                                    <li class="pl-0.5">Input the verification code sent to your email address and click Next.</li>
                                    <li class="pl-0.5">Add your home address and click Next.</li>
                                    <li class="pl-0.5">Upload a valid ID (you can temporarily skip this step you will be automatically logged in to your new account)</li>
                                    <li class="pl-0.5">Wait for a few seconds for the verification of your  ID.</li>
                                    <li class="pl-0.5">You will be prompted to the Log in page</li>
                                    <li class="pl-0.5">Enter your registered email address and your password.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <button @click="isOpen1=!isOpen1" class="w-full mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I log in to my Pasabuy account?
                        </button>
                        <button @click="isOpen1=!isOpen1" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Go to pasabuy.com and click Log in.</li>
                                    <li class="pl-0.5">Enter your registered email address and your password.</li>
                                    <li class="pl-0.5">Make sure your password is correct</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <button @click="isOpen2=!isOpen2" class="w-full mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I verify my Pasabuy account?
                        </button>
                        <button @click="isOpen2=!isOpen2" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen2">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Log in to your Pasabuy account.</li>
                                    <li class="pl-0.5">Go to your profile.</li>
                                    <li class="pl-0.5">Click Edit Profile.</li>
                                    <li class="pl-0.5">Scroll down to the Verification Status and click Verify Now.</li>
                                    <li class="pl-0.5">Upload the back and front photos of your ID.</li>
                                    <li class="pl-0.5">Wait for a few seconds for verification of your ID</li>
                                </ol>
                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                    <button @click="isOpen3=!isOpen3" class="w-full text-sm font-bold text-left focus:outline-none">
                        I can’t create an account with my email address.
                        </button>
                        <button @click="isOpen3=!isOpen3" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen3">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Keep in mind that an email address can only be associated with one (1) Pasabuy account.</li>
                                    <li class="pl-0.5">If you've typed your email address correctly and see a message that an account with your email address already exists, let us know.</li>
                                </ol>
                            </div>
                    </div>
                </div>
            </div><!----->
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
export default {
    data(){  
        return{
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

}
</script>
