<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Changes to These Terms and Conditions</h1>
                </div> 
                <div class="pt-2">
                    <div class="w-full text-align-left justify">
                                <p class="justify">We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will 
                                    make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be 
                                    determined at Our sole discretion.</p>
                                <p class="justify">By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. 
                                    If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
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