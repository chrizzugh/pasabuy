<template class=" bg-gray-bgcolor font-nunito">

<!----nav bar--->
<!------navigation--->
  <nav class="flex items-center shadow-md bg-white sticky top-0">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        <h1 class="absolute text-xl font-black tracking-widest left-20 font-raleway text-red-buttons block">pasaBUY</h1>
        
        <div class="border-black items-align-right justify justify-right absolute right-0">
          <button @click="isOpen=!isOpen" class=" focus:outline-none h-10 w-10 border-2 rounded-full border-red-700 items-right justify-right">
          <img class="h-9.7 w-10 rounded-full" src="/img/yami.jpg">
          </button>
        </div>
        
        <div class="w-full">
          <div v-if="isOpen" class="shadow-xl fixed bg-white space-y-2  h-auto w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-4 pr-4 pt-2 mr-16 mt-2">
            <router-link to="/dashboard"  class="flex flex-row gap-x-2 text-black">Go to Pasabuy<span class="material-icons text-gray-500">launch</span></router-link>
            <router-link to="/"  class="flex flex-row gap-x-2 text-black">Log out</router-link>
          </div>
        </div>
  </nav> <!----end of nav bar--->

  <!------->
    <div class="flex justify-center flex w-full my-8 mx-3" style="min-height:420px">
      <div id="helpCenterCreateAcc" class="w-3/12 bg-white rounded-l-md pl-3 ">
        <!---Option Buttons--->
          <div class=" overflow-hidden flex justify-start"> <!-- parent card box--->
              
              <!---left---->
              <div class="bg-transparent"> <!---child1 card box-->
                  <div class=" text-align-left"> 
                    <h1 class="font-bold text-xl mb-5 mt-5 ml-3">Help Center</h1>
                  </div>
                  <div class="w-4/5 items-align-left pb-2 ">
                        <div @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" >
                            <button @click="toggle" class="rounded-full w-full bg-gray-100 hover:bg-red-200 focus:bg-crimsonRed focus:text-white focus:outline-none duration-150 text-sm font-nunito leading-none text-black ml-5 py-2 mb-2">Creating an Account</button>
                        </div>
                        <div @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }">
                            <button @click ="toggle2" class="rounded-full w-full bg-gray-100 hover:bg-red-200 focus:bg-crimsonRed focus:text-white focus:outline-none duration-150 text-sm font-nunito leading-none  text-black ml-5 py-2 mb-2">Navigating Pasabuy</button>
                        </div>
                        <div @click=" isActive_function('btn3')" :class="{active: activeBtn === 'btn3' }">
                            <button @click="toggle3" class="rounded-full w-full bg-gray-100 hover:bg-red-200 focus:bg-crimsonRed focus:text-white focus:outline-none duration-150 text-sm font-nunito leading-none  text-gray-900 ml-5 py-2 mb-2">Managing Your Profile</button>
                        </div>
                        <div @click=" isActive_function('btn4')" :class="{active: activeBtn === 'btn4' }" >
                            <button @click="toggle4" class="rounded-full w-full bg-gray-100 hover:bg-red-200 focus:bg-crimsonRed focus:text-white focus:outline-none duration-150 text-sm font-nunito leading-none  text-gray-900 ml-5 py-2">Expanding Your Connections</button>
                        </div>

                  </div>
              </div>
          </div><!--End--></div>
     <div class="w-2/5 bg-gray-100 rounded-r-md pr-8 pl-2"><component :is="component" /></div>
    </div>

<!--FOOTER-->
        <footer class="px-4 pb-8 text-white xl:pt-12 md:pt-12 bg-bastille"> <!---change to pb-5---->
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4">
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide ">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide sm:px-0">Company</li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline">About Us</a>
                        </li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">FAQs</a></li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Help</a></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide ">Privacy Policy</li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 text-white no-underline">Privacy</a></li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Terms</a></li>
                    </ul>
                    <div class="flex flex-col w-full sm:w-11/12">
                        <div class="inline-block px-3 py-1 font-medium tracking-wide ">©Pasabuy 2021</div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Stay connected with us</a></li>
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
    </footer>  <!---end of footer---->
      

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
import CreateAccount from './helpCreateAcc'
import NavigatingPasabuy from './helpNavAcc'
import ManagingYourProfile from './helpManageProfile'
import ExpandingYourConnection from './helpExpandCon'
import $ from 'jquery'

export default {
  data(){
        return{
            component: "CreateAccount",
            component2: "NavigatingPasabuy",
            component3: "ManagingYourProfile",
            component4: "ExpandingYourConnection",

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
    CreateAccount,
    NavigatingPasabuy,
    ManagingYourProfile,
    ExpandingYourConnection,
  },

  methods:{
    toggle(){
      if(this.component != CreateAccount)
        this.component = CreateAccount;
    },
    toggle2(){
      if(this.component != NavigatingPasabuy)
        this.component = this.component2;
    },
    toggle3(){
       if(this.component != NavigatingPasabuy)
        this.component = this.component3;
    },
    toggle4(){
      if(this.component != NavigatingPasabuy)
        this.component = this.component4;
    },
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
}
.active button{
  color:rgba(220, 20, 60, 1);
}
.notSelected{
  background-color: rgba(220, 20, 60, 1);
}
.isSelected {
  background-color:rgba(220, 20, 60, 1);
  /* rgb(255, 190, 203);  */
}
</style>