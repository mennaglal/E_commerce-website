<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo lang('adminhome')?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="app_nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><?php echo lang('mem')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo lang('cat')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo lang('item')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo lang('log')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo lang('stat')?></a>
                    </li>
                    <div style="float: right;width:600px"></div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menna
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="members.php?do=Edit&userid=<?php echo $_SESSION['userId']?>">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<style>
    .navbar-dark{
       margin-bottom: 0;
       border-radius: 0;
       
}
.containter{
    background-color: red;
}
.nav > li > a ,.navbar-brand{
     padding: 15px 12px;
}
.navbar-dark .navbar-brand{
    font-size: 1em;
    color: #a31183;
    font-weight: bold;
}
     .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color:#dd5098;
}
.dropdown-item{
    background-color: #dd5098;
    color: #fff;
}
.dropdown-item:hover{
    background-color: #cba5f1;
}
.dropdown-menu{
    background-color: #dd5098;
    margin-left: 10px;

}
</style>