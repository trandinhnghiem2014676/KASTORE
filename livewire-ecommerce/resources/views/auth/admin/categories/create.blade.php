@extends('backend.adminlayouts.master')

@section('body')

    <h3 class="text-gray-700 text-3xl font-medium">Crea Categoria</h3>
    <div class="md:grid md:grid-cols-5 md:gap-6 mt-10 mb-10">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('categories.store', app()->getLocale()) }}" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="parent_id"
                                       class="block text-sm font-medium text-gray-700">Categoria (lasciare vuoto per creare categoria principale)</label>

                                <select
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    name="parent_id" id="parent_id" autocomplete="categories">
                                    <option disabled selected value> -- Seleziona</option>
                                    @foreach ($categories as $cat)
                                        @if($cat->parent_id == null)
                                        <option
                                            value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('categories'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('categories') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label for="name"
                                       class="block text-sm font-medium text-gray-700">Sottocategoria</label>
                                <input type="text" name="name" id="name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right sm:px-6 pb-10 mt-8">
                            <a href="{{route('categories.index', app()->getLocale())}}"
                               class="btn px-6 py-2.5 bg-green-600 hover:bg-green-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md  hover:shadow-lg focus:bg-green-900  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out items-center">
                                Torna alle categorie
                            </a>
                            <button type="submit"
                                    class="ml-7 btn px-6 py-2.5 bg-blue-700 hover:bg-blue-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md  hover:shadow-lg focus:bg-blue-900  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out items-center">
                                Salva impostazioni
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
