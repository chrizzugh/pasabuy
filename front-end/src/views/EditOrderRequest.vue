<template>
  <div
    v-on:click.self="close2"
    class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center sm:px-2 ssm:px-2 vs:px-2 vs:w-full"
  >
    <div
      class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full sm:w-full vs:w-full"
    >
      <div class="flex flex-col mt-4">
        <!--Create Post section-->
        <h1
          class="items-center justify-center vs:ml-0 ml-12 sm:ml-8 se:pl-14 se:ml-0 ssm:pl-11 ssm:ml-0 ssm:text-lg pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center"
        >
          Edit Order Request
          <button
            @click.prevent="close2"
            class="vs:ml-6 ml-20 sm:ml-14 se:ml-4 ssm:ml-3 ssm:text-xs focus:outline-none text-sm vs:text-xs mb-1 leading-none text-indigo-900"
          >
            Close
          </button>
        </h1>
        <!--end-->
        <hr />

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
          <div
            class="flex flex-col se:h-36 ssm:h-36 mt-3 w-31.75 items-start p-4 ssm:p-2 vs:p-2 bg-gray-100 rounded-xl h-auto ssm:w-full vs:w-full"
          >
            <div
              class="flex w-full flex-row items-end justify-between space-x-4 ssm:space-x-0 vs:space-x-0"
            >
              <p
                class="text-base ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900"
              >
                {{ shopping_info.shoppingListName }}
              </p>
            </div>
            <div
              class="flex w-full justify-between se:items-start se:overflow-y-scroll se:flex-col ssm:overflow-y-scroll ssm:flex-col ssm:justify-start ssm:items-start items-center flex-row space-x-4 se:space-x-0 ssm:space-x-0 vs:space-x-1 py-2 ssm:py-0 se:px-2 px-5 ssm:px-2 vs:px-2"
            >
              <div
                id="userList"
                class="flex flex-wrap w-full py-5 overflow-hidden bg-gray-100 rounded-lg editable focus:outline-red-700"
                contenteditable="true"
              >
                <ul
                  id="shoplist"
                  class="pl-3 text-xs font-semibold leading-relaxed list-disc list-inside"
                >
                  <li v-for="shopList in shopping_info.items" :key="shopList">
                    {{ shopList }}
                  </li>
                </ul>
              </div>
            </div>
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
  </div>
  <!--end-->
</template>

<script>
import store from "../store/index";
import VueSimpleAlert from "vue-simple-alert";
import api from "../api";
import moment from "moment"
export default {
  props: ["post"],
  data() {
    return {
      isVisible: true,
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
        shoppingID: this.post.request_post.shopping_list.indexShoppingList,
        items: this.post.request_post.shopping_list.shoppingListContent.split(
          ", "
        ),
        shoppingListName: this.post.request_post.shopping_list
          .shoppingListTitle,
      },
      addAddress: false,
      dropdown1: false,
      dropdown2: false,
      dropdown3: false,
      dropdown4: false,
    };
  },
  methods: {
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
      var list = document.getElementById("userList").getElementsByTagName("li");
      var newList = "";
      for (var i = 0; i < list.length; i++) {
        newList = newList + ", ".concat(list[i].outerText);
      }

      var stringList = newList.substr(2);
      this.delivery_info.shoppingList = stringList;

      api
        .put("api/post/" + this.post.postNumber + "/edit", this.delivery_info)
        .then(() => {
          store.dispatch("getPosts").then(() => {
            store.dispatch("getShoppingPlaces");
            this.$emit("getSortPosts");
          });
          VueSimpleAlert.alert(
            "Request post created successfully",
            "Sucess",
            "success"
          );
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
