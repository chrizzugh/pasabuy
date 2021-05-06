<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">The use of the Cookies</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="flex">
                        <h1 class="text-sm">Type of Cookies We Use</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen">
                                <p class="justify">Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, 
                                    while Session Cookies are deleted as soon as You close your web browser.</p>

                                <p class="justify">We use both session and persistent Cookies for the purposes set out below:</p>

                                <h2 class="font-bold">Necessary / Essential Cookies</h2>
                                    <p class="justify">Type: Session Cookies</p>
                                    <p class="justify">Administered by: Us</p>
                                    <p class="justify">Purpose: These Cookies are essential to provide You with services available through the Website and 
                                        to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. 
                                        Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide 
                                        You with those services.</p>

                                <h2 class="font-bold">Functionality Cookies</h2>
                                    <p class="justify">Type: Persistent Cookies</p>
                                    <p class="justify">Administered by: Us</p>
                                    <p class="justify">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as 
                                        remembering your login details or language preference. The purpose of these Cookies is to provide You with a more 
                                        personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-sm">How do I log in to my Pasabuy account?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="list-decimal font-normal text-sm">
                                    <li>Go to pasabuy.com and click Log in.</li>
                                    <li>Enter your registered email address and your password.</li>
                                    <li>Make sure your password is correct</li>
                                </ol>
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