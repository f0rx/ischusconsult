<div class="page-inner">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3 center">
                <div class="login-box">
                    {{ $logo }}
                    {{ $subtitle }}
                    {{ $slot }}
                    <p class="text-center m-t-xs text-sm">@currentdatetime('Y') &copy; {{ @config('app.name') }}.</p>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</div><!-- Page Inner -->
