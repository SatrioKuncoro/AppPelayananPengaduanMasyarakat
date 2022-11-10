<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Complaints') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                        @forelse ($complaints as $item)
                            <li class="text-center"> {{  $item->nik }}  </li>
                            <li class="text-center"> {{  $item->text_complaint }}  </li>
                            <li class="text-center"> {{  $item->location }}  </li>
                            <li class="text-center"> {{  $item->image }}  </li>
                            <li class="text-center"> {{  $item->status }}  </li>
                            <li class="text-center"> {{  $item->user->name }}  </li>
                            <li class="text-center"> {{  $item->role->name }}  </li>

                        @empty

                        @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
