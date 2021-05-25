<template>
      <div v-on:click.self="close2" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center sm:px-2 ssm:px-2 vs:px-2 vs:w-full">
       <div class=" hideIf inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full sm:w-full vs:w-full" v-if="mainModal">
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
        <div class="inline-flex space-x-2 items-center justify-start p-4">
          <img
            class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200"
            :src="post.user.profilePicture"
          />
          <p
            class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900"
          >
            {{ post.user.firstName }} {{ post.user.lastName }}
          </p>
        </div>
        <!--end-->

        <!--Delivery information list-->
        <div
          class="flex flex-col mt-1 vs:mt-1 sm:px-2 ssm:px-2 vs:mt-0 justify-center items-center vs:px-2"
        >
          <div
            class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 se:space-x-1 space-x-4 w-full justify-center"
          >
            <div class="flex flex-row space-x-2 sm:w-full">
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
                delivery_dining
              </span>
              <div class="sm:w-full">
                <button
                  @click="
                    (dropdown1 = !dropdown1),
                      (dropdown2 = false),
                      (dropdown3 = false),
                      (dropdown4 = false)
                  "
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                >
                  {{ delivery_info.deliveryAddress }}
                </button>
                <div class="relative">
                  <div
                    v-if="dropdown1"
                    class="absolute p-2 bg-white rounded-lg shadow-xl right-0 h-40 sm:w-full w-52"
                  >
                    <div id="scroll1" class="flex-auto overflow-y-scroll h-28">
                      <div class="flex flex-col items-start space-y-1.5">
                        <div
                          @click="
                            getHomeAddressValue();
                            dropdown1 = !dropdown1;
                          "
                          class="flex flex-col w-full space-y-1 px-2"
                          style="cursor: pointer"
                        >
                          <p
                            class="text-sm font-bold tracking-wide leading-none text-gray-900"
                          >
                            Home Address
                          </p>
                          <div class="flex-1 w-full px-2">
                            <p
                              id="homeAdd"
                              class="text-sm tracking-wide leading-none text-gray-900"
                            >
                              {{ userHomeAddress.province }},
                              {{ userHomeAddress.cityMunicipality }},
                              {{ userHomeAddress.barangay }},
                              {{ userHomeAddress.houseNumber }}
                            </p>
                          </div>
                        </div>
                        <hr class="flex w-full px-2" />
                        <div
                          v-for="(shipAdd, index) in userShippingAddress"
                          :key="index"
                        >
                          <div
                            @click="
                              getShipAddressValue(index);
                              dropdown1 = !dropdown1;
                            "
                            class="flex flex-col w-full space-y-1 px-2"
                            style="cursor: pointer"
                          >
                            <p
                              class="text-sm font-bold tracking-wide leading-none text-gray-900"
                            >
                              Shipping Address {{ index + 1 }}
                            </p>
                            <div class="flex-1 w-full px-2">
                              <p
                                :id="'shipAdd' + index"
                                class="text-sm tracking-wide leading-none text-gray-900"
                              >
                                {{ shipAdd.province }},
                                {{ shipAdd.cityMunicipality }},
                                {{ shipAdd.barangay }},
                                {{ shipAdd.houseNumber }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      @click="addAddress = !addAddress"
                      class="flex text-base items-center focus:outline-none p-2 space-x-1"
                      style="cursor: pointer"
                    >
                      <span class="text-red-700 material-icons">
                        add_circle
                      </span>
                      <div class="flex-1 w-full">
                        <p
                          class="text-sm font-bold tracking-wide leading-none text-red-700"
                        >
                          Add New Shipping Address
                        </p>
                      </div>
                    </div>
                    <div
                      @click.self="openAddModal"
                      v-if="addAddress"
                      class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2"
                    >
                      <div
                        class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80"
                      >
                        <div
                          class="flex flex-row w-full items-center space-x-2"
                        >
                          <label
                            class="block text-sm font-bold tracking-wide leading-none text-gray-900"
                            >Title</label
                          >
                          <input
                            class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker"
                            id="addressTitle"
                            type="text"
                            placeholder="Your shipping address title"
                          />
                        </div>
                        <div
                          class="flex flex-row w-full items-center space-x-2"
                        >
                          <label
                            class="block text-sm font-bold tracking-wide leading-none text-gray-900"
                            >Address</label
                          >
                          <input
                            class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker"
                            id="addressTitle"
                            type="text"
                            placeholder="Your shipping address"
                          />
                        </div>
                        <div class="justify-center flex">
                          <button
                            class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6"
                          >
                            <p
                              class="text-base font-bold leading-normal text-center text-white"
                            >
                              Add
                            </p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                shopping_cart
              </span>
              <div class="sm:w-full">
                <input
                  @click="
                    (dropdown4 = !dropdown4),
                      (dropdown2 = false),
                      (dropdown3 = false),
                      (dropdown1 = false)
                  "
                  type="text"
                  id="myInput"
                  v-on:keyup="myFunction()"
                  placeholder="Search for place"
                  title="Shopping Place"
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 px-4 items-center py-2.5 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                  v-model="delivery_info.shoppingPlace"
                />
                <!-- {{shoppingPlace}} -->
                <!-- </button> -->
                <div class="relative">
                  <div
                    v-if="dropdown4"
                    class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52"
                  >
                    <div
                      class="flex flex-col w-full px-2 justify-start items-start"
                    >
                      <div
                        id="scroll1"
                        class="flex px-2 flex-col overflow-y-scroll w-full h-24"
                      >
                        <ul id="myUL" class="space-y-1">
                          <li
                            v-for="(sp, index) in shoppingPlaces"
                            :key="index"
                            @click="
                              setShoppingPlace(index);
                              dropdown4 = !dropdown4;
                            "
                          >
                            <a href="#" :id="'sp' + index">{{
                              sp.shoppingPlace
                            }}</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center"
          >
           <div class="flex flex-row space-x-2 vs:w-full  sm:w-full">
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
                alarm
              </span>
              <div
                class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl"
              >
                <div
                  class="flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl"
                > 
                  <span>
                    <input
                      type="datetime-local"
                      id="input_name"
                      v-model="delivery_info.deliverySchedule"
                      class="sm:w-full ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto"
                    />
                  </span>
                </div>
              </div>
            </div>
            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                payments
              </span>
              <div class="sm:w-full">
                <button
                  @click="
                    (dropdown2 = !dropdown2),
                      (dropdown1 = false),
                      (dropdown3 = false),
                      (dropdown4 = false)
                  "
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                >
                  {{ delivery_info.paymentMethod }}
                </button>
                <div class="relative">
                  <div
                    v-if="dropdown2"
                    class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52"
                  >
                    <div
                      v-for="(pm, index) in Payments"
                      :key="index"
                      class="flex flex-col w-full space-y-3 px-2 justify-start items-start"
                    >
                      <button
                        @click="
                          setPayment(index);
                          dropdown2 = !dropdown2;
                        "
                        class="flex w-full focus:outline-none justify-start items-start px-2"
                      >
                        <p
                          :id="'pm' + index"
                          class="text-sm tracking-wide leading-none text-gray-900"
                        >
                          {{ pm }}
                        </p>
                      </button>
                      <hr class="flex w-full" />
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
                <p class="flex text-base ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900">Shopping List ({{shopping_info.items.length}} items)</p>
            <div>
               <button @click="listEdit=!listEdit" class="flex focus:outline-none">
                 <span class="material-icons text-lg vs:text-sm ssm:text-sm">
                  more_vert
                </span>
               </button>
               <div class="relative w-full">
              <div v-if="listEdit" class="absolute flex flex-col space-y-2 p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
              <button @click="showEditShopListModalMethod()" class="flex flex-row items-center font-normal text-base leading-none text-gray-900 focus:outline-none gap-x-2">
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
              <li v-for="shoppingItems in computedShopItemList(shopping_info.items)" :key="shoppingItems.id" class="text-sm leading-none text-gray-900">
                {{shoppingItems.product}} ({{shoppingItems.size}}) · {{shoppingItems.brand}} [{{shoppingItems.quantity}}]
              </li>
            </div>
            <button @click="showMoreshowLess" v-if="!isFew" class="focus:outline-none items-start justify-start text-sm text-gray-500">{{showListStatus}}</button>
        </div>
    </div>

        <!--Comment section-->
        <div class="justify-center flex mt-3 sm:px-2 vs:px-2">
          <textarea
            id="postMessage"
            name="postMessage"
            rows="3"
            class="p-4 bg-gray-100 shadow-sm ssm:text-xs se:text-xs text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-fullvs:w-full"
            placeholder="Enter your post message here..."
            v-model="delivery_info.caption"
          ></textarea>
        </div>
        <!--end-->

        <!--Post button-->
        <div class="justify-center flex mt-3 pb-3 sm:px-2 ssm:px-2 vs:px-2">
          <button
            @click="saveChanges"
            class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full h-10 w-31.75 ssm:h-full vs:w-full"
          >
            <p
              class="text-base ssm:text-xs font-bold leading-normal text-center text-white"
            >
              Save Changes
            </p>
          </button>
        </div>
        <!--end-->
       
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
          <div class="flex flex-col overflow-y-auto h-72 w-full space-y-3">
            <div class="flex flex-row w-full justify-between items-center" v-for="list in shoppingLists" :key="list.shoppingListNumber">
              <div class="space-x-2">
                <label class="inline-flex items-center">
                  <input
                    type="radio"
                    class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4"
                    :id="'listNumber'+list.shoppingListNumber"
                  />
                  <span
                    class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base"
                    >{{list.shoppingListTitle}}</span
                  >
                </label>
              </div>
                <div>
                <button  @click="edit2=list.shoppingListNumber; edit3=!edit3" class="focus:outline-none">
                <span class="material-icons vs:text-xs">
                  more_vert
                </span>
                </button>
                <div class="relative w-full">
              <div v-if="edit2==list.shoppingListNumber && edit3 " class="absolute p-2 leading-loose rounded-lg border-2 border-gray-100 bg-white right-0 w-30">
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
          <div class="flex space-y-3 flex-col w-full px-4" >
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
          <button @click="showEditShopListModalMethod()" class="focus:outline-none text-sm font-bold leading-none text-right text-indigo-900">Back</button>
          <p class="text-2xl ssm:text-sm se:text-base vs:text-lg font-bold leading-normal text-center text-gray-900">Edit Shopping List</p>
          <button class="invisible text-sm font-bold leading-none text-right text-indigo-900">Close</button><!--invisible, used only for auto margin header. If design need close button just delete the invisible class-->
        </div>
        <hr class="w-full">
        <div class="flex flex-col w-full space-y-2 py-4">
          <div class="flex flex-row items-center space-x-1 w-full">
          <input id="editTitle" type="text" v-model="shopping_info.shoppingListName" class="w-46 text-gray-900 font-bold text-lg focus:outline-none" oninput='this.style.width = 0; this.style.width = this.scrollWidth + "px";'>
            <button @click="toggleInputField('editTitle')" class="focus:outline-none pl-1 ">
             <span class="material-icons mt-1 md-18 text-gray-600">   
              mode_edit
             </span>
            </button>
          </div>
          <button @click="addnewButton1=!addnewButton1" class="flex items-center flex-row px-2 space-x-2">
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
 <div class="flex flex-row w-full justify-between items-center space-x-3" v-for="item in shopping_info.items" :key="item.id">
          <div class="flex flex-row vs:space-x-2 ssm:space-x-1 space-x-4">
            <div
              class="itemButtons bg-white border-2 rounded-none w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 border-gray-900"
            >
              <input type="checkbox" class="opacity-0" :checked="item.status ==1" :id="'check'+item.id"/>
              <img
                src="img/check-mark.svg"
                class="fill-current hidden w-3 h-3 text-black mr-3 font-bold pointer-events-none"
              />
            </div>
            <div class="flex flex-col space-y-2">
              <p
                class="text-base ssm:text-sm se:text-sm leading-none text-gray-900"
              >
                {{item.product}} ({{item.size}})
              </p>
              <p
                class="text-base ssm:text-sm se:text-sm leading-none text-gray-900"
              >
                {{item.brand}}
              </p>
            </div>
          </div>
          <div class="flex flex-row space-x-2 items-center">
              <button class="focus:outline-none flex" @click="item.quantity++">
                <span class="material-icons bg-gray-100  text-red-700">
                add
                </span>
              </button>
              <p class="text-base ssm:text-sm se:text-sm items-center flex leading-none text-gray-900">{{item.quantity}}</p>
              <button class="focus:outline-none flex" @click="item.quantity = minusQty(item.quantity)">
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

        </div>
        <div class="flex flex-row w-full justify-around vs:space-x-2 ssm:space-x-1 sm:space-x-4 items-center py-4">
          <button @click="showEditShopListModalMethod" class=" focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2 border-2 rounded-full border-red-700">
            <p class="text-base ssm:text-sm se:text-sm font-bold leading-none text-gray-900">Cancel</p>
          </button>
          <button class="focus:outline-none flex items-center justify-center w-56 h-full px-4 py-2.5 bg-red-700 rounded-full">
           <p class="text-base  ssm:text-sm se:text-sm font-bold leading-none text-white">Save Changes</p>
          </button>
        </div>
       </div>
       </div>
      </transition>

      
  </div>
      <!--end-->   
</template>

<script>
import store from "../store/index";
// import VueSimpleAlert from "vue-simple-alert";
import api from "../api";
import moment from "moment"
export default {
  props: ["post"],
  data() {
    return {
      new_item:false,
      addnewButton1:false,
      myItem1OnList:false,
      mainModal:true,
      isVisible: true,
      listEdit: false,
      hidden: false,
      show: true,
      Payments: ["Cash on Delivery", "Gcash", "PayMaya", "Online Banking"],
      delivery_info: {
        postIdentity: this.post.postIdentity,
        postStatus: this.post.request_post.postStatus,
        deliveryArea: "none",
        shoppingPlace: this.post.request_post.shoppingPlace,
        deliverySchedule: moment(
          this.post.request_post.deliverySchedule
        ).format("YYYY-MM-DDThh:mm"),
        transportMode: "none",
        capacity: "none",
        paymentMethod: this.post.request_post.paymentMethod,
        caption: this.post.request_post.caption,
        deliveryAddress: this.post.request_post.deliveryAddress,
        shoppingList: null,
      },
      shopping_info: {
        items: this.post.request_post.shoppingListContent,
        shoppingListName: this.post.request_post.shoppingListTitle,
      },
      addAddress: false,
      dropdown1: false,
      dropdown2: false,
      dropdown3: false,
      dropdown4: false,
      limit_by: 4,
      default_limit: 4,
      showListStatus: "See More",
      showLessStatus: "See Less",
      isActive: false,
      showEditShopListModal: false,
      ctr:0,
      oldList:null,
      selectedList:null
    };
  },
  methods: {
    showEditShopListModalMethod(){
      this.showEditShopListModal = !this.showEditShopListModal
      this.mainModal = !this.mainModal
      console.log(this.showEditShopListModal)
    },
    editShopListAtSelectShopList(){
      var tempList = this.shoppingLists;
      console.log('selected List',tempList, this.edit2)
      var temp = tempList.filter((x)=>{return x.shoppingListNumber === this.edit2})
      this.selectedList = temp[0]
      console.log('selected List',this.selectedList)
      this.showSelectShopListModal = !this.showSelectShopListModal;
      this.showEditShopListModal = !this.showEditShopListModal;
      this.ctr = this.selectedList.shoppingListContent.id+1
      this.oldList = JSON.parse(JSON.stringify(this.selectedList))
      // $(".hideIf").fadeIn();
    },
      showMoreshowLess() {
      this.isActive = !this.isActive;
      this.limit_by = null;
      if (this.showListStatus != this.showLessStatus) {
        this.showListStatus = this.showLessStatus;
      } else {
        this.showListStatus = "See More";
        this.limit_by = this.default_limit;
      }
    },
     computedShopItemList(list) {
      return this.limit_by ? list.slice(0, this.limit_by) : list;
    },
    isFew(filter_itemList) {
      filter_itemList.length < 5;
    },
    close2() {
      this.$emit("closeModal1");
    },
    Edit(pars) {
      let x = document.getElementById(pars).innerHTML;
      if (x == "Change") {
        document.getElementById(pars).innerHTML = "Save";
      } else {
        document.getElementById(pars).innerHTML = "Change";
      }
    },
    saveChanges() {
      // var list = document.getElementById("userList").getElementsByTagName("li");
      // var newList = "";
      // for (var i = 0; i < list.length; i++) {
      //   newList = newList + ", ".concat(list[i].outerText);
      // }

      // var stringList = newList.substr(2);
      this.delivery_info.shoppingList = this.shopping_info;

      api
        .put("api/post/" + this.post.postNumber + "/edit", this.delivery_info)
        .then(() => {
          store.dispatch("getPosts").then(() => {
            store.dispatch("getShoppingPlaces");
            this.$emit("getSortPosts");
          });
          this.close2();
        });
    },
    openAddModal() {
      this.addAddress = !this.addAddress;
    },

    getHomeAddressValue() {
      this.delivery_info.deliveryAddress = document.getElementById(
        "homeAdd"
      ).innerHTML;
      console.log(document.getElementById("homeAdd").innerHTML);
    },
    getShipAddressValue(index) {
      this.delivery_info.deliveryAddress = document.getElementById(
        "shipAdd" + index
      ).innerHTML;
      console.log(document.getElementById("shipAdd" + index).innerHTML);
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
        } else {
          li[i].style.display = "none";
        }
      }
    },
    setShoppingPlace(index) {
      this.delivery_info.shoppingPlace = document.getElementById(
        "sp" + index
      ).innerHTML;
    },
    setPayment(index) {
      this.delivery_info.paymentMethod = document.getElementById(
        "pm" + index
      ).innerHTML;
    },
  },
  computed: {
    userPersonal() {
      return store.getters.getPersonal;
    },
    userHomeAddress() {
      return store.getters.getAddress;
    },
    userShippingAddress() {
      return store.getters.getUserShippingAddress;
    },
    transportModes() {
      return store.getters.getTransportModes;
    },
    shoppingLists() {
      return store.getters.getUserShoppingList;
    },
    shoppingPlaces() {
      return store.getters.getShoppingPlaces;
    },
  },
};
</script>
