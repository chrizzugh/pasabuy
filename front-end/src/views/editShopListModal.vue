<template>
    <!-- Post Modal-->
    <div v-if = "edit">
        <div v-on:click.self="close" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-25">
            <div class="p-3 bg-white rounded-lg w-96">
                <h1 class="items-center justify-center pb-3 pl-24 text-xl font-bold text-center">
                    Shopping Lists
                    <button @click.prevent="close" class="ml-16 text-sm font-bold focus:outline-none text-waterloo">
                        Close
                    </button>
                </h1>
                <hr>

                <div class="items-center justify-center p-2">
                    <p class="pb-3 text-sm">
                         {{index}}
                    </p>
     
                <div id="userList" class="flex flex-wrap w-full py-5 overflow-hidden bg-gray-100 rounded-lg editable focus:outline-red-700" contenteditable="true">        
                    <ul id="shoplist" class="pl-3 text-xs font-semibold leading-relaxed list-disc list-inside ">
                        <li v-for="shopList in list" :key="shopList">{{shopList}}</li>
                    </ul>
                </div>

                <div class="pt-3">
                    <button @click="saveList" class="w-full h-8 px-5 text-base text-white transition-colors duration-150 bg-red-600 text-bold rounded-3xl focus:shadow-outline hover:bg-red-600">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--end of Post Modal-->
</template>

<script>
import store from "../store/index"
import api from "../api"
import VueSimpleAlert from "vue-simple-alert";
export default {
    el:'#shoplist',
    props:['list','index','listNum'],
     data(){
        return {
        edit: true,

        }
        
    },
    methods: {
        close(){
            this.$emit('closeModal')
        },
        saveList(){
            var list = document.getElementById('userList').getElementsByTagName("li")
            var newList = ''
            for(var i=0; i<list.length;i++){
                console.log(list[i].outerText)
                newList = newList+', '.concat(list[i].outerText)
            }

            var stringList = newList.substr(2)
            console.log(stringList)

            api.post('api/editList',{list:stringList,listNum:this.listNum}).then((res)=>{
                store.dispatch('getUserShoppingList')
                VueSimpleAlert.alert(res.data.message, "Success", "success")
                this.$emit('closeModal')
            }).catch(errors=>{
                VueSimpleAlert.alert(errors.response.data.list, "Invalid", "warning")
            })
        }
    },
}
</script>