<template>
    <!-- Post Modal-->
    <div v-on:click.self="close" class="z-50 bg-black font-nunito bg-opacity-25 fixed inset-0 flex ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
     <div class="hideIf inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
        <div class="flex flex-col  mt-4">

            <!--Create Post section-->
            <h1 class="items-center justify-center ml-24 sm:ml-24 ssm:ml-8 ssm:pl-8 vs:ml-6 pb-4 text-gray-900 leading-normal pl-20 text-2xl ssm:text-xl vs:text-xl font-bold text-center">
                Create Post
                <button @click.prevent="close" class="pl-14 ml-20 sm:ml-14 ssm:pl-4 ssm:ml-4 vs:pl-4 vs:ml-8 focus:outline-none text-sm ssm:text-xs vs:text-xs mb-1 leading-none text-indigo-900">
                Close
                </button>
              </h1>
            <!--end-->

            <!--Shopping Offer and Order Request Button-->
             <div class="flex flex-row items-center justify-around pb-2 space-x-2 ssm:space-x-1">
               <div @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" class="inline-flex">
                    <button @click="toggleOrderRequestbtn" class="text-base ssm:text-sm vs:text-sm font-nunito font-bold focus:outline-none leading-none text-center text-black uppercase">Order Request</button>
                 </div>
                <div @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }" class="inline-flex">
                    <button @click="toggleShopOfferbtn" class="text-base ssm:text-sm vs:text-sm font-nunito font-bold focus:outline-none leading-none text-center text-black uppercase">Shopping Offer</button>
                 </div>
             </div>
             <hr>
             <!--end-->
            
          <!--Create Shopping Offer-->
          <!--User Profile-->
          <div v-if="showCreateShoppingOffer">
         <div class="inline-flex space-x-2 items-center justify-start p-4 ssm:mt-0 vs:mt-1">
           <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

        <!--Delivery information list-->
         <div class="flex flex-col mt-1 vs:mt-1 ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
             <div class="flex flex-row ssm:flex-col vs:flex-col sm:flex-col vs:space-x-0 vs:space-y-2 sm:space-x-0 sm:space-y-2 ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
              <div class=" vs:w-full sm:w-full">
                    <button @click="dropdown1modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">{{deliveryAddress}}</button>
                    <div class="relative">
            <div v-if="dropdown1" class="absolute p-2 bg-white rounded-lg shadow-xl right-0 h-40 sm:w-full vs:w-full w-52">
            <div id="scroll1" class="flex-auto flex-grow-0 min-w-0 overflow-y-scroll vs:w-full h-28">
              <div class="flex flex-col items-start space-y-1.5">
              <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold tracking-wide leading-none text-gray-900">Home Address</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 1</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 2</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm tracking-wide leading-none text-gray-900">{{address3}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 3</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm tracking-wide leading-none text-gray-900">{{address4}}</p>
                 </div>
             </div>
             <hr>
            </div>
            </div> 
             <div @click="addAddress=!addAddress" class="flex text-base vs:text-xs ssm:text-xs lvs:text-sm  items-center focus:outline-none p-2 space-x-1" style="cursor: pointer;">
              <span class="text-red-700 material-icons">
                add_circle
              </span>
              <div class="flex-1 vs:px-2 w-full" >
              <p class="text-sm font-bold tracking-wide leading-none text-red-700 ">Add <span class="vs:hidden">New Shipping Address</span> </p>
             </div>
             </div>
            <div @click.self="openAddModal" v-if="addAddress" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
             <div class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80 " >
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Title</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address title">
                 </div>
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Address</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address">
                 </div>     
                 <div class="justify-center flex">
                 <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6">
                 <p class="text-base font-bold leading-normal text-center text-white">Add</p>
                 </button>
                 </div>
             </div>
            </div>
              </div>
              </div>
              </div>
                </div>
                 
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <div class="vs:w-full sm:w-full">
                <button @click="dropdown4modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 px-4 items-center py-2.5 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Shopping Place</button>
                 <div class="relative">
            <div v-if="dropdown4" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full vs:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input class="focus:outline-none vs:text-sm" type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Search for place" title="Shopping Place">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1 text-sm tracking-wide leading-normal">
            <li><a href="#">Ayala</a></li>
            <li><a href="#">Disney Land</a></li>
            <li><a href="#">Dotcom Infinity</a></li>
            <li><a href="#">Hepa</a></li>
            <li><a href="#">LCC Malls</a></li>
            <li><a href="#">Sampaguita</a></li>
            <li><a href="#">BUCS Building 4</a></li>
            </ul>
            </div>
            </div>
            </div>
              </div>
              </div>
             </div>
             </div>

             <div class="flex flex-row ssm:flex-col vs:flex-col sm:flex-col vs:space-x-0 vs:space-y-2 sm:space-x-0 sm:space-y-2 ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm  
              </span>
                    <input class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              directions_car 
              </span>
              <div class="vs:w-full sm:w-full">
                <button @click="dropdown3modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Transport Mode</button>
              <div class="relative">
            <div v-if="dropdown3" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 vs:w-full sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input class="focus:outline-none vs:text-sm" type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Mode of transport.." title="Transport Mode">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1 text-sm tracking-wide leading-normal">
            <li><a href="#">Spaceship</a></li>
            <li><a href="#">Cart Titan</a></li>
            <li><a href="#">Magic Broom</a></li>
            <li><a href="#">Flying Nimbus</a></li>
            <li><a href="#">Train to Busan</a></li>
            <li><a href="#">Jeep</a></li>
            <li><a href="#">Rocketman</a></li>
            </ul>
            </div>
            </div>
              </div>
              </div>
               </div>
                 </div>
             </div>

             <div class="flex flex-row ssm:flex-col vs:flex-col sm:flex-col vs:space-x-0 vs:space-y-2 sm:space-x-0 sm:space-y-2 ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
                    <input class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Capacity">
                </div>
                 
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
              <div class="vs:w-full sm:w-full">
                    <button @click="dropdown2modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Payment Method</button>
            <div class="relative">
            <div v-if="dropdown2" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 vs:w-full sm:w-full w-52">
            <div class="flex flex-col w-full space-y-3 px-2 justify-start items-start">
             <button class="flex vs:flex-1 w-full focus:outline-none justify-start items-start vs:px-1 px-2">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">Cash on Delivery</p>
            </button>
            <hr class="flex w-full">
            <button class="flex vs:flex-1 w-full focus:outline-none justify-start items-start vs:px-1 px-2">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">GCash</p>
            </button>
            <hr class="flex w-full">
            <button class="flex vs:flex-1 w-full focus:outline-none justify-start items-start vs:px-1  px-2">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">PayMaya</p>
            </button>
            <hr class="flex w-full">
            <button class="flex vs:flex-1 w-full focus:outline-none justify-start items-start vs:px-1 px-2">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">Online Banking</p>
            </button>
            </div>
              </div>
              </div>
                 </div>
                 </div>
             </div>
            </div>
            <!--end-->

            <!--Comment section-->
           <div class="justify-center flex mt-3 px-2">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-full" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-3 pb-3 px-2">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10">
                <p class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
           </div>
            <!--end of Create Shopping Offer-->


          <!--Create Order Request-->          
          <!--User profile section-->    
         <div v-if="showCreateOrderRequest">
         <div class="inline-flex space-x-2 items-center justify-start p-4">
           <img class="w-14 h-full ssm:w-10 vs:w-12 border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base font-bold ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

        <!--Delivery Information List-->
         <div class="flex flex-col mt-1 ssm:px-2 sm:px-2 justify-center items-center vs:px-2">
             <div class="flex flex-row ssm:flex-col vs:flex-col sm:flex-col vs:space-x-0 vs:space-y-2 sm:space-x-0 sm:space-y-2 ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining 
              </span>
              <div class=" vs:w-full sm:w-full">
                    <button @click="dropdown5modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 px-4 vs:px-3.5 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">{{deliveryAddress2}}</button>
              <div class="relative">
            <div v-if="dropdown5" class="absolute p-2 bg-white rounded-lg shadow-xl right-0 h-40 sm:w-full w-52">
            <div id="scroll1" class="flex-auto overflow-y-scroll  h-28">
              <div class="flex flex-col items-start space-y-1.5">
             <div @click="getAddressValue1" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Home Address</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address1}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue1" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 1</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue1" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 2</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address3}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue1" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 3</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address4}}</p>
                 </div>
             </div>
             <hr>
            </div>
            </div> 
             <div @click="addAddress1=!addAddress1" class="flex text-base items-center focus:outline-none p-2 space-x-1" style="cursor: pointer;">
              <span class="text-red-700 material-icons">
                add_circle
              </span>
              <div class="flex-1 w-full" >
              <p class="text-sm font-bold tracking-wide leading-none text-red-700 ">Add New Shipping Address </p>
             </div>
             </div>
            <div @click.self="openAddModal1" v-if="addAddress1" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
             <div class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80 " >
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Title</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address title">
                 </div>
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Address</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address">
                 </div>     
                 <div class="justify-center flex">
                 <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6">
                 <p class="text-base font-bold leading-normal text-center text-white">Add</p>
                 </button>
                 </div>
             </div>
            </div>
              </div>
              </div>
              </div>
                </div>
                 
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart
              </span>
              <div class="vs:w-full sm:w-full">
                <button @click="dropdown8modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Shopping Place</button>
                <div class="relative">
            <div v-if="dropdown8" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input type="text" id="myInput1" v-on:keyup="myFunction1()" placeholder="Search for place" title="Shopping Place">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL1" class="space-y-1 text-sm tracking-wide leading-normal">
            <li><a href="#">Ayala</a></li>
            <li><a href="#">Disney Land</a></li>
            <li><a href="#">Dotcom Infinity</a></li>
            <li><a href="#">Hepa</a></li>
            <li><a href="#">LCC Malls</a></li>
            <li><a href="#">Sampaguita</a></li>
            <li><a href="#">BUCS Building 4</a></li>
            </ul>
            </div>
            </div>
            </div>
              </div>
                </div>
                </div>
             </div>

             <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col vs:flex-col sm:flex-col vs:space-x-0 vs:space-y-2 sm:space-x-0 sm:space-y-2 ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm
              </span>
                    <input type="datetime-local" class="focus:outline-none sm:w-full ssm:w-full ssm:h-auto ssm:text-xs flex vs:w-full w-52 h-11 py-2.5 px-4 items-center vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
               <div class="flex space-x-2 vs:w-full sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
              <div class="vs:w-full sm:w-full">
                <button @click="dropdown6modal" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Payment Method</button>
              <div class="relative">
            <div v-if="dropdown6" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full space-y-3 px-2 justify-start items-start">
             <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Cash on Delivery</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">GCash</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">PayMaya</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Online Banking</p>
            </button>
            </div>
              </div>
              </div>
              </div>
                </div>
             </div>
            </div>
            <!--end-->
            
            <!--Select Shopping List button-->
            <div v-if="showShopListButton" class="flex justify-center items-center ssm:px-2 mt-3 sm:px-2 vs:px-2">
                <button @click="hidePrevious" class="focus:outline-none inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 ssm:w-full vs:w-full h-14 ssm:h-10 vs:h-12">
                    <div class="flex space-x-2 items-center">
                        <img class="w-6 h-full rounded-lg" src="img/add.svg"/>
                        <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Select Shopping List</p>
                    </div>
                </button>
            </div>
            <!--end-->

            <!--Shopping List-->
            <div v-if="showItemList" class="flex px-6 mt-3 w-full">
            <div class="flex flex-col w-full bg-gray-100 pb-4 px-4 rounded-xl">
              <div class="flex mt-4 flex-row justify-between items-start">
               <div class="flex flex-row space-x-2">
                <p class="text-base ssm:text-sm font-bold leading-none text-gray-900">Shopping List</p>
                <p class="text-base ssm:text-sm leading-none text-gray-500">({{countItems}} items)</p>
               </div>
               <div>
               <button @click="listEdit = !listEdit" class="focus:outline-none">
                 <span class="material-icons text-lg vs:text-sm ssm:text-sm">
                  more_vert
                </span>
               </button>
               <div class="relative w-full">
              <div v-if="listEdit" class="absolute flex flex-col space-y-2 p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="editShopList" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                mode
               </span>
                Edit
              </button>
              <button @click="hidePrevious" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                autorenew
               </span>
                Change
              </button>
              </div>
              </div>
               </div>
              </div>
              <div id="scroll1" class="flex flex-col justify-start items-start px-4 text-sm w-full overflow-y-auto space-y-4 mt-4 h-22">    
                <li v-for="shoppingItems in computedShopItemList" :key="shoppingItems" class="text-base w-full vs:text-sm ssm:text-sm leading-none text-gray-900">
                  {{shoppingItems.item}} ({{shoppingItems.amount}}) · {{shoppingItems.brand}} [{{shoppingItems.unit}}]
                </li>
              </div>
                <button @click="showMoreshowLess" v-if="!isFew" class="focus:outline-none flex justify-start items-start text-sm text-gray-500">{{showListStatus}}</button>
            </div>
            </div>
            <!--end-->
           
            <!--Comment Section-->
           <div class="justify-center flex mt-3 ssm:px-2 vs:px-2 sm:px-2">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-full vs:w-full" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-3 pb-3 ssm:px-2 vs:px-2 sm:px-2">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10">
                <p class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
           </div>
           <!--end of Create Order Request-->
            
      </div>
     </div>
    </div>
    <!--end of Post Modal-->


    <!--Select Shopping List Modal-->
    <transition name="fadeSlide">
      <div v-if="showSelectShopListModal" class="hideIf2 font-nunito fixed z-50 inset-0 flex ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
       <div class="flex flex-col bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
        <div class="flex justify-between items-center p-4 flex-row">
          <button @click="showPreviousModal1" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
          <p class="text-2xl  ssm:text-sm se:text-base vs:text-lg font-bold leading-normal text-center text-gray-900">Select Shopping List</p>
          <button class="invisible text-sm font-bold leading-none text-right text-indigo-900">Close</button><!--invisible, used only for auto margin header. If design need close button just delete the invisible class-->
        </div>
        <hr class="w-full">
        <div class="flex w-full px-4 pt-4">
          <div class="flex flex-col  overflow-y-auto h-72 w-full space-y-3">
            <div class="flex flex-row w-full justify-between items-center">
            <div class="space-x-2">
              <label class="inline-flex items-center">
              <input type="radio" class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4" name="listTitle" value="personalList">
              <span class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base">Weekly Grocery List</span>
              </label>
            </div>
              <div>
                <button  @click="edit1=!edit1" class="focus:outline-none">
                <span class="material-icons vs:text-xs">
                  more_vert
                </span>
                </button>
                <div class="relative w-full">
              <div v-if="edit1" class="absolute p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="editShopListAtSelectShopList" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                mode
               </span>
                Edit
              </button>
              </div>
              </div>
                </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
            <div class="space-x-2">
              <label class="inline-flex items-center">
              <input type="radio" class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4" name="listTitle" value="personalList">
              <span class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base">Birthday Party Shopping List</span>
              </label>
            </div>
            <div>
                <button  @click="edit2=!edit2" class="focus:outline-none">
                <span class="material-icons vs:text-xs">
                  more_vert
                </span>
                </button>
                <div class="relative w-full">
              <div v-if="edit2" class="absolute p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="editShopListAtSelectShopList" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                mode
               </span>
                Edit
              </button>
              </div>
              </div>
                </div>
            </div>
          </div>
        </div>
        <div class="flex flex-row w-full justify-around vs:space-x-2 sm:space-x-4 items-center p-4">
          <button @click="createNewShopList" class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2 border-2 rounded-full border-red-700">
            <p class="text-base font-bold leading-none text-gray-900">Create New</p>
          </button>
          <button @click="confirmShopList" class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2.5 bg-red-700 rounded-full">
           <p class="text-base font-bold leading-none text-white">Confirm</p>
          </button>
        </div>
       </div>
      </div>
    </transition>
      <!--end-->

      <!--Create New Shopping List Modal-->
      <transition name="fadeSlide2">
      <div v-if="showCreateNewShopListModal" class="z-50 ssm:px-2 fixed vs:px-2 sm:px-2 scrolledCenterMe">
       <div class="flex flex-col bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
        <div class="flex justify-between items-center p-4 flex-row">
          <button @click="showPreviousModal2" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
          <p class="text-2xl  ssm:text-sm se:text-base vs:text-lg font-bold leading-normal text-center text-gray-900">Create New Shopping List</p>
          <button class="invisible text-sm font-bold leading-none text-right text-indigo-900">Close</button><!--invisible, used only for auto margin header. If design need close button just delete the invisible class-->
        </div>
        <hr class="w-full">
        <div class="flex flex-col w-full space-y-2 p-4">
          <div class="flex flex-row items-center space-y-1 w-full">
          <input id="createTitle" type="text" placeholder="New Shopping List" class=" w-42 focus:outline-none" oninput='this.style.width = 0; this.style.width = this.scrollWidth + "px";'>
            <button @click="toggleInputField('createTitle')" class="focus:outline-none pl-1 pb-1">
             <span class="material-icons mt-1 md-18 text-gray-600">   
              mode_edit
             </span>
            </button>
          </div>
          <div class="flex space-y-3 flex-col w-full px-4">
            <button v-if="addnewButton1" @click="createList1" class="flex items-center flex-row space-x-2">
             <span class="text-gray-900 material-icons">
              add_circle
             </span>
             <p class="text-base leading-none text-gray-900">Add new item</p>
            </button>
            <div v-if="item1" class="flex flex-col space-y-2 h-auto w-full rounded-xl border-2 p-4 border-gray-200 bg-white">
          <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
            <p class="text-sm leading-3 text-gray-500">Product</p>
            <input v-model="filter_itemList[0].item" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
          </div>
          <div class="flex flex-row space-x-2">
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Brand</p>
             <input v-model="filter_itemList[0].brand" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Size</p>
             <input v-model="filter_itemList[0].amount" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
          </div>
          <div class="flex flex-row items-center pt-2 space-x-4">
            <p class="text-base ssm:text-sm se:text-sm leading-7 text-gray-900">Quantity</p>
            <div class="flex flex-row space-x-2">
              <button class="focus:outline-none">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
            </div>
          </div>
          <div class="flex flex-row justify-end items-center ssm:space-x-1 space-x-2">
            <button @click="createList1" class="focus:outline-none inline-flex px-4 py-2 border-2 rounded-full border-red-700">
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-gray-900">Cancel</p>
            </button>
            <button @click="savedItem1" class="focus:outline-none inline-flex px-4 py-2.5 bg-red-700 rounded-full">
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-white">Save</p>
            </button>
          </div>
          </div>

          <div v-if="saveItem1" class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4 px-0.5">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input @click="editDisItem1" type="checkbox" class="editItemButton opacity-0 absolute">
              <img src="img/check-mark.svg" class="thisCheck fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
            <div v-if="editItem1" class="flex flex-col space-y-2 h-auto w-full rounded-xl border-2 p-4 border-gray-200 bg-white">
          <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
            <p class="text-sm leading-3 text-gray-500">Product</p>
            <input v-model="filter_itemList[0].item" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
          </div>
          <div class="flex flex-row space-x-2">
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Brand</p>
             <input v-model="filter_itemList[0].brand" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Size</p>
             <input v-model="filter_itemList[0].amount" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
          </div>
          <div class="flex flex-row items-center pt-2 space-x-4">
            <p class="text-base ssm:text-sm se:text-sm leading-7 text-gray-900">Quantity</p>
            <div class="flex flex-row space-x-2">
              <button class="focus:outline-none">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
            </div>
          </div>
          <div class="flex flex-row justify-end items-center ssm:space-x-1 space-x-2">
            <button @click="editDisItemAndUnchecked" class="focus:outline-none inline-flex px-4 py-2 border-2 rounded-full border-red-700">
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-gray-900">Cancel</p>
            </button>
            <button class="focus:outline-none inline-flex px-4 py-2.5 bg-red-700 rounded-full">
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-white">Save</p>
            </button>
          </div>
          </div>

          </div>
          <div class="flex px-4 justify-end items-center">
            <p class="text-xs leading-none text-gray-500">Updated 7:13 PM</p>
          </div>
        </div>
        <div class="flex flex-row w-full justify-around vs:space-x-2 sm:space-x-4 items-center p-4">
          <button @click="showPreviousModal2" class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2 border-2 rounded-full border-red-700">
            <p class="text-base font-bold leading-none text-gray-900">Cancel</p>
          </button>
          <button class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2.5 bg-red-700 rounded-full">
           <p class="text-base font-bold leading-none text-white">Save</p>
          </button>
        </div>
       </div>
      </div>
      </transition>
      <!--end-->   

      <!--Edit Shopping List Modal-->
      <transition name="fadeSlide2">
      <div v-if="showEditShopListModal" class="z-50 scrolledCenterMe fixed font-nunito vs:px-2 ssm:px-2 vs:px-2 sm:px-2">
       <div class="flex flex-col bg-white shadow rounded-xl h-auto w-550 ssm:w-full  px-4 vs:w-full sm:w-full">
        <div class="flex justify-between items-center py-4 flex-row">
          <button @click="showPreviousModal3" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
          <p class="text-2xl ssm:text-sm se:text-base vs:text-lg font-bold leading-normal text-center text-gray-900">Edit Shopping List</p>
          <button class="invisible text-sm font-bold leading-none text-right text-indigo-900">Close</button><!--invisible, used only for auto margin header. If design need close button just delete the invisible class-->
        </div>
        <hr class="w-full">
        <div class="flex flex-col w-full space-y-2 py-4">
          <div class="flex flex-row items-center space-x-1 w-full">
          <input id="editTitle" type="text" value="Weekly Shopping List" class="w-46 text-gray-900 font-bold text-lg focus:outline-none" oninput='this.style.width = 0; this.style.width = this.scrollWidth + "px";'>
            <button @click="toggleInputField('editTitle')" class="focus:outline-none pl-1 ">
             <span class="material-icons mt-1 md-18 text-gray-600">   
              mode_edit
             </span>
            </button>
          </div>
          <div class="flex items-center flex-row px-2 space-x-2">
             <span class="text-gray-900 material-icons">
              add_circle
             </span>
             <p class="text-base leading-none text-gray-900">Add new item</p>
          </div>
          
        </div>
        <div class=" flex flex-col py-1 px-2 vs:px-2 ssm:px-1 ssm:space-y-1 vs:space-y-2 space-y-4 w-full">
          <div v-if="myItem1OnList" class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex flex-row space-x-2 items-center">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <div>
              <button @click="editMyItem1=!editMyItem1" class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
               <div class="relative w-full">
              <div v-if="editMyItem1" class="absolute p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="editSelectedItemOnList" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                mode
               </span>
                Edit
              </button>
              </div>
              </div>
              </div>
            </div>
          </div>
          
          <div v-if="editSelectedItemOnList1" class="flex flex-col space-y-2 h-auto w-full rounded-xl border-2 p-4 border-gray-200 bg-white">
          <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
            <p class="text-sm leading-3 text-gray-500">Product</p>
            <input v-model="filter_itemList[0].item" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
          </div>
          <div class="flex flex-row space-x-2">
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Brand</p>
             <input v-model="filter_itemList[0].brand" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
            <div class="flex bg-gray-100 rounded-xl w-full flex-col space-y-1 h-auto p-2">
             <p class="text-sm leading-3 text-gray-500">Size</p>
             <input v-model="filter_itemList[0].amount" class="bg-gray-100 w-full h-4 focus:outline-none text-base leading-none text-gray-900 "/>
            </div>
          </div>
          <div class="flex flex-row items-center pt-2 space-x-4">
            <p class="text-base ssm:text-sm se:text-sm leading-7 text-gray-900">Quantity</p>
            <div class="flex flex-row space-x-2">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
            </div>
          </div>
          <div class="flex flex-row justify-end items-center ssm:space-x-1 space-x-2">
            <button @click="editSelectedItemOnList" class="focus:outline-none inline-flex px-4 py-2 border-2 rounded-full border-red-700"> <!--@click="editDisSelectedItem1"-->
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-gray-900">Cancel</p>
            </button>
            <button class="focus:outline-none inline-flex px-4 py-2.5 bg-red-700 rounded-full">
             <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-white">Save</p>
            </button>
          </div>
          </div>

          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex flex-row space-x-2 items-center">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>

          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex flex-row space-x-2 items-center">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>

          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex flex-row space-x-2 items-center">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>

          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex flex-row items-center space-x-2">
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="focus:outline-none flex">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>

          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex items-center flex-row space-x-2">
              <button class="flex focus:outline-none">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="flex focus:outline-none">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="flex focus:outline-none">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>
          
          <div class="flex flex-row w-full justify-between items-center space-x-3">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900">
              <input type="checkbox" class="opacity-0 absolute">
              <img src="img/check-mark.svg" class="fill-current hidden w-3 h-3 text-black font-bold pointer-events-none">
            </div>
            <div class="flex flex-col space-y-2">
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Powdered Sugar (1 kg)</p>
              <p class="text-base ssm:text-sm se:text-sm leading-none text-gray-900">Any brand</p>
            </div>
          </div>
          <div class="flex items-center flex-row space-x-2">
              <button class="flex focus:outline-none">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{Quantity}}</p>
              <button class="flex focus:outline-none">
                <span class="material-icons bg-gray-100 text-red-700">
                remove
                </span>
              </button>
              <button class="flex focus:outline-none">
                <span class="material-icons">
                more_vert
                </span>
              </button>
            </div>
          </div>

        </div>
        <div class="flex flex-row w-full justify-around vs:space-x-2 ssm:space-x-1 sm:space-x-4 items-center py-4">
          <button @click="showPreviousModal3" class=" focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2 border-2 rounded-full border-red-700">
            <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-gray-900">Cancel</p>
          </button>
          <button class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2.5 bg-red-700 rounded-full">
           <p class="text-base  ssm:text-sm se:text-sm font-bold leading-none text-white">Save Changes</p>
          </button>
        </div>
       </div>
       </div>
      </transition>
      <!--end-->   

</template>

<script>
import $ from 'jquery'
export default {
    data(){
        return {
        component: "shopOfferPost",
        component2: "orderRequestPost",
        isVisible: true,
        activeBtn:0,
        hidden: false,
        showOfferPost: true,
        showOrderPost: false,
        showSelectShopListModal: false,
        showCreateNewShopListModal: false,
        showCreateShoppingOffer: false,
        showCreateOrderRequest: true,
        showShopListButton: true,
        showItemList: false,
        countItems: 8,
        ShoppingListTitle: 'Weekly Grocery List',
        showEditShopListModal: false,
        Quantity: 1,
        edit1: false,
        edit2: false,
        item1: false,
        addnewButton1: true,
        saveItem1: false,
        editItem1: false,
        listEdit: false,
        editSelectedItem1: false,
        SelectedItem1: true,
        myItem1: true,
        editMyItem1: false,
        editSelectedItemOnList1: false,
        myItem1OnList: true,

        //Create Shop Offer Data
        addAddress: false,
        dropdown1: false,
        dropdown2: false,
        dropdown3: false,
        dropdown4: false,
        deliveryAddress: "Delivery Area",
        //end

        //Create Order Request Data
        isOpen:false,
        addAddress2: false,
        dropdown5: false,
        dropdown6: false,
        dropdown7: false,
        dropdown8: false,
        deliveryAddress2: "Delivery Address",
        address1: "Banquerohan,Legazpi City",
        address2: "Buraguis Legazpi City",
        address3: "United State of Bicol",
        address4: "Maski Sain City",
        //end

        //ShopList Items temporary data
        filter_itemList: [
        
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        {
          item: 'Flour',
          amount: '1 kg',
          brand: 'Any brand',
          unit: '2 units',
        },
        
        ],
        limit_by: 3,
        default_limit: 3,
        showListStatus: "See More",
        showLessStatus: "See Less",
        //end
        }
    },
    
    computed:{
    computedShopItemList(){
      return this.limit_by ? this.filter_itemList.slice(0,this.limit_by) : this.filter_itemList
      },
    isFew: ({ filter_itemList }) => filter_itemList.length < 4,
    },

    methods: {
      editSelectedItemOnList(){
        this.myItem1OnList=!this.myItem1OnList
        this.editSelectedItemOnList1=!this.editSelectedItemOnList1
        this.editMyItem1=false
      },
      editDisSelectedItem1(){
        this.SelectedItem1=!this.SelectedItem1
        this.editSelectedItem1 = !this.editSelectedItem1
      },
      createList1(){
        this.item1 = !this.item1
        this.addnewButton1 = !this.addnewButton1
      },
      savedItem1(){
        this.item1 = !this.item1
         this.addnewButton1 = !this.addnewButton1
        this.saveItem1 = !this.saveItem1
      },
      editDisItem1(){
        this.editItem1 = !this.editItem1
         $('.thisCheck').show()
      },
      editDisItemAndUnchecked(){
        this.editItem1 = !this.editItem1
        $('.thisCheck').hide()
      },
        toggleShopOfferbtn(){
            this.showCreateShoppingOffer = true
            this.showCreateOrderRequest = false
        },
        toggleOrderRequestbtn(){
            this.showCreateShoppingOffer = false
            this.showCreateOrderRequest = true
        },
        close(){
          this.$emit('closeModal')
        },
         isActive_function(el){
        if(el=='btn1'){
        this.activeBtn= 0;
        }
        else {
        this.activeBtn= el;
        }
        },
        hidePrevious(){
        this.showSelectShopListModal= !this.showSelectShopListModal;
        $('.hideIf').fadeOut()
        this.listEdit = false
        },
        showPreviousModal1(){
        this.showSelectShopListModal=false
        $('.hideIf').fadeIn()
        },
        createNewShopList(){
        $('.hideIf2').fadeOut()
        this.showCreateNewShopListModal=!this.showCreateNewShopListModal
        },
        showPreviousModal2(){
        this.showCreateNewShopListModal=!this.showCreateNewShopListModal
        $('.hideIf2').fadeIn()
        },
        confirmShopList(){
        this.showShopListButton= false
        this.showItemList= true
        this.showSelectShopListModal=!this.showSelectShopListModal
        $('.hideIf').fadeIn()
        },
        showPreviousModal3(){
        this.showEditShopListModal=!this.showEditShopListModal
        this.showSelectShopListModal= false
        this.edit1= false
        this.edit2= false
        $('.hideIf').fadeIn()
        },
        editShopList(){
        $('.hideIf').fadeOut()
        this.showEditShopListModal=!this.showEditShopListModal
        this.listEdit = false
        },
        editShopListAtSelectShopList(){
        $('.hideIf2').fadeOut()
        this.showEditShopListModal=!this.showEditShopListModal
        },
        showMoreshowLess(){
        this.isActive = !this.isActive;
        this.limit_by = null;
        if(this.showListStatus != this.showLessStatus){
        this.showListStatus = this.showLessStatus;
        }
        else{
        this.showListStatus = "See More";
        this.limit_by = this.default_limit
        }
        },
        toggleInputField(id) {
        var textbox = document.getElementById(id);
   
        if (textbox.disabled) {
        // If disabled, do this 
        document.getElementById(id).disabled = false;
        } else {
        // Enter code here
        document.getElementById(id).disabled = true;
        
        }
        },

        //Create Shopping Offer methods
        openAddModal(){
            this.addAddress = !this.addAddress
        },
        
        getAddressValue(){
            this.deliveryAddress = this.address1 
        },

        myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } 
            else {
                li[i].style.display = "none";
            }
          }
        },

    dropdown1modal(){
      this.dropdown1=!this.dropdown1
      this.dropdown2= false
      this.dropdown3= false
      this.dropdown4= false        
    },
    dropdown2modal(){
      this.dropdown1= false
      this.dropdown2= !this.dropdown2
      this.dropdown3= false
      this.dropdown4= false        
    },
    dropdown3modal(){
      this.dropdown1= false
      this.dropdown2= false
      this.dropdown3= !this.dropdown3
      this.dropdown4= false        
    },
    dropdown4modal(){
      this.dropdown1= false
      this.dropdown2= false
      this.dropdown3= false
      this.dropdown4= !this.dropdown4       
    },
    //end

    //Create Order Request methods
    openAddModal1(){
            this.addAddress = !this.addAddress
        },
        
        getAddressValue1(){
            this.deliveryAddress = this.address1 
        },

        myFunction1() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } 
            else {
                li[i].style.display = "none";
            }
          }
        },

    dropdown5modal(){
      this.dropdown5=!this.dropdown5
      this.dropdown6= false
      this.dropdown7= false
      this.dropdown8= false        
    },
    dropdown6modal(){
      this.dropdown5= false
      this.dropdown6= !this.dropdown6
      this.dropdown7= false
      this.dropdown8= false        
    },
    dropdown7modal(){
      this.dropdown5= false
      this.dropdown6= false
      this.dropdown7= !this.dropdown8
      this.dropdown8= false        
    },
    dropdown8modal(){
      this.dropdown5= false
      this.dropdown6= false
      this.dropdown7= false
      this.dropdown8= !this.dropdown8    
    },
    //end
    },
}
</script>

<style scoped>

.fadeSlide-enter-from{
  transform: translateX(100%);
  transform: translateX(150px);
  opacity:0
}
.fadeSlide-enter-to{
  transform: translateX(0);
  opacity:1
}
.fadeSlide-enter-active{
  transition: all .3s ease-in-out;
}

.fadeSlide-leave-from{
  transform: translateX(0);
  opacity:1
}
.fadeSlide-leave-to{
  transform: translateX(100%);
  transform: translateX(150px);
  opacity:0
}
.fadeSlide-leave-active{
  transition: all .3s ease-in-out
}
.fadeSlide2-enter-from{
  transform: translate(-30%, -50%) !important;
  -webkit-transform: translate(-30%, -50%) !important;
  opacity:0
}
.fadeSlide2-enter-to{
  transform: translate(-50%, -50%) !important;
  -webkit-transform: translate(-50%, -50%) !important;
  opacity:1
}
.fadeSlide2-enter-active{
  transition: all .3s ease-in-out;
}

.fadeSlide2-leave-from{
  transform: translate(-50%, -50%) !important;
  -webkit-transform: translate(-50%, -50%) !important;
  opacity:1
}
.fadeSlide2-leave-to{
  transform: translate(-30%, -50%) !important;
  -webkit-transform: translate(-30%, -50%) !important;
  opacity:0
}
.fadeSlide2-leave-active{
  transition: all .3s ease-in-out
}
.uncheckedMe{
  display: none
}

#txt {
  min-width:50px!important;
  max-width:99.99%!important;
  transition: width 0.25s;
  text-align:start;
}

.modal-body {
    max-height: 100vh;
    overflow-y: auto;
}
    
.active {
  color:red;  
  border-bottom: solid red 3px;
}
.active button{
  color:red;
}
#scroll1::-webkit-scrollbar-track
{
	
	border-radius: none;
	
}
#scroll1::-webkit-scrollbar
{
	width: 6px;
	
}
#scroll1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: grey;
}
#button1{
    padding:0;
    margin:0;
}

#postMessge::-webkit-scrollbar-track
{
	border-radius: none;
}
#postMessage::-webkit-scrollbar
{
	width: 6px;
}
#postMessage::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: grey;
}

textarea{
  resize: none;
}

/*Create Shopping Offer CSS */
#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  margin-top: -1px; /* Prevent double borders */
  text-decoration: none;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

#myInput {
  background-image: url('/img/search.svg');
  background-position: 8px 4px;
  background-repeat: no-repeat;
  background-size: 24px;
  width: 100%;
  padding: 4px 0px 4px 35px;
  border: 1px solid #ddd;
  margin-bottom: 6px;
}
/*end */

#myUL1 {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL1 li a {
  margin-top: -1px; /* Prevent double borders */
  text-decoration: none;
  color: black;
  display: block
}

#myUL1 li a:hover:not(.header) {
  background-color: #eee;
}

#myInput1 {
  background-image: url('/img/search.svg');
  background-position: 8px 4px;
  background-repeat: no-repeat;
  background-size: 24px;
  width: 100%;
  padding: 4px 0px 4px 35px;
  border: 1px solid #ddd;
  margin-bottom: 6px;
}
/*end */

.itemButtons input:checked + img{
  display: block;
}

#createTitle{
  font-weight: bold;
  font-size: 1.125rem;
  line-height: 1.75rem;
--tw-text-opacity: 1;
color: rgba(17, 24, 39, var(--tw-text-opacity));
}

#createTitle::placeholder{
  font-weight: bold;
  font-size: 1.125rem;
  line-height: 1.75rem;
  --tw-text-opacity: 1;
  color: rgba(17, 24, 39, var(--tw-text-opacity));
}

#editTitle::placeholder{
  font-weight: bold;
  font-size: 1.125rem;
  line-height: 1.75rem;
--tw-text-opacity: 1;
  color: rgba(17, 24, 39, var(--tw-text-opacity));
}

.scrolledCenterMe {
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  max-height: calc(100vh - 60px);
  overflow-y: scroll; /* Add the ability to scroll y axis*/
}
/* Hide scrollbar for Chrome, Safari and Opera */
.scrolledCenterMe::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrolledCenterMe {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
 --tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}
</style>
