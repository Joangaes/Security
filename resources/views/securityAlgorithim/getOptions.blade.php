@extends('app')

@section('content')

<form action="/securityAlgorithim" method="POST">
    @csrf
    <table class="table table-stripped">
        <tr>
            <th>
                Medida Preventiva
            </th>
            <th>
                Se cuenta con ello?
            </th>
        </tr>
        @foreach($security_solutions as $security_solution)
        <tr>
            <td>
                {{$security_solution->name}}
            </td>
            <td>
            <input type="checkbox" name="{{$security_solution->security_solution_id}}">
            </td>
        </tr>
        @endforeach

        
    </table>
    <button type="submit" class="btn btn-primary">Hacer Calculo de Riesgo</button>
</form>


@stop