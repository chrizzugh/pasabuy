<template>
  <div
    v-on:click.self="close3"
    class="z-50 bg-black font-nunito bg-opacity-25 fixed flex w-full ssm:px-2 vs:px-2 inset-0 justify-center items-center"
  >
    <div
      class="inline-flex flex-col bg-white shadow rounded-xl h-56 w-95 ssm:w-full vs:w-full"
    >
      <div class="flex flex-row justify-around py-2">
        <div v-if="followStatus === 'followers'">
          <h1
            class="text-gray-900 pl-32 ssm:pl-17 ssm:text-xl vs:pl-6.5 lvs:pl-32 ssm:pr-0 pr-8 leading-normal text-2xl font-bold"
          >
            Followers
          </h1>
        </div>
        <div v-else>
          <h1
            class="text-gray-900 pl-32 ssm:pl-17 ssm:text-xl vs:pl-6.5 lvs:pl-32 ssm:pr-0 pr-8 leading-normal text-2xl font-bold"
          >
            Following
          </h1>
        </div>
        <button
          @click.prevent="close3"
          class="mt-2 focus:outline-none ssm:text-xs text-sm mb-1 leading-none text-indigo-900"
        >
          Close
        </button>
      </div>
      <hr />
      <div class="flex-auto overflow-y-scroll">
        <div v-if="followStatus === 'followers'">
          <div
            class="flex flex-col items-center p-4 space-y-4"
            v-for="followData in follow"  :key="followData.indexFollow"
          >
            <div v-if="followData.email1.email === account_infos.email">
              <div class="inline-flex flex-row w-full space-x-2">
                <img
                  class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full"
                  :src="followData.email2.profilePicture"
                />
                <p
                  class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900"
                >
                  {{ followData.email2.firstName }}
                  {{ followData.email2.lastName }}
                </p>
                <span
                  class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18"
                >
                  verified
                </span>
              </div>
            </div>
            <div v-else>
              <div class="inline-flex flex-row w-full space-x-2">
                <img
                  class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full"
                  :src="followData.email1.profilePicture"
                />
                <p
                  class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900"
                >
                  {{ followData.email1.firstName }}
                  {{ followData.email1.lastName }}
                </p>
                <span
                  class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18"
                >
                  verified
                </span>
              </div>
            </div>
          </div>
        </div>
        <div v-else>
          <div
            class="flex flex-col items-center p-4 space-y-4"
            v-for="followData in follow" :key="followData.indexFollow"
          >
            <div v-if="followData.email1.email === account_infos.email">
              <div class="inline-flex flex-row w-full space-x-2">
                <img
                  class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full"
                  :src="followData.email2.profilePicture"
                />
                <p
                  class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900"
                >
                  {{ followData.email2.firstName }}
                  {{ followData.email2.lastName }}
                </p>
                <span
                  class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18"
                >
                  verified
                </span>
              </div>
            </div>
            <div v-else>
              <div class="inline-flex flex-row w-full space-x-2">
                <img
                  class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full"
                  :src="followData.email1.profilePicture"
                />
                <p
                  class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900"
                >
                  {{ followData.email1.firstName }}
                  {{ followData.email1.lastName }}
                </p>
                <span
                  class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18"
                >
                  verified
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- Your content -->
      </div>
    </div>
  </div>
</template>

<script>
import store from "../store/index"
export default {
  props: ["followStatus", "follow"],
  data() {
    return {
      isVisible: false,
      user_info: {
        firstname: "Yami",
        lastname: "Sukehiro",
      },
    };
  },
  methods: {
    close3() {
      this.$emit("closeModal3");
    },
  },
  computed: {
    account_infos() {
      return store.getters.getUserInfo;
    },
  },
};
</script>