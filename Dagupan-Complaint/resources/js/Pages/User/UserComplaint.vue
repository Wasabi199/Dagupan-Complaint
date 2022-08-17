<template>
    <div class="flex text-2xl font-bold text-red-500">
        <form >
        <input v-model="message" placeholder="edit me" />

      

        <div>>Selected: {{ selected }}</div>

        <select v-model="selected">
        <option disabled value="">Please select one</option>
        <option>Lucao</option>
        <option>Tapuac</option>
        <option>Mukat</option>

        </select>

        <input v-model="message" placeholder="edit me"/>
        <br/>
        
            <button type="submit" >ENTER</button>
    </form>
</div>


</template>
<script>
export default {
    setup() {
        
    },
    data(){
        return{
            selected:'',
        }
    }
}
</script>
