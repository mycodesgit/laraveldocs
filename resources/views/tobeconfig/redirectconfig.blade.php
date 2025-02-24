@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Configuration of Laravel PHP Framework</h3>
            <p style="text-align: justify; text-indent: 50px;">
                All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.
            </p>
            <p style="text-align: justify; text-indent: 50px;">
                These configuration files allow you to configure things like your database connection information, your mail server information, as well as various other core configuration values such as your application timezone and encryption key.
            </p>
            
            <br>

            <h3 class="title-doc">How?</h3>
            <p style="font-style: italic; color: #fff;">
                1. Make a new filename <b class="ins-doc">index.php</b> and copy and paste the code below:
            </p>
            <code class="language-php" data-icon="&#xf0ea;">
                <div class="line">
                    <span style="color: #BFC7D5;"></span>
                    <span style="color: #D3423E;">&lt;?php</span>
                    <span style="color: #BFC7D5;"> </span>
                    <span style="color: #C792EA;">header</span>
                    <span style="color: #BEC5D4;">("Location: public/installation");</span>
                    <span style="color: #D3423E;">?&gt;</span></div>
            </code>
            
            
            
        </div>
    </div>
</div>

@endsection