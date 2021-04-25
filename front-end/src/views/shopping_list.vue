<template>
  <Nav />
  <div class="flex flex-col justify-center font-nunito p-3 gap-y-4">
    <div
      class="w-6/12 flex-col justify-center self-center mt-24 gap-y-5 hidden 2xl:block xl:block lg:block"
    >
      <p class="text-2xl font-nunito font-bold flex uppercase">
        shopping lists
      </p>
    </div>

    <div
      class="flex flex-col mt-28 justify-center self-center w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl 2xl:w-6/12 2xl:mt-0 lg:w-6/12 lg:mt-0 xl:w-6/12 xl:mt-0 md:w-10/12 md:mt-0 sm:w-11/12"
      v-for="list in shoppingLists"
      :key="list.shoppingListNumber"
    >
      <div class="flex justify-between mb-4">
        <div class="flex flex-col gap-4">
          <span class="flex justify-between gap-x-3">
            <p class="font-bold font-nunito">
              {{ list.shoppingListTitle }}
            </p>
          </span>
        </div>

        <button
          @click="
            (toggleeditShopListNum = list.shoppingListNumber),
              toggleeditShopList()
          "
          class="ml-16 text-sm font-bold text-blue-700 focus:outline-none"
        >
          Edit
        </button>

        <editShopListModal
          v-if="editVisible && toggleeditShopListNum == list.shoppingListNumber"
          @closeModal="editlistener"
          :list="list.shoppingListContent.split(', ')"
          :index="list.shoppingListTitle"
          :listNum="toggleeditShopListNum"
        />
      </div>

      <div class="bg-gray-300 py-1 px-3 rounded-2xl">
        <ul
          id="example-1"
          class="list-disc text-sm list-inside grid grid-cols-2 p-5"
        >
          <li
            v-for="item in list.shoppingListContent.split(', ')"
            :key="item"
            class="font-bold"
          >
            {{ item }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
import Nav from "../views/Navbar.vue";
import editShopListModal from "./editShopListModal";
import store from "../store/index";
export default {
  name: "shopping-list",
  components: {
    Nav,
    editShopListModal,
  },
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
    console.log(this.shoppingLists);
  },
  data() {
    return {
      editVisible: false,
      list_number: 0,
      items: [
        { list: "Pork" },
        { list: "flour(1kg)" },
        { list: "Brown Sugar" },
      ],
      toggleeditShopListNum: null,
    };
  },
  methods: {
    update_order() {
      if (this.selected != "Confirmed") {
        alert(this.selected + "?");
      }

      document.getElementById("select_option").style = "hidden";
    },
    isActive_function(el) {
      if (el == "btn1") {
        this.activeBtn = 0;
      } else {
        this.activeBtn = el;
      }
    },
    toggleeditShopList() {
      this.editVisible = !this.editVisible;
    },
    editlistener() {
      this.editVisible = false;
    },
  },
  computed: {
    shoppingLists() {
      return store.getters.getUserShoppingList;
    },
  },
};
</script>