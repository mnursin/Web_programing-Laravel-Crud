<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-bold">
            {{ ('Data Stock Gudang') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <a  class= "mb-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ url('gudang/create') }}" >
                    Tambah Komponen 
                </a>
                <br/>
                <br/>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Komponen
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Vendor
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Storage
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Qty
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Keterangan
                                </th>
                                <th colspan="2" >

                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($komponen as $komponens )

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens->venodr}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens->sotrage}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens->price }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens-> qty }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $komponens-> Keterangan }}
                                </td>

                                <td >
                                    <a class= "mb-2 mt-2 mr-2 bg-green-600 hover:bg-green-100 text-white font-bold py-2 px-4 rounded" href="{{ url('gudang/'.$komponens->id.'/edit') }}">
                                        <button>{{ ('Update') }}
                                        </button>
                                    </a>
                                    <form class="inline-block" method="POST" action= "{{  url('gudang', $komponens->id)}}" >
                                        @csrf
                                        @method('DELETE')
                                      
                                        <button class= "mb-2 mt-2 ml-2 bg-red-600 hover:bg-red-100 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            {{ __('Delete') }}
                                        </button>                                       
                                    </form>

                                    </td>
                                    
                                    
           
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
