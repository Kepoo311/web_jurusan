@extends('layouts.dash')

@section('content')
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Perolehan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Perlombaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestasi as $item)
                        <tr class="odd:bg-gray-900 even:bg-gray-800 border-b border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                               {{$item->nama}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                               {{$item->perolehan}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                               {{$item->perlombaan}}
                            </th>
                            <td class="px-6 py-4 flex">
                                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
                                |
                                <form action="/dashboard/delete/prestasi/{{$item->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$prestasi->links()}}
    </div>
@endsection
