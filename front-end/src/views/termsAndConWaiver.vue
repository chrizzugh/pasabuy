<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="helpCreateAcc" class="flex items-center justify-center w-full px-3 pb-16 mt-9 ">
            <div class="w-full overflow-hidden font-bold rounded-xl divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Severability and Waiver</h1>
                </div> 
                <div class="pt-2 font-normal text-justify sm:text-sm vs:text-xs md:text-sm dv:text-base">
                <!----sub section 1---->
                    
                        <h1 class="pb-2 text-lg font-bold text-waterloo">Severability</h1>
                        
                    <div class="w-full pb-3 font-normal text-justify text-align-left sm:text-sm vs:text-xs md:text-sm dv:text-base">
                            <p class="">If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the 
                                objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force 
                                and effect.</p>
                    </div>
                <!----sub section 2---->
                    
                        <h1 class="pb-2 text-lg font-bold text-waterloo">Waiver</h1>
                        
                
                    <div class="w-full font-normal text-justify text-align-left sm:text-sm vs:text-xs md:text-sm dv:text-base">
                           
                                <p class="">Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms 
                                    shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall 
                                    be the waiver of a breach constitute a waiver of any subsequent breach.</p>
                            
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