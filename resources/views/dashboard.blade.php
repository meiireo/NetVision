<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard NetVision</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{

background:#edf2f7;

}

.sidebar{

height:100vh;

background:#1e293b;

color:white;

}

.sidebar a{

display:block;

padding:15px;

color:white;

text-decoration:none;

}

.sidebar a:hover{

background:#334155;

}

.card{

border:none;

box-shadow:0 0 10px rgba(0,0,0,.1);

}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-2 sidebar">

<h3 class="text-center mt-4">🌐 NetVision</h3>

<hr>

<a href="#">Dashboard</a>

<a href="#">Devices</a>

<a href="#">Monitoring</a>

<a href="#">Users</a>

<a href="#">Logs</a>

</div>

<div class="col-md-10 p-4">

<h2>Selamat Datang, {{ Auth::user()->name }}</h2>

<p>Smart Network Monitoring System</p>

<div class="row mt-4">

<div class="col-md-3">

<div class="card p-3">

<h5>Total Device</h5>

<h2>25</h2>

</div>

</div>

<div class="col-md-3">

<div class="card p-3">

<h5>Online</h5>

<h2 class="text-success">20</h2>

</div>

</div>

<div class="col-md-3">

<div class="card p-3">

<h5>Offline</h5>

<h2 class="text-danger">5</h2>

</div>

</div>

<div class="col-md-3">

<div class="card p-3">

<h5>CPU Usage</h5>

<h2>32%</h2>

</div>

</div>

</div>

<div class="card mt-4 p-4">

<h4>Monitoring Graph</h4>

<p>(Grafik realtime akan kita buat nanti)</p>

</div>

</div>

</div>

</div>

</body>

</html>
