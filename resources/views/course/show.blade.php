<div>
    <x-layout>
        <section class="mt-10 ">
            <div class="flex">
                <div class="relative">
                    <img class="" src="{{$course->bg_img}}" alt="{{$course->title}}" loading="lazy" height="230" width="230">
                </div>
                <div class="ml-5">
                    <div class="text-[30px]">{{$course->title}}</div>
                    <div>Topics: {{$course->tag}}</div>
                    <div class="flex relative my-5">
                        <a class="flex">
                            <img class="rounded-full " src="/storage/{{$course['author']->avatar}}" alt="{{$course['author']->name}}" loading="lazy" height="78" width="78">
                            <div class="ml-5 flex flex-col justify-center">
                                <span class="text-xl">{{$course['author']->name}}</span>
                                <span class="font-thin text-lg text-gray-400">{{$course['author']->motto}}</span>
                            </div>
                        </a>
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
                </div>
            </div>
            <div class="absolute px-32 left-0 right-0    flex   bg-black  mt-5">
                <div class=" m-4  items-center ">
                    <video width="490" height="300"  poster="https://static.frontendmasters.com/assets/courses/2023-08-25-chat-apis/posterframe.webp" data-fmp="https://static.frontendmasters.com/assets/videos/promo/tvtbtBuEht" data-fmp-default="" data-fmp-hls="" data-fmp-captions="" data-fmp-cta=""></video>
                </div>
                <div class="p-5 text-sm justify-evenly flex flex-col">
                    <span class="my-4">
                        {{$course->course_description}}
                    </span>
                    <div class="my-4">
                        This course and others like it are available as part of our Frontend Masters video subscription.
                    </div>
                    <div class="my-4 text-gray-400">
                        Published: {{date("d M Y",strtotime($course->created_at))}}
                    </div>
                    <button class="mt-10 py-4 px-24 bg-red-600 text-xl rounded-full">
                        Get Unlimited Access Now

                    </button>

                </div>

            </div>
            <div class="mt-[400px]">
                <div>

                    @foreach($course['content'] as $content)
                    <div>

                        <div class="font-semibold text-2xl mt-10 text-gray-400 pb-5 border-b border-b-gray-700">{{$content->title}}</div>
                        <div class="relative flex m-3">
                            <img class="lazyloaded" src="https://static.frontendmasters.com/thumb/savage-a/2023/08/25/1-90.jpg" alt="Introduction" loading="lazy" height="72" width="128">
                            <div class="mx-4 w-full">
                                <div class="flex justify-between text-orange-600">
                                    <span class="font-semibold">{{$content->video_title}}</span>
                                    <span class="">00:00:00 - 00:08:16</span>
                                </div>

                                <div class="text-gray-400">
                                    {{$content->description}}
                                </div>
                            </div>


                        </div>
                        @endforeach


                    </div>

                </div>


        </section>

    </x-layout>
</div>
