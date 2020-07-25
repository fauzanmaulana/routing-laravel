@extends('base.main')

@section('content')

<div class="container">
        <div class="landing-page">
            <main class="main-contain">
                <div class="main-content">
                    <h2>Fauzan <span><img src="assets/man.png" alt="orang" width="100"></span> Maulana</h2>
                    <h1>Experience</h1>
                </div>
            </main>
            <aside class="side-contain">
                <div class="side-content" onclick="scrollClick(document.getElementById('end-page'))">
                    <img src="assets/touch.png" alt="touch" width="70">
                    <p>click me!</p>
                </div>
            </aside>
        </div>
        <div class="end-page" id="end-page">
            <header>
                <div class="wall"></div>
                <aside>
                    <div class="aside-content">
                        <img src="assets/profile.jpg" alt="profile" width="50">
                        <h3><span>Fauzan Maulana</span><br>- Experience</h3>
                    </div>
                </aside>
            </header>
            <section>
                <h1 style="color:white">Experience</h1>
                <ul>
                    <li style="color:white">2014 - 2015 (Lulus SD di SINDANGKARSA 1)</li>
                    <br>
                    <li style="color:white">2017 - 1018 (Lulus SMP di SMPN 11 DEPOK)</li>
                    <br>
                    <li style="color:white">2018 (Masuk SMK TARUNA BHAKTI)</li>
                </ul>
            </section>
        </div>

@endsection