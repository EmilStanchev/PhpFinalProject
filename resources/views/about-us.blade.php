@section('title', 'About us')

<x-app-layout>
    @section('content')
        <div class="w-full text-center m-0 py-16 md:py-24 lg:py-32">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-gray-700">
                Welcome to <span class="text-yellow-500">&lt;Science&gt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-2">Best Blog in the universe</p>
            <a class="inline-block mt-4 px-6 py-3 text-lg text-white bg-gray-800 rounded hover:bg-gray-700 transition duration-300"
               href="{{ route('posts.index') }}">Start Reading</a>
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
