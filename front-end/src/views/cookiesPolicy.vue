Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@marsyaaaaal 
chrzxx
/
pasabuy
1
0
3
Code
Issues
Pull requests
2
Actions
Projects
Wiki
Security
Insights
pasabuy/front-end/src/views/cookiesPolicy.vue
@chrzxx
chrzxx Add files via upload
Latest commit 0e8b5cd 27 days ago
 History
 1 contributor
231 lines (203 sloc)  11.9 KB
  
<template class=" bg-gray-bgcolor font-nunito">

<!----nav bar--->
<!------navigation--->
  <nav class=" w-full flex items-center shadow-md bg-white  sticky top-0 ">
                      <router-link to="/"><img src="/img/pasaBUYLogoOnly.png" class="w-12 h-12" ></router-link>
        <h1 class="absolute text-xl font-black tracking-widest left-16 font-raleway text-red-buttons block">pasaBUY</h1>
        <div class="w-full">
          <div v-if="isOpen" class="shadow-xl fixed bg-white space-y-2  h-auto w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-4 pr-4 pt-2 mr-16 mt-2">
            <router-link to="/dashboard"  class="flex flex-row gap-x-2 text-black">Go to Pasabuy<span class="material-icons text-gray-500">launch</span></router-link>
            <router-link to="/"  class="flex flex-row gap-x-2 text-black">Log out</router-link>
          </div>
        </div>
  </nav> <!----end of nav bar--->
<div>
<h1 class="mt-50 mb-50 text-3xl">UNDER MAINTENANCE</h1>
</div>
    
<!--FOOTER-->
        <footer class="px-4 text-sm text-white lg:pb-5 lg:pt-8 pb-7 xl:pt-5 md:pt-12 bg-bastille">
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4 bg-bastille" >
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0 bg-bas tille">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 text-sm font-medium tracking-wide "><strong>Pasabuy</strong></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide sm:px-0"><strong>Company</strong></li>
                        <li hidden><router-link to="/about-us"  class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline">About Us</router-link>
                        </li>
                        <li><router-link to="/help-center" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Help</router-link></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium tracking-wide text-sm "><strong>Policies</strong></li>
                        <li><router-link to="/privacy-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Privacy Policy</router-link></li>
                        <li><router-link to="/terms-and-condition" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Terms and Condition</router-link></li>
                        <li><router-link to="/return-and-refund-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Return Refund</router-link></li>
                        <li><router-link to="/cookies-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Cookies Policy</router-link></li>
                    </ul>
                    <div class="flex flex-col w-full sm:w-11/12">
                        <div class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide "><strong>©Pasabuy 2021</strong></div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Stay connected with us</a></li>
                        </ul>
                        <div class="flex justify-start pl-4 mt-2">
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" /></svg>
                            </a>
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" /></svg>
                            </a>
                            <a class="flex items-center no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
    </footer>
      

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
import $ from 'jquery'
export default {
  data(){
        return{
            isOpen: false,
            isClick: false,
            activeBtn: 0,
            show: false
        }
    },
  
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
  components:{
    
  },
  methods:{
    isActive_function(el){
     if(el=='btn1'){
      this.activeBtn= 0;
    } else {
        this.activeBtn= el;
        }
    },
    selectButton(){
      $(".notSelected").toggleClass("isSelected");
    }
  }
}
</script>
<style scoped>
.active {
  color:rgba(220, 20, 60, 1);  
  background-color: #CD0F0F, 100%;
}
.active button{
   background-color: currentColor;
   height: 40px;
}
.active a{
  color:white;
}
.notSelected{
  background-color: rgba(220, 20, 60, 1);
}
.isSelected {
  background-color:rgba(220, 20, 60, 1);
  /* rgb(255, 190, 203);  */
}
</style>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete