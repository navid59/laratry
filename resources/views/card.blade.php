@extends('layouts.default')
@section('content')
    <form name="frmRedirect" method="post" action="{{ $action }}">
        <input type="hidden" name="env_key" value="{{ $envKey }}"/>
        <input type="hidden" name="data" value="{{ $data }}"/>
        <p>
            will redirect
        </p>
    </form>

    <script type="text/javascript" language="javascript">
        window.setTimeout(document.frmRedirect.submit(), 5000);
    </script>
@endsection
