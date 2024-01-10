<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publisher</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    <div style="display: flex">
    <div style="width: 100%; height:100vh;">
        <h2 style="margin-top: 30px; margin-left:50px">Devils Coding</h2>
            <div class="flex justify-center items-center">
                <div>
                    <h1 class="flex justify-center text-2xl">Log in as a <span class="font-bold" style="color:red;">&nbsp;Publisher</span></h1>
                    <p class=" text-right pr-32">I'm not a publisher</p>

                    <div>
                        <form class="flex flex-1 flex-wrap justify-center mt-10">
                            <input type="text" placeholder="UserName / Email" class="pt-1 pb-1 pr-2 pl-2 w-3/5 mb-8"><br>
                            <input type="text" placeholder="UserName / Email" class="pt-1 pb-1 pr-2 pl-2 w-3/5"><br>
                            <span>Forget Password?</span>
                        </form>
                    </div>

                </div>
            </div>
    </div>
    </div>
</body>
</html>