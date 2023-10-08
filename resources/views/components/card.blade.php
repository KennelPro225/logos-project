@livewireStyles
<div class="w-1/2 max-md:w-[95vw]">
    <div class="border w-full max-md:w-full p-10 rounded-t-lg border-b-0">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold">
                {{ $data->titre }}
            </h1>
            <h2>
                {{ ucfirst($data->livre) }} {{ $data->chapitre }}:{{ $data->debut_verset }}@if ($data->fin_verset)
                    -{{ $data->fin_verset }}
                @endif
            </h2>
            <div class="flex">
                <h2 class="bg-blue-200 rounded-full p-1">
                    @php echo ucfirst("tags") @endphp
                </h2>
            </div>
        </div>
        <div class="flex justify-between items-center p-2 font-primary font text-lg">
            <p class="subpixel-antialiased line-clamp-3">
                <span>"{{ $data->texte }}"</span>
            </p>
        </div>
        <div class="flex justify-between items-center pt-5 mt-3 font-primary font text-xl">
            <div class="flex items-center w-4/3">
                <div class="flex items-center space-x-4">
                    <img class="w-10 h-10 rounded-full"
                        src="https://i.pinimg.com/736x/b8/5f/3a/b85f3a28fd572685b0dab45537113294.jpg" alt="">
                    <div class="text-lg font-bold text-black">
                        <div><a class="hover:underline" href="{{ route('profile') }}">{{ $data->nom }}
                                {{ $data->prenoms }}</a> </div>
                        <div class="text-sm max-md:text-xs text-gray-500 dark:text-gray-400">Joined in
                            <span>{{ date('M Y', strtotime($data->first_date)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-lg">
                {{ $data->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    <div class="flex justify-around items-center rounded-b-lg border p">

        <abbr title="Cliquez pour commenter">
            <x-button.comment />
        </abbr>
        <abbr title="Ajouter à tes favoris">
            <x-button.favorite />
        </abbr>
    </div>
</div>
@livewireScripts
