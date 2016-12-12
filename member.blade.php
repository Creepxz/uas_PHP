@extends('layout')

@section('pages')
<?php
    $datass=DB::select('select * from member');
?>
<div class="row">
    <div class="col-lg-2">
        <div class="container">
            @include('signin')
            <br>
            @include('cart')
    </div>
        </div>
    <div class="col-lg-10">
        <div class="container">
            <h1>Aksesoris</h1>
            <div style="overflow-x:auto;">
            <table class="table table-striped"> 
                <thead>
                    <th>Username</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($datass as $data)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $data->usernama }}</div></td>
                        <td><a href={{url('delete_member')}}/{{$data->member_id}}>Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection