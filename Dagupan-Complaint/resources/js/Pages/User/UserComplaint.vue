
<template>

    <form>
        <div class="border-4 border-[#005176]  w-1/2 h-full  ml-20 mt-20 rounded-lg float-left ">
            <div class=" ml-5 mr-5 mt-5">
                <jet-label class="font-bold" for="Name" value="Name"  />
                <input class="p-3  border-[#005176] font-[arial] border-2 rounded-lg w-full"  placeholder="Enter your name here"  />
            </div>

            <div class=" ml-5 mr-5 mt-5">
                <jet-label class="font-bold" for="Location" value="Location"  />
                <select class="rounded-lg w-full" v-model="form.barangay">
                <option class="text-[#005176] font-[arial]" disabled>Please select one</option>
                <option v-for="barangay in Barangays" v-bind:key="barangay.id"  class="text-[#005176] font-[arial]">{{barangay}}</option>
                </select>
            </div>
                <div class=" ml-5 mr-5 mt-5">
                    <Jet-label class="font-bold" for="Complaints" value="Complaints" />
                    <textarea class="w-full m-auto font-[arial]  h-full p-12 border-2 border-[#005176] rounded-lg"  placeholder="Complaints" ></textarea>
                </div>
                <div>
                    <button class="border-2 border-[#005176] font-[arial] float-right mr-5 mt-2 mb-5 p-3 rounded-lg flex hover:bg-blue-400">SUBMIT</button>
                </div>
        </div>
    </form>
</template>

<script>
import JetLabel from '@/Jetstream/Label.vue';
export default {
    setup() {
        
    },
    components:{
        JetLabel
    },
   data(){
    return{
         form:this.$inertia.form({
        barangay:'',
    }),

    }
   },
    props:{
        Barangays:Array,
    }
}
</script>