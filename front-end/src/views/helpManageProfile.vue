<template>
    <div class="bg-gray-100 pt-6 font-nunito"> <!--parent div-->
        <div id="helpManageProfile" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-center bg-transparent w-full rounded-xl">
                <div class="px-10 py-16 ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Managing your Profile</h1>
                </div> 
                <!---Sub section 1-->
                    <div class="flex">
                        <h1 class="text-2xl">How do I create a shopping list so I can just select them when sending and posting a request?</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen">
                                <h2 class="italic">Via Home Page</h2>
                                    <ol class="list-decimal">
                                        <li>On your Home Page, you can see all your existing shopping lists.</li>
                                        <li>Click Create New button to create a new shopping list.</li>
                                        <li>Enter the name of your list as well as the items you want to include on the list.</li>
                                        <li>Click Save Changes.</li>
                                        <li>Click the three-dot menu on the upper right corner of the existing shopping list if you want to delete or edit them.</li>
                                    </ol>
                                <h2 class="italic">View full list of your shopping list</h2>
                                    <ol class="list-decimal">
                                        <li>On your Home Page, click your profile picture on the upper right corner of the screen.</li>
                                        <li>Click Shopping Lists.</li>
                                        <li>Click the tab for creating new shopping lists if you want to add new items.</li>
                                        <li>Click the three-dot menu on the upper right corner of the existing shopping list to delete or edit them.</li>
                                    </ol>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I remove and delete my posts?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="list-decimal">
                                    <li>On your Home Page, click your profile picture on the upper right corner of the screen.</li>
                                    <li>Click Profile.</li>
                                    <li>Click the three-dot menu on the upper right corner of the desired post that you want to delete.</li>
                                    <li>Click Delete.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I edit my profile information?</h1>
                        <button @click="isOpen2=!isOpen2" class="font-bold">
                            <span class="material-icons "></span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen2">
                                <ol class="list-decimal">
                                    <li>Click your profile picture on the upper right corner of the screen.</li>
                                    <li>Select Profile.</li>
                                    <li>Click Edit Profile beside your account name.</li>
                                    <li>Click Edit on the upper right corner of the field that you want to edit.</li>
                                    <li>To save the changes you made, click Save.</li>
                                </ol>

                            </div>
                    </div>
                <!---sub section 4----->
                <div class="flex">
                        <h1 class="text-2xl">How can I see my rating?</h1>
                        <button @click="isOpen3=!isOpen3" class="font-bold">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen3">
                                <ol class="list-decimal">
                                    <li>Click your profile picture on the upper right corner of the screen.</li>
                                    <li>Select Profile.</li>
                                    <li>Click on the Reviews tab.</li>
                                </ol>
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