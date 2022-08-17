
<template>
<html>
    <head>


</head>


 
    <form>

<img src="">

    <div class="Div1">
        <div class="Div2">

 <p>Name</p>
    <input class="input1" v-model="message" placeholder="Enter your name here"/>

<br>

    <p class="Select1">Select Location: {{ selected }}</p>

     <select>
            <option class="PSO">Please select one</option>
            <option>Lucao</option>
            <option>Tapuac</option>
            <option>Mukat</option>
     </select>


<p class="Input2">Complaints: {{ message }}</p>

<input class="Pholder" v-model="message" placeholder="Complaints" />

  <button>SUBMIT</button>
            </div>
        </div>
    </form>
</html>
</template>

<style>


.Div1{
    padding: 0;
    margin:0;
    background-color: #083248;
    color: white;
    opacity: 80%;
}

.Div1 input {
    color: black;
}

body{
margin: 0;
padding: 0;
background-image:url("C:\Users\leand\OneDrive\Documents\GitHub\Dagupan-Complaint\Dagupan-Complaint\public\Image\dagupanark.jpg");
background-repeat:no-repeat;
background-size: cover;
}

button{
    margin-left: 85%;
    margin-top: 2%;
    border: solid;
    border-radius: 10px;
    padding: 10px;
    border-width: 1px;
    width:100px;
}

button:hover{

transition:0.5s;
background-color:#e89c31;

}
.input1{
    margin-top: 0%;
    border: solid;
    border-radius:10px;
    box-shadow: 1px 1px 1px 1px;
    width: 50%;
    height: 10%;
    font-size: 20px;
    padding: 20px;
    border-width: 0.5px;
}

.Input2{
    margin-top: 3%;
    width: 100%;
    


}
.Pholder{
    height: 35%;
    width: 100%;
    border: solid;
    border-radius: 10px;
    border-width: 0.5px;
    padding: 10px;
   
    
}


.Select1{
margin-top: 3%;
color:white;
}

Select option{
background-color:#083248;

}
Select option:hover{
    transition:0.5;
    background-color:#083248;

}


.Div1{
height: 50%;
width: 50%;
position: absolute;

border-radius: 10px;

margin: 5%;
padding:1%;

}

.Div2{
height: 100%;
width: 100%;
position: relative;

padding:1%;
margin-right: 50%;
}


</style>


<script>
export default {
    setup() {
        
    },
}
</script>
