<div>
    <x-layout>
        <div class="my-4 text-xl"
        >Courses</div>
        <x-searchbar />
        <section class="mt-10" >
            <x-banner />
            <div class="grid h-[349px]  gap-5 grid-cols-2">
                @foreach($courses as $course)
                <div class=" relative group ">
                    <div class="z-[2] absolute w-full h-full bg-gradient-to-l from-black via-black to-transparent ">
                        <div class=" pl-24  w-full h-full bg-gradient-to-l from-black via-black to-transparent">
                            <div class="h-full p-5"
                                style="background: radial-gradient(circle at left,rgba(0,0,0,.1) 0%,#000 25%);"
                            >
                                <div class="text-[27px] text-red-400">
                                    <a href="/course/{{$course->id}}">
                                        {{$course->title}}
                                    </a>
                                </div>
                                <div class="flex relative">
                                    <a class="flex">
                                        <img class="rounded-full " src="/storage/{{$course['author']->avatar}}" alt="{{$course['author']->name}}" loading="lazy" height="78" width="78">
                                        <div class="ml-5 flex flex-col justify-center">
                                            <span class="text-xl">{{$course['author']->name}}</span>
                                            <span class="font-thin text-lg text-gray-400">{{$course['author']->motto}}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4 text-[15px]">
                                    {{$course->description}}
                                </div>

                                @php
                                if(date("H", strtotime($course->duration)) > 1)
                                $hour = "hours";
                                else
                                $hour = "hour";
                                if(date("i", strtotime($course->duration)) > 1)
                                $minute = "minutes";
                                else
                                $minute = "minute";
                                @endphp
                                <div class="my-2 text-sm flex items-center">
                                    <span class="text-gray-400">
                                        {{date("H",strtotime($course->duration))}} {{$hour}},
                                        {{date("i",strtotime($course->duration))}} {{$minute}}
                                    </span>
                                    <strong class="ml-2 px-[4px] bg-gray-500 rounded-lg text-zinc-800">CC</strong>
                                </div>
                                <div class="flex mt-5 gap-3">
                                    <button class="py-2 px-4 bg-red-600 rounded-full">Watch Free Preview</button>
                                    <button class="py-2 px-4 bg-orange-600 rounded-full">Get Full Access</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="z-[2] opacity-80 group-hover:opacity-100 transition ease-in duration-300" src="{{$course->bg_img}}" alt="{{$course->title}}" loading="lazy" height="350" width="350">
                </div>
                @endforeach
            </div>
        </section>
    </x-layout>
</div>
