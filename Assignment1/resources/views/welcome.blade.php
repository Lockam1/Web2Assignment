@extends('layout')
@section('title','Home')
@section('content')
    <body>
        <div id = "left">
            <div class ="title">
                <h1 class = "text-center" id ="title">NZ Cricket</h1>
                
            </div>

            
            <div class ="title1">   
                <h2 class="text-center">All Players:</h2>
                <h3 class="text-center">Table showing all players from the current New Zealand national cricket team.</h3>

                <div class="buttons">
                    <form class="select" method ="post" action="{{route('show')}}">
                    {{csrf_field()}}
                    <h3>Select player role:</h3>
                    <select class ="search" name="role">      
                        <optgroup label="select">                
                        @foreach($roles as $role)
                            <option value="{{$role}}" id = "role" name="role">{{$role}}</option>
                        @endforeach
                        </optgroup>
                    </select>
                    <button class ="submit" type = "submit" >Search the Query</button>
                    </form>
                </div>
            </div>
            <div>                   
                <table>
                    <tr> 
                        <th>ID</th>
                        <th>name</th>
                        <th>Age </th>    
                        <th>Role</th>
                        <th>Batting</th>
                        <th>Bowling</th>
                        
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
