<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Gifts</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="w-full text-align-left justify">
                            
                        <p class="justify">If the Goods were marked as a gift when purchased and then shipped directly to you, You'll receive a gift credit for the value of your return. 
                            Once the returned product is received, a gift certificate will be mailed to You.</p>

                        <p class="justify">f the Goods weren't marked as a gift when purchased, or the gift giver had 
                            the Order shipped to themselves to give it to You later, We will send the refund to the gift giver.</p>
                             
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
            
        }
    },
    
    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>