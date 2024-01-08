<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Devils Login</title>
    <style>
        .login input, .register input{
            background: none;
            color: white;
            outline: none;
            border: none;
            border-bottom: 1px solid white;
            word-spacing: 2%; 
        }

        .login input:focus, , .register input:focus {
            outline: none;
            border: none;
            border-bottom: 1px solid blueviolet; 
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body style="padding: 0px;margin:0px">
    <div class="flex justify-center items-center" style="background:url('https://www.presentationmagazine.com/images3/subtle-waves468.jpg');background-repeat:no-repeat;background-position:center center; background-size:cover; width:100vw; height:100vh">
        <div class="w-3/4 h-3/4 flex" style="background: rgba(75, 0, 130,0.5); -webkit-box-shadow: 0px 0px 14px 2px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 14px 2px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 14px 2px rgba(0,0,0,0.75);">
            <div class="  w-1/2 h-full" style="background: url('https://img.freepik.com/free-vector/beautiful-watercolor-background_23-2148486848.jpg'); background-repeat:no-repeat; background-position:center center;background-size:cover">
                <div class="flex justify-center font-bold text-5xl text-indigo-900 mt-12">Devils Coding</div>
                <div class="flex justify-center"><img src="images/devils.png" width="200px"></div>
                <div class="">
                    <h4 class="flex justify-center text-xl font-semibold text-indigo-500">Welcome to Devils coding</h4>
                    <p class="pl-16 pr-16 flex justify-center text-justify font-medium">Devil's Coding is a premier platform dedicated to delivering comprehensive and cutting-edge content across a spectrum of technologies. Our platform serves as a hub for both novice learners and seasoned professionals, offering a diverse range of technology-related content and state-of-the-art training programs. We take pride in providing curated and up-to-date resources, ensuring that our community stays at the forefront of the rapidly evolving technological landscape.</p> 
                </div>
            </div>
            <div class=" w-1/2 h-full">
                <div class="flex justify-center">
                    <h1 class="text-4xl font-extrabold text-white pt-10 pb-5">Login</h1>
                </div>
                <div class="w-full h-3/4 rounded-t-3xl"  style="background: rgba(0,0,0,0.2)">
                    <div class="flex justify-around bg-indigo-500 rounded-t-3xl text-white font-bold">
                        <div class="login-btn bg-indigo-900 rounded-t-3xl text-center cursor-pointer w-full h-full pt-3 pb-3">LogIn</div>
                        <div class="signup-btn w-full h-full text-center rounded-t-3xl cursor-pointer pt-3 pb-3">SignUp</div>
                    </div>

                    <div class="login">
                    <div class="w-full h-2/3 pt-5 tb-5 pl-20 r-10 flex justify-center">
                        <form action="/login" class="w-full">
                            <label for="username" class="text-indigo-400 w-full font-semibold">Username</label><br>
                            <input type="text" class=" w-4/5 my-2" placeholder="Enter username">
                            <br><br>
                            <label for="username" class="text-indigo-400 w-full font-semibold">Password</label><br>
                            <input type="password" class=" w-4/5 my-2" placeholder="Enter password">
                            <br><br>
                            
                            <button class="flex justify-center w-4/5 cursor-default"><a href="" class="bg-indigo-900 hover:bg-indigo-500 text-white pl-8 pr-8 pt-2 pb-2 font-extrabold rounded-xl">Login</a></button>
                        </form>   
                    </div><br>
                    <div class="w-full flex justify-center text-white">
                        Forgot Password ? | Back to <a href="/" class="pl-1 text-indigo-500">Home</a>
                    </div>
                    </div>

                    <div class="register">
                        <div class="w-full h-full pt-2  pl-20 r-10 flex justify-center">
                            <form action="" class="w-full">
                                <label for="username" class=" text-indigo-400 w-full font-semibold">Email Id</label><br>
                                <input type="text" class=" w-4/5" placeholder="Enter your Email">
                                <br><br>
                                <label for="username" class="text-indigo-400 w-full font-semibold mt-5">Password</label><br>
                                <input type="password" class=" w-4/5" placeholder="Enter password">
                                <br><br>

                                <label for="username" class="text-indigo-400 w-full font-semibold">Confirm Password</label><br>
                                <input type="password" class=" w-4/5" placeholder="Enter confirm password">
                                <br><br>
                                
                                <button class="flex justify-center w-4/5 cursor-default"><a href="" class="bg-indigo-900 hover:bg-indigo-500 text-white pl-8 pr-8 pt-2 pb-2 font-extrabold rounded-xl">SignUp</a></button>
                            </form>   
                        </div><br>
                        <div class="w-full flex justify-center text-white">
                            Back to <a href="/" class="pl-1 text-indigo-500">Home</a>
                        </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(".register").hide();
        $(".login-btn").click(function(){
            $(".signup-btn").removeClass("bg-indigo-900")
            $(".login-btn").addClass("bg-indigo-900");
            $(".register").fadeOut(500,function(){
                $(".login").fadeIn(1000);
            });
            
        });
        $(".signup-btn").click(function(){
            $(".signup-btn").addClass("bg-indigo-900")
            $(".login-btn").removeClass("bg-indigo-900");
            $(".login").fadeOut(500,function(){
                $(".register").fadeIn(1000);
            });
        });
    </script>
</body>
</html>