 {{-- navbar start --}}

        <nav class="bg-blue-400 border-gray-200 text-white">
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
            >
                <a
                    href="#"
                    class="flex items-center space-x-3 rtl:space-x-reverse"
                >
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                        >FikiAp23</span
                    >
                </a>
                <button
                    data-collapse-toggle="navbar-multi-level"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-multi-level"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 17 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"
                        />
                    </svg>
                </button>
                <div
                    class="hidden w-full md:block md:w-auto"
                    id="navbar-multi-level"
                >
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 text-white"
                    >
                        <li>
                            <a
                                href="/"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent {{ ($title === "Home") ? "text-black font-bold" : "" }}"
                                aria-current="page"
                                >Home</a
                            >
                        </li>

                        <li>
                            <a
                                href="/about"
                                class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent {{ ($title === "About") ? "text-black font-bold" : "" }}"
                                >About</a
                            >
                        </li>
                        <li>
                            <a
                                href="/blog"
                                class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent {{ ($title === "Blog") ? "text-black font-bold" : "" }}"
                                >Blog</a
                            >
                        </li>
                        <li>
                            <a
                                href="/contact"
                                class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent {{ ($title === "Contact") ? "text-black font-bold" : "" }}"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- navbar end --}}