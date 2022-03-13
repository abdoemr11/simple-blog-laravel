
    <header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>

        <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"
                                                           alt="Head of Lary the mascot"></h2>

        <p class="text-sm mt-14">
            Another year. Another update. We're refreshing the popular Laravel series with new content.
            I'm going to keep you guys up to speed with what's going on!
        </p>

        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
            <!--  Category -->
{{--            add bootstrap dropdown--}}
            <div class="container">
                <div class="row">
                    <div class="col-sm dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ request()->routeIs('home') ? 'Categories' : ucwords($current_category->name)}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($categories as $cat)
                                    <a class="dropdown-item {{request()->is('*' . $cat->slug) ? 'active': ''}}"
{{--                                    <a class="dropdown-item"--}}
                                       href="/categories/{{$cat->slug}}">
                                        {{$cat->name}}
                                    </a>
                                @endforeach
                            </div>
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        <!-- Search -->
                        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2 col-sm">
                            <form method="GET" action="#">
                                <input type="text" name="search" placeholder="Find something"
                                       class="bg-transparent placeholder-black font-semibold text-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
{{--

            <!-- Other Filters -->
{{--            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl col-sm">--}}
{{--                <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">--}}
{{--                    <option value="category" disabled selected>Other Filters--}}
{{--                    </option>--}}
{{--                    <option value="foo">Foo--}}
{{--                    </option>--}}
{{--                    <option value="bar">Bar--}}
{{--                    </option>--}}
{{--                </select>--}}

{{--                <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"--}}
{{--                     height="22" viewBox="0 0 22 22">--}}
{{--                    <g fill="none" fill-rule="evenodd">--}}
{{--                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">--}}
{{--                        </path>--}}
{{--                        <path fill="#222"--}}
{{--                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--            </div>--}}


        </div>
    </header>
