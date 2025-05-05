@extends('layout.master')

@section('body')
<div class="col-md-2 sticky-column d-none d-md-block">
    <div class="card">
        <div class="ml-2 mr-2 mt-2 mb-1">
            <div class="mt-2" style="font-size: 13pt;">
                <div class="nav flex-column nav-pills nav-stacked nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="vert-tabs-right-one-tab" data-toggle="pill" href="#vert-tabs-right-one" role="tab" aria-controls="vert-tabs-right-one" aria-selected="true">
                        Installation
                    </a>
                    <a class="nav-link" id="vert-tabs-right-two-tab" data-toggle="pill" href="#vert-tabs-right-two" role="tab" aria-controls="vert-tabs-right-two" aria-selected="true">
                        Timezone
                    </a>
                    <a class="nav-link" id="vert-tabs-right-three-tab" data-toggle="pill" href="#vert-tabs-right-three" role="tab" aria-controls="vert-tabs-right-three" aria-selected="false">
                        Environment
                    </a>
                    <a class="nav-link" id="vert-tabs-right-four-tab" data-toggle="pill" href="#vert-tabs-right-four" role="tab" aria-controls="vert-tabs-right-four" aria-selected="false">
                        Redirect
                    </a>
                    <a class="nav-link" id="vert-tabs-right-five-tab" data-toggle="pill" href="#vert-tabs-right-five" role="tab" aria-controls="vert-tabs-right-five" aria-selected="false">
                        Plugins & Libraries
                    </a>
                    <a class="nav-link" id="vert-tabs-right-six-tab" data-toggle="pill" href="#vert-tabs-right-six" role="tab" aria-controls="vert-tabs-right-six" aria-selected="false">
                        Login Page
                    </a>
                    <a class="nav-link" id="vert-tabs-right-seven-tab" data-toggle="pill" href="#vert-tabs-right-seven" role="tab" aria-controls="vert-tabs-right-seven" aria-selected="false">
                        Migrations
                    </a>
                    <a class="nav-link" id="vert-tabs-right-eight-tab" data-toggle="pill" href="#vert-tabs-right-eight" role="tab" aria-controls="vert-tabs-right-eight" aria-selected="false">
                        Models
                    </a>
                    <a class="nav-link" id="vert-tabs-right-nine-tab" data-toggle="pill" href="#vert-tabs-right-nine" role="tab" aria-controls="vert-tabs-right-nine" aria-selected="false">
                        Blade Templates
                    </a>
                    <a class="nav-link" id="vert-tabs-right-ten-tab" data-toggle="pill" href="#vert-tabs-right-ten" role="tab" aria-controls="vert-tabs-right-ten" aria-selected="false">
                        Crud Function
                    </a>
                    <a class="nav-link" id="vert-tabs-right-eleven-tab" data-toggle="pill" href="#vert-tabs-right-eleven" role="tab" aria-controls="vert-tabs-right-eleven" aria-selected="false">
                        Routes
                    </a>
                    <a class="nav-link" id="vert-tabs-right-twelve-tab" data-toggle="pill" href="#vert-tabs-right-twelve" role="tab" aria-controls="vert-tabs-right-twelve" aria-selected="false">
                        Your own task
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-10">
    <div class="tab-content" id="vert-tabs-right-tabContent">
        <div class="tab-pane fade show active" id="vert-tabs-right-one" role="tabpanel" aria-labelledby="vert-tabs-right-one-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Introducing PHP Laravel Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
                    </p>
                    <p style="text-align: justify;">
                        Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.
                    </p>
                    <p style="text-align: justify;">
                        Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.
                    </p>
                    <br>

                    <h3 class="title-doc">Why?</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.
                    </p>
                    <br>

                    <h3 class="title-doc">A Progressive Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        If you're a senior developer, Laravel gives you robust tools for dependency injection, unit testing, queues, real-time events, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.
                    </p>
                    <br>

                    <h3 class="title-doc">A Scalable Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel's built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        Need extreme scaling? Platforms like Laravel Vapor allow you to run your Laravel application at nearly limitless scale on AWS's latest serverless technology.
                    </p>
                    <br>

                    <h3 class="title-doc">A Community Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have contributed to the framework. Who knows, maybe you'll even become a Laravel contributor.
                    </p>
                    <br>

                    <h3 class="title-doc">Your First Laravel Project</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Before creating your first Laravel project, you should ensure that your local machine has PHP and Composer installed. If you are developing on macOS, PHP and Composer can be installed via Homebrew. In addition, we recommend installing Node and NPM.
                    </p>
                    <p style="font-style: italic; color: #fff;">1. After you have installed PHP and Composer, you may create a new Lorem PHP Master project via the Composer "create-project" command below:</p>

                    <code class="language-php" data-icon="&#xf0ea;">composer create-project laravel/laravel:^9.0 yourprojectname</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">2. After you have create a project just browse it any browser, just type 
                        <b class="ins-doc">"localhost/yourprojectname/public"</b> and it will display like this. 
                        <b class="image-popup"><a href="#" onclick="openPopup1()">View Image</a></b>
                    </p>

                    <div id="popupModal1" class="modal">
                        <span class="close" onclick="closePopup1()">&times;</span>
                        <img class="modal-content" id="popupImage1" src="template/img/blog/img3.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-two" role="tabpanel" aria-labelledby="vert-tabs-right-two-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Configuration of Laravel PHP Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        These configuration files allow you to configure things like your database connection information, your mail server information, as well as various other core configuration values such as your application timezone and encryption key.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        You may easily access your or open the <b class="title-doc">config</b> folder and select <b class="ins-doc">"app.php"</b> and find <b class="ins-doccode">'timezone' => 'UTC', </b>. Change into this below:
                    </p>
                    <code class="language-php" data-icon="&#xf0ea;">'timezone' => 'Asia/Manila',</code>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-three" role="tabpanel" aria-labelledby="vert-tabs-right-three-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Configuration of Laravel PHP Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        These configuration files allow you to configure things like your database connection information, your mail server information, as well as various other core configuration values such as your application timezone and encryption key.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <div id="popupModal2" class="modal">
                        <span class="close" onclick="closePopup2()">&times;</span>
                        <img id="popupImage" src="template/img/blog/img4.png" width="30%">
                    </div>
                    <p style="font-style: italic; color: #fff;">1. For the database  configuration just look for the <b class="ins-doc">.env</b> file and find this <b class="image-popup"><a href="#" onclick="openPopup2()">View Image</a></b>. You can change the Database name if you want, from laravel to your own.</p>

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

        <div class="tab-pane fade show" id="vert-tabs-right-four" role="tabpanel" aria-labelledby="vert-tabs-right-four-tab">
            <div class="card">
                <div class="card-body" id="">
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
                            <span style="color: #BEC5D4;">("Location: public/");</span>
                            <span style="color: #D3423E;">?&gt;</span></div>
                    </code>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-five" role="tabpanel" aria-labelledby="vert-tabs-right-five-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Integration of AdminLTE Plugins and Libraries in Laravel PHP Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        When integrating AdminLTE into a Laravel application, it's common to organize the asset files for better maintainability. You can place the dist and plugins folders from AdminLTE inside the public/template directory. This structure keeps your template assets grouped and easy to locate.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        After moving the folders, make sure to update all the asset paths in your Blade templates to point to public/template/dist and public/template/plugins. For example, a script that originally pointed to /plugins/jquery/jquery.min.js should now point to /template/plugins/jquery/jquery.min.js. This setup allows you to maintain a clean public directory and ensures that all AdminLTE resources are properly served to the browser.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <p style="font-style: italic; color: #fff;">
                        1. Download the AdminLTE template and extract it. Then copy the <b class="ins-doc">dist</b> and <b class="ins-doc">plugins</b> folder and paste it into the <b class="ins-doc">public/template</b> folder. If no template folder create new folder and rename it into template:
                    </p>
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                        <li>
                            <span class="mailbox-attachment-icon bg-gray"><i class="fas fa-folder" style="color: #b3b3b3"></i></span>
                    
                            <div class="mailbox-attachment-info">
                                <a href="{{ asset('template/dist.zip') }}" class="mailbox-attachment-name" download>
                                    <i class="fas fa-paperclip"></i> dist.zip
                                </a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>5, 732 KB</span>
                                    <a href="{{ asset('template/dist.zip') }}" class="btn btn-success btn-sm float-right" download>
                                        <i class="fas fa-cloud-download-alt"></i>
                                    </a>
                                </span>
                            </div>
                        </li>
                        <li>
                            <span class="mailbox-attachment-icon bg-gray"><i class="fas fa-folder" style="color: #b3b3b3"></i></span>
                    
                            <div class="mailbox-attachment-info">
                                <a href="{{ asset('template/plugins.zip') }}" class="mailbox-attachment-name" download>
                                    <i class="fas fa-paperclip"></i> plugins.zip
                                </a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>22, 692 KB</span>
                                    <a href="{{ asset('template/plugins.zip') }}" class="btn btn-success btn-sm float-right" download>
                                        <i class="fas fa-cloud-download-alt"></i>
                                    </a>
                                </span>
                            </div>
                        </li>
                    </ul>           
                    
                    <p style="font-style: italic; color: #fff;">
                        2. Download the particles zip file and extract it. Then copy the <b class="ins-doc">particles</b> folder and paste it into the <b class="ins-doc">public</b> folder.
                    </p>
                    <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                        <li>
                            <span class="mailbox-attachment-icon bg-gray"><i class="fas fa-folder" style="color: #b3b3b3"></i></span>
                    
                            <div class="mailbox-attachment-info">
                                <a href="{{ asset('template/particles.zip') }}" class="mailbox-attachment-name" download>
                                    <i class="fas fa-paperclip"></i> particles.zip
                                </a>
                                <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>11 KB</span>
                                    <a href="{{ asset('template/particles.zip') }}" class="btn btn-success btn-sm float-right" download>
                                        <i class="fas fa-cloud-download-alt"></i>
                                    </a>
                                </span>
                            </div>
                        </li>
                    </ul>           
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-six" role="tabpanel" aria-labelledby="vert-tabs-right-six-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Integration of AdminLTE Login Page in Laravel PHP Framework</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        To implement a login system using AdminLTE in a Laravel application, you can customize the built-in login page provided by AdminLTE. Start by copying the login page template into your Laravel resources/views directory and adjust the form action to match your Laravel route, typically pointing to the login controller method. Ensure that the form uses the POST method and includes CSRF protection by adding @csrf inside the form. You can also link the required AdminLTE CSS and JavaScript assets properly using the updated paths, such as /template/plugins and /template/dist, to maintain a consistent and styled login interface across your application.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <p style="font-style: italic; color: #fff;">
                        1. Make a new filename <b class="ins-doc">login.blade.php</b> under the <b class="title-doc">resources/views</b> folders then copy and paste the code below:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemo" class="p-3">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="@{{ asset('template/dist/css/adminlte.css') }}">
    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="@{{ asset('template/dist/img/AdminLTELogo.png') }}">

    <style type="text/css">
        .login-box{
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2) !important;
        }
        .login-logo{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .input-group{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .icheck-primary{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .col-4{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .btn-primary{
            background-color: #1f5036 !important;
            border: #1f5036 !important;
        }
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #6c9076;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100%;
            /*z-index: -1;*/
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="particles-js"></div>
    <div class="login-box">
    
        <div class="card">
            <div class="card-body">
                <div class="login-logo">
                    <a href="./">
                        <img src="@{{ asset('template/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-4" width="103px" height="100px">
                    </a>
                    <center style="font-family: monospace;font-size: 0.8em; font-weight: bolder;">
                        Login Page
                    </center>
                </div>
                <p class="login-box-msg text-muted">Sign in to start your session</p>
                
                <form action="@{{ route('postLogin') }}" method="post">
                    @@csrf

                    @@if(session('error'))
                        <div class="alert alert-danger" style="font-size: 12pt;">
                            <i class="fas fa-exclamation-triangle "></i> {{session('error')}}
                        </div>
                    @@endif

                    @@if(session('success'))
                        <div class="alert alert-success" style="font-size: 10pt;">
                        <i class="fas fa-check"></i> {{session('success')}}
                        </div>
                    @@endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="@{{ old('username') }}" autofocus required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span style="color: #FF0000; font-size: 8pt;" class="form-text text-center">@@error('username') @{{ $message }} @@enderror</span>

                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="myInput" placeholder="Password" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span id="password" style="color: #FF0000; font-size: 8pt;" class="form-text text-center">@@error('password') @{{ $message }} @@enderror</span>
                    
                    <div class="row mt-4">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" onclick="myFunction()">
                                <label for="remember">Show Password</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-sign-in-alt"></i> Sign In
                            </button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>

    <script src="@{{ asset('particles/particles.js') }}"></script>
    <script src="@{{ asset('particles/app.js') }}"></script>
    <!-- jQuery -->
    <script src="@{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="@{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="@{{ asset('template/dist/js/adminlte.min.js') }}"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
                        </textarea>
                    </div>

                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        2. Open <b class="ins-doc">Terminal/New Terminal</b> in your Menu Bar in vscode, then copy and paste the code below:
                    </p>
                    
                    <div class="position-relative">
                        <code class="language-php" data-icon="&#xf0ea;">php artisan make:controller LoginController</code>
                    </div>


                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        3. Open <b class="title-doc">app/Http/Controllers</b> folders, then select the <b class="ins-doc">LoginController.php</b>, copy and paste the code that wasn't in the <b class="ins-doc">LoginController.php</b> file:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCode1" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemo1" class="p-3">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginRead()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $validated=auth()->attempt([
            'username'=>$request->username,
            'password'=>$request->password,
        ],$request->password);

        if($validated){
            return redirect()->route('dashboard')->with('success','Login Successfully');
        }else{
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }
}
                        </textarea>
                    </div>

                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        4. Open again <b class="ins-doc">Terminal/New Terminal</b> in your Menu Bar in vscode if it is not being open, but if open copy and paste the code below:
                    </p>
                    
                    <div class="position-relative">
                        <code class="language-php" data-icon="&#xf0ea;">php artisan make:middleware LoginAuth</code>
                    </div>

                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        5. Open <b class="title-doc">app/Http/Middleware</b> folders, then select the <b class="ins-doc">LoginAuth.php</b>, copy and paste the code that wasn't in the <b class="ins-doc">LoginAuth.php</b> file:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCode2" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemo2" class="p-3">
&lt;?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginEmpAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('web')->check()) {
            $userRole = auth()->guard('web')->user()->role;
            
        } else {
            return redirect()->route('login')->with('error', 'You have to sign in first to access this page');
        }
        
        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');

        return $response;
    }
}
                        </textarea>
                    </div>

                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        6. Open again <b class="title-doc">app/Http/Middleware</b> folders, then select the <b class="ins-doc">RedirectIfAuthenticated.php</b>, and take a look whats the difference between the default code to the code below being provide. but you can copy and paste the code below:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCode3" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemo3" class="p-3">
&lt;?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);
                return redirect()->route('dashboard');
            }
        }

        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');

        return $response;
    }
}
                        </textarea>
                    </div>

                    <br><br>
                    <p style="font-style: italic; color: #fff;">
                        7. Open again <b class="title-doc">app/Http</b> folders, then select the <b class="ins-doc">Kernel.php</b>, and take a look whats the difference between the default code to the code below being provide. but you can copy and paste the code below. After the <b class="ins-doccode">'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,</b>:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCodeKernel" class="btn btn-sm btn-light position-absolute" style="top: 5px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <codelargekernel id="codeBlockkernel" class="language-php" data-icon="&#xf0ea;" style="pre;">
                            'login_auth' => \App\Http\Middleware\LoginAuth::class,
                            'role' => \App\Http\Middleware\LoginAuth::class,
                        </codelargekernel>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        8. Open your <b class="title-doc">routes</b> folder directory, then select the <b class="ins-doc">web.php</b>, and take a look whats the difference between the default code to the code below being provided. but you can copy and paste all the code below to replace the default code:
                    </p>
                    
                    <div class="position-relative">
                        <button id="copyCode5" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemo5" class="p-3">
&lt;?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('login');
    });

    //Login
    Route::get('/login',[LoginController::class,'loginRead'])->name('loginRead');
    Route::post('/login/process/user',[LoginController::class,'postLogin'])->name('postLogin');
});
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        9. And try to run your code or system on your browser, open <b class="title-doc">Chrome</b> browser or any kind of browser but highly recommended is chrome, and type <b class="ins-doc">localhost/yourprojectname</b> and it will display like this.
                    </p>
                    <div>
                        <img src="{{ asset('template/img/blog/img11.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        10. But wait don't try to login cause where not yet done. Just proceed to migration portion.
                    </p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-seven" role="tabpanel" aria-labelledby="vert-tabs-right-seven-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Database Migration</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Migrations are like version control for your database, allowing your team to define and share the application's database schema definition. If you have ever had to tell a teammate to manually add a column to their local database schema after pulling in your changes from source control, you've faced the problem that database migrations solve.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">Generating Migrations</h3>
                    <p style="font-style: italic; color: #fff;">
                        You may use the <b class="ins-doc">make:migration</b> Artisan command to generate a database migration. The new migration will be placed in your <b class="title-doc">database/migrations</b> directory. Each migration filename contains a timestamp that allows Laravel to determine the order of the migrations:
                    </p>

                    <p style="font-style: italic; color: #fff;">
                        1. Open <b class="title-doc">database/migrations</b> folders, then select the <b class="ins-doc">_create_users_table.php</b>, modify some portion of codes:
                    </p>

                    <p style="font-style: italic; color: #fff;">From this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <textarea id="codeMirrorDemoMigrationUser" class="p-3">
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});
                        </textarea>
                    </div>

                    <p style="font-style: italic; color: #fff;">To this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeMigrationUser1" class="btn btn-sm btn-light position-absolute" style="top: 5px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoMigrationUser1" class="p-3">
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('fname');
    $table->string('mname');
    $table->string('lname');
    $table->string('ext')->nullable();
    $table->string('username');
    $table->string('password');
    $table->string('role');
    $table->string('gender');
    $table->integer('posted_by');
    $table->rememberToken();
    $table->timestamps();
});

DB::table('users')->insert([
    'fname' => 'Admin',
    'mname' => 'Admin',
    'lname' => 'Admin',
    'ext' => null,
    'username' => 'admin',
    'password' => bcrypt('admin'),
    'role' => 'Administrator',
    'gender' => 'Male',
    'posted_by' => 1,
    'remember_token' => 'q6V6HO6zeXulTYE5kcoAT6oOeKrxwSjLKZo2BsUuVPbi8wfW4WDV2VA4n1Vi',
    'created_at' => now(),
    'updated_at' => now(),
]);              
                        </textarea>
                    </div>
                    <p style="font-style: italic; color: #fff;">
                        2. Don't forget to save your code after you modify the <b class="ins-doc">_create_users_table.php</b> file.:
                    </p>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        3. Then in your terminal run this <b class="title-doc">command</b> below and hit enter in your keyboard to migrate the changes you made in the <b class="ins-doc">_create_users_table.php</b> file:
                    </p>
                    <code class="language-php" data-icon="&#xf0ea;">php artisan migrate</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        4. And you will see like this in terminal after you run the command, and you will be ask if <b class="ins-doccode">would like to create it? (yes/no)</b>. Just type <b class="ins-doc">Yes</b>:
                    </p>
                    <div>
                        <img src="{{ asset('template/img/blog/img6.png') }}" alt="photo" width="100%" height="100%">
                    </div>
                    
                    <br>
                    <p style="font-style: italic; color: #fff;">
                        5. Then in your terminal again run this <b class="title-doc">command</b> below and hit enter in your keyboard to create new migration file:
                    </p>
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">php artisan make:migration create_students_table</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        6. And you will see like this in terminal after you run the command>:
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img8.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        7. Open <b class="title-doc">database/migrations</b> folders directory, then select the <b class="ins-doc">_create_students_table.php</b>, modify some portion of codes:
                    </p>

                    <p style="font-style: italic; color: #fff;">From this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <textarea id="codeMirrorDemoMigratioStudent" class="p-3">
Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->timestamps();
});
                        </textarea>
                    </div>
                    <p style="font-style: italic; color: #fff;">To this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeMigrationStudent1" class="btn btn-sm btn-light position-absolute" style="top: 5px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoMigratioStudent1" class="p-3">
Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('studentID')->unique();
    $table->string('fname');
    $table->string('mname');
    $table->string('lname');
    $table->string('degree');
    $table->timestamps();
});          
                        </textarea>
                    </div>

                    <p style="font-style: italic; color: #fff;">
                        8. Don't forget to save your code after you modify the <b class="ins-doc">_create_students_table.php</b> file.:
                    </p>
                    <p style="font-style: italic; color: #fff;">
                        9. Then in your terminal again run this <b class="title-doc">command</b> below and hit enter in your keyboard to migrate the changes you made in the <b class="ins-doc">_create_students_table.php</b> file:
                    </p>
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">php artisan migrate</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        10. And you will see like this in terminal after you run the command:
                    </p>
                    <div>
                        <img src="{{ asset('template/img/blog/img9.png') }}" alt="photo" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-eight" role="tabpanel" aria-labelledby="vert-tabs-right-eight-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Eloquent: Getting Started</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table. In addition to retrieving records from the database table, Eloquent models allow you to insert, update, and delete records from the table as well.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">Generating Model Classes</h3>
                    <p style="font-style: italic; color: #fff;">
                        To get started, let's create an Eloquent model. Models typically live in the <b class="title-doc">app\Models</b> directory and extend the <b class="title-doc">Illuminate\Database\Eloquent\Model</b> class. You may use the <b class="ins-doc">make:model</b> Artisan command to generate a new model:
                    </p>

                    <h3 class="title-doc">How?</h3>
                    <p style="font-style: italic; color: #fff;">
                        1. In your terminal run this <b class="ins-doc">command</b> below and hit enter in your keyboard:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <code class="language-php" data-icon="&#xf0ea;">php artisan make:model Students</code>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        2. And you will see like this in terminal after you run the command:
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img7.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        3. Open <b class="title-doc">app/Models</b> folders directory, then select the <b class="ins-doc">Students.php</b>, modify some portion of codes:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeModel" class="btn btn-sm btn-light position-absolute" style="top: 5px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoModel" class="p-3">
&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'studentID', 
        'fname', 
        'mname', 
        'lname', 
        'degree',
    ];
}
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        4. Don't forget to save your code after you modify the <b class="ins-doc">Students.php</b> file.:
                    </p>
                    
                    <p style="font-style: italic; color: #fff;">
                        5. And you will see your code in <b class="ins-doc">Students.php</b> file will looks like this:
                    </p>

                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img10.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        6. Open <b class="title-doc">app/Models</b> folders directory, then select the <b class="ins-doc">User.php</b>, modify some portion of codes, but you can copy and paste all the code below to replace the code in the <b class="ins-doc">User.php</b> file:
                    </p>

                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeModelUser" class="btn btn-sm btn-light position-absolute" style="top: 5px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoModelUser" class="p-3">
&lt;?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'ext',
        'username',
        'password',
        'role',
        'gender',
        'posted_by',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}

                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        7. Don't forget to save your code after you modify the <b class="ins-doc">User.php</b> file.:
                    </p>

                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-nine" role="tabpanel" aria-labelledby="vert-tabs-right-nine-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">PHP Laravel Blade Templating</h3>
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel is a backend framework that provides all of the features you need to build modern web applications, such as routing, validation, caching, queues, file storage, and more. However, we believe it's important to offer developers a beautiful full-stack experience, including powerful approaches for building your application's frontend.
                    </p>
                    <p style="text-align: justify; text-indent: 50px;">
                        There are two primary ways to tackle frontend development when building an application with Laravel, and which approach you choose is determined by whether you would like to build your frontend by leveraging PHP or by using JavaScript frameworks such as Vue and React. We'll discuss both of these options below so that you can make an informed decision regarding the best approach to frontend development for your application.
                    </p>
                    
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <p>The file <b class="ins-doc">master.blade.php</b> is called a layout template. It serves as the main structure or base design of your webpage.nstead of repeating the same HTML layout like <b class="title-doc">(&lt;html&gt;, &lt;head&gt;, and &lt;body&gt;)</b> in every view file, you define it once in this master file. Then, other pages can simply extend this layout and inject their own content into the sections like ( <b class="title-doc">@@yield('title')</b> and <b class="title-doc">@@yield('body')</b> ).</p>
                    <p style="font-style: italic; color: #fff;">
                        1. In the <b class="ins-doc">resources/views</b> folder, create a new folder and name it <b class="ins-doc">layouts</b> and under that folder create a filename <b class="ins-doc">master.blade.php</b> copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeMaster" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoMaster" class="p-3">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="@{{ csrf_token() }}">
    <title>@@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/fontawesome-free-V6/css/all.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/toastr/toastr.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="@{{ asset('template/dist/css/adminlte.min.css') }}">
    <!-- DataTables  -->
    <link rel="stylesheet" href="@{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="@{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="@{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="@{{ asset('template/dist/img/AdminLTELogo.png') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="@{{ asset('template/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="@{{ asset('template/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="@{{ asset('template/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="./" class="brand-link">
                <img src="@{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="@{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <a href="#" class="d-block">Alexander Pierce</a>
                        </a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                @@include('menu.sidebar')
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @@yield('body')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Developed by: <a href="#">Your Group here</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="@{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="@{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="@{{ asset('template/dist/js/adminlte.min.js') }}"></script>
    <!-- Toastr -->
    <script src="@{{ asset('template/plugins/toastr/toastr.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="@{{ asset('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="@{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> 
    <script src="@{{ asset('template/plugins/jszip/jszip.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="@{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        @@if(Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                'positionClass': 'toast-top-right'
            }
            toastr.success("{{ session('success') }}")
        @@endif
    </script>
    <script>
        @@if(Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                'positionClass': 'toast-bottom-right'
            }
            toastr.success("{{ session('success') }}")
        @@endif
    </script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true, 
                "autoWidth": true,
                //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>
</html>
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        2. In the <b class="ins-doc">resources/views</b> folder, create a new folder and name it <b class="ins-doc">menu</b> and under that folder create a filename <b class="ins-doc">sidebar.blade.php</b> copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeSidebar" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoSidebar" class="p-3">
@@php
    $curr_route = request()->route()->getName();

    $dashAdActive = in_array($curr_route, ['dashboard']) ? 'active' : '';  
@@endphp


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header" style="color: gray">Main Navigation</li>
        <li class="nav-item">
            <a href="@{{ route('dashboard') }}" class="nav-link @{{ $dashAdActive }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Students
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-gear"></i>
                <p>
                    Users
                </p>
            </a>
        </li>

        <li class="nav-header" style="color: gray">Reports</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>
                    Reports
                </p>
            </a>
        </li>
    </ul>
</nav>
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        3. In your terminal run a <b class="title-doc">command</b> below, just copy and paste the code below and hit enter in your keyboard:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <code class="language-php" data-icon="&#xf0ea;">php artisan make:controller DashboardController</code>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        4. And you will see like this in terminal after you run the command:
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img12.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        5. Update the code by finding the file in <b class="title-doc">app/Http/Controllers</b> folder directory, just copy and paste the code below to replace the code in the <b class="ins-doc">DashboardController.php</b> file:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeDashControl" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoDashControl" class="p-3">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('home.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginRead')->with('success','You have been Successfully Logged Out');
    }
}

                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        6. Next Update the code by finding the file in <b class="title-doc">routes</b> folder directory, just copy and paste the code below to replace the code in the <b class="ins-doc">web.php</b> file:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeDashRoute" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoDashRouteDash" class="p-3">
&lt;?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('login');
    });

    //Login
    Route::get('/login',[LoginController::class,'loginRead'])->name('loginRead');
    Route::post('/login/process/user',[LoginController::class,'postLogin'])->name('postLogin');
});

//Middleware
Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});


                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        7. Next Update the code in <b class="title-doc">master.blade.php</b> by finding the file in <b class="title-doc">resources/views/layouts</b> folder directory, just copy and paste the code below to replace the code in the <b class="ins-doc">master.blade.php</b> file in from line 150 to line 152. For your Sign Out button:
                    </p>
                    <p>From this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <textarea id="codeMirrorDemoDashRouteUpdate" class="p-3">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
    <i class="fas fa-th-large"></i>
</a>
                        </textarea>
                    </div>
                    <p>To this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeDashUpdateCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoDashRouteUpdateCode" class="p-3">
<a class="nav-link" href="@{{ route('logout') }}" role="button">
    <b><i class="fas fa-power-off"></i> Sign Out</b>
</a>
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                       8. Again Update the code in <b class="title-doc">master.blade.php</b> by finding the file in <b class="title-doc">resources/views/layouts</b> folder directory, just copy and paste the code below to replace the code in the <b class="ins-doc">master.blade.php</b> file in line 169. So that your name will be appears in the sidebar:
                    </p>
                    <p>From this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <textarea id="codeMirrorDemoDashRouteName" class="p-3">
<a href="#" class="d-block">Alexander Pierce</a>
                        </textarea>
                    </div>
                    <p>To this</p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeDashNameCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoDashRouteNameCode" class="p-3">



<a href="#" class="d-block">@{{ Auth::guard('web')->user()->fname }} @{{ substr(Auth::guard('web')->user()->lname, 0,1) }}. @{{ Auth::guard('web')->user()->lname }}</a>
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        9. Open <b class="title-doc">resources/views</b> folder directory, and make a folder name <b class="title-doc">home</b> and under that folder make a filename <b class="ins-doc">dashboard.blade.php</b> file.
                     </p>
                     <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeDashboardCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                         <textarea id="codeMirrorDemoDashboardRouteName" class="p-3">
@@extends('layouts.master')

@@section('title')
    Dashboard
@@endsection

@@section('body')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
            
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
            
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
            
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
            
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@@endsection
                         </textarea>
                     </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        10. And now try to run your code or system on your browser, open <b class="title-doc">Chrome</b> browser or any kind of browser but highly recommended is chrome, and type <b class="ins-doc">localhost/yourprojectname</b> and it will display like this and try to login using the credentials: Username: <b class="ins-doc">admin</b>  and Password: <b class="ins-doc">admin</b>.
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img11.png') }}" alt="photo" width="100%" height="100%">
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        11. After Successfull login you will redirect to dashboard.
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img13.png') }}" alt="photo" width="100%" height="100%" style="border: 2px solid gray;">
                    </div>

                </div>
            </div>
        </div>

        <div class="tab-pane fade show" id="vert-tabs-right-ten" role="tabpanel" aria-labelledby="vert-tabs-right-ten-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Understanding Laravel CRUD Functionality</h3> 
                    <p style="text-align: justify; text-indent: 50px;">
                        Laravel CRUD stands for Create, Read, Update, and Delete — the four basic operations used in managing data in a database. Laravel simplifies these operations through its built-in routing, controllers, Eloquent ORM, and Blade templating. With just a few lines of code, you can build secure and efficient applications that interact with your database, making Laravel ideal for rapid web development. 
                    </p>
                    <br>

                    <h3 class="title-doc">How?</h3>
                    <p style="font-style: italic; color: #fff;">
                        1. In Terminal run this <b class="title-doc">command</b>, just copy and paste the command/code below, hit enter on your keyboard:
                    </p>
                    <code class="language-php" data-icon="&#xf0ea;">php artisan make:controller UsersController</code>
                    <br>
                    <p style="font-style: italic; color: #fff;">
                        2. And you will see like this in terminal after you run the command:
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img14.png') }}" alt="photo" width="100%" height="100%">
                    </div>
                    <br>
                    <p style="font-style: italic; color: #fff;">
                        3. Open again <b class="title-doc">app/Http/Controllers</b> folders directory, then select the <b class="ins-doc">UsersController.php</b>, and take a look whats the difference between the default code to the code below being provide. but you can copy and paste the code below.:
                    </p>
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeUsersCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoUsersRouteName" class="p-3">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\User;

class UsersController extends Controller
{
    public function userRead()
    {
        $users = User::orderBy('id', 'ASC')->get();
        return view('users.listusers', compact('users'));
    }

    public function userCreate(Request $request) 
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'lname' => 'required',
                'fname' => 'required',
                'mname' => 'required',
                'username' => 'required',
                'password' => 'required',
                'role' => 'required',
            ]);

            $userName = $request->input('username'); 
            $existingUsername = User::where('username', $userName)->first();

            if ($existingUsername) {
                return redirect()->route('userRead')->with('error', 'User already exists!');
            }

            try {
                User::create([
                    'lname' => $request->input('lname'),
                    'fname' => $request->input('fname'),
                    'mname' => $request->input('mname'),
                    'ext' => $request->input('ext'),
                    'username' => $userName,
                    'password' => Hash::make($request->input('password')),
                    'role' => $request->input('role'),
                    'gender' => $request->input('gender'),
                    'posted_by' => Auth::guard('web')->user()->id,
                    'remember_token' => Str::random(64),
                ]);

                return redirect()->route('userRead')->with('success', 'User stored successfully!');
            } catch (\Exception $e) {
                return redirect()->route('userRead')->with('error', 'Failed to store user!');
            }
        }
    }

    public function userEdit($id)
    {
        $userid = User::find($id);

        return view('users.edituser', compact('userid'));
    }

    public function userUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'lname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'username' => 'required',
            'role' => 'required',
        ]);

        try {
            $userName = $request->input('username'); 
            $existingEmail = User::where('username', $userName)
                        ->where('id', '!=', $request->input('id'))
                        ->first();

            if ($existingEmail) {
                return redirect()->route('userRead')->with('error', 'User already exists!');
            }

            $user = User::findOrFail($request->input('id'));
            $user->update([
                'lname' => $request->input('lname'),
                'fname' => $request->input('fname'),
                'mname' => $request->input('mname'),
                'ext' => $request->input('ext'),
                'username' => $userName,
                'role' => $request->input('role'),
                'gender' => $request->input('gender'),
                'posted_by' => Auth::guard('web')->user()->id,
            ]);

            return redirect()->route('userRead')->with('success', 'User Updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update User!');
        }
    }

    public function userPassUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'password' => 'required',
        ]);

        try {
            $userpass = User::findOrFail($request->input('id'));
            $userpass->update([
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->route('userRead')->with('success', 'User Password Updated Successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update User Password!');
        }
    }

    public function userDelete($id)
    {
        User::Destroy($id);
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        4. In the <b class="ins-doc">resources/views</b> folder, create a new folder and name it <b class="ins-doc">users</b> and under that folder create a filename <b class="ins-doc">listusers.blade.php</b> copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeUsersBladeCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoUsersBladeName" class="p-3">
@@extends('layouts.master')

@@section('title')
    Users
@@endsection

@@section('body')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="@{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-user">
                                    <i class="fas fa-user-plus"></i> Add New
                                </button>
                            </h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Middle name</th>
                                        <th>Last name</th>
                                        <th>Gender</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @@foreach ($users as $user)
                                        <tr>
                                            <td>@{{ $user->id }}</td>
                                            <td>@{{ $user->fname }}</td>
                                            <td>@{{ $user->mname }}</td>
                                            <td>@{{ $user->lname }}</td>
                                            <td>@{{ $user->gender }}</td>
                                            <td>@{{ $user->username }}</td>
                                            <td>
                                                <span class="badge @{{ $user->role == 'Administrator' ? 'badge-primary' : 'badge-secondary' }}">
                                                    @{{ $user->role }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="@{{ route('userEdit', ['id' => $user->id]) }}"  class="btn btn-success btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" data-id="@{{ $user->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @@endforeach                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-plus"></i> Add User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <form class="form-horizontal" action="@{{ route('userCreate') }}" method="post" id="addUser">  
                    @@csrf

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">First Name:</span></label>
                                <input type="text" name="fname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter First Name" class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">Middle Name:</span></label>
                                <input type="text" name="mname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter Middle Name" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">Last Name:</span></label>
                                <input type="text" name="lname" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter Last Name" class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">Ext.:</span></label>
                                <select class="form-control form-control-sm" name="ext">
                                    <option value="">N/A</option>
                                    <option value="Jr." @@if (old('ext') == "Jr.") @{{ 'selected' }} @@endif>Jr.</option>
                                    <option value="Sr." @@if (old('ext') == "Sr.") @{{ 'selected' }} @@endif>Sr.</option>
                                    <option value="III" @@if (old('ext') == "III") @{{ 'selected' }} @@endif>III</option>
                                    <option value="IV" @@if (old('ext') == "IV") @{{ 'selected' }} @@endif>IV</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="form-row">
                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">Username</span></label>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <label><span class="badge badge-secondary">Password:</span></label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="form-row">
                            <div class="col-md-6">
                                <label><span class="badge badge-success">Gender</span></label>
                                <select class="form-control form-control-sm" name="gender">
                                    <option disabled selected> --Select-- </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label><span class="badge badge-success">User Level</span></label>
                                <select class="form-control form-control-sm" name="role">
                                    <option disabled selected> -- Select-- </option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>   
                </form>
            </div>
            
            <div class="modal-footer justify-content-between">
            </div>
        </div>
    </div>
</div>

<form id="delete-form" method="POST" style="display: none;">
    @@csrf
    @@method('DELETE')
</form> 

<script>
    document.querySelectorAll('.delete-user').forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.getAttribute('data-id');

            Swal.fire({
                title: 'Are you sure?',
                text: "This user will be permanently deleted.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('delete-form');
                    if (!form) {
                        console.error('Form with id delete-form not found!');
                        return;
                    }

                    form.setAttribute('action', '@{{ route('userDelete', ':id') }}'.replace(':id', userId));
                    form.submit();
                }
            });
        });
    });
</script>


@@endsection
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        5. Then under also the <b class="ins-doc">resources/views/users</b> folder directory, create a filename <b class="ins-doc">edituser.blade.php</b> copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeUsersEditBladeCode" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoUserEditBladeName" class="p-3">
@@extends('layouts.master')

@@section('title')
    Edit User
@@endsection

@@section('body')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="@{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="@{{ route('userRead') }}">Users</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Edit
                            </h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="@{{ route('userUpdate', $userid->id) }}" method="post" id="updateUser">  
                                @@csrf
                                
                                <input type="hidden" name="id" value="@{{ $userid->id }}">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label><span class="badge badge-secondary">First Name:</span></label>
                                            <input type="text" name="fname" value="@{{ $userid->fname }}" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter First Name" class="form-control form-control-sm">
                                        </div>
            
                                        <div class="col-md-6">
                                            <label><span class="badge badge-secondary">Middle Name:</span></label>
                                            <input type="text" name="mname" value="@{{ $userid->mname }}" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter Middle Name" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label><span class="badge badge-secondary">Last Name:</span></label>
                                            <input type="text" name="lname" value="@{{ $userid->lname }}" oninput="var words = this.value.split(' '); for(var i = 0; i < words.length; i++){ words[i] = words[i].substr(0,1).toUpperCase() + words[i].substr(1); } this.value = words.join(' ');" placeholder="Enter Last Name" class="form-control form-control-sm">
                                        </div>
            
                                        <div class="col-md-6">
                                            <label><span class="badge badge-secondary">Ext.:</span></label>
                                            <select class="form-control form-control-sm" name="ext">
                                                <option value="">N/A</option>
                                                <option value="Jr." @@if ($userid->ext == "Jr.") selected @@endif>Jr.</option>
                                                <option value="Sr." @@if ($userid->ext == "Sr.") selected @@endif>Sr.</option>
                                                <option value="III" @@if ($userid->ext == "III") selected @@endif>III</option>
                                                <option value="IV" @@if ($userid->ext == "IV") selected @@endif>IV</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-group"> 
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <label><span class="badge badge-secondary">Username</span></label>
                                            <input type="text" name="username" value="@{{ $userid->username }}" placeholder="Enter Username" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-group"> 
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label><span class="badge badge-success">Gender</span></label>
                                            <select class="form-control form-control-sm" name="gender">
                                                <option disabled selected> --Select-- </option>
                                                <option value="Male" @@if ($userid->gender == "Male") selected @@endif>Male</option>
                                                <option value="Female" @@if ($userid->gender == "Female") selected @@endif>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label><span class="badge badge-success">User Level</span></label>
                                            <select class="form-control form-control-sm" name="role">
                                                <option disabled selected> -- Select-- </option>
                                                <option value="Administrator" @@if ($userid->role == "Administrator") selected @@endif>Administrator</option>
                                                <option value="User" @@if ($userid->role == "User") selected @@endif>User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Update Password
                            </h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="@{{ route('userPassUpdate', $userid->id) }}" method="post" id="updatePassUser">  
                                @@csrf
                                
                                <input type="hidden" name="id" value="@{{ $userid->id }}">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <label><span class="badge badge-secondary">New Password:</span></label>
                                            <input type="text" name="password" placeholder="Enter New Password" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@@endsection
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        6. Then under also the <b class="ins-doc">resources/views/menu</b> folder directory, update the <b class="ins-doc">sidebar.blade.php</b> after the line <b class="title-doc">number 4</b> of you code and add this code below being provided, just copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeSidebaradded" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoSidebaradded" class="p-3">
$userActive = in_array($curr_route, ['userRead', 'userEdit']) ? 'active' : '';  
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        7. And also the <b class="ins-doc">resources/views/menu</b> folder directory, update the <b class="ins-doc">sidebar.blade.php</b> on line <b class="title-doc">number 29</b> of you code and add this code below being provided, just copy and paste the code below:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeSidebaradded1" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoSidebaradded1" class="p-3">
<a href="@{{ route('userRead') }}" class="nav-link @{{ $userActive }}"> 
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        8. And you will see your overall code in <b class="ins-doc">sidebar.blade.php</b> like this:
                    </p>
                    <div style="margin-top: -15px;">
                        <img src="{{ asset('template/img/blog/img15.png') }}" alt="photo" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade show" id="vert-tabs-right-eleven" role="tabpanel" aria-labelledby="vert-tabs-right-eleven-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">Laravel Basic Routing</h3> 
                    <p style="text-align: justify; text-indent: 50px;">
                        The most basic Laravel routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files: For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in <b class="title-doc">routes/web.php</b> may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to http://example.com/user in your browser:
                    </p>
                    <br>

                    <h3 class="title-doc">Example of basic routing</h3>
                    <br>
                    <p style="font-style: italic; color: #fff;">
                        This is  only a sample don't copy and paste to your code:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <textarea id="codeMirrorDemoSampleroute" class="p-3">
use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return 'Hello World';
});
                        </textarea>
                    </div>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        1. Open your <b class="title-doc">routes</b> folder directory, then select the <b class="ins-doc">web.php</b>, and take a look whats the difference between the default code to the code below being provided. but you can copy and paste all the code below to replace the default code:
                    </p> 
                    <div class="position-relative" style="margin-top: -15px;">
                        <button id="copyCodeAddedRoute" class="btn btn-sm btn-light position-absolute" style="top: 10px; right: 30px; z-index: 10;">
                            <i class="fas fa-clipboard"></i> Copy Code
                        </button>
                        <textarea id="codeMirrorDemoAddedRoute" class="p-3">
&lt;?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('login');
    });

    //Login
    Route::get('/login',[LoginController::class,'loginRead'])->name('loginRead');
    Route::post('/login/process/user',[LoginController::class,'postLogin'])->name('postLogin');
});

//Middleware
Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');

    Route::prefix('users/list')->group(function () {
        Route::get('/view',[UsersController::class,'userRead'])->name('userRead');
        Route::post('/view/create',[UsersController::class,'userCreate'])->name('userCreate');
        Route::get('/view/edit/{id}',[UsersController::class,'userEdit'])->name('userEdit');
        Route::post('/view/update/',[UsersController::class,'userUpdate'])->name('userUpdate');
        Route::post('/view/update/pass',[UsersController::class,'userPassUpdate'])->name('userPassUpdate');
        Route::delete('/view/users/{id}', [UsersController::class, 'userDelete'])->name('userDelete');
    });
});                            
                        </textarea>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade show" id="vert-tabs-right-twelve" role="tabpanel" aria-labelledby="vert-tabs-right-twelve-tab">
            <div class="card">
                <div class="card-body" id="">
                    <h3 class="title-doc">What to do in your part?</h3> 
                    <p style="text-align: justify;">
                        1. You are going to to continue the Students part in our sidebar, in which you are going to create a <b class="ins-doc">Controller</b>, <b class="ins-doc">view</b> and <b class="ins-doc">Web Route</b>. The <b class="ins-doc">Model</b> is no need to add cause we already did it in the migrations part, just double check on it. You will create a <b class="ins-doc">CRUD</b> functions for the Students part and a generation of reports for Students using <b class="ins-doc">PDF</b>:
                    </p>
                    <p style="text-align: justify;">
                        2. Add an Instructor in the sidebar under the Students, and you are also going to create a <b class="ins-doc">Controller</b>, <b class="ins-doc">view</b>, <b class="ins-doc">Model</b> and <b class="ins-doc">Web Route</b>. You will create a <b class="ins-doc">CRUD</b> functions for the Instructor part and a generation of reports for Instructor using <b class="ins-doc">PDF</b>:
                    </p>
                    <p style="text-align: justify;">
                        3. In your <b class="ins-doc">Reports</b> button, will have a  choices of category in generating reports its either <b class="title-doc">Students</b> or <b class="title-doc">Instructors</b> and a button <b class="title-doc">Generate</b>.:
                    </p>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        Use this <b class="ins-doc">command</b> below for the <b class="title-doc">PDF</b> library. Just copy and paste it in your terminal, hit enter in your keyboard and wait until its successfully installing the Libraries.
                    </p> 
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">composer require barryvdh/laravel-dompdf</code>


                    <br>
                    <br>
                    <br>
                    <h3 class="title-doc">Useful Commands to develop</h3> 
                    <p style="font-style: italic; color: #fff;">
                        Don't forget the <b class="ins-doc">command</b> to create a new <b class="title-doc">Controller</b> is like this below.
                    </p> 
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">php artisan make:controller YourController</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        Don't forget the <b class="ins-doc">command</b> to create a new <b class="title-doc">Model</b> is like this below.
                    </p> 
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">php artisan make:model YourModel</code>

                    <br>
                    <p style="font-style: italic; color: #fff;">
                        Don't forget the <b class="ins-doc">command</b> to create a new <b class="title-doc">Migrations</b> is like this below.
                    </p> 
                    <code class="language-php" data-icon="&#xf0ea;" style="margin-top: -15px;">php artisan make:migration create_yourtablename_table</code>
                    
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
