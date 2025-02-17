
<?php include 'config\koneksi.php'; ?>

<?php 

$list1 = array("Bisa bertani (mungkin sistem ladang gitu)" , "Bisa beternak" , "Bahkan udah punya sistem organisasi masyarakat yang teratur");

$list2 = array("Munculnya kerajaan-kerajaan" , "Datengnya pengaruh dari luar" , "Perkembangan ekonomi yang beda-beda di tiap daerah");

$list3 = [
    "budaya.php"  => "Budaya",
    "ekonomi.php" => "Ekonomi",
    "sosial.php"  => "Sosial",
    "kuliner.php" => "Kuliner"
]


?>


    <!-- Header -->
    <?php include 'foter-header\header.php'; ?>

    <!-- Hero Section -->
    <div class="relative h-screen overflow-hidden">
        <div id="slideshow" class="absolute inset-0 flex transition-transform duration-1000">
            <img src="img/04f20248-ca9b-443e-8eb8-6c9a0cea0430.jpg" alt="Photo 1" class="w-full h-full object-cover">
            <img src="img/Jakarta 🇲🇨.jpg" alt="Photo 2" class="w-full h-full object-cover">
            <img src="img/Pasar Perkantoran CBD Jakarta Capai Rekor Terendah.jpg" alt="Photo 3" class="w-full h-full object-cover">
            <img src="img/upscalemedia-transformed.jpeg" alt="Photo 4" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold text-center px-4">JAKARTA</h1>
            <h1 class="text-white text-sm md:text-lg font-bold text-center px-4">to the beautiful city of Jakarta</h1>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-16 bg-gray-200 rounded-lg flex flex-col md:flex-row items-center h-screen ">
        <div class="max-w-7xl mx-auto px-1 sm:px-2 lg:px-8 mb-3 md:mb-0">
            <h2 class="text-6xl font-bold  text-black capitalize m-1">JAKARTA?</h2>
            <p class="mt-4 md:text-2xl text-justify text-gray-600 md:w-3/4 font-mono m-1">Siapa sih yang gak tau Jakarta? Ibu kota Indonesia yang super iconic ini tuh kayak magnet, selalu bikin orang penasaran dan betah buat nongkrong. Dari gedung-gedung pencakar langit yang megah, macetnya yang legendaris, sampe kuliner street foodnya yang bikin nagih, Jakarta tuh punya segalanya! Jangan lupa sama mall-mallnya yang gede-gede, tempat nongkrong anak muda, atau bahkan buat keluarga. Tapi jangan salah, Jakarta juga punya sisi tradisional yang kental, kayak di Kota Tua yang masih nyimpen cerita sejarah panjang. Pokoknya, Jakarta tuh kota yang gak pernah bosenin, selalu ada aja yang bisa dijelajahin!.</p>
        </div>
        <div>
            <img class="h-auto max-w-2xl rounded-lg shadow-xl dark:shadow-gray-800 mr-8" src="img/Pasar Perkantoran CBD Jakarta Capai Rekor Terendah.jpg" alt="image description">
        </div>
    </div>
    

    <div class="mt-36 md:mt-2">
        <div class="flex justify-center items-center mb-8">
            <img 
                src="https://koranmakassar.com/wp-content/uploads/2022/03/map-of-batavia-e1646371771780.jpg" 
                alt="Batavia" 
                class="w-full md:w-2/3 lg:w-1/3 rounded-lg shadow-lg"
            />
        </div>
    
        <!-- Content container -->
        <div class="space-y-6">
            <!-- Title -->
            <div class="text-center">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold font-serif capitalize">
                    sejarah tentang Jakarta
                </h1>
            </div>
    
            <!-- Text content -->
            <div class="flex justify-center items-center">
                <div class="w-full md:w-10/12 lg:w-8/12">
                    <p class="md:text-lg lg:text-xl font-monotext-gray-800 space-y-4 text-justify m-1" id="desk">
                        siapa sih yang gak kenal Jakarta? Ibu kota sekaligus kota terbesar di Indonesia ini punya segudang cerita dan sejarah yang bikin decak kagum. Terletak di muara Sungai Ciliwung, di ujung barat laut Pulau Jawa, Jakarta udah jadi tempat bermukimnya manusia sejak zaman dulu. Bahkan, jejak sejarahnya bisa dilacak sampai abad ke-4 Masehi, lho! Waktu itu, Jakarta masih berupa permukiman dan pelabuhan Hindu.
                        
                        <br /><br />
                        
                        Seiring waktu, Jakarta jadi rebutan banyak kerajaan dan pemerintahan. Mulai dari Kerajaan Tarumanegara yang bercorak India, terus ke Kerajaan Sunda yang Hindu, lalu ke Kerajaan Banten yang Muslim, sampe akhirnya dikuasai Belanda, Jepang, dan akhirnya merdeka sebagai bagian dari Indonesia.
                        
                        <br /><br />
                        
                        Nama Jakarta sendiri udah berganti-ganti berkali-kali. Dulu, waktu masih jadi bagian Kerajaan Sunda, namanya Sunda Kalapa. Pas jaman Kesultanan Banten, namanya berubah jadi Jayakarta, Djajakarta, atau Jacatra. Nah, pas Belanda berkuasa, Jakarta dikenal sebagai Batavia dari tahun 1619 sampai 1949. Terus, waktu Jepang datang, namanya berubah lagi jadi Djakarta, dan akhirnya kita kenal sebagai Jakarta sampai sekarang.
                        
                        <br /><br />
                        
                        Perkembangan Jakarta bisa dibagi jadi tiga fase. Pertama, ada "Kota Tua Jakarta" di dekat pantai utara, yang berkembang antara 1619 dan 1799 di era VOC. Lalu, ada "Kota Baru" di selatan yang mulai berkembang antara 1809 dan 1942, setelah Belanda mengambil alih Batavia dari VOC. Terakhir, Jakarta modern yang kita kenal sekarang ini mulai berkembang sejak Indonesia merdeka pada 1945.
                        
                        <br /><br />
                        
                        Jakarta tuh kayak kota yang gak pernah berhenti berubah, selalu ada cerita baru yang bikin kita terus penasaran buat mengeksplorasi setiap sudutnya!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-36 md:mt-2">
        <div class="text-center mb-10">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold font-serif capitalize">
                suku asli daerah jakarta
            </h1>
        </div>

        <div class="flex justify-center items-center">
                <div class="w-full md:w-10/12 lg:w-8/12">
                    <p class="md:text-lg lg:text-xl font-monotext-gray-800 space-y-4 text-justify m-1" id="desk">
                        Tau nggak sih kalau nama "Betawi" itu sebenernya berasal dari kata "Batavia"? Jadi dulu namanya "Batavia", terus berubah jadi "Batavi", lalu "Batawi", dan akhirnya jadi "Betawi" karena lebih enak diucapin sama orang-orang lokal.
                        
                        <br /><br />
                        
                        Yang menarik nih, suku Betawi itu nggak muncul begitu aja. Mereka terbentuk dari berbagai suku bangsa yang tinggal bareng di Batavia (Jakarta jaman dulu). Bayangin aja kayak cultural melting pot gitu - berbagai budaya, adat istiadat, bahasa, dan tradisi yang bercampur jadi satu, sampai akhirnya membentuk identitas baru yang kita kenal sebagai Betawi. Secara resmi, kata "Betawi" mulai dipake sebagai nama suku pas tahun 1923, waktu didirikannya organisasi bernama Pemoeda Kaoem Betawi.
                        
                        <br /><br />
                        
                        Nah, menurut Ridwan Saidi (beliau ini sejarawan Betawi), ada beberapa versi tentang asal kata "Betawi":

                        <br />
                    </p>
                        
                    <div class="md:text-lg lg:text-xl font-monotext-gray-800 space-y-4 text-justify m-1 mb-6">
                        <ol class="list-decimal list-inside">
                            <li>Dari kata "Pitawi" (bahasa Melayu-Polinesia kuno) yang artinya "larangan". Ini ada hubungannya sama Candi Batujaya di Karawang yang dianggap sebagai kota suci.</li>
        
                            <li>Dari bahasa Melayu Brunei, "Betawi" itu artinya anting-anting atau giwang. Ini karena di daerah Babelan, Bekasi, banyak ditemuin anting-anting dari abad ke-1</li>
        
                            <li>Dari nama pohon yang namanya Guling Betawi. Pohon ini istimewa karena batangnya bulat dan kuat, sering dipake buat bikin gagang keris atau pisau. Pohon ini banyak tumbuh di Jakarta (dulu namanya Nusa Kelapa) dan beberapa tempat di Jawa dan Kalimantan. Di Kapuas Hulu, Kalimantan Barat, pohon ini dipanggil "Kayu Bekawi".</li>
                        </ol>
                    </div>

                        <p class="md:text-lg lg:text-xl font-monotext-gray-800 space-y-4 text-justify m-1">
                            Fun fact: Banyak nama tempat di Jakarta yang diambil dari nama tumbuhan, contohnya Gambir, Krukut, Bintaro, dan Grogol. Bahkan nama Kecamatan Makasar di Jakarta itu nggak ada hubungannya sama orang Makassar dari Sulawesi Selatan, tapi diambil dari nama rumput-rumputan!
                        </p>
                        

                    <!-- Modal toggle -->
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block float-right w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800 text-xl" type="button">
                        sejarah 
                    </button>

                    <!-- Main modal -->
                    <div id="overlay" class="fixed inset-0 z-40 hidden" class="modal-blur"></div>
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl md:max-w-6xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        sejarah tentang suku betawi
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4 ">
                                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-400">
                                    Lo tau nggak sih kalau Jakarta tuh udah ada penghuninya dari jaman batu? Keren banget kan! Menurut ahli sejarah Sagiman MD, daerah yang dulu namanya Sunda Kalapa ini udah ada penghuninya sejak jaman neolitikum (sekitar 3.500-3.000 tahun yang lalu).
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-400">
                                    Nah, ada arkeolog namanya Uka Tjandarasasmita yang udah buktiin ini lewat penelitiannya di tahun 1977. Dia nemuin bukti-bukti kalau sebelum ada Kerajaan Tarumanagara di abad ke-5, daerah Jakarta dan sekitarnya yang dilalui sungai-sungai gede kayak Ciliwung, Cisadane, Bekasi, sama Citarum tuh udah rame sama manusia!
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-400">
                                    Yang bikin kagum, mereka tuh nggak cuma tinggal doang. Dari barang-barang yang ditemuin kayak kapak, beliung (sejenis kapak), pahat, sama pacul yang udah halus dan punya gagang kayu, para ahli menyimpulkan kalau orang-orang jaman dulu udah:
                                    </p>
                                    <ul class="list-disc list-inside">
                                        <?php foreach ($list1 as $value) : ?>
                                            <li><?= $value ?></li>
                                        <?php endforeach; ?>
                                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-400">Ada juga pendapat menarik dari Yahya Andi Saputra, alumni Fakultas Sejarah UI nih. Menurut dia, penduduk asli Jakarta tuh sebenernya bagian dari penduduk Nusa Jawa. Dulu, semua orang di Pulau Jawa punya budaya, bahasa, kesenian, dan kepercayaan yang sama. Tapi lama-lama mereka jadi berbeda-beda karena tiga hal:</p>
                                    <ul class="list-disc list-inside">
                                        <?php foreach ($list2 as $value) : ?>
                                            <li><?= $value ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-400">Fun fact: penduduk asli Jakarta dulu ngomongnya pake bahasa Sunda Kuno lho! Jadi bisa dibilang, penduduk asli Jakarta tuh dari suku Sunda yang udah tinggal di sana dari jaman kapan tau.</p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="static-modal" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">I accept</button>
                                    <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>

    <div>
        <div class="mt-5">
            <h1 class="text-3xl font-bold text-center mb-8">Pembahasan kita belom slesai sampe sini aja loh </h1>
        </div>
        <div class="flex justify-center items-center mb-4">
            <p>berikut ini adalah list yang bisa kalian cek tentang Jakarta</p>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full max-w-xl bg-white p-6 rounded-lg shadow-md">
                <!-- Button -->
                <button id="toggleButton" class="w-full bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                    klik sini bro
                </button>
        
                <!-- List -->
                <ul id="list" class="mt-4 space-y-2 overflow-hidden transition-all duration-500 max-h-0">
                    <?php foreach ($list3 as $key => $value) : ?>
                        <li class="bg-gray-50 p-3 rounded-md border border-gray-200 flex justify-center text-center">
                            <div>
                                <a href="<?= $key ?>" class="text-gray-800 font-semibold"><?= $value ?></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- Footer -->
    <?php include 'foter-header\footer.php'; ?>0