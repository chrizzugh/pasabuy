<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Interpretation and Definitions</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="flex">
                        <h1 class="text-sm">Interpretation</h1>
                        <button @click="isOpen=!isOpen" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen">
                                <p class="justify">The words of which the initial letter is capitalized have meanings defined under the following conditions. 
                                    The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                            </div>
                    </div>
                <!----sub section 2---->
                    <div class="flex">
                        <h1 class="text-sm">Definitions</h1>
                        <button @click="isOpen1=!isOpen1" class="font-bold">
                            <span class="material-icons">arrow_drop_down</span>
                        </button>
                    </div>
                    <div class="w-full text-align-left justify">
                            <div v-if="isOpen1">
                                <p>For the purposes of this Return and Refund Policy:</p>
                                    <li>Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to pasaBUY.</li>
                                    <li>Goods refer to the items offered for sale on the Service.</li>
                                    <li>Orders mean a request by You to purchase Goods from Us.</li>
                                    <li>Service refers to the Website.</li>
                                    <li>Website refers to pasaBUY, accessible from https://pasabuybscs.herokuapp.com/</li>
                                    <li>You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
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
            show: false,
        }
    },
    
    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>