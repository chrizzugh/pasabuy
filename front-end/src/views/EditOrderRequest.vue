<template>
      <div v-on:click.self="close2" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center sm:px-2 ssm:px-2 vs:px-2 vs:w-full">
       <div class=" hideIf inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full sm:w-full vs:w-full">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center vs:ml-0 ml-12 sm:ml-8  se:pl-14 se:ml-0 ssm:pl-11 ssm:ml-0 ssm:text-lg pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center">
                  Edit Order Request
                  <button @click.prevent="close2" class=" vs:ml-6 ml-20 sm:ml-14 se:ml-4 ssm:ml-3 ssm:text-xs focus:outline-none text-sm vs:text-xs  mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4 ">
    <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
    <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
  </div>
  <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-1 vs:mt-1 sm:px-2 ssm:px-2 vs:mt-0 justify-center items-center vs:px-2">

      <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 se:space-x-1 space-x-4 w-full justify-center">
         <div class="flex flex-row space-x-2 vs:w-full sm:w-full">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
             <div class="flex items-center justify-start  sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
              <button @click="dropdown1modal" class=" focus:outline-none flex w-full flex-col">
                <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                <input style="cursor: pointer;" disabled type="text" id="input_name" v-model="delivery_info.delivery_address" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
              </button>
            <div v-if="dropdown1" class="relative p-2 vs:p-1 bg-white rounded-lg shadow-xl right-4 vs:right-0 h-40 vs:w-full sm:w-full w-52">
            <div id="scroll1" class="flex-auto overflow-y-scroll h-28">
              <div class="flex flex-col items-start space-y-1.5">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Home Address</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 1</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 2</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address3}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 3</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address4}}</p>
                 </div>
             </div>
             <hr>
            </div>
            </div> 
             <div @click="addAddress=!addAddress" class="flex text-base items-center focus:outline-none p-2 space-x-1" style="cursor: pointer;">
              <span class="text-red-700 material-icons">
                add_circle
              </span>
              <div class="flex-1 w-full vs:px-2" >
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
          
         <div class="flex flex-row space-x-2 vs:w-full  sm:w-full">
             <div>
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
              shopping_cart
              </span>
             </div>
             <div class="flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col w-full h-full py-1.5 rounded-2xl">
              <button @click="dropdown4modal" style="cursor: pointer;" class=" focus:outline-none flex w-full flex-col">   
              <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
              <input type="text" id="input_name" style="cursor: pointer;" disabled v-model="delivery_info.shopping_place" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
              </button>
            <div v-if="dropdown4" class="relative py-3 vs:p-2  bg-white rounded-lg shadow-xl right-4 vs:right-0 h-35.1 vs:w-full sm:w-full w-52">
            <div class="flex flex-col w-full px-2 vs:px-0 justify-start items-start">
             <input type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Search for place" title="Shopping Place" class="vs:text-sm focus:outline-none">
            <div id="scroll1" class="flex px-2 vs:px-0 flex-col overflow-y-scroll w-full h-24">
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

     <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2 vs:w-full  sm:w-full ">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             alarm
             </span>
            <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                 <span>
                    <input id="input_name" v-model="delivery_info.schedule" class="sm:w-full ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                   </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2 vs:w-full sm:w-full ">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class="inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
           <button @click="dropdown2modal" class=" focus:outline-none flex w-full flex-col">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
              <input style="cursor: pointer;" disabled type="text" id="input_name" v-model="delivery_info.payment_method" class="ssm:text-xs block bg-gray-100 focus:outline-none text-sm leading-7 text-gray-900 w-44 sm:w-full vs:w-full h-auto">
            </button>
            <div v-if="dropdown2" class="relative py-3 bg-white rounded-lg shadow-xl h-35.1 sm:w-full vs:w-full vs:right-0 right-4 w-52">
            <div class="flex flex-col w-full space-y-3 px-2 justify-start items-start">
             <button class="flex w-full focus:outline-none justify-start items-start  vs:justify-center vs:items-center px-2 vs:px-1">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">Cash on Delivery</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start vs:justify-center vs:items-center items-start px-2 vs:px-1">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">GCash</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start vs:justify-center vs:items-center items-start px-2 vs:px-1">
                <p class="text-sm vs:text-xs tracking-wide leading-none text-gray-900">PayMaya</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start vs:justify-center vs:items-centeritems-start px-2 vs:px-1">
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

    <div class="justify-center flex sm:px-2 ssm:px-2 vs:px-2">
    <div class="flex flex-col se:h-36 ssm:h-36 mt-3 w-31.75 items-start p-4 ssm:p-2 vs:p-2 bg-gray-100 rounded-xl h-auto ssm:w-full vs:w-full">
            <div class="flex w-full flex-row justify-between items-center ssm:space-x-0 vs:space-x-0">
                <p class="flex text-base ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900">Shopping List {{shopping_info.shoppingID}}</p>
            <div>
               <button @click="listEdit=!listEdit" class="flex focus:outline-none">
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
              <button @click="openSelectShoppingList" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
               <span class=" material-icons text-base  text-gray-900 ">
                autorenew
               </span>
                Change
              </button>
              </div>
              </div>
              </div>
               </div>
            <div id="scroll1" class="inline-flex overflow-y-auto h-28.5 flex-col ssm:px-0 w-full vs:px-0 space-y-2 py-4 px-4">
              <li v-for="shoppingItems in computedShopItemList" :key="shoppingItems" class="text-sm leading-none text-gray-900">
                {{shoppingItems.item}} ({{shoppingItems.amount}}) · {{shoppingItems.brand}} [{{shoppingItems.unit}}]
              </li>
            </div>
            <button @click="showMoreshowLess" v-if="!isFew" class="focus:outline-none items-start justify-start text-sm text-gray-500">{{showListStatus}}</button>
        </div>
    </div>

     <!--Comment section-->
    <div class="justify-center flex mt-3 sm:px-2 vs:px-2">
     <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm ssm:text-xs se:text-xs text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-fullvs:w-full" placeholder = "Enter your post message here..." v-model="delivery_info.comment"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-3 pb-3 sm:px-2 ssm:px-2 vs:px-2">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full h-10 w-31.75 ssm:h-full vs:w-full">
         <p class="text-base ssm:text-xs font-bold leading-normal text-center text-white">Post</p>
     </button>
    </div>
    <!--end-->

  </div>
  </div>
  </div>
    <!--end-->

    <!--Select Shopping List Modal-->
    <transition name="fadeSlide">
      <div v-if="showSelectShopListModal" class="hideIf2 font-nunito fixed z-50 inset-0 flex ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
       <div class="flex flex-col bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
        <div class="flex justify-between items-center p-4 flex-row">
          <button @click="showPreviousModal" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
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

          <div v-if="saveItem1" class="flex flex-row  w-full justify-between items-start vs:space-x-2 ssm:space-x-1 space-x-4 px-0.5">
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
              <div>
              <button @click="editCreatedItem1=!editCreatedItem1" class="focus:outline-none flex">
                <span class="material-icons">
                more_vert
                </span>
              </button>
               <div class="relative w-full">
              <div v-if="editCreatedItem1" class="absolute p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="editDisItem1" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
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
          <button @click="editShopList2" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
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
          <button class="flex items-center flex-row px-2 space-x-2">
             <span class="text-gray-900 material-icons">
              add_circle
             </span>
             <p class="text-base leading-none text-gray-900">Add new item</p>
          </button>
          
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
        isVisible: true,
        hidden: false,
        show:true,
        addAddress: false,
        dropdown1: false,
        dropdown2: false,
        dropdown4: false,

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
        editCreatedItem1: false,

        deliveryAddress: "Delivery Area",
        address1: "Banquerohan,Legazpi City",
        address2: "Buraguis Legazpi City",
        address3: "United State of Bicol",
        address4: "Maski Sain City",
        user_info:{
        firstname: 'Yami',
        lastname: 'Sukehiro'
      },
        delivery_info:{
        delivery_address: 'Banquerohan',
        shopping_place: 'SM City Legazpi',
        schedule: 'Tomorrow at 2 PM',
        payment_method: 'Payment First',
        comment: 'Hi! If there’s anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you’re willing. Thanks!',
        status: 'No Longer Accepting Requests'
      },
       shopping_info:{
        shoppingID: '1',
        item1: 'flour (1 kg)',
        item2: 'vanilla extract (50 mL)',
        item3: 'brown sugar',
        item4: 'cocoa powder',
        item5: 'baking soda',
        item6: 'chocolate syrup',
        item7: 'powdered sugar',
        item8: 'cocoa powder',       
      },
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
        limit_by: 4,
        default_limit: 4,
        showListStatus: "See More",
        showLessStatus: "See Less",
        //end
        }
    },

    computed:{
   computedShopItemList(){
    return this.limit_by ? this.filter_itemList.slice(0,this.limit_by) : this.filter_itemList
  },
  isFew: ({ filter_itemList }) => filter_itemList.length < 5,
    },

    methods: {
        close2(){
            this.$emit('closeModal2')
        },
        Edit(pars) {
      let x=document.getElementById(pars).innerHTML;
      if(x=='Change'){
          document.getElementById(pars).innerHTML="Save";
          
      }
      else{
         document.getElementById(pars).innerHTML="Change";
      }
    },
     openAddModal(){
            this.addAddress = !this.addAddress
        },
        
        getAddressValue(){
          this.delivery_info.delivery_address = this.address1
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
          this.dropdown4= false        
          },
        dropdown2modal(){
          this.dropdown1= false
          this.dropdown2= !this.dropdown2
          this.dropdown4= false        
          },
        dropdown4modal(){
          this.dropdown1= false
          this.dropdown2= false
          this.dropdown4= !this.dropdown4       
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
        editShopList(){
        $('.hideIf').fadeOut()
        this.showEditShopListModal=!this.showEditShopListModal
        this.listEdit = false
        },
        editShopList2(){
        $('.hideIf').fadeIn()
        this.showEditShopListModal=!this.showEditShopListModal
        this.listEdit = false
        },
        editSelectedItemOnList(){
        this.myItem1OnList=!this.myItem1OnList
        this.editSelectedItemOnList1=!this.editSelectedItemOnList1
        this.editMyItem1=false
        },
        openSelectShoppingList(){
        this.showSelectShopListModal= !this.showSelectShopListModal;
        $('.hideIf').fadeOut()
        this.listEdit = false
        },
        showPreviousModal(){
        this.showSelectShopListModal=false
        $('.hideIf').fadeIn()
        },
        editShopListAtSelectShopList(){
        $('.hideIf2').fadeOut()
        this.showEditShopListModal=!this.showEditShopListModal
        },
        createNewShopList(){
        $('.hideIf2').fadeOut()
        this.showCreateNewShopListModal=!this.showCreateNewShopListModal
        },
        confirmShopList(){
        this.showSelectShopListModal=!this.showSelectShopListModal
        $('.hideIf').fadeIn()
        },
        showPreviousModal2(){
        this.showCreateNewShopListModal=!this.showCreateNewShopListModal
        $('.hideIf2').fadeIn()
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
        this.editCreatedItem1 = false
        },
        editDisItemAndUnchecked(){
        this.editItem1 = !this.editItem1
        this.editCreatedItem1 = false
        },
        },
}
</script>

<style scoped>
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

#button1{
    padding:0;
    margin:0;
}

input[type="text"]::selection{
  background-color: inherit;
  color: none;
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
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
 --tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}
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
.itemButtons input:checked + img{
  display: block;
}

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
</style>