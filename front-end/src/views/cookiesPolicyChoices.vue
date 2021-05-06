<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Your Choices Regarding Cookies</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="w-full text-align-left justify">
                                <p class="justify">If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies 
                                    saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.</p>

                                <p class="justify">If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some
                                     features may not function properly.</p>
                                     
                                <p class="justify">If You'd like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit 
                                    the help pages of your web browser.</p>

                                <ol class="list-decimal font-normal text-sm">
                                    <li>For the Chrome web browser, please visit this page from Google: https://support.google.com/accounts/answer/32050</li>
                                    <li>For the Internet Explorer web browser, please visit this page from Microsoft: http://support.microsoft.com/kb/278835</li>
                                    <li>For the Firefox web browser, please visit this page from Mozilla: https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored</li>
                                    <li>For the Safari web browser, please visit this page from Apple: https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</li>
                                </ol>

                                <a>For any other web browser, please visit your web browser's official web pages.</a>
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