<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="helpCreateAcc" class="flex items-center justify-center w-full px-3 pb-16 pr-20 vs:px-0 sm:pr-14 sm:px-0 mt-9 ">
            <div class="w-full overflow-hidden font-bold rounded-xl ">
                <div class="pb-1">
                    <h1 class="text-2xl uppercase sm:text-xl md:text-xl vs:text-base">Interpretation and Definitions</h1>
                </div> 
                <div class="pt-2 vs:pt-0">
                <!----sub section 1---->
                    <div class="py-3">
                        <h1 class="text-3xl font-bold text-blue-800 sm:text-2xl vs:text-lg md:text-2xl">Interpretation</h1>                        
                    </div>
                    <div class="w-full text-align-left justify">
                            <div>
                                <p class="font-normal text-justify sm:text-sm vs:text-xs md:text-sm dv:text-base">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
                                </p>
                            </div>
                    </div>

                <!----sub section 2---->
                    <div class="flex py-3">
                        <h1 class="text-3xl font-bold text-blue-800 sm:text-2xl vs:text-lg md:text-2xl">Definitions</h1>
                    </div>
                    <div class="w-full font-normal text-align-left justify sm:text-sm vs:text-xs md:text-sm dv:text-base">
                            <div>
                                
  <p class="vs:text-xs">For the purposes of this Return and Refund Policy:</p><br>
     <ul class="pl-12 space-y-3 text-justify list-disc list-outside vs:text-xs">
         <li><b>Company </b>(referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to pasaBUY.</li>
         <li><b>Goods</b> refer to the items offered for sale on the Service.</li>
         <li><b>Orders</b> mean a request by You to purchase Goods from Us.</li>
         <li><b>Service</b> refers to the Website.</li>
         <li><b>Website</b> refers to pasaBUY, accessible from https://pasabuybscs.herokuapp.com/</li>
         <li><b>You</b> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
     </ul>
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