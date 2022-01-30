<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
            setcookie("Testookie1", "username",  time()+3600,   '/');
?>
</head>
<body>
    <div class="inputs">
       <span>कति सम्म</span>
        <input type="number" id="maxv"><br>
        <span>कति ओटा</span>
        <input type="number" id="howmuch"><br>
        <button onclick="getvalues()">getvalues</button>
    </div>
    <script>
        function getvalues(){
            document.getElementById("result").innerHTML = "";
            var maxv = document.getElementById("maxv").value;
            var howmuch = document.getElementById("howmuch").value;
           
        var values =[];
        for(let i = 0;i<howmuch;i++){
            var newnumber = Math.floor(Math.random() * maxv+1);
            if(values.includes(newnumber)){
                i = i-1;
            }else{
                if(newnumber == 0){
                i = i-1;
                }else{
                values.push(newnumber);
            }
            }
        }
        values.sort(function(a, b){return a - b});
      
        document.getElementById("result").innerHTML = values;
       
        }
        setInterval(getvalues,300);
    </script>
    <div class="result" id="result"></div>
</body>
</html>
<style>
    *{
        margin: 0%;
        padding: 0%;
    }
    .inputs{
        text-align: center;
        background-color: blueviolet;
    }
    .inputs input{
        margin-bottom: 10px;
        font-size: 18px;
    }
    #result{
      
        height: 80vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
        background-color: black;
        color: white;
        
      
    }
    button{
        height: 40px;
        width: 250px;
        font-size: 20px;
       margin-bottom: 10px;
    }
</style>