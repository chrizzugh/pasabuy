<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">"AS IS" and "AS AVAILABLE" Disclaimer</h1>
                </div> 
                <div class="pt-2">
                    <div class="w-full text-align-left justify">
                                <p class="justify">The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty 
                                    of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its 
                                    Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, 
                                    whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of 
                                    merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of 
                                    course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company 
                                    provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, 
                                    achieve any intended results, be compatible or work with any other software, applications, systems or services, operate 
                                    without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or 
                                    will be corrected.</p>
                                
                                <p class="justify">Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of 
                                    any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products 
                                    included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any 
                                    information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of 
                                    the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>

                                <p class="justify">Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, 
                                    so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section 
                                    shall be applied to the greatest extent enforceable under applicable law.</p>
                                    
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