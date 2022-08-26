
<template>
    <div class="bg-gray-300 min-h-screen h-full w-full">
    <!-- <div class="h-max w-screen"> -->
        <div class="w-fit h-fit m-auto pt-10">
            <!-- <div class=" text-xl font-bold p-2 rounded-lg text-center"> -->
                <img src="../../../../public/Images/Logo.png"/>
            <!-- </div> -->
        </div>
          <div class=" w-3/4 h-fit m-auto  pt-5">
            <div class="bg-white text-xl font-bold p-5 rounded-lg text-center">
                <h1>Please Select Barangay:</h1>
                <div class=" ml-5 mr-5 mt-5">
                    <select class="rounded-lg w-2/4 cursor-pointer">
                        <option class="text-[#005176] font-[arial]" disabled>Please select one</option>
                        <option v-for="barangay in Barangays" v-bind:key="barangay.id"  class="text-[#005176] font-[arial]">{{barangay}}</option>
                    </select>
                </div>
                <div class="flex pt-10 justify-center">
                    <div @click="showComplaintModal = !showComplaintModal" class="border-2 border-black h-fit w-fit p-2 cursor-pointer rounded-lg">Submit Complaint</div>
                    <div @click="showRateModal = !showRateModal" class="border-2 border-black h-fit w-fit p-2 ml-2 cursor-pointer rounded-lg">Rate Us</div>
                </div> 
                <div v-if="this.showComplaint == true">
                    <div class="pt-5">Existing Complaint(s)</div>
                    <div class="grid grid-cols-4 p-5 gap-0 justify-left text-sm text-left overflow-x-auto">
                        <div class="border-2 border-black h-fit w-fit p-2 cursor-pointer rounded-lg ">
                            <div class="flex p-1">
                                <p>Name:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div>
                            <div class="flex p-1">
                                <p>Email:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div> <div class=" p-1">
                                <p>Complaint:</p>
                                <div class="">
                                    <p class="ml-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic?</p>
                                </div>
                            </div>
                        </div>
                        <div class="ml-2 border-2 border-black h-fit w-fit p-2 cursor-pointer rounded-lg ">
                            <div class="flex p-1">
                                <p>Name:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div>
                            <div class="flex p-1">
                                <p>Email:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div> <div class=" p-1">
                                <p>Complaint:</p>
                                <div class="">
                                    <p class="ml-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic?</p>
                                </div>
                            </div>
                        </div>
                        <div class="ml-2 border-2 border-black h-fit w-fit p-2 cursor-pointer rounded-lg ">
                            <div class="flex p-1">
                                <p>Name:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div>
                            <div class="flex p-1">
                                <p>Email:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div> <div class=" p-1">
                                <p>Complaint:</p>
                                <div class="">
                                    <p class="ml-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic?</p>
                                </div>
                            </div>
                        </div>
                        <div class="ml-2 border-2 border-black h-fit w-fit p-2 cursor-pointer rounded-lg ">
                            <div class="flex p-1">
                                <p>Name:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div>
                            <div class="flex p-1">
                                <p>Email:</p>
                                <p class="ml-2">Ryan Villanueva</p>
                            </div> <div class=" p-1">
                                <p>Complaint:</p>
                                <div class="">
                                    <p class="ml-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit perspiciatis nemo quasi nostrum magni ducimus molestiae alias ratione, cupiditate reiciendis obcaecati laborum repellat pariatur corrupti? Voluptatem autem assumenda obcaecati hic?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
    <Modal :show="showRateModal" :closeable="true" @close="showRateModal = !showRateModal">
        <div class="p-5">
            <div class="flex justify-between text-xl font-bold text-gray-900 my-3">
                <span>Rate for the System</span>
                <svg @click="showRateModal = !showRateModal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
                <div class=" mt-4 shadow-xl p-2 w-2/4 rounded-lg hover:bg-green-300">
                   <div class="font-bold">Verry Satisfied</div>
                </div>
                <div class=" mt-4 shadow-xl p-2 w-2/4 rounded-lg  hover:bg-green-300">
                   <div class="font-bold">Satisfied</div>
                </div>
                <div class=" mt-4 shadow-xl p-2 w-2/4 rounded-lg hover:bg-green-300">
                   <div class="font-bold">OK</div>
                </div>
                <div class=" mt-4 shadow-xl p-2 w-2/4 rounded-lg hover:bg-green-300">
                   <div class="font-bold">Dissatisfied</div>
                </div>
                <div class=" mt-4 shadow-xl p-2 w-2/4 rounded-lg hover:bg-green-300">
                   <div class="font-bold">Very Dissatisfied</div>
                </div>
            <div class="flex justify-end text-xl font-bold dark:text-gray-200 my-3">
                <div class="flex space-x-2 px-4 py-1 border text-sm leading-snug font-semibold text-green-600 dark:text-green-600 dark:border-green-600 border-green-600 uppercase rounded-full dark:hover:text-gray-200 hover:bg-green-500 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg>
                    <span>Submit</span>
                </div>
            </div>
        </div>
    </Modal>
    <Modal :show="showComplaintModal" :closeable="true" @close="showComplaintModal = !showComplaintModal">
        <div class="p-5">
            <div class="flex justify-between text-xl font-bold text-gray-900 my-3">
                <span>Create Complaint</span>
                <svg @click="showComplaintModal = !showComplaintModal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
                <div class="grid grid-cols-2 gap-4 ">
                    <div class="">
                        <Jet-label for="name" value="Name"></Jet-label>
                        <input type="text" class="w-full rounded-lg" placeholder="Optional "/>
                    </div>
                     <div class="">
                        <Jet-label for="email" value="Email"></Jet-label>
                        <input type="text" class="w-full rounded-lg" placeholder="Email "/>
                    </div>
                     <div class="">
                        <Jet-label for="address" value="Address"></Jet-label>
                        <input type="text" class="w-full rounded-lg" placeholder="Address "/>
                    </div>
                     <div class="">
                        <Jet-label for="age" value="Age"></Jet-label>
                        <input type="number" class="w-full rounded-lg" placeholder="Age"/>
                    </div>
                        <div class="col-span-2">
                        <Jet-label for="image" value="Image"></Jet-label>
                        <input type="file" class=" w-full rounded-lg" placeholder="Image" multiple/>
                    </div>
                    <div class="col-span-2 h-fit">
                        <Jet-label for="complaint" value="Complaint"></Jet-label>
                        <textarea type="text" class="h-96  shadow-xl w-full rounded-lg" placeholder="Complaint "/>
                    </div>
                </div>
            <div class="flex justify-end text-xl font-bold dark:text-gray-200 mt-3">
                <div class="flex space-x-2 px-4 py-1 border text-sm leading-snug font-semibold text-green-600 dark:text-green-600 dark:border-green-600 border-green-600 uppercase rounded-full dark:hover:text-gray-200 hover:bg-green-500 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg>
                    <span>Update</span>
                </div>
            </div>
        </div>
    </Modal>
</div>
</template>

<script>
import JetLabel from '@/Jetstream/Label.vue';
import Modal from '@/Jetstream/Modal'
export default {
    setup() {
        
    },
    components:{
        JetLabel,
        Modal
    },
   data(){
    return{
        showComplaint: true,
        showComplaintModal:false,
        showRateModal:false
    }
   },
    props:{
        Barangays:Array,
    }
}
</script>