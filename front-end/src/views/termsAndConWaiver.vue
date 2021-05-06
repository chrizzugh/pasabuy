<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Severability and Waiver</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="flex">
                        <h1 class="text-sm">Severability</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <p class="justify">If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the 
                                objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force 
                                and effect.</p>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-sm">Waiver</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <p class="justify">Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms 
                                    shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall 
                                    be the waiver of a breach constitute a waiver of any subsequent breach.</p>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <h1 class="text-sm">How do I verify my Pasabuy account?</h1>
                        <button @click="isOpen2=!isOpen2" class="font-bold">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen2">
                                <ol class="list-decimal text-sm font-normal">
                                    <li>Log in to your Pasabuy account.</li>
                                    <li>Go to your profile.</li>
                                    <li>Click Edit Profile.</li>
                                    <li>Scroll down to the Verification Status and click Verify Now.</li>
                                    <li>Upload the back and front photos of your ID.</li>
                                    <li>Wait for a few seconds for verification of your ID</li>
                                </ol>
                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                        <h1 class="text-sm">I can’t create an account with my email address.</h1>
                        <button @click="isOpen3=!isOpen3" class="font-bold">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen3">
                                <ol class="list-decimal font-normal text-sm">
                                    <li>Keep in mind that an email address can only be associated with one (1) Pasabuy account.</li>
                                    <li>If you've typed your email address correctly and see a message that an account with your email address already exists, let us know.</li>
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