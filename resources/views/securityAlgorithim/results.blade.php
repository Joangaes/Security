@extends('app')

@section('content')


<table class="table table-stripped">
    <tr>
        <th>
            Riesgo
        </th>
        <th>
            Score:
        </th>
    </tr>
    @foreach($security_problems as $security_problem)
    <tr>
        <td>
            {{$security_problem['risk_name']}}
        </td>
        <td>
            {{$security_problem['risk'] > 0 ? $security_problem['risk'] : 0}}
        </td>
    </tr>
    @endforeach
    
</table>


@stop