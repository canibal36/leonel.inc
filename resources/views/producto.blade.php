<style>
.button-group {
    display: flex;
    justify-content: space-around;
    background-color: #007bff;
    padding: 10px;
    border-radius: 5px;
}

.button {
    background: none;
    border: none;
    padding: 10px 15px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
}

.button.active {
    background-color: #0056b3;
    font-weight: bold;
}
.custom-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.custom-table th, .custom-table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

.custom-table th {
    background-color: #007bff;
    color: #fff;
}

.custom-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.custom-table tr:hover {
    background-color: #e0e0e0;
}

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <div class="button-group">
            <button class="button active">Inicio</button>
            <button class="button">Productos</button>
            <button class="button">Categorías</button>
            <button class="button">Ventas</button>
        </div>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <table class="custom-table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dato)
        <tr>
            <td>{{ $dato->email }}</td>
            <td>{{ $dato->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


            </div>
        </div>
    </div>
</x-app-layout>

