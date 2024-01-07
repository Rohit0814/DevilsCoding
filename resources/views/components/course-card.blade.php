<div class="w-1/5 h-72 ml-5 mr-5" style="-webkit-box-shadow: -2px -1px 27px 0px rgba(0,0,0,0.75); -moz-box-shadow: -2px -1px 27px 0px rgba(0,0,0,0.75); box-shadow: -2px -1px 27px 0px rgba(0,0,0,0.75);">
    <div class="w-full h-1/2" style="background: url('{{$courseImg}}'); background-position: center center; background-size:cover"></div>
    <div class="pl-5 pt-3 pr-5 pb-3">
        <span>{{$courseSubTitle}}</span>
        <h1 class="pt-2 pb-4 text-2xl font-bold">{{$courseTitle}}</h1>

        <div class="flex justify-between">
            <div><span><i class="fa-solid fa-circle-info text-indigo-800"></i> {{$courseLesson}} Lessons</span></div>
            <div class=" cursor-pointer"><a href="{{$courseStart}}">Start <i class="fa-solid fa-circle-arrow-right text-indigo-800"></i></a></div>
        </div>
    </div>
</div>