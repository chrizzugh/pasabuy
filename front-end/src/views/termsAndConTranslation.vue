<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="helpCreateAcc" class="flex items-center justify-center w-full px-3 pb-16 mt-9 ">
            <div class="w-full overflow-hidden font-bold rounded-xl divide-solid">
                <div class="pb-1">
                    <h1 class="pb-2 space-x-1 space-y-1 text-xl">Translation Interpretation</h1>
                </div> 
                <div class="pt-2">
                    <div class="w-full font-normal text-justify text-align-left sm:text-sm vs:text-xs md:text-sm dv:text-base">
                                <p class="justify">These Terms and Conditions may have been translated if We have made them available to You on our Service. 
                                    You agree that the original English text shall prevail in the case of a dispute.</p>
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