<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devils coding</title>

    <style>
        #list-heading{
            display: flex;
            justify-content: center;
        }

        #list-heading span{
            padding: 0.5rem 2rem;
            text-decoration: none;
            list-style: none;
            cursor: pointer;
            font-weight: bolder

        }
        .selected{
            background: white;
        }
    </style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
                <h1 class="text-center mx-auto mt-5 mb-5 pb-4 border-b-8 w-fit border-indigo-500 text-3xl font-extrabold">CityMart</h1>
                <div class="flex justify-center">
                    <x-card cardLabel="Laptop" cardTitle="Collection" showLink="#" cardImg="https://imgeng.jagran.com/images/2023/sep/best%2015%20inch%20laptops%20in%20India1695872319038.jpg"/>
                    <x-card cardLabel="Accessories" cardTitle="Collection" showLink="#" cardImg="https://contentstatic.techgig.com/photo/88967885/7-laptop-accessories-every-programmer-must-buy-in-amazon-flipkart-sale.jpg?22510"/>
                    <x-card cardLabel="Software" cardTitle="Collection" showLink="#" cardImg="https://www.creativesystem.com.np/wp-content/uploads/sites/2/2017/09/creative-software-asia.jpg" />
                </div>
            </div>

            <div class="w-full  bg-indigo-100 mt-5 pb-3">
                <div class="text-center mx-auto pt-5 mt-5 mb-5 pb-4 border-b-8 w-fit border-indigo-500 text-3xl font-extrabold">
                    Courses
                </div>
                <div id="list-heading">
                    <span class="selected all border-2 border-b-0">All</span>
                    <span class="website">Website</span>
                    <span class="software">Software</span>
                    <span class="andriod">Andriod</span>
                </div>

                @php
                 $cTag="";   
                @endphp

                <div class="w-full test flex justify-center pt-5 pb-5 h-full bg-white">
                    <x-course-card courseImg="https://deviniti.com/app/uploads/2018/07/DevOps-6-reasons.png" courseSubTitle="Development & Operations" courseTitle="DevOps" courseLesson="16" courseStart="#" courseTag={{$cTag}} />
                    {{-- <x-course-card courseImg="https://deviniti.com/app/uploads/2018/07/DevOps-6-reasons.png" courseSubTitle="Development & Operations" courseTitle="DevOps" courseLesson="16" courseStart="#" courseTag="all"/>
                    <x-course-card courseImg="https://deviniti.com/app/uploads/2018/07/DevOps-6-reasons.png" courseSubTitle="Development & Operations" courseTitle="DevOps" courseLesson="16" courseStart="#" courseTag="all"/>
                    <x-course-card courseImg="https://deviniti.com/app/uploads/2018/07/DevOps-6-reasons.png" courseSubTitle="Development & Operations" courseTitle="DevOps" courseLesson="16" courseStart="#" courseTag="all"/>               --}}
                </div>
            </div>


        </div>

        <script>
            $(".all").click(function (e) { 
                $("#list-heading").children().removeClass("selected");
                $(".all").addClass("selected");
                
            });

            $(".website").click(function (e) { 
                $("#list-heading").children().removeClass("selected");
                $(".website").addClass("selected");
            });

            $(".software").click(function (e) { 
                $("#list-heading").children().removeClass("selected");
                $(".software").addClass("selected");
            });

            $(".andriod").click(function (e) { 
                $("#list-heading").children().removeClass("selected");
                $(".andriod").addClass("selected");
            });
        </script>

    @endsection

</body>
</html>