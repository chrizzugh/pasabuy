<template>
    <div class="pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full  pb-16 bg-transparent px-3 ">
            <div class=" space-y-3 overflow-hidden font-bold text-center bg-transparent w-full rounded-xl">
                <div class="text-left ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Changes to this Privacy Policy</h1>
                </div> 
                    <div class="w-full text-justify">
                            <div >
                                <p class="justify">We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
                                <p class="justify">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the 
                                    "Last updated" date at the top of this Privacy Policy.</p>
                                <p class="justify">You are advised to review this Privacy Policy periodically for any changes. 
                                    Changes to this Privacy Policy are effective when they are posted on this page.</p>
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