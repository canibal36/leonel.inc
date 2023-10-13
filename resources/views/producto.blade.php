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
        <h2 class="font-dark text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <div class="button-group">
            <button class="button active">Inicio</button>
            <button class="button">Productos</button>
            <button class="button">historias</button>
            <button class="button">Ventas</button>
        </div>


        <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Especificación</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
    <x-dashboard />

    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
    <x-dashboard />

    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
    <div class="">
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
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
    
    
    </div>
  </div>
</div>

        </h2>
    </x-slot>

   
</x-app-layout>

