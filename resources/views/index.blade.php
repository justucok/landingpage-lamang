<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>AMKS Lambung Mangkurat YK</title>
</head>

<body>
    {{-- Navbar --}}
    <header class="bg-white">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-1 items-center justify-end md:justify-between">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-[#977456] transition hover:text-[#84604a]" href="#Home"> Home </a>
                        </li>

                        <li>
                            <a class="text-[#977456] transition hover:text-[#84604a]" href="#About"> About </a>
                        </li>

                        <li>
                            <a class="text-[#977456] transition hover:text-[#84604a]" href="#Contact"> Contact </a>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="block rounded-md bg-[#977456] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#4f3934]"
                            href="https://maps.app.goo.gl/XrCVHvkL7CqioLeS8" target="blank">
                            Find Us
                        </a>
                    </div>
                    <button
                        class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
                        <span class="sr-only">Toggle menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    {{-- end Navbar --}}

    {{-- Hero content --}}
    <section id="Home" class=" overflow-hidden bg-white sm:grid sm:grid-cols-2 sm:items-center">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-2xl font-bold text-[#2d1e1b] md:text-3xl">
                    AMKS Lambung Mangkurat Yogyakarta
                </h2>

                <p class="hidden text-[#977456] md:mt-4 md:block">
                    Asrama Mahasiswa Kalimantan Selatan Lambung Mangkurat atau biasa disingkat dengan AMKS Lamang
                    merupakan salah satu asrama mahasiswa khusus untuk warga Kalsel di Yogyakarta. <br><br>

                    AMKS Lamang berada di tempat yang strategis di pusat kota Yogyakarta, kurang dari 1 KM dari tugu
                    jogja. Alamat lengkapnya A.M. Sangaji No. 66, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Di
                    Yogyakarta.
                </p>

                <div class="mt-4 md:mt-8">
                    <a href="https://wa.me/+6287707113383" target="blank"
                        class="inline-block rounded bg-[#977456] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#4f3934] focus:outline-none focus:ring focus:ring-yellow-400">
                        Join Us
                    </a>
                </div>
            </div>
        </div>

        <img alt=""
            src="https://assets-a1.kompasiana.com/items/album/2021/06/12/whatsapp-image-2021-06-12-at-09-56-47-60c424b98ede486b2d13b1e2.jpeg"
            class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]" />
    </section>
    {{-- end Hero content --}}

    {{-- Features content --}}
    <section class="bg-[#977456]">
        <div class="container grid grid-cols-3 gap-4 max-w-xl mx-auto py-8">
            <a href="#" class="block">
                <img alt=""
                    src="https://assets.weimgs.com/weimgs/ab/images/wcm/products/202410/0001/mid-century-bed-1-o.jpg"
                    class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover sm:h-64 lg:h-72" />

                <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                    <strong class="font-medium text-white">15 Kamar</strong>

                    <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-[#2d1e1b]"></span>

                    <p class="mt-0.5 opacity-80 sm:mt-0 text-white">Dilengkapi lemari, meja belajar, dll</p>
                </div>
            </a>
            <a href="#" class="block">
                <img alt=""
                    src="https://www.hydrosystemsco.com/content/dam/psg/hydro/images/blog/Restroom-Blog.jpg"
                    class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover sm:h-64 lg:h-72" />

                <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                    <strong class="font-medium text-white">5 Kamar mandi</strong>
                </div>
            </a>
            <a href="#" class="block">
                <img alt=""
                    src="https://awsimages.detik.net.id/community/media/visual/2022/03/12/ilustrasi-kitchen-set_169.jpeg?w=1200"
                    class="h-56 w-full rounded-bl-3xl rounded-tr-3xl object-cover sm:h-64 lg:h-72" />

                <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                    <strong class="font-medium text-white">Dapur</strong>

                    <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-[#2d1e1b]"></span>

                    <p class="mt-0.5 opacity-80 sm:mt-0 text-white">Dilengkapi kompor gas, kulkas, dll</p>
                </div>
            </a>
        </div>
    </section>
    {{-- end Features content --}}

    {{-- About us content --}}
    <section id="About" class="bg-white my-4">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-xl">
                <h1 class="text-center text-3xl text-[#2d1e1b] font-extrabold sm:text-5xl">
                    About Us
                </h1>
                <p class="mt-4 text-left text-[#977456] sm:text-m/relaxed">
                    Asrama ini diperkirakan sudah resmi menjadi milik Pemprov Kalsel sejak tahun 1953 hal ini didasarkan
                    karena ada alumni asrama tahun 1956 yang menyelesaikan SMA. Ketika itu asrama ini bernama Asrama
                    Pelajar dan Mahasiswa, namun pada tahun 90'an masih ada pelajar yang diperkenankan tinggal di
                    asrama ini. selain itu asrama ini juga dikenal dengan nama "Asrama Jetis 56" karena nomor alamat
                    yang tertera di asrama itu "56". Namun no alamat pada asrama ini berubah menjadi 66. <br><br>

                    Asrama ini sangat berjasa bagi Pelajar dan Mahasiswa yang berasal dari Kalimantan Selatan, banyak
                    tokoh Kalimantan Selatan yang tinggal dan menjadi alumni asrama ini. baik menjadi tokoh-tokoh
                    regional, nasional, maupun internasional. <br><br>

                    Asrama ini merupakan salah satu asrama favorit dan bahkan pernah menjadi pusat PMKS (Persatuan
                    Mahasiswa Kalimantan Selatan). <br><br>

                    Asrama ini hanya ditujukan untuk mahasiswa kalimantan Selatan yang melanjutkan studi di Yogyakarta.
                    Bagi yang ikut bergabung menjadi bagian AMKS Lambung Mangkurat bisa mencermati persyaratan berikut:

                </p>

                <div class="flow-root my-4">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-[#2d1e1b]">Jenis Kelamin</dt>
                            <dd class="text-[#977456] sm:col-span-2">Laki-laki</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-[#2d1e1b]">Dokumen</dt>
                            <dd class="text-[#977456] sm:col-span-2">KTP berdomisili Kalimantan Selatan</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-[#2d1e1b]">Syarat</dt>
                            <dd class="text-[#977456] sm:col-span-2">Menempuh pendidikan di Yogyakarta(Diutamakan S1)
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-[#2d1e1b]"></dt>
                            <dd class="text-[#977456] sm:col-span-2">Berkelakuan baik</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-[#2d1e1b]"></dt>
                            <dd class="text-[#977456] sm:col-span-2">Bersedia mentaati peraturan</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    {{-- end About us content --}}

    {{-- Contact content --}}
    <section id="Contact" class="bg-[#2d1e1b] text-white">
        <div class="max-w-screen-xl px-4 py-2 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="max-w-xl">
                <h2 class="text-3xl font-bold sm:text-4xl">Contact Us</h2>

                <p class="mt-4 text-gray-300">
                    Jl. A.M. Sangaji No.66, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta
                    55233
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-[#977456] p-4">
                        <img src="{{ URL('assets/whatsapp.png') }}" alt="whatsapp" class="h-5 w-5">
                    </span>
                    <div>
                        <h2 class="text-lg font-bold">WhatsApp</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            +62 877-0711-3383
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-[#977456] p-4">
                        <img src="{{ URL('assets/instagram.png') }}" alt="instagram" class="h-5 w-5">
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Instagram</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            @asramalamangyk
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-[#977456] p-4">
                        <img src="{{ URL('assets/mail.png') }}" alt="email" class="h-5 w-5">
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Email</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            lamang1956@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end Contact content --}}

    {{-- Footer --}}
    <footer class="bg-[#2d1e1b]">
        <div class="mx-auto max-w-5xl px-4 py-4 sm:px-6 lg:px-8">
            <div class="flex justify-center text-teal-600">
                <img src="{{ URL('assets/logo.png') }}" alt="logo" class="h-15 w-10">
            </div>

            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-300">
                Asrama ini hanya ditujukan untuk mahasiswa kalimantan Selatan yang melanjutkan studi di Yogyakarta.
            </p>

            <p class="text-right text-sm text-gray-300">
                Copyrigt &copy; 2024. AbdurrahmanYW
            </p>
        </div>
    </footer>
    {{-- end Footer --}}
</body>

</html>
