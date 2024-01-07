<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('Comman.Main')

    @section('main-section')
        <div>
            <div>
            <div class="Top-slider flex bg-indigo-200">
                <div class="left-slider w-1/2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYscfUBUbqwGd_DHVhG-ZjCOD7MUpxp4uhNe7toUg4ug&s" class="w-full h-96">
                </div>
                <div class="w-1/2 justify-center flex flex-col h-full my-auto items-center bg-cover ">
                    <span class=" text-xl font-extrabold">Welcome to Devils coding</span>
                    <p class=" pl-28 pr-28 text-justify">Devil's coding provide you latest news about technology as well as a coding enviroment and chance to enhance the coding knowledeg and skill</p>
                    <button class="m-3 pl-5 pr-5 pt-2 pb-2 rounded-md text-white font-bold bg-indigo-500 hover:bg-indigo-800 transition-all duration-200">Learn More</button>
                </div>
            </div>

            <div class="flex p-2 justify-center">
                <div class="w-5 h-5 m-2 rounded-full cursor-pointer"><i class="fa-solid fa-circle-arrow-left text-2xl"></i></div>
                <div class="w-5 h-5 m-2 rounded-full bg-blue-500"></div>
                <div class="w-5 h-5 m-2 rounded-full bg-blue-300"></div>
                <div class="w-5 h-5 m-2 rounded-full bg-blue-300"></div>
                <div class="w-5 h-5 m-2 rounded-full cursor-pointer"><i class="fa-solid fa-circle-arrow-right text-2xl"></i></div>
            </div>
            </div>

            <div>
                <h1 class=" text-center mt-5 mb-5 text-3xl font-extrabold">CityMart</h1>
            <div class="flex justify-center">
                <div class=" w-1/4 h-52 flex" style="background: url('https://imgeng.jagran.com/images/2023/sep/best%2015%20inch%20laptops%20in%20India1695872319038.jpg'); background-repeat:no-repeat; background-position:center center; background-size: cover;">
                    <div class="w-full h-full bg-indigo-900 opacity-80 text-white font-extrabold pl-8 pt-5 text-2xl" style="clip-path: polygon(0 0, 92% 0, 21% 100%, 0% 100%);">
                        Laptop <br> Collection<br>
                        <a href="#" class="text-sm font-medium">Shop Now <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" w-1/4 ml-10 h-52 flex" style="background: url('https://5.imimg.com/data5/SELLER/Default/2023/1/SM/GS/DW/44069440/acce.png'); background-repeat:no-repeat; background-position:center center; background-size: cover;">
                    <div class="w-full h-full bg-indigo-900 opacity-80 text-white font-extrabold pl-8 pt-5 text-2xl" style="clip-path: polygon(0 0, 92% 0, 21% 100%, 0% 100%);">
                        Accessories <br> Collection<br>
                        <a href="#" class="text-sm font-medium">Shop Now <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" w-1/4 ml-10 h-52 flex" style="background: url('https://images.shiksha.com/mediadata/shikshaOnline/mailers/2022/naukri-learning/what-is/What-is-Software-Tools.jpg'); background-repeat:no-repeat; background-position:center center; background-size: cover;">
                    <div class="w-full h-full bg-indigo-900 opacity-80 text-white font-extrabold pl-8 pt-5 text-2xl" style="clip-path: polygon(0 0, 92% 0, 21% 100%, 0% 100%);">
                        Software <br> Collection<br>
                        <a href="#" class="text-sm font-medium">Shop Now <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endsection
</body>

<script>
    

</script>
</html>