<template>
    <div class="flex text-2xl font-bold text-red-500">
       
    </div>
<div>

    <input v-model="message" placeholder="edit me" />

    </div>

    <div>Selected: {{ selected }}</div>

<select v-model="selected">
  <option disabled value="">Please select one</option>
  <option>Lucao</option>
  <option>Tapuac</option>
  <option>Mukat</option>

</select>

<input v-model="message" placeholder="edit me">
<br>

<button class="border-solid">ENTER</button>


</template>
<script>
export default {
    setup() {
        
    },
}
</script>