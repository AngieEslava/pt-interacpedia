<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

<div class="container" >
    <br/>
    <div class="row ">
    <div class="col-md-1"></div>
        <div class="card col-md-4" >
            <img src="https://blog.prodware.es/wp-content/uploads/2018/02/digitalizacion-serv-prof.jpg" style = "height:273px;" class="card-img-top" alt="empleadosimg">
            <div class="card-body">
                <h5 class="card-title">Empleados</h5>
                <p class="card-text"></p>
                <a href="/empleados" class="btn btn-info">Ir a empleados</a>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="card col-md-4" >
            <img src="https://www.wearecontent.com/wp-content/uploads/2018/07/empresas-que-usan-el-content-marketing-de-forma-exitosa-1-1.jpg" style = "height:273px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Empresas</h5>
                <p class="card-text"></p>
                <a href="/empresas" class="btn btn-info">Ir a empresas</a>
            </div>
        </div>
    </div>
</div>