<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="termsAndcond" class="flex items-center justify-center w-full px-3 pb-16 mt-9 ">
            <div class="w-full overflow-hidden font-bold rounded-xl divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Acknowledgment</h1>
                </div> 
                <div class="pt-2">
                    <div class="w-full font-normal text-justify sm:text-sm vs:text-xs md:text-sm dv:text-base text-align-left">
                                <p class="pt-2">These are the Terms and Conditions governing the use of this Service and the agreement that operates between You 
                                    and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
                                <p class="pt-5">Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. 
                                    These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
                                <p class="pt-5"> By accessing or using the Service You agree to be bound by these Terms and Conditions. 
                                    If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
                                <p class="pt-5">You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
                                <p class="pt-5">Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. 
                                    Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the 
                                    Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using 
                                    Our Service.</p>
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