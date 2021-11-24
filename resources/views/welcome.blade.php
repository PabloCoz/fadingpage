<x-app-layout>
    <section class="" style="background-image: url({{asset("img/banner1.jpg")}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full text-center">
                <p class="text-white text-3xl lg:text-5xl mt-4 select-none">
                    <b>¿Problemas?</b>. Las mejores soluciones tenemos para ti.
                </p>
            </div>
        </div>
    </section>

    <section class="my-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
            <a href="#" class="">
                <div
                    class="col-span-1 bg-gray-200 text-center shadow-lg rounded py-4 hover:text-blue-500 border border-opacity-20 border-gray-300">
                    <i class="fas fa-chart-line text-3xl"></i>
                    <p>NEGOCIO EMPRESARIAL</p>
                </div>
            </a>
            <a href="" class="">
                <div
                    class="col-span-1 bg-gray-200 text-center shadow-lg rounded py-4 hover:text-orange-400 border border-opacity-20 border-gray-300">
                    <i class="fas fa-lightbulb text-3xl"></i>
                    <p>MARKETING</p>
                </div>
            </a>
            <a href="" class="">
                <div
                    class="col-span-1 bg-gray-200 text-center shadow-lg rounded py-4 hover:text-red-600 border border-opacity-20 border-gray-300">
                    <i class="fas fa-school text-3xl"></i>
                    <p>EDUCACION</p>
                </div>
            </a>

        </div>
        <a href="">
            <h1 class="my-6 font-bold text-center text-xl">Y mucho mas....</h1>
        </a>
    </section>

    <section class="my-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-1">
                <figure>
                    <img class="object-contain w-full h-1/4 md:h-3/4 lg:h-1/2 rounded" src="{{asset("img/empresa.jpg")}}" alt="">
                </figure>
            </div>
            <div class="col-span-1">
                <div class="py-10 px-10 lg:py-36">
                    <p class="text-2xl text-gray-600">Tu empresa necesita lo mejor, estamos contigo para ayudarte a
                        llevar tu empresa al</p>
                    <h1 class="uppercase font-bold text-3xl text-gray-700">siguiente nivel.</h1>
                </div>
            </div>


            <div class="col-span-1 order-2 md:order-1 lg:order-1">
                <div class="py-10 px-10 lg:py-32">
                    <p class="text-2xl text-gray-600">Haz crecer con nosotros tu negocio. Tenemos los productos
                        necesarios a tu medidad y alcance con</p>
                    <h1 class="uppercase font-bold text-3xl text-gray-700">UX y MARKETING DIGITAL</h1>
                </div>
            </div>
            <div class="col-span-1 order-1 md:order-2 lg:order-2">
                <figure>
                    <img class="object-contain w-full h-1/4 md:h-3/4 lg:h-1/2 rounded" src="{{asset("img/ux.jpg")}}"
                        alt="">
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-t from-black to-white pt-16 pb-12 sm:pt-20 md:pt-24 xl:pt-32 sm:pb-20">
        <div class="max-w-7xl mx-auto divide-y divide-gray-200 px-4 sm:px-6 md:px-8">
            <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4 pb-14">
                <li class="text-sm uppercase text-center text-gray-800 font-bold">
                    <a href="">PRODUCTOS</a>
                </li>
                <li class="text-sm uppercase text-center text-gray-800 font-bold">
                    <a href="">NOSOTROS</a>
                </li>
                <li class="text-sm uppercase text-center text-gray-800 font-bold">
                    <a href="">CONTACTANOS</a>
                </li>
                <li class="text-sm uppercase text-center text-gray-800 font-bold">
                    <a href="">TRABAJA CON NOSOTROS</a>
                </li>
            </ul>
            <div class="pt-10 sm:pt-12">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-4xl font-gagalin text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-white select-none">Keyboard</h1>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>