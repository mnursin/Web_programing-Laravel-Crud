<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-bold">
            {{ ('Tambahkan Komponen Baru') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="container mx-auto">
                        @if ($errors->any())
                            <div class="mb-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                              </div>
                        @endif

                            <div class="text-left">
                                <a href="{{ url('gudang') }}">
                                    <button class="mb-2 mt-2 bg-red-600 hover:bg-red-400 text-white font-bold py-2 px-7 rounded">
                                        {{ __('Back') }}
                                    </button>
                                </a>
                            </div>

                            <form method="POST" action="{{ url('gudang') }}" >
                                @csrf
                                    Name : <br/><input type = "text" name ="name" style=" width:450px" class="mb-4" required><br/>
                                    Venodr : <br/><input type = "text" name ="venodr" style=" width:450px" class="mb-4" required><br/>
                                    Storage : <br/><input type = "text" name ="storage" style=" width:450px" class="mb-4" required><br/>
                                    Price : <br/><input type = "text" name ="price" style=" width:450px" class="mb-4" required><br/>
                                    Qty : <br/><input type = "text" name ="qty" style=" width:450px" class="mb-4" equired><br/>
                                    Keterangan : <br/><input type = "text" name ="Keterangan" style=" width:450px"class="mb-4" ><br/>
                                <button class="mb-2 mt-2 bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-7 rounded" type = "submit">Save</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>