<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Limitation of Liability</h1>
                </div> 
                <div class="pt-2">
                    <div class="w-full text-align-left justify">
                                <p class="justify">Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of 
                                    this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if 
                                    You haven't purchased anything through the Service.</p>

                                <p class="justify">To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any 
                                    special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss 
                                    of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to 
                                    the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in 
                                    connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and 
                                    even if the remedy fails of its essential purpose.</p>

                                <p class="justify">Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, 
                                    which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent 
                                    permitted by law.</p>
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