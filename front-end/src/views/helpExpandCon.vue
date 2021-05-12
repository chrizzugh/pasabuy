<template>
    <div class="pt-6 font-nunito"> <!--parent div-->
        <div id="helpExpandConnection" class="flex items-center justify-center w-full px-3 pb-16 bg-transparent mt-9 ">
            
            <div class="w-full overflow-hidden font-bold bg-transparent divide-y divide-gray-400 text-start rounded-xl divide-solid">
                
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl sm:text-base">Expanding your connections</h1>
                </div> 

                <div class="pt-2 text-justify">
                <!---Sub section 1-->
                    <div class="flex">
                        <button @click="isOpen=!isOpen" class="w-full py-1 text-sm font-bold text-left focus:outline-none">
                        How do I search for people to follow?
                           </button>
                           <button @click="isOpen=!isOpen" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Click on the Search tab on the upper right side of your screen.</li>
                                    <li class="pl-0.5">Input keywords you want to search. It can be a name of a person or a place.</li>
                                    <li class="pl-0.5">You can filter the search result by clicking the desired search result filter option above.</li>
                                    <li class="pl-0.5">Click the Follow button beside the username that you want to follow.</li>
                                    <li class="pl-0.5">You can also click on the photo of the user to visit their profile.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <button @click="isOpen1=!isOpen1" class="w-full py-1 text-sm font-bold text-left focus:outline-none">
                            How do I give a rating to a person after having a transaction with them?
                                                   
                        </button>
                        <button @click="isOpen1=!isOpen1" class="h-5 py-0 focus:outline-none">
                        <span class="inline-flex float-right pl-12 align-top vs:pl-0 material-icons-round">arrow_drop_down</span> </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="pt-2 pb-3 text-sm font-normal leading-relaxed list-decimal list-outside pl-9">
                                    <li class="pl-0.5">Click your profile picture on the upper right corner of the screen.</li>
                                    <li class="pl-0.5">Click Orders.</li>
                                    <li class="pl-0.5">Search for the transaction you made with the user.</li>
                                    <li class="pl-0.5">Click Write a review.</li>
                                    <li class="pl-0.5">Select the number of stars you want to give to the user.</li>
                                    <li class="pl-0.5">Write your feedback or comment on the space provided.</li>
                                    <li class="pl-0.5">Click Publish Review if you’re done.</li>
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