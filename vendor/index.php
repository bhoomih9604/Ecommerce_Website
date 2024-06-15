<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .bg1
        {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            background-color:white;
            width: 95%;
            height: 100vh;
        
        }
        .bg2
        {
            position: absolute;
            height: 80%;
            width: 85%;
            background-color: rgba(240, 231, 231, 0.584);
            display: flex;
            flex-direction: column;
        }
        .txt
        {
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color:rgb(39, 34, 34);
            font-size: 50px;
            align-items: center;
        
        }
        .text1
        {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
            font-weight: bold;
        }
        .color
        {
            color:rgb(82, 76, 76);;
            font-size:26px;
        }
       
        .box1
        {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items:center;
            
            position: absolute;
            height: 20%;
            width: 100%;
            justify-content: center;
            margin-top: 25px;
        }
        .innerbox1
        {
            display: flex;
            width: 100%;
            height: 70%;
            
            justify-content: center;
            position: relative;
            top:0%;
            
        }
        .innerbox2
        { 
            display: flex;
            justify-content: center;
            width: 100%;
            height:30%;
            
            text-align: center;
        }
        .box2
        {
           display: flex;
           flex-direction: column;
           flex-wrap: wrap;
           gap: 5px;
           width: 100%;
           height: 56%;
           
           position:absolute;
           top: 24%;
           padding-bottom: 28px;


        }
        .leftbox
        {
            top:5px;
            width: 48%;
            height: 100%;
            
            display: flex;
            flex-direction: column;
            
        }
        .leftbox1
        {
            width: 100%;
            height: 37%;
            
            text-align: center;
            
            display: inline block;
            font-size: 30px;
            text-align: center;
            margin-top: 10px;
            padding: 20px;

        }
        .leftbox2
        {
            width: 100%;
            height: 27%;
            top: 0px;
            position: relative;
            padding-bottom: 3px;
            justify-content: center;
            
        }
        .btn
        {
            height: 85%;
            width: 95%;
            color: black;
            position: relative;
            left: 15px;
            font-size: 20px;
            border-radius: 50px black;
        }


        
        .leftbox3
        {
            width: 100%;
            height: 20%;
            
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 35px;
            top: 0px;
        }
        
        .btn:hover
        {
            background-color: rgb(217, 206, 206);
            border-radius: 6%
        }
        
        
        .rightbox
        {
            position: relative;
            left: 13px;
            width: 48%;
            height: 100%;
            
            
        }
        
       .rightbox1
        {
            width: 100%;
            height: 37%;
            
            text-align: center;
            
            display: inline block;
            font-size: 30px;
            text-align: center;
            margin-top: 10px;
            padding: 20px;

        }
        .rightbox2
        {
            width: 100%;
            height: 27%;
            top: 0px;
            position: relative;
            padding-bottom: 3px;
            justify-content: center;
        }
        
    </style>
</head>
<body>
    <div class="bg1"> 
        <img src="https://previews.123rf.com/images/layritten/layritten1508/layritten150800013/43412570-seamless-pattern-of-colorful-clothes-for-stylish-design-transparent-pattern-background-of-clothing.jpg" alt=" no img found">
        <div class="bg2"> 
            <div class="box1">
              <div class="innerbox1 txt"> TRENDY THREADS</div>
              <div class="innerbox2 text1"> All you need is here! <br>Most fashionable threads is just a click far!! </div>
            </div>
            <div class="box2">
                <div class="leftbox">
                       <div class="leftbox1 ">Want to sell your products to everyone? <br> Then register yourself as <span class="color">VENDOR</span></div>
                       <div class="leftbox2 "> 
                        <form action="/vregister.html">
                        <button class="btn"> Register here...</button>
                    </form>
                       </div>
                       
                       
                </div>

                <div class="rightbox">
                       <div class="rightbox1"> 
                        <div>Want to buy clothes?? <br>
                        Dont wait...register as <span class="color">CUSTOMER</span></div>
                    </div>
                    
                    <div class="rightbox2">
                    <form  method ="POST" action="/vendor/vregister.html">
                        <button class="btn-success"> sumbit </button>
        </form>
                    </div> 
                </div>
            </div>
     </div>

    </div> 


</body>
</html>
























