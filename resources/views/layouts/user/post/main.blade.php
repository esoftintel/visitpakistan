<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Upload</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/images_save') }}">Upload Images</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/images-show') }}">View Uploaded Files</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
 

