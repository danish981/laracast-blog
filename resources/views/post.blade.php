<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>1 day ago</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">Lary Laracore</h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="#"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <a href="#"
                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">Techniques</a>
                            <a href="#"
                                class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">Updates</a>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        This is a big title and it will look great on two or even three
                        lines. Wooohoo!
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati distinctio quidem
                            modi fugit eligendi, quas sit magni temporibus officiis ex tenetur quae beatae error
                            amet deleniti, tempora possimus necessitatibus natus eos unde similique. Nemo enim
                            laudantium est unde placeat corrupti, soluta aliquid dicta ullam eligendi, quis
                            assumenda quidem optio doloribus praesentium reiciendis sint suscipit veniam veritatis
                            obcaecati dolores nisi. Commodi accusamus impedit ratione quidem doloremque voluptates
                            magnam nam. Vel quis natus, eius fuga tempora sunt dolorem. Eum laudantium modi eligendi
                            dolores sed ullam facilis dolorum illum veniam possimus, atque tempora quo fugiat, odit
                            doloribus quasi itaque asperiores! Provident, ea similique.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maxime molestiae officia
                            facilis a laborum iusto voluptatibus eligendi eos ratione.</p>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium aut reiciendis at
                            nemo commodi explicabo labore similique, id excepturi voluptatibus quia consequatur
                            ipsam nesciunt sint quaerat illo dolores mollitia, beatae rem ab soluta facilis. Commodi
                            est qui enim fugiat magnam.</p>

                        <h2 class="font-bold text-lg">Sed quia consequuntur</h2>

                        <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                            dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                            tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>


                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla
                            pariatur.</p>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae
                            vitae
                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut
                            fugit.</p>
                    </div>
                </div>
            </article>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>


</x-layout>
