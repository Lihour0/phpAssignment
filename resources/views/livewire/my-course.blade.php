<div>
    <x-layout>
        <div class="my-4 text-xl">My Courses</div>
        <x-searchbar />
        <section class="mt-10">
            <div class="flex flex-col">
                <div class="relative  group ">
                    <div class="z-[3] absolute w-full h-full bg-gradient-to-l from-black via-black to-transparent ">
                        <div class=" pl-24 w-full  h-full bg-gradient-to-l from-black via-black to-transparent">
                            <div class="h-full p-5"
                                style="background: radial-gradient(circle at left,rgba(0,0,0,.1) 0%,#000 25%);"
                            >
                                <div class="text-[27px] text-red-400">
                                    <a href="/course">
                                        Building Slack Chat bot
                                    </a>
                                </div>
                                <div class="flex relative">
                                    <a class="flex">
                                        <img class="rounded-full " src="https://static.frontendmasters.com/assets/teachers/lengstorf/thumb.webp" alt="Jason Lengstorf" loading="lazy" height="78" width="78">
                                        <div class="ml-5 flex flex-col justify-center">
                                            <span class="text-xl">Jason Lengstorf</span>
                                            <span class="font-thin text-lg text-gray-400">Learn with Jason</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4 text-[15px]">
                                    Learn to build Slack bots for task automation and team collaboration. Integrate your bot with a Notion database, add info with the Slack Block Kit UI Framework, add API security, and deploy your bot!
                                </div>
                                <div class="my-2 text-sm flex items-center">
                                    <span class="text-gray-400">
                                        2 hours, 10 minutes
                                    </span>
                                    <strong class="ml-2 px-[4px] bg-gray-500 rounded-lg text-zinc-800">CC</strong>
                                </div>
                                <div class="flex mt-5 gap-3">
                                    <button class="py-2 px-4 bg-orange-600 rounded-full">Add Content</button>
                                    <button class="py-2 px-4 bg-orange-600 rounded-full">Edit Course</button>
                                    <button class="py-2 px-4 bg-orange-600 rounded-full">Edit Content</button>
                                    <button class="py-2 px-4 bg-red-600 rounded-full">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="z-[2] opacity-80 group-hover:opacity-100 transition ease-in duration-300" src="https://static.frontendmasters.com/assets/courses/2023-08-25-chat-apis/thumb.webp" alt="Building a Slack Chat Bot" loading="lazy" height="350" width="350">
                </div>



                @foreach($mycourses as $mycourse)

                <div class="relative group mt-5">
                    <div class="z-[3] absolute w-full h-full bg-gradient-to-l from-black via-black to-transparent ">
                        <div class=" pl-24 w-full  h-full bg-gradient-to-l from-black via-black to-transparent">
                            <div class="h-full p-5"
                                style="background: radial-gradient(circle at left,rgba(0,0,0,.1) 0%,#000 25%);"
                            >
                                <div class="text-[27px] text-red-400">
                                    <a href="/course/{{$mycourse->id}}">
                                        {{$mycourse->title}}
                                    </a>
                                </div>
                                <div class="flex relative">
                                    <a class="flex">
                                        <img class="rounded-full " src="/storage/{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}" loading="lazy" height="78" width="78">
                                        <div class="ml-5 flex flex-col justify-center">
                                            <span class="text-xl">{{auth()->user()->name}}</span>
                                            <span class="font-thin text-lg text-gray-400">{{auth()->user()->motto}}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-4 text-[15px]">
                                    {{$mycourse->description}}
                                </div>
                                @php
                                if(date("H", strtotime($mycourse->duration)) > 1)
                                $hour = "hours";
                                else
                                $hour = "hour";
                                if(date("i", strtotime($mycourse->duration)) > 1)
                                $minute = "minutes";
                                else
                                $minute = "minute";
                                @endphp
                                <div class="my-2 text-sm flex items-center">
                                    <span class="text-gray-400">
                                        {{date("H",strtotime($mycourse->duration))}} {{$hour}},
                                        {{date("i",strtotime($mycourse->duration))}} {{$minute}}
                                    </span>
                                    <strong class="ml-2 px-[4px] bg-gray-500 rounded-lg text-zinc-800">CC</strong>
                                </div>
                                <div class="flex mt-5 gap-3">
                                    <button wire:click="$dispatch('openModal', { component: 'add-content', arguments: { course_id: {{$mycourse->id}} }})" class="py-2 px-4 bg-orange-600 rounded-full">Add Content</button>
                                    <button wire:click="$dispatch('openModal', {component: 'edit-course', arguments:{ course: {{$mycourse}}}})" class="py-2 px-4 bg-orange-600 rounded-full">Edit Course</button>
                                    <button wire:click="$dispatch('openModal', {component: 'edit-content', arguments: { content : {{$mycourse['content']}} }})" class="py-2 px-4 bg-orange-600 rounded-full">Edit Content</button>
                                    <button @click="confirm('Are you sure?') ? @this.delete({{$mycourse->id}}) : false" class="py-2 px-4 bg-red-600 rounded-full">Delete</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <img class="z-[2] opacity-80 group-hover:opacity-100 transition ease-in duration-300" src="{{$mycourse->bg_img}}" alt="Building a Slack Chat Bot" loading="lazy" height="350" width="350">
                </div>
                @endforeach
            </div>
        </section>
        <!-- Modal -->
    </x-layout>
</div>
