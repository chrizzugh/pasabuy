<template>
    <div class="bg-gray-100 pt-6 font-nunito"> <!--parent div-->
        <div id="helpExpandConnection" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-center bg-transparent w-full rounded-xl">
                <div class="px-10 py-16 ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Expanding your connections</h1>
                </div> 
                <!---Sub section 1-->
                    <div class="flex">
                        <h1 class="text-2xl">How do I search for people to follow?</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen">
                                <ol class="list-decimal">
                                    <li>Click on the Search tab on the upper right side of your screen.</li>
                                    <li>Input keywords you want to search. It can be a name of a person or a place.</li>
                                    <li>You can filter the search result by clicking the desired search result filter option above.</li>
                                    <li>Click the Follow button beside the username that you want to follow.</li>
                                    <li>You can also click on the photo of the user to visit their profile.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-2xl">How do I give a rating to a person after having a transaction with them?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="list-decimal">
                                    <li>Click your profile picture on the upper right corner of the screen.</li>
                                    <li>Click Orders.</li>
                                    <li>Search for the transaction you made with the user.</li>
                                    <li>Click Write a review.</li>
                                    <li>Select the number of stars you want to give to the user.</li>
                                    <li>Write your feedback or comment on the space provided.</li>
                                    <li>Click Publish Review if you’re done.</li>
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