<style>
    html, body { background-color: #fff;  
</style>

			<!--@if(!($request->session()->exists('members')))-->
            @if($request->session()->exist('members'))
            <form class = "form-signup" action = "{{url('/login')}}" method = "post">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form">
                </div>
                <table>
                    <tr>
                    <td><button type="submit" class="btn btn-warning">Sign in</button></td>
                    <td>&nbsp;</td>
                    <td><a href="{{ url('register') }}">Sign up</a></td>
                    </tr>
                </table>
            </form>
                <!--@endif
            @if($request->session()->exist('members'))-->
            @else
            <h1>Welcome</h1>
            @endif
