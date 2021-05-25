<template class=" bg-gray-bgcolor font-nunito">

<!----nav bar (!logged In)--->
 <nav class="sticky top-0 flex items-center w-full py-5 shadow-md h-14 bg-red-buttons">
      <div class="flex items-center justify-center pl-4">
       <div class="flex items-center justify-center pl-4">
      <img src="/img/pasaBUYwhiteLogo.png" class="block w-8 h-8 pl-1">
        <h1 class="block pl-1 text-lg font-black tracking-widest text-white font-raleway">pasaBUY</h1>
        </div>
        <div class="absolute border-black items-align-right justify justify-right right-7">
          <button class="px-3 text-xs font-semibold text-white uppercase bg-transparent border border-white rounded-full h-7 focus:outline-none">
        <router-link to="/log-in"> Log in</router-link>
      </button>
        </div>
        </div>
        
        <div class="w-full">
          <div v-if="isOpen" class="fixed right-0 h-auto py-2 pt-2 pl-4 pr-4 mt-2 mr-16 space-y-2 bg-white rounded-lg shadow-xl w-30 ring-2 ring-gray-200">
            <router-link to="/dashboard"  class="flex flex-row text-black gap-x-2">Go to Pasabuy<span class="text-gray-500 material-icons">launch</span></router-link>
            <router-link to="/"  class="flex flex-row text-black gap-x-2">Log out</router-link>
          </div>
        </div>
  </nav>  <!----end of nav bar--->

  <!------->
  <div class="flex justify-center xl:mt-10 xl:mb-20 2xl:mt-10 2xl:mb-20 lg:mt-10 lg:mb-20 ">
    <div class="flex self-center justify-center w-full 2xl:w-3/5 xl:w-3/5 lg:w-3/5 h-98" >
      <div id="helpCenterCreateAcc" class="w-full bg-white md:w-3/5 sm:w-7/12 vs:w-10/12 2xl:w-2/4 xl:w-2/4 lg:w-2/4 rounded-l-md ">
        <!---Option Buttons--->
          <div class="flex justify-start overflow-hidden "> <!-- parent card box--->
              
              <!---left---->
              <div class="w-full bg-transparent "> <!---child1 card box-->
                  <div class=" text-align-left"> 
                    <h1 class="mt-5 mb-5 ml-5 text-2xl font-bold vs:text-lg">Help Center</h1>
                  </div>
                  <div class="flex flex-col justify-center w-full px-3 md:px-7 2xl:pl-3 xl:pl-3 lg:pl-3">
                        <div @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" >
                            <button @click="toggle" class="w-full px-3 pl-5 text-base leading-none text-left bg-transparent rounded-full pt-2 vs:text-sm vs:pl-7 focus:bg-crimsonRed text-red-buttons focus:outline-none font-nunito vs:py-1.5"><a class="text-black">
                            <span class="inline-flex py-1 pl-2 align-middle material-icons w-9 h-9">person</span>Creating an Account</a></button>
                        </div>
                        <div @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }">
                            <button @click ="toggle2" class="w-full px-3 pt-2 pl-5 text-base leading-none text-left bg-transparent rounded-full vs:text-sm vs:pl-7 focus:bg-crimsonRed text-red-buttons focus:outline-none font-nunito vs:py-1.5"><a class="text-black">
                              <span class="inline-flex py-1 pl-2 align-middle material-icons w-9 h-9">apps</span>Navigating Pasabuy</a></button>
                        </div>
                        <div @click=" isActive_function('btn3')" :class="{active: activeBtn === 'btn3' }">
                            <button @click="toggle3" class="w-full px-3 pt-2 pl-5 text-base leading-none text-left bg-transparent rounded-full vs:text-sm vs:pl-7 focus:bg-crimsonRed text-red-buttons focus:outline-none font-nunito vs:py-1.5"><a class="text-black">
                              <span class="inline-flex py-1 pl-2 align-middle material-icons w-9 h-9">manage_accounts</span>Managing Your Profile </a></button>
                        </div>
                        <div @click=" isActive_function('btn4')" :class="{active: activeBtn === 'btn4' }" >
                            <button @click="toggle4" class="w-full pt-2 pl-5 leading-none text-left bg-transparent rounded-full text-md vs:pl-7 focus:bg-crimsonRed vs:text-sm text-red-buttons focus:outline-none font-nunito"><a class="text-black ">
                              <span class="inline-flex py-1 pl-2 align-middle material-icons w-9 h-9">supervisor_account</span>Expanding Your Connections </a></button>
                        </div>

                  </div>
              </div>
          </div><!--End--></div>
     <div class="w-full pl-2 pr-8 overflow-auto bg-white sm:pr-3 md:pr-3 vs:pr-3 rounded-r-md"><component :is="component" /></div>
    </div>

  </div>
    
<!--FOOTER-->
        <footer class="px-4 text-sm text-white lg:pb-5 lg:pt-8 pb-7 xl:pt-5 md:pt-12 bg-bastille">
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4">
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 text-sm font-medium tracking-wide ">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide sm:px-0">Company</li>
                        <li><router-link to="/about-us"  class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline">About Us</router-link>
                        </li>
                        <li><router-link to="/help-center" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Help</router-link></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium tracking-wide text-sm ">Policies</li>
                        <li><router-link to="/privacy-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Privacy Policy</router-link></li>
                        <li><router-link to="/terms-and-condition" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Terms and Condition</router-link></li>
                        <li><router-link to="/return-and-refund-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Return Refund</router-link></li>
                        <li><router-link to="/cookies-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Cookies Policy</router-link></li>
                    </ul>
                    <div class="flex flex-col w-full sm:w-11/12">
                        <div class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide ">©Pasabuy 2021</div>
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
    </footer>      <!---end of footer---->
      

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
  background-color: #CD0F0F, 100%;
}
.active button{
   background-color: currentColor;
   height:48px;
   padding-bottom: 8px;
   
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
