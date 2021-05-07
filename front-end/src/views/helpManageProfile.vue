<template>
    <div class="pt-6 font-nunito"> <!--parent div-->
        <div id="helpManageProfile" class="flex items-center justify-center w-full px-3 pb-16 mt-12 bg-transparent ">
            <div class="w-full overflow-hidden font-bold bg-transparent divide-y divide-gray-400 text-start rounded-xl divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Managing your Profile</h1>
                </div> 

                <div class="pt-2 text-justify">
                <!---Sub section 1-->
                    <div class="flex ">
                        <button @click="isOpen=!isOpen" class="w-full py-1 mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I create a shopping list so I can just select them when sending and posting a request?
                        </button>
                        <button @click="isOpen=!isOpen" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-justify text-align-left">
                            <div v-if="isOpen">
                                <h2 class="pl-2 text-sm italic">Via Home Page</h2>
                                    <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                        <li class="pl-0.5">On your Home Page, you can see all your existing shopping lists.</li>
                                        <li class="pl-0.5">Click Create New button to create a new shopping list.</li>
                                        <li class="pl-0.5">Enter the name of your list as well as the items you want to include on the list.</li>
                                        <li class="pl-0.5">Click Save Changes.</li>
                                        <li class="pl-0.5">Click the three-dot menu on the upper right corner of the existing shopping list if you want to delete or edit them.</li>
                                    </ol>
                                <h2 class="pl-2 text-sm italic">View full list of your shopping list</h2>
                                    <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                        <li class="pl-0.5">On your Home Page, click your profile picture on the upper right corner of the screen.</li>
                                        <li class="pl-0.5">Click Shopping Lists.</li>
                                        <li class="pl-0.5">Click the tab for creating new shopping lists if you want to add new items.</li>
                                        <li class="pl-0.5">Click the three-dot menu on the upper right corner of the existing shopping list to delete or edit them.</li>
                                    </ol>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <button @click="isOpen1=!isOpen1" class="w-full mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I remove and delete my posts?
                        </button>
                        <button @click="isOpen1=!isOpen1" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">On your Home Page, click your profile picture on the upper right corner of the screen.</li>
                                    <li class="pl-0.5">Click Profile.</li>
                                    <li class="pl-0.5">Click the three-dot menu on the upper right corner of the desired post that you want to delete.</li>
                                    <li class="pl-0.5">Click Delete.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <button @click="isOpen2=!isOpen2" class="w-full mb-2 text-sm font-bold text-left focus:outline-none">
                        How do I edit my profile information?
                        </button>
                        <button @click="isOpen2=!isOpen2" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen2">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Click your profile picture on the upper right corner of the screen.</li>
                                    <li class="pl-0.5">Select Profile.</li>
                                    <li class="pl-0.5">Click Edit Profile beside your account name.</li>
                                    <li class="pl-0.5">Click Edit on the upper right corner of the field that you want to edit.</li>
                                    <li class="pl-0.5">To save the changes you made, click Save.</li>
                                </ol>

                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                        <button @click="isOpen3=!isOpen3" class="w-full text-sm font-bold text-left focus:outline-none">
                        How can I see my rating?
                        </button>
                        <button @click="isOpen3=!isOpen3" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen3">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Click your profile picture on the upper right corner of the screen.</li>
                                    <li class="pl-0.5">Select Profile.</li>
                                    <li class="pl-0.5">Click on the Reviews tab.</li>
                                </ol>
                            </div>
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