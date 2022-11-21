<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-bold">
            {{ ('Udah Data') }}
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
                                    <button class="mb-2 mt-2 bg-red-600 hover:bg-red-400 text-white font-bold py-2 px-7 rounded" >
                                        {{('Back') }}
                                    </button>
                                </a>
                            </div>

                            <form method="POST" action="{{ url('gudang/'.$model->id) }}" >
                                @csrf
                                <input type="hidden" name="_method" value="PATCH"><br/>
                                Nama :<br/><input type = "text" name ="name" value = "{{  $model->name}}" class="mb-4" style=" width:450px" required ><br/>
                                Vendor :<br/><input type = "text" name ="venodr" value = "{{  $model->venodr}}" class="mb-4" style=" width:450px" required ><br/>
                                Storage :   <br/><input type = "text" name ="storage" value = "{{  $model->sotrage}}"class="mb-4" style=" width:450px" required ><br/>
                                Price :<br/><input type = "text" name ="price" value = "{{  $model->price}}" class="mb-4" style=" width:450px" required ><br/>
                                Qty :<br/><input type = "text" name ="qty" value = "{{  $model->qty}}" class="mb-4" style=" width:450px" required ><br/>
                                Keterangan :<br/><input type = "text" name ="Keterangan" value = "{{  $model->Keterangan}}" class="mb-4" style=" width:450px" required ><br/>
                                </div>   
                                    <br/>   
                                <button class="mb-2 mt-2 bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-7 rounded" type = "submit">Save</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>