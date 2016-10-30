<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section class="content-header">
                @if (session()->has('flash_notification.message'))
                    <div class="alert alert-{{ session('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {!! session('flash_notification.message') !!}
                    </div>
                @endif
            </section>
        </div>
    </div>
</div>    