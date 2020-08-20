@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The Beauty</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23B39DDB&amp;ctz=America%2FSao_Paulo&amp;src=cG5waTJzZm9kcjY2MTF1Y2Q1Ym1wcGxnYWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23A79B8E&amp;title=The%20Beauty&amp;mode=WEEK" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>                </div>
            </div>
        </div>
    </div>
</div>
@endsection
