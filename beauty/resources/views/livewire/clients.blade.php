@section('title', 'Mes clients')
<div class="flex flex-col justify-center items-center" style="width: 100%;">
    <h2 class="mt-10  text-3xl font-extrabold text-center text-gray-900 leading-9">
        Mes clients
    </h2>
    <div class="flex flex-col shadow-lg shadow-indigo-500/40 " style="width: 80%;">
        <div class="flex mt-10 mr-2 space-x-2 justify-end">
            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajouter
                un client</button>
        </div>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-indigo-600">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Nom
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Prénom
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Téléphone
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Commandes
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Actions
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @if ($clients!==null)
                            @foreach ($clients as $client)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{
                                    $client->name }}</td>
                                <td class="text-sm text-gray-900  font-medium px-6 py-4 whitespace-nowrap">
                                    {{ $client->firstname }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $client->phone }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                </td>
                            </tr class="bg-white border-b">
                            @endforeach
                            @else
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Aucun client
                                </td>
                            </tr class="bg-white border-b">
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>