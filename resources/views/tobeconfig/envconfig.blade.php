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
            <div id="popupModal" class="modal">
                <span class="close" onclick="closePopup()">&times;</span>
                <img id="popupImage" src="template/img/blog/img4.png" width="30%">
            </div>
            <p style="font-style: italic; color: #fff;">1. For the database  configuration just look for the <b class="ins-doc">.env</b> file and find this <b class="image-popup"><a href="#" onclick="openPopup()">View Image</a></b></p>

            <codelarge class="language-php" data-icon="&#xf0ea;">
                <span style="color: #ffffff;">DB_CONNECTION</span><span style="color: #e9d391">=mysql</span><br>
                <span style="color: #ffffff">DB_HOST</span><span style="color: #e9d391">=127.0.0.1</span><br>
                <span style="color: #ffffff">DB_PORT</span><span style="color: #e9d391">=3306</span><br>
                <span style="color: #ffffff;">DB_DATABASE</span><span style="color: #e9d391">=laravel</span><br>
                <span style="color: #ffffff;">DB_USERNAME</span><span style="color: #e9d391">=root</span><br>
                <span style="color: #ffffff;">DB_PASSWORD</span><span style="color: #e9d391">=</span><br>
            </codelarge>
            
        </div>
    </div>
</div>

@endsection