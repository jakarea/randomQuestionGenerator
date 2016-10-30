@extends('layouts.auth')
@section('title','404')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    
                <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    <div style="padding: 10px 0px; text-align: center;"><div class="text-muted">Excuse the ads! We need some help to keep our site up.</div><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><div class="visible-xs visible-sm"><!-- AdminLTE --><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-4495360934352473" data-ad-slot="5866534244"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div class="hidden-xs hidden-sm"><!-- Home large leaderboard --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4495360934352473" data-ad-slot="1170479443"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div></div></section>
                    
                </div>
                <!-- /.box -->
            </div>

        </div>
    </div>
@endsection
