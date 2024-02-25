@section('title', 'About us')

<x-app-layout>
    @section('content')
        <div class="w-full text-center m-0 py-16 md:py-24 lg:py-32">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-gray-700">
                Добре дошли в <span class="text-yellow-500">&lt;Science&gt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-2">Най- добрият сайт за научни статии.</p>
            <a class="inline-block mt-4 px-6 py-3 text-lg text-white bg-gray-800 rounded hover:bg-gray-700 transition duration-300"
               href="{{ route('posts.index') }}">Start Reading</a>
            <div class="flex items-center justify-center space-x-4 mt-4">
                <div class="flex items-center gap-2 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                        <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                    </svg>
                    <span class="text-gray-700">Users: {{$users}}</span>
                </div>

                <div class="flex items-center gap-2 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
                    <span class="text-gray-700">Posts: {{$posts}}</span>
                </div>
                <div class="flex items-center gap-2 text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/>
                    </svg>
                    <span class="text-gray-700">Categories: {{$categories}}</span>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto mb-8">
            <p class="text-gray-700  text-md-center mb-4 ">Добре дошли в нашия уебсайт, посветен на научни статии и знание! Ние сме ентусиазирани откриватели, предоставящи ви единствената в сорта възможност да се потопите в зашеметяващия свят на науката и изследванията. Нашата мисия е да разширяваме хоризонтите на знанието и да ви предоставяме качествени научни материали, които ще ви вдъхновят и обогатят.</p>

            <h4 class="text-xl font-bold mb-2">Какво предлагаме?</h4>
            <ol class="list-decimal pl-6">
                <li class="mb-4">
                    <h5 class="text-lg font-bold mb-2">Богат архив от научни статии:</h5>
                    <p class="text-gray-700">
                        В нашия арсенал ще откриете разнообразие от научни теми, обхващащи физика, биология, химия, математика, информационни технологии и много други. Нашите статии са писани от опитни научници и експерти в съответните области.
                    </p>
                </li>
                <li class="mb-4">
                    <h5 class="text-lg font-bold mb-2">Актуално и достоверно съдържание:</h5>
                    <p class="text-gray-700">
                        Ние сме посветени на предоставянето на актуална и достоверна информация. Всички статии са подложени на внимателна рецензия и проверка, за да ви осигурим най-доброто в областта на научните публикации.
                    </p>
                </li>
                <li class="mb-4">
                    <h5 class="text-lg font-bold mb-2">Интерактивност и общност:</h5>
                    <p class="text-gray-700">
                        Вярваме в силата на общността. Нашата платформа ви предоставя възможността да обсъждате статиите, да задавате въпроси и да споделяте своите мнения с други любители на науката.                    </p>
                </li>
                <li class="mb-4">
                    <h5 class="text-lg font-bold mb-2">Персонализиран опит:</h5>
                    <p class="text-gray-700">
                        Регистрирайте се на нашия уебсайт и получете персонализиран опит. Можете да харесвате статии, да получавате препоръки за нови материали. Можете да станете админи след като минете съответното интервю</li>
            </ol>
        </div>
    @endsection
</x-app-layout>
