<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  p-3 space-y-4">
<div class="  w-608  flex-col justify-center self-center mt-24 gap-y-5 hidden 
              2xl:block 
              xl:block 
              lg:block 
              ">
      <p class="text-2xl  font-nunito font-bold flex uppercase ">shopping lists</p>
</div>
  <div class="  flex  justify-center ">
    <div class="w-608 mt-20
     2xl:w-608 2xl:mt-0
              lg:w-608 lg:mt-0
              xl:w-608 xl:mt-0
              md:w-10/12 md:mt-0
              sm:w-11/12 
    p-6 rounded-xl shadow-lg bg-white">
    <button @click="addlist=!addlist" class="bg-gray-200 rounded-2xl w-full text-left 
    text-gray-400
    h-16 pl-2 focus:outline-none">Create new shopping list</button>
      <div v-if="addlist"  class=" fixed z-100 bg-black bg-opacity-75 overflow-y-auto   inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
         <div  class="  self-center bg-white ring-1  ring-gray-300  py-2 w-full rounded-xl
            2xl:w-608 2xl:mt-0
              lg:w-608 lg:mt-0
              xl:w-608 xl:mt-0
              md:w-10/12 md:mt-0
              sm:w-11/12 p-5 space-y-3
              h-auto
              
          ">
          <div class="flex  flex-row items-center space-x-2">
           <p class="font-bold text-gray-500 select-none">Title</p>
           <input v-if="addtitle" type="text" id="new_title" class="focus:outline-none bg-gray-100"/>
            <span @click="addtitle=!addtitle" class="cursor-pointer select-none material-icons text-md text-gray-500">
            mode  
            </span>
          </div>
            <div class="flex flex-row items-center space-x-3 select-none pl-3">
              <span @click="new_item=!new_item" class="cursor-pointer material-icons">
              add_circle
              </span>
              <p class="">Add new item</p>
             
            </div>
            <div v-if="new_item" class="ring-1 ring-gray-400 p-5 space-y-3 rounded-xl">
              <input id="product" type="text" placeholder="Product" class="rounded-xl pl-5 w-full focus:outline-none h-10  bg-gray-100"/>
            <div class="flex flex-row space-x-2">
                <input id="brand" type="text" placeholder="Brand" class="rounded-xl pl-5 w-full focus:outline-none h-10  bg-gray-100"/>
                <input id="size" type="text" placeholder="Size" class="w-40 rounded-xl pl-5 focus:outline-none h-10  bg-gray-100"/>
            </div>
            <div class="flex flex-row space-x-2">
              <p class="font-bold">Quantity</p>
             <span @click="quantity++" class="material-icons select-none cursor-pointer text-red-700">
              add
            </span>
              <p id="quants">{{quantity}}</p>
            <span @click="quantity--" class="material-icons select-none cursor-pointer text-red-700">
            remove
            </span>
            </div>
             <div class="flex justify-end">
               <div class="space-x-3">   
              <button @click="new_item=false" class="ring-2 rounded-2xl h-6 w-20 font-bold  ring-red-buttons focus:outline-none">Cancel</button>
              <button  @click="add_newItem()" class="ring-2 rounded-2xl h-6 w-20 font-bold text-white  ring-red-buttons focus:outline-none bg-red-buttons">Add</button>
               </div>
            </div>
            </div>
             <div class="flex text-gray-400 text-xs justify-end">
                <p>Updated</p>
                {{time}}
              </div>
           <hr class="bg-black">
           <div class="flex justify-between   ">
            <ul id="example-1" class=" text-sm list-inside  space-y-2 p-5  w-full ">
       <li v-for="item in new_items" :key="item.id" class=" grid-cols-2  w-ful list-none">
         <div class=" flex flex-row  justify-between w-full ">
          <div class="flex flex-col">
            <div class="flex flex-row  text-md  items-center space-x-3">
             <input type="checkbox" class=""  id="check" :value="item.product" />
              <label class="">{{ item.product }}({{item.size}})</label>
            </div>
          <div class="flex justify-start pl-8 ">
            <p class="text-sm">{{item.brand}}</p>
           </div>
          </div>
          
             <div class="flex flex-row space-x-5">
             <span @click="item.quantity=item.quantity+1" class="material-icons select-none cursor-pointer text-red-700">
              add
            </span>
            <div class="w-3 h-3">
              <p>{{item.quantity}}</p>
            </div>
            <span   @click="item.quantity=item.quantity-1" class="material-icons select-none cursor-pointer text-red-700">
            remove
            </span>
            <span  class=" cursor-pointer material-icons">
            more_vert
            </span>
            </div>
         </div>

       </li>
        </ul>
           </div>
           <div class="flex flex-row items-center justify-between">
            <div class="space-x-3 text-gray-500">
            <span @click="new_items=[]" class="material-icons cursor-pointer select-none">
              delete
            </span>
            <span @click="add_shopping_list()" class="material-icons cursor-pointer select-none"> 
              post_add
            </span>
          
          </div>
           <p @click="addlist=false" class="cursor-pointer text-blue-700 font-bold select-none">Close</p>
           </div>


          </div>
          
        </div>
        
    </div>
 
    </div>
  </div>
  <div v-for="item in shopping_list" :key="item.id" class="flex flex-col justify-center">

    <div  class="  self-center bg-white ring-1  ring-gray-300  py-2 w-full rounded-xl
            2xl:w-608 2xl:mt-0
              lg:w-608 lg:mt-0
              xl:w-608 xl:mt-0
              md:w-10/12 md:mt-0
              sm:w-11/12 
              h-auto
              
          ">
          <div class=" p-2 self-center">
            <div class="flex flex-row items-center space-x-2 mb-3">
           <p v-if="label_title" :id="item.id" class="font-bold  select-none">{{item.title}}</p>
           <input :id="item.title" type="text" :value="item.title" class=" p-2 hidden focus:outline-none bg-gray-100"/>
            <span @click="title_edit(item.id,item.title)" class="cursor-pointer select-none material-icons text-md text-gray-500">
            mode  
            </span>
          </div>
          <div class="flex flex-row items-center space-x-3 select-none pl-3">
              <span @click="view_list(item.title+'addlist')"  class="cursor-pointer material-icons">
              add_circle
              </span>
              <p class="">Add new item</p>
            </div>
            <div :id="item.title+'addlist'" class="ring-1 ring-gray-400 p-5 mt-4 space-y-3 rounded-xl">
              <input :id="item.title+'product'" type="text" placeholder="Product" class="rounded-xl pl-5 w-full focus:outline-none h-10  bg-gray-100"/>
            <div class="flex flex-row space-x-2">
                <input :id="item.title+'brand'" type="text" placeholder="Brand" class="rounded-xl pl-5 w-full focus:outline-none h-10  bg-gray-100"/>
                <input :id="item.title+'size'" type="text" placeholder="Size" class="w-40 rounded-xl pl-5 focus:outline-none h-10  bg-gray-100"/>
            </div>
            <div class="flex flex-row space-x-2">
              <p class="font-bold">Quantity</p>
             <span @click="quantity++" class="material-icons select-none cursor-pointer text-red-700">
              add
            </span>
              <p :id="item.title+'quants'">{{quantity}}</p>
            <span @click="quantity--" class="material-icons select-none cursor-pointer text-red-700">
            remove
            </span>
            </div>
             <div class="flex justify-end">
               <div class="space-x-3">   
              <button @click="view_list(item.title+'addlist')" class="ring-2 rounded-2xl h-6 w-20 font-bold  ring-red-buttons focus:outline-none">Cancel</button>
              <button  @click="add_item_shopping_list(item.title+'product',item.title+'brand',item.title+'size',item.title,item.title+'quants')" class="ring-2 rounded-2xl h-6 w-20 font-bold text-white  ring-red-buttons focus:outline-none bg-red-buttons">Add</button>
               </div>
            </div>
            </div>
          </div>
          <div :id="item.title+'shop'">
      <ul id="example-1" class=" text-sm list-inside  space-y-2 p-5  w-full ">
       <li v-for="item_list in item.items" :key="item_list.product" class=" grid-cols-2  w-ful list-none">
         <div class=" flex flex-row  justify-between w-full ">
          <div class="flex flex-col">
            <div class="flex flex-row  text-md  items-center space-x-3">
             <input type="checkbox" class=""  id="check" :value="item_list.product" />
              <label class="">{{ item_list.product }}({{item_list.size}})</label>
            </div>
          <div class="flex justify-start pl-8 ">
            <p class="text-sm">{{item_list.brand}}</p>
           </div>
          </div>
          
             <div class="flex flex-row space-x-5">
             <span @click="item_list.quantity=item_list.quantity+1" class="material-icons select-none cursor-pointer text-red-700">
              add
            </span>
            <div class="w-3 h-3">
              <p>{{item_list.quantity}}</p>
            </div>
            <span   @click="item_list.quantity=item_list.quantity-1" class="material-icons select-none cursor-pointer text-red-700">
            remove
            </span>
            <span @click="hidden=!hidden" class=" cursor-pointer material-icons">
            more_vert
            </span>
            </div>
            
         </div>
             
       </li>
       
        </ul>
        
          </div>
          <div class="flex justify-end pr-2">
          <p class="self-center text-sm text-gray-400"> Update {{item.date}}</p>
          </div>
        <hr>
        <div class="flex flex-row items-center justify-between px-3 pt-2">
            <div class="space-x-3 text-gray-500">
            <span @click="item.items=[]" class="material-icons cursor-pointer select-none">
              delete
            </span>
            <span  @click="item.title" class="material-icons cursor-pointer select-none"> 
              post_add
            </span>
          
          </div>
           <span @click="view_list(item.title+'shop')" class="cursor-pointer text-blue-700 font-bold select-none">Close</span>
           </div>
    </div>
  </div>
<!---eND--->
      
      <div class="text-center">
      <p class="text-gray-500 text-sm">
        Privacy Policy-Cookies Policy-Terms and Conditions
        Return and Refund Policy-PasaBuy   2021
    </p>
      </div>
       </div>

</template>
<script>
import Nav from '../views/Navbar.vue'
export default {
  name: 'shopping-list',
  components: {
    Nav,
    
  },
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
  data(){
    return{
      hidden_list:false,
       hidden:false,
        hide_input:false,
        label_title:true,
        addtitle:false,      
        addlist:false,
        new_item:false,
        editVisible: false,
        quantity:1,
        n:2,
        id_num:3,
        new_title:'',
        list_number:0,
       new_items: [],
       shopping_list:[
         {
          id:1,
          date:'7:00 AM',
          title:'Weekly Grocery List',

           items:[
             {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             },
              {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             },
              {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             }
           ]
         },
        {
           id:2,
          date:'7:00 AM',
           title:'Birthday Party List',

           items:[
             {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             },
              {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             },
              {
               product:'Flour',size:'1kg',brand:'Brando',quantity:1,
             }
           ]
         }
       ],
}
},
methods:{
  update_shoppinglist(e){
    alert(e);
  },
  view_list(e){

   let x=document.getElementById(e);
     if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  },
  add_newItem(){
    let x=document.getElementById('product').value;
    let y=document.getElementById('brand').value;
    let z=document.getElementById('size').value;
    let n=this.quantity;
    if(x==''||y==''||z==''){
      alert('Empty Field');
      return false;
    }
    else{
      let datax={
          'id':this.list_number,
          'product':x,
          'brand':y,
          'size':z,
          'quantity':n
  
      }
      this.new_items.push(datax);
      this.new_item=false;
        this.list_number++;
      console.log(this.new_items);
    }
  },
  title_edit(e,m){
     //const index = this.shopping_list.findIndex(x=>x.id==e);
     let x=document.getElementById(e);
     let n=document.getElementById(m);
     if (x.style.display === "none") {
    x.style.display = "block";
    n.style.display="none";
  } else {
    x.style.display = "none";
    n.style.display='block';
  }
    //alert(index);
  },
  updateShoppinglist(){

  },
  add_item_shopping_list(a,b,c,d,e){
     const index = this.shopping_list.findIndex(x=>x.title==d)
     let productx=document.getElementById(a).value;
     let brandx=document.getElementById(b).value;
     let sizex=document.getElementById(c).value;
     let quantx=document.getElementById(e).innerHTML;
     if(productx==''||brandx==''||sizex==''){
       alert("Empty Field");
       return false
     }
     let obj={
         'id':this.n,
          'product':productx,
          'brand':brandx,
          'size':sizex,
          'quantity':parseInt(quantx) 
     }
     this.n++;
     this.shopping_list[index].items.push(obj);
     console.log(this.shopping_list[index].items);
     document.getElementById(a).value='';
     document.getElementById(b).value='';
     document.getElementById(c).value='';
  },
  add_shopping_list(){
      let bagotitle=document.getElementById('new_title').value
      if(bagotitle==''||this.new_items.length==0){
        alert("Empty Field");
      }
      else{
         let new_time=new Date();
        let timex=new_time.toLocaleTimeString();
        let datex=new_time.toDateString();
        let new_date=datex+' '+timex;  
         let obj={
      'id':this.id_num++,
      'date':new_date,
      'title':document.getElementById('new_title').value,
      'items':this.new_items,
    }
    this.shopping_list.push(obj);
    this.new_items=[];
    this.addlist=false;
      }
  }

}
}
</script>
<style scoped>

input[type=checkbox] {
  outline-style: none;
  appearance: none;
  -webkit-appearance: none;
  height:16px;
  width:16px;
  border: 2px solid #1C1720;
  display: flex;
  align-items: center;
  justify-content: center;
}
input[type="checkbox"]:after{
font-family: "Font Awesome 5 free";
font-weight: 900;
content:"\f00c";
font-size: 10px;
color:white;
display:none;
outline-style: none;

}
input[type="checkbox"]:checked{
  background-color:#1C1720 ;
}

input[type="checkbox"]:checked::after{
  display:block;
}
</style>
