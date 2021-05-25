<template>
    <div class=" pt-6 font-nunito"> <!--parent div-->
        <div id="helpNavigateAccount" class="items-center flex justify-center w-full mt-9 pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-start bg-transparent w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Navigating the Pasabuy application</h1>
                </div> 
                <div class="pt-2">
                <!---Sub section 1-->
                    <div class="flex justify-between  items-center ">
                        <h1 class="text-sm">How do I post a shopping offer?</h1>
                        <button @click="isOpen=!isOpen" class="font-bold focus:outline-none">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full font-sm text-align-left justify">
                            <div v-if="isOpen">
                                <ol class=" list-decimal list-inside font-normal text-sm">
                                    <li>On your Home Page, click on the Post a shopping offer or order request tab.</li>
                                    <li>A Create Post window will pop up on the screen.</li>
                                    <li>Select Shopping Offer.</li>
                                    <li>Enter your Delivery Area, preferred schedule, the capacity of your shopping items, your shopping place, what mode of transportation you will be using, and what method will you use to receive payments from customers.</li>
                                    <li>Input message or caption for your shopping offer post.</li>
                                    <li>Click Post.</li>
                                </ol>

                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex justify-between  items-center ">
                        <h1 class="text-sm">How do I post an order request?</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold focus:outline-none">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full font-sm text-align-left justify">
                            <div v-if="isOpen1">
                                <ol class="text-sm list-decimal list-inside font-normal">
                                    <li>On your Home Page, click on the Post a shopping offer or order request tab.</li>
                                    <li>A Create Post window will pop up on the screen.</li>
                                    <li>Select Order Request.</li>
                                    <li>Enter your Delivery Area, preferred schedule, your shopping place, and what method will you use to send your payment to the rider/shopper.</li>
                                    <li>Select your shopping list or create a new shopping list.</li>
                                    <li>Input message or caption for your order request post.</li>
                                    <li>Click Post.</li>
                                </ol>
                            </div>
                    </div>
                <!----sub section 3---->
                    <div class="flex justify-between  items-center ">
                        <h1 class="text-sm">I saw a shopping offer on my feed, how do I send a request to pasabuy to that user?</h1>
                        <button @click="isOpen2=!isOpen2" class="font-bold focus:outline-none">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full font-sm text-align-left justify">
                            <div v-if="isOpen2">
                                <ol class="list-decimal list-inside font-normal text-sm">
                                    <li>On the desired shopping offer post, click Send Request button below.</li>
                                    <li>A pop-up window will appear.</li>
                                    <li>Input your delivery address, your preferred schedule, the shopping place, the desired mode of payment, and select your shopping list.</li>
                                    <li>Type your message for the shopper and click the Send button.</li>
                                    <li>Your request will be received by the user through their inbox.</li>
                                    <li>They can either accept or decline the request you sent.</li>
                                    <li>You can have further conversations with the user on the message tab.</li>
                                </ol>

                            </div>
                    </div>
                <!---sub section 4----->
                    <div class="flex justify-between  items-center ">
                        <h1 class="text-sm">I saw an order request post on my feed, how do I send an offer to that user?</h1>
                        <button @click="isOpen3=!isOpen3" class="font-bold focus:outline-none">
                            <span class="material-icons ">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full font-sm text-align-left justify">
                            <div v-if="isOpen3">
                                <ol class="list-decimal list-inside text-sm font-normal">
                                    <li>On the desired shopping offer post, click Send Offer button below.</li>
                                    <li>A pop-up window will appear.</li>
                                    <li>Click the Send button to inform the user that you want to accept their offer.</li>
                                    <li>Your offer will be received by the user through their inbox.</li>
                                    <li>They can either accept or decline the offer you sent.</li>
                                    <li>You can have further conversations with the user on the message tab.</li>
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