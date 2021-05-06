<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Conditions for Returns</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="w-full text-align-left justify">
                        <h2>In order for the Goods to be eligible for a return, please make sure that:</h2>
                            <li>The Goods were purchased in the last 7 days</li>
                            <li>The Goods are in the original packaging</li>

                        <h2>The following Goods cannot be returned:</h2>
                            <li>he supply of Goods made to Your specifications or clearly personalized.</li>
                            <li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>
                            <li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>
                            <li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>
                            
                        <p class="justify">We reserve the right to refuse returns of any merchandise that does not meet the above return conditions in our sole discretion.</p>

                        <p class="justify">Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This exclusion may not 
                            apply to You if it is not permitted by applicable law.</p>
                             
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