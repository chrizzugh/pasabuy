<template>
    <div class="pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
            <div class="overflow-hidden font-bold text-center bg-transparent w-full rounded-xl">
                <div class="px-10 py-16 ">
                    <h1 class="space-x-1 space-y-1 text-2xl">Children's Privacy</h1>
                </div> 
                    <div class="w-full text-align-left justify">
                                <p class="justify">Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable 
                                    information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided 
                                    Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age 
                                    of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
                                <p class="justify">If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
                            
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
            show: false,
        }
    },
    
    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },

}
</script>