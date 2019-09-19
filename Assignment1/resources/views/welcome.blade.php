@extends('layout')
@section('title','Home')
@section('content')
    <body>
        <div id = "left">
            <div class ="title">
                <h1 class = "text-center" id ="width">NZ Cricket</h1>
            </div>

            
            <div>   
                <h2 class="text-center">All Players</h2>
                <h3>Select Role:</h3>
                <form method ="POST" action="/show">
                {{csrf_field()}}
                <select class ="search">      
                    <optgroup label="select">                
                    @foreach($roles as $role)
                        <option value="$role">{{$role}}</option>
                    @endforeach
                    </optgroup>
                </select>
                <button type = "submit" >Search the Query.</button>
                </form>
            </div>
            <div class = "table">                   
                <table>
                    <tr> 
                        <th>ID</th>
                        <th>name</th>
                        <th>Age </th>    
                        <th>Role</th>
                        <th>Batting</th>
                        <th>Bowling</th>
                        <th>Image</th>
                        <th>ODI Runs</th>
                        <th>Country</th>
                        
                    </tr>
                    @foreach($players as $player)
                    <tr>
                        <td>{{$player->id}}</td>
                        <td>{{$player->name}}</td>
                        <td>{{$player->age}}</td>
                        <td>{{$player->role}}</td>
                        <td>{{$player->batting}}</td>
                        <td>{{$player->bowling}}</td>
                        <td>{{$player->image}}</td>
                        <td>{{$player->odiRuns}}</td>
                        <td>{{$player->country_id}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
    
        </div>
        <div id = "right">
            <h1></h1>
        </div>
    </body>

@endsection
